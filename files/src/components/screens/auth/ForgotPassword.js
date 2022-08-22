import React, { Component } from 'react';
import { Col, Form, Row, Modal, Button } from 'react-bootstrap';
import './auth-modal.css';
import 'react-phone-number-input/style.css'
import PhoneInput, { formatPhoneNumberIntl } from 'react-phone-number-input';
import ReactCodeInput from 'react-verification-code-input';
import { IMG_ALT } from '../../../constants';

class ForgotPassword extends Component {
    constructor(props) {
        super(props);
        this.state = {
            isforgotpassby: 'email',
            isForgotPassStep: 1,
        };
    }
    onChangeLoginType = (type) => {
        if (type === 'email') this.setState({ isforgotpassby: 'email' });
        if (type === 'phone') this.setState({ isforgotpassby: 'phone' });
    }
    backForgotPass = () => {
        this.setState(prevState => {
            if (prevState.isForgotPassStep > 1) {
                return { isForgotPassStep: (prevState.isForgotPassStep - 1) }
            }
            else {
                return { isForgotPassStep: 1 }
            }
        });
        if (this.state.isForgotPassStep <= 1) {
            this.props.forgotPass();
        }
    }
    continueForgotPass = () => {
        this.setState(prevState => {
            if (prevState.isForgotPassStep < 3) {
                return { isForgotPassStep: (prevState.isForgotPassStep + 1) }
            }
        });
    }

    render() {
        const props = this.props;
        return (
            <React.Fragment>
                <Modal.Header className='pfr_loginModalHeader'>
                    {this.state.isForgotPassStep === 3 ?
                        <button type="button" className="btn-close" aria-label="Close" onClick={props.toggleAuthModal}></button>
                        :
                        <button type="button" className="btn-close btn-back" aria-label="Close" onClick={this.backForgotPass}></button>
                    }
                </Modal.Header>
                <Modal.Body className='pfr_loginModalBody'>
                    <Modal.Body className='pfr_loginModalBody'>
                        {this.state.isForgotPassStep === 1 &&
                            <React.Fragment>
                                <Row>
                                    <Col>
                                        <h2 className='pfr_loginModalH2'>Mot de passe oublié</h2>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        <p className='pfr_loginModalp'>Saisissez votre adresse e-mail ou votre numéro de téléphone et nous vous enverrons un code pour réinitialiser votre mot de passe</p>
                                    </Col>
                                </Row>
                                {this.state.isforgotpassby === 'phone' &&
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
                                }
                                {this.state.isforgotpassby === 'email' &&
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
                                        </Col>
                                    </Row>
                                }
                                <Row>
                                    <Col>
                                        <Button className='pfr_loginModalBtn shadow-none' onClick={this.continueForgotPass}>Envoyer code</Button>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col className='pfr_loginModalSeparatorDiv'>
                                        <div className='pfr_loginModalSeparator' />
                                        <span>OU</span>
                                        <div className='pfr_loginModalSeparator' />
                                    </Col>
                                </Row>
                                <Row>
                                    <Col className='pfr_loginModalBottomBtnCol'>
                                        {this.state.isforgotpassby === 'phone' &&
                                            <Row>
                                                <Col>
                                                    <Button className='pfr_loginModalIconBtn shadow-none' onClick={() => this.onChangeLoginType('email')}>
                                                        <img src={require('../../../assets/img/icon_email.png').default}
                                                            className=""
                                                            alt={IMG_ALT} />
                                                        <span>Réinitialiser avec Adresse e-mail</span>
                                                    </Button>
                                                </Col>
                                            </Row>
                                        }
                                        {this.state.isforgotpassby === 'email' &&
                                            <Row>
                                                <Col>
                                                    <Button className='pfr_loginModalIconBtn shadow-none' onClick={() => this.onChangeLoginType('phone')}>
                                                        <img src={require('../../../assets/img/icon_phone.png').default}
                                                            className=""
                                                            alt={IMG_ALT} />
                                                        <span>Réinitialiser avec un téléphone</span>
                                                    </Button>
                                                </Col>
                                            </Row>
                                        }
                                    </Col>
                                </Row>
                            </React.Fragment>
                        }
                        {this.state.isForgotPassStep === 2 &&
                            <React.Fragment>
                                <Row>
                                    <Col>
                                        <h2 className='pfr_loginModalH2'>Saisissez le code envoyé à verylongverylogone@gmail.com</h2>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        <ReactCodeInput
                                            type='number'
                                            fields={4}
                                            onChange={(val) => console.log(val)}
                                            onComplete={(val) => console.log(val)}
                                            autoFocus={true}
                                            // loading
                                            className="pfr_signUpNumberVerify"
                                        />
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        <Button className='pfr_loginModalBtn shadow-none' onClick={this.continueForgotPass}>Continuer</Button>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        <p className='pfr_signUpResendP'>Vous n’avez rien reçu ? <span>Renvoyer le code</span></p>
                                    </Col>
                                </Row>
                            </React.Fragment>
                        }
                        {this.state.isForgotPassStep === 3 &&
                            <React.Fragment>
                                <Row>
                                    <Col>
                                        <h2 className='pfr_loginModalH2'>Réinitialiser mot de passe</h2>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        <p className='pfr_loginModalp'>Minimum 8 caractères (au moins une lettre minuscule, une lettre majuscule, un caractère spécial et un chiffre)</p>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col className='pfr_inputFloatDiv'>
                                        <Form.Floating className="pfr_inputFloat">
                                            <Form.Control
                                                id="floatingInput2"
                                                type="password"
                                                placeholder="Nouveau mot de passe"
                                            />
                                            <label htmlFor="floatingInput2">Nouveau mot de passe</label>
                                        </Form.Floating>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col className='pfr_inputFloatDiv'>
                                        <Form.Floating className="pfr_inputFloat">
                                            <Form.Control
                                                id="floatingInput2"
                                                type="password"
                                                placeholder="Confirmer mot de passe"
                                            />
                                            <label htmlFor="floatingInput2">Confirmer mot de passe</label>
                                        </Form.Floating>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        <Button className='pfr_loginModalBtn shadow-none' onClick={this.continueForgotPass}>Réinitialiser mot de passe</Button>
                                    </Col>
                                </Row>
                            </React.Fragment>
                        }
                    </Modal.Body>
                </Modal.Body>
            </React.Fragment>
        );
    }
}

export default ForgotPassword;