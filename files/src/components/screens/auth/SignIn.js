import React, { Component } from 'react';
import { Col, Form, Row, Modal, Button } from 'react-bootstrap';
import './auth-modal.css';
import 'react-phone-number-input/style.css'
import PhoneInput, { isPossiblePhoneNumber, formatPhoneNumberIntl } from 'react-phone-number-input';
import ReactCodeInput from 'react-verification-code-input';
import ForgotPassword from './ForgotPassword';

import { firebase, auth } from './firebase';
import { IMG_ALT } from '../../../constants';

class SignIn extends Component {
    constructor(props) {
        super(props);
        this.state = {
            'isForgotPassword': false,
            'userpassword': null,
            'emailuuid': null,
            'verificationId': null,
            'verificationCode': null,
            'uuid': null,
            'isPhoneVerified': false,
        };
    }
    emailSignIn = (prps) => {
        if(this.props.useremail === '' || this.state.userpassword === null){
            alert('please enter email and password');
        }else{

            auth.signInWithEmailAndPassword(this.props.useremail, this.state.userpassword)
            .then(async (userCredential) => {
                // Signed in 
                const user = userCredential.user;
                console.log(user);
                    this.setState({
                        'emailuuid': user.uid
                    });

                    try {
                        var formdata = new FormData();
                        formdata.append("emailuuid", user.uid);
                        formdata.append("email", this.props.useremail);
                        formdata.append("provider", "email");
                        const response = await fetch('https://api.parkingaeroport.fr/api/login', {
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
                            alert('logged In Successfully...')
                        } else {
                            auth.signOut();
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

            console.log('email signin');
        }
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
            prps.onChangeLoginType('phone-verify');
        }).catch((err) => {
            console.log(err);
        });
    }
    verifyCode = (prps) => {
        if (this.state.verificationId === null || this.state.verificationCode === null)
            return;
        this.state.verificationId.confirm(this.state.verificationCode).then(async (result) => {
            // success
            this.setState({
                'uuid': result.user?.uid,
                'isPhoneVerified': true,
            })
            const user = result.user;
            console.log(result.user);
            try {
                var formdata = new FormData();
                formdata.append("emailuuid", user.uid);
                formdata.append("phone", this.props.userphone);
                formdata.append("provider", "email");
                const response = await fetch('https://api.parkingaeroport.fr/api/login', {
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
                    alert('logged In Successfully...');
                } else {
                    auth.signOut();
                    alert(json.errors);
                    console.log(json.errors);
                }
            } catch (error) {
                // setAuthLoading(false);
                // Alert.alert('Error!', error);
                console.error(error);
            }        
            // ...

        }).catch((err) => {
            alert("Wrong code");
        })
    }

    ConnectWithFacebook = () => {

    }
    ConnectWithGoogle = () => {

    }

    forgotPass = () => { this.setState(prevState => { return { isForgotPassword: !prevState.isForgotPassword } }); }
    render() {
        const props = this.props;
        return (
            <React.Fragment>
                {this.state.isForgotPassword ?
                    <ForgotPassword {...props} isForgotPassword={this.state.isForgotPassword} forgotPass={this.forgotPass} />
                    :
                    <React.Fragment>
                        <Modal.Header className='pfr_loginModalHeader'>
                            <button type="button" className="btn-close" aria-label="Close" onClick={props.toggleAuthModal}></button>
                            <span className='pfr_loginModalHeadCreer' onClick={props.createAccount}>Créer un compte</span>
                        </Modal.Header>
                        <Modal.Body className='pfr_loginModalBody'>
                            <Row>
                                <Col>
                                    <h2 className='pfr_loginModalH2'>Connexion</h2>
                                </Col>
                            </Row>
                            <Row>
                                <Col>
                                    {props.isloginby === 'phone' && <p className='pfr_loginModalp'>Entrez votre numéro de téléphone pour se connecter</p>}
                                    {props.isloginby === 'email' && <p className='pfr_loginModalp'>Entrez votre adresse e-mail et votre mot de passe pour se connecter</p>}
                                </Col>
                            </Row>
                            {props.isloginby === 'phone' &&
                                <>
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
                                    <div id="recaptcha-container"></div>
                                        <Button className='pfr_loginModalBtn shadow-none' 
                                        onClick={() => this.verifyPhoneNumber(props)}>Continuer</Button>
                                    </Col>
                                </Row>
                                </>
                            }

                            {props.isloginby === 'phone-verify' &&
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

                            {props.isloginby === 'email' &&
                                <>
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
                                                        alt={IMG_ALT}
                                                    />
                                                </Form.Floating>
                                            </Col>
                                        </Row>
                                        <Row>
                                            <Col>
                                                <div className='d-flex justify-content-end pfr_loginForgotPassDiv'>
                                                    <span onClick={this.forgotPass}>Mot de passe oublié ?</span>
                                                </div>
                                            </Col>
                                        </Row>
                                    </Col>
                                </Row>
                                <Row>
                                <Col>
                                    <Button className='pfr_loginModalBtn shadow-none' onClick={() => this.emailSignIn(props)}>Continuer</Button>
                                </Col>
                                </Row>
                                </>
                            }
                            <Row>
                                <Col className='pfr_loginModalSeparatorDiv'>
                                    <div className='pfr_loginModalSeparator' />
                                    <span>OU</span>
                                    <div className='pfr_loginModalSeparator' />
                                </Col>
                            </Row>
                            <Row>
                                <Col className='pfr_loginModalBottomBtnCol'>
                                    {props.isloginby === 'phone' &&
                                        <Row>
                                            <Col>
                                                <Button className='pfr_loginModalIconBtn shadow-none' onClick={() => props.onChangeLoginType('email')}>
                                                    <img src={require('../../../assets/img/icon_email.png').default}
                                                        className=""
                                                        alt={IMG_ALT} />
                                                    <span>Continuer avec Adresse e-mail</span>
                                                </Button>
                                            </Col>
                                        </Row>
                                    }
                                    {props.isloginby === 'email' &&
                                        <Row>
                                            <Col>
                                                <Button className='pfr_loginModalIconBtn shadow-none' onClick={() => props.onChangeLoginType('phone')}>
                                                    <img src={require('../../../assets/img/icon_phone.png').default}
                                                        className=""
                                                        alt={IMG_ALT} />
                                                    <span>Continuer avec un téléphone</span>
                                                </Button>
                                            </Col>
                                        </Row>
                                    }
                                    <Row>
                                        <Col>
                                            <Button onClick={() => this.ConnectWithGoogle()} className='pfr_loginModalIconBtn shadow-none'>
                                                <img src={require('../../../assets/img/icon_google.png').default}
                                                    className=""
                                                    alt={IMG_ALT} />
                                                <span>Continuer avec Google</span>
                                            </Button>
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col>
                                            <Button onClick={() => this.ConnectWithFacebook()} className='pfr_loginModalIconBtn shadow-none'>
                                                <img src={require('../../../assets/img/icon_fb.png').default}
                                                    className=""
                                                    alt={IMG_ALT} />
                                                <span>Continuer avec Facebook</span>
                                            </Button>
                                        </Col>
                                    </Row>
                                </Col>
                            </Row>
                        </Modal.Body>
                    </React.Fragment>
                }
            </React.Fragment>
        );
    }
}

export default SignIn;