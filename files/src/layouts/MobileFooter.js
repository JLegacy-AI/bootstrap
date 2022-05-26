import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { Col, Row } from 'react-bootstrap';
import '../assets/css/mobile-footer.css';
import '../assets/css/style.css';

class MobileFooter extends Component {
    constructor(props) {
        super(props);
        this.state = {}
    }
    render() {
        return (
            <Row nogutters="true" lg={true} className="d-md-none d-lg-none d-flex pfr_mobileFooterRow">
                <Col className="pfr_mobileFooterCol">
                    <Link to="/" className={this.props.isPage === 'home' ? "pfr_mobileFooterLink active" : "pfr_mobileFooterLink"}>
                        <div className="pfr_mobileFooterMenu1" />
                        <p>Accueil</p>
                    </Link>
                </Col>
                <Col className="pfr_mobileFooterCol">
                    <Link to="/" onClick={this.props.onOpen} className="pfr_mobileFooterLink">
                        <div className="pfr_mobileFooterMenu2" />
                        <p>Réserver</p>
                    </Link>
                </Col>
                <Col className="pfr_mobileFooterCol">
                    <Link to="/reservation" className={this.props.isPage === 'reservation' ? "pfr_mobileFooterLink active" : "pfr_mobileFooterLink"}>
                        <div className="pfr_mobileFooterMenu3" />
                        <p>Mes réservations</p>
                    </Link>
                </Col>
                <Col className="pfr_mobileFooterCol">
                    <Link to="/plus" className={this.props.isPage === 'plus' ? "pfr_mobileFooterLink active" : "pfr_mobileFooterLink"}>
                        <div className="pfr_mobileFooterMenu4" />
                        <p>Plus</p>
                    </Link>
                </Col>
            </Row>
        );
    }
}

export default MobileFooter;