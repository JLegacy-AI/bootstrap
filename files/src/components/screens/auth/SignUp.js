import React, { Component } from 'react';
import { Col, Form, Row, Modal, Button } from 'react-bootstrap';
import './auth-modal.css';
import 'react-phone-number-input/style.css'
import PhoneInput, { isPossiblePhoneNumber, formatPhoneNumberIntl } from 'react-phone-number-input';
import ReactCodeInput from 'react-verification-code-input';

import { firebase, auth } from './firebase';
import { Alert } from 'bootstrap';


class SignUp extends Component {
    constructor(props) {
        super(props);
        this.state = {
            'isLoading':false,
            'name': null,
            'lname': null,
            'verificationId': null,
            'verificationCode': null,
            'uuid': null,
            'emailuuid': null,
            'isPhoneVerified': false,
            'userpassword': null,
            'verificationCodeEmail': null,
        };
    }    
    goToPhoneScreen = (prps) => {
        if(this.state.name == null || this.state.lname == null){
            alert('please input required fields');
        return;
        }
        prps.continueSignUp();
    }
    verifyPhoneNumber = (prps) => {
        if(prps.userphone === ''){
            alert('please input required fields');
        return;
        }
        let verify = new firebase.auth.RecaptchaVerifier(
            'recaptcha-container',
                {
                    size: "invisible"
                }
            );
        auth.signInWithPhoneNumber(prps.userphone, verify).then((result) => {
            this.setState({
                'verificationId': result
            })
            prps.continueSignUp();
        }).catch((err) => {
            console.log(err);
        });
    }
    verifyCode = (prps) => {
        if (this.state.verificationId === null || this.state.verificationCode === null)
            return;
        this.state.verificationId.confirm(this.state.verificationCode).then((result) => {
            // success
            this.setState({
                'uuid': result.user?.uid,
                'isPhoneVerified': true,
            })
            prps.continueSignUp();
        }).catch((err) => {
            alert("Wrong code");
        })
    }
    emailSignUp = async (prps) => {
        if(this.state.isPhoneVerified === false || this.state.uuid === null)
        return;

        try {
            var formdata = new FormData();
            formdata.append("email", this.props.useremail);
            const response = await fetch('https://api.parkingaeroport.fr/api/generate-code', {
                method: 'POST',
                headers: {
                },
                body: formdata
            });
            if(response.status == 200){
                const json = await response.json();
                if(json.success == true){
                    prps.continueSignUp();
                }
            }else{
                alert('error generating code for email verification');
            }
        } catch (error) {
            console.error(error);
        }        
        // ...
    }
    finalSignUp = async (prps) => {
        console.log(this.state.verificationCodeEmail);
        if(this.state.verificationCodeEmail === null)
        return;
        try {
            var formdata = new FormData();
            formdata.append("email", this.props.useremail);
            formdata.append("code", this.state.verificationCodeEmail);
            const response = await fetch('https://api.parkingaeroport.fr/api/verify-code', {
                method: 'POST',
                headers: {
                },
                body: formdata
            });
            if(response.status == 200){
                const json = await response.json();
                if(json.success == true){
                    console.log(json);
                    
                    auth.createUserWithEmailAndPassword(this.props.useremail, this.state.userpassword)
                    .then(async (userCredential) => {
                    // Signed in 
                    const user = userCredential.user;
                    console.log(user);
                    this.setState({
                        'emailuuid': user.uid
                    });
                        try {
                            var formdata = new FormData();
                            formdata.append("uuid", this.state.uuid);
                            formdata.append("emailuuid", user.uid);
                            formdata.append("name", this.state.name);
                            formdata.append("lname", this.state.lname);
                            formdata.append("email", this.props.useremail);
                            formdata.append("phone", this.props.userphone);
                            formdata.append("provider", "email");
                            const response = await fetch('https://api.parkingaeroport.fr/api/register', {
                                method: 'POST',
                                headers: {
                                },
                                body: formdata
                            });
                            const json = await response.json();
                            console.log(json);
                            if (json.token) {
                                localStorage.setItem('userToken', 'json.token');
                                console.log(json.token);
                                alert('Account Registered Successfully.');
                                    prps.goToLoginScreen();
                            } else {
                                const user = auth.currentUser;
                                user.delete();
                                alert(json.errors);
                                console.log(json.errors);
                            }
                        } catch (error) {
                            // setAuthLoading(false);
                            // Alert.alert('Error!', error);
                            console.error(error);
                        }        
                        // ...
                    })
                    .catch((error) => {
                    const errorCode = error.code;
                    const errorMessage = error.message;
                    alert(errorMessage);
                    console.log(error);
                    // ..
                    });

                }
            }else{
                alert('invalid or expired code, please generate a new one by link below');
            }
        } catch (error) {
            console.error(error);
        }        
        // ...
    }
    render() {
        const props = this.props;
        return (
            <React.Fragment>
                <Modal.Header className='pfr_loginModalHeader'>
                    <button type="button" className="btn-close btn-back" aria-label="Close" onClick={props.backSignUp}></button>
                </Modal.Header>
                <Modal.Body className='pfr_loginModalBody'>

                    {props.isSignUpStep === 1 &&
                        <React.Fragment>
                            <Row>
                                <Col>
                                    <h2 className='pfr_loginModalH2'>Comment vous appelez-vous ? (1/3)</h2>
                                </Col>
                            </Row>
                            <Row>
                                <Col className='pfr_signupModalNameDiv'>
                                    <Row>
                                        <Col className='pfr_inputFloatDiv'>
                                            <Form.Floating className="pfr_inputFloat">
                                                <Form.Control
                                                    id="floatingInput1"
                                                    type="text"
                                                    placeholder="Prénom"
                                                    value={this.state.name}
                                                    onChange={(val) => this.setState({
                                                        name: val.target.value
                                                    })}
                                                />
                                                <label htmlFor="floatingInput1">Prénom</label>
                                            </Form.Floating>
                                        </Col>
                                        <Col className='pfr_inputFloatDiv'>
                                            <Form.Floating className="pfr_inputFloat">
                                                <Form.Control
                                                    id="floatingInput2"
                                                    type="text"
                                                    placeholder="Nom"
                                                    value={this.state.lname}
                                                    onChange={(val) => this.setState({
                                                        lname: val.target.value
                                                    })}
                                                />
                                                <label htmlFor="floatingInput2">Nom</label>
                                            </Form.Floating>
                                        </Col>
                                    </Row>
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    <Button className='pfr_loginModalBtn shadow-none' onClick={() => this.goToPhoneScreen(props)}>Continuer</Button>
                                </Col>
                            </Row>
                        </React.Fragment>
                    }
                    {props.isSignUpStep === 2 &&
                        <React.Fragment>
                            <Row>
                                <Col>
                                    <div id="recaptcha-container"></div>
                                    <h2 className='pfr_loginModalH2'>Quel est votre numéro de téléphone ? (2/3)</h2>
                                </Col>
                            </Row>
                            <Row>
                                <Col className='pfr_loginModalTelInputDiv'>
                                    <div className='pfr_loginModalTelInputInnerDiv'>
                                        <PhoneInput
                                            // placeholder="Numéro de téléphone"
                                            international
                                            withCountryCallingCode
                                            defaultCountry="FR"
                                            countryCallingCodeEditable={false}
                                            value={props.userphone}
                                            onCountryChange={(crt) => console.log('crt ', crt)}
                                            focusInputOnCountrySelection
                                            autoFocus
                                            onChange={(val) => props.inputHandleChange(val, 'userphone')}
                                            className='pfr_loginModalTelInput'
                                        />
                                        <span className="pfr_loginModalTelInputLabel toFloat">Numéro de téléphone</span>
                                    </div>
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                {/* // onClick={props.continueSignUp} */}
                                <Button className='pfr_loginModalBtn shadow-none' 
                                onClick={() => this.verifyPhoneNumber(props)}>Continuer</Button>
                                </Col>
                            </Row>
                        </React.Fragment>
                    }
                    {props.isSignUpStep === 3 &&
                        <React.Fragment>
                            <Row>
                                <Col>
                                    <h2 className='pfr_loginModalH2'>Saisissez le code envoyé au {formatPhoneNumberIntl(props.userphone)}</h2>
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    <ReactCodeInput
                                        type='number'
                                        fields={6}
                                        onChange={(val) => this.setState({
                                            verificationCode: val
                                        })}
                                        onComplete={(val) => console.log(val)}
                                        autoFocus={true}
                                        // loading
                                        className="pfr_signUpNumberVerify"
                                    />
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    <Button className='pfr_loginModalBtn shadow-none' onClick={()=>this.verifyCode(props)}>Continuer</Button>
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    <p className='pfr_signUpResendP'>Vous n’avez rien reçu ? <span>Renvoyer le code</span></p>
                                </Col>
                            </Row>
                        </React.Fragment>
                    }
                    {props.isSignUpStep === 4 &&
                        <React.Fragment>
                            <Row>
                                <Col>
                                    <h2 className='pfr_loginModalH2'>Quelle est votre adresse e-mail et votre mot de passe ? (3/3)</h2>
                                </Col>
                            </Row>
                            <Row>
                                <Col className='pfr_loginModalEmailDiv'>
                                    <Row>
                                        <Col className='pfr_inputFloatDiv'>
                                            <Form.Floating className="pfr_inputFloat">
                                                <Form.Control
                                                    id="floatingInput1"
                                                    type="email"
                                                    placeholder="Adresse e-mail"
                                                    value={props.useremail}
                                                    onChange={(event) => props.inputHandleChange(event.target.value, 'useremail')}
                                                />
                                                <label htmlFor="floatingInput1">Adresse e-mail</label>
                                            </Form.Floating>
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col className='pfr_inputFloatDiv'>
                                            <Form.Floating className="pfr_inputFloat">
                                                <Form.Control
                                                    id="floatingInput2"
                                                    type={props.ispasswordhide ? "password" : "text"}
                                                    placeholder="Mot de passe" 
                                                    onChange={(event)=> this.setState({ 'userpassword': event.target.value })}
                                                />
                                                <label htmlFor="floatingInput2">Mot de passe</label>
                                                <img src={require(`../../../assets/img/${props.ispasswordhide ? 'icon_pass_hide.png' : 'icon_pass_show.png'}`).default}
                                                    className="pfr_loginShowPass"
                                                    onClick={props.showHidePass}
                                                    alt="CLT"
                                                />
                                            </Form.Floating>
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col className='pfr_signUpResendDiv'>
                                            <p className='pfr_signUpResendP'>8 caractères minimum (au moins une lettre minuscule, une lettre majuscule, un caractère spécial et un chiffre)</p>
                                        </Col>
                                    </Row>
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    <Button className='pfr_loginModalBtn shadow-none' onClick={()=>this.emailSignUp(props)}>Continuer</Button>
                                </Col>
                            </Row>
                        </React.Fragment>
                    }
                    {props.isSignUpStep === 5 &&
                        <React.Fragment>
                            <Row>
                                <Col>
                                    {/* <h2 className="pfr_loginModalH2">Nous vous avons envoyé un lien de vérification pour {props.useremail}</h2> */}
                                    <h2 className='pfr_loginModalH2'>Saisissez le code envoyé à {props.useremail}</h2>
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    <ReactCodeInput
                                        type='number'
                                        fields={6}
                                        onChange={(val) => this.setState({
                                            verificationCodeEmail: val
                                        })}
                                        onComplete={(val) => console.log(val)}
                                        autoFocus={true}
                                        // loading
                                        className="pfr_signUpNumberVerify"
                                    />
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    <Button className='pfr_loginModalBtn shadow-none'  onClick={()=>this.finalSignUp(props)}>Continuer</Button>
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    <p className='pfr_signUpResendP'>Vous n’avez rien reçu ? <span>Renvoyer le code</span></p>
                                </Col>
                            </Row>
                        </React.Fragment>
                    }
                </Modal.Body>
            </React.Fragment>
        );
    }
}

export default SignUp;