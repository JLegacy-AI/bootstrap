import React, { Component } from 'react';
import { Col, Form, Row, Modal, Button } from 'react-bootstrap';
import './auth-modal.css';
import 'react-phone-number-input/style.css'
import PhoneInput, { isPossiblePhoneNumber, formatPhoneNumberIntl } from 'react-phone-number-input';
import ReactCodeInput from 'react-verification-code-input';
import SignIn from './SignIn';
import SignUp from './SignUp';

class AuthModal extends Component {
    constructor(props) {
        super(props);
        this.state = {
            isSignInView: true,
            isSignUpView: false,
            isSignUpStep: 1,
            isloginby: 'phone',
            ispasswordhide: true,
            userphone: '',
            useremail: '',
        };
    }
    componentDidMount() { }

    onChangeUserPhone = (val) => {
        this.setState({ userphone: val });
    }
    continueLogin = () => {
            this.setState({
                isSignInView: false
            })
    }
    onChangeLoginType = (type) => {
        if (type === 'email') this.setState({ isloginby: 'email' });
        if (type === 'phone') this.setState({ isloginby: 'phone' });
        if (type === 'phone-verify') this.setState({ isloginby: 'phone-verify' });
    }
    createAccount = () => {
        this.setState(prevState => { return { isSignInView: !prevState.isSignInView, isSignUpView: !prevState.isSignUpView, isSignUpStep: 1 } });
    }
    backSignUp = () => {
        this.setState(prevState => {
            if (prevState.isSignUpStep > 1) {
                return { isSignUpStep: (prevState.isSignUpStep - 1) }
            }
            else {
                return { isSignInView: !prevState.isSignInView, isSignUpView: !prevState.isSignUpView, isSignUpStep: 1 }
            }
        });
    }
    goToLoginScreen = () => {
        this.setState({
                isSignUpStep: 1,
                    isSignInView: true,
                    isSignUpView: false 
                });
    }
    continueSignUp = () => {
        this.setState(prevState => {
            if (prevState.isSignUpStep < 5) {
                return { isSignUpStep: (prevState.isSignUpStep + 1) }
            }
        });
    }
    showHidePass = () => this.setState(prevState => { return { ispasswordhide: !prevState.ispasswordhide } })
    inputHandleChange = (value, type) => {
        this.setState({ [type]: value })
    }
    render() {
        return (
            <Modal
                show={this.props.isLoginModel}
                onHide={this.props.toggleAuthModal}
                backdrop="static"
                keyboard={false}
                centered
                size="md"
                fullscreen='md-down'
                contentClassName="pfr_loginModalContent"
                dialogClassName="pfr_loginModalDialog"
            >
                {this.state.isSignInView &&
                    <SignIn
                        {...this.props}
                        createAccount={this.createAccount}
                        isloginby={this.state.isloginby}
                        onChangeLoginType={val => this.onChangeLoginType(val)}
                        continueLogin={this.continueLogin}
                        ispasswordhide={this.state.ispasswordhide}
                        showHidePass={this.showHidePass}
                        userphone={this.state.userphone}
                        useremail={this.state.useremail}
                        inputHandleChange={(val, type) => this.inputHandleChange(val, type)}
                    />
                }
                {this.state.isSignUpView &&
                    <SignUp
                        {...this.props}
                        backSignUp={this.backSignUp}
                        goToLoginScreen={this.goToLoginScreen}
                        isSignUpStep={this.state.isSignUpStep}
                        continueSignUp={this.continueSignUp}
                        ispasswordhide={this.state.ispasswordhide}
                        showHidePass={this.showHidePass}
                        userphone={this.state.userphone}
                        useremail={this.state.useremail}
                        inputHandleChange={(val, type) => this.inputHandleChange(val, type)}
                    />
                }
            </Modal>
        );
    }
}

export default AuthModal;