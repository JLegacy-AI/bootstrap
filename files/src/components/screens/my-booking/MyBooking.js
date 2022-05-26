import React, { Component } from 'react';
import { Col, Container, Row, Button, Modal, Form } from 'react-bootstrap';
import MobileFooter from '../../../layouts/MobileFooter';
import './my-booking.css';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';
import SwipeableViews from 'react-swipeable-views';

class MyBooking extends Component {
    constructor(props) {
        super(props);
        this.state = {
            userToken: null,
            selectedTab: "TOUT VOIR",
            index: 0,
            reservations: [],
            isReservationModal: false,
            reservation_number: '',
            email: ''
        };
    }
    inputHandleChange = (value, type) => {
        this.setState({ [type]: value })
    }
    toggleReservationModal = () => {
        this.setState(prevState => { return { isReservationModal: !prevState.isReservationModal } })
    }
    userLoggedIn = () => {
        this.setState({
            userToken: 'null',
            reservations: []
        })
    }
    userReservation = () => {
        this.setState({
            reservations: [
                { id: 1, reserv_id: "#564846", name: "Parking couvert esquirol 1 place", type: "À venir", datetime: "15 juil. 17:00 - 16 juil. 18:45", price: "155€" },
                { id: 2, reserv_id: "#456712", name: "Parkme - Parking extérieur Aéroport Toulouse Blagna", type: "En cours", datetime: "07 juil. 08:00 - 10 juil. 19:45", price: "34€" },
                { id: 3, reserv_id: "#976245", name: "Theparking spot - Parking extérieur airport Atlanta", type: "Terminé", datetime: "03 juil. 09:00 - 05 juil. 17:00", price: "155€" },
                { id: 4, reserv_id: "#124576", name: "Parking couvert esquirol 1 place", type: "Terminé", datetime: "01 juil. 12:00 - 03 juil. 15:45", price: "255€" },
            ]
        })
        this.setState(prevState => { return { isReservationModal: !prevState.isReservationModal } })
    }
    handleChangeTab = (event, value) => {
        this.setState({
            index: value,
        });
    };

    handleChangeTabIndex = index => {
        this.setState({
            index,
        });
    };

    render() {
        const { index } = this.state;

        return (
            <React.Fragment>
                <Container fluid className="pfr_mybooking_tabcontainer">
                    <Row>
                        <Col lg={{ span: 8, offset: 2 }} md={12} sm={12} xs={12} className='pfr_plus_col'>
                            <div className='d-none d-md-flex pfr_mybooking_header'>
                                <h2>Mes réservations</h2>
                                <Button variant="dark" type="submit" className="pfr_mybooking_btn shadow-none" onClick={this.toggleReservationModal}>+ Ajouter</Button>
                            </div>
                            <div>
                                <Tabs value={index} onChange={this.handleChangeTab} className='pfr_tabs'>
                                    <Tab label="TOUT VOIR" className='pfr_tabs_tab' />
                                    <Tab label="A VENIR" className='pfr_tabs_tab' />
                                    <Tab label="EN COURS" className='pfr_tabs_tab' />
                                    <Tab label="TERMINÉ" className='pfr_tabs_tab' />
                                </Tabs>
                                <SwipeableViews index={index} onChangeIndex={this.handleChangeTabIndex}>
                                    <div>
                                        {
                                            this.state.reservations.length ?
                                                this.state.reservations.map(function (reserv, index) {
                                                    let reservTypeClass = "";
                                                    if (reserv.type == "À venir") {
                                                        reservTypeClass = 'pfr_mybooking_label_green';
                                                    }
                                                    else if (reserv.type == "En cours") {
                                                        reservTypeClass = 'pfr_mybooking_label_orange';
                                                    }
                                                    else if (reserv.type == "Terminé") {
                                                        reservTypeClass = 'pfr_mybooking_label_gray';
                                                    }
                                                    else { }
                                                    return (
                                                        <React.Fragment key={index}>
                                                            <Row className='pfr_mybooking_div pfr_mybooking_divdsk'>
                                                                <Col lg={3} md={3} sm={4} xs={4} className='pfr_mybooking_imgdiv'></Col>
                                                                <Col lg={9} md={9} sm={6} xs={6}>
                                                                    <Row className='pfr_mybooking_midrow'>
                                                                        <Col lg={4} md={4} sm={12} xs={12} className='pfr_mybooking_h2div'>
                                                                            <h2>{reserv.name.length > 250 ? `${reserv.name.substring(0, 250)}...` : reserv.name}</h2>
                                                                        </Col>
                                                                        <Col lg={2} md={2} sm={2} className='d-none d-sm-block pfr_mybooking_labeldivdsk'>
                                                                            <span className={`pfr_mybooking_label ` + reservTypeClass}>{reserv.type}</span>
                                                                        </Col>
                                                                        <Col lg={4} md={4} sm={12} xs={12} className='pfr_mybooking_datetimediv'>
                                                                            <p className='pfr_mybooking_datetime'>{reserv.datetime}</p>
                                                                        </Col>
                                                                        <Col lg={2} md={2} sm={2} className='d-none d-sm-block pfr_mybooking_pricedskdiv'>
                                                                            <span className='pfr_mybooking_pricedsk'>{reserv.price}</span>
                                                                        </Col>
                                                                    </Row>
                                                                </Col>
                                                                <Col lg={3} md={3} sm={2} xs={2} className='pfr_mybooking_divlastdsk'>
                                                                    <i className="fas fa-chevron-right"></i>
                                                                    <div className='pfr_mybooking_dividdsk'>
                                                                        <span>{reserv.reserv_id}</span>
                                                                    </div>
                                                                </Col>
                                                            </Row>
                                                            <div className='pfr_mybooking_div pfr_mybooking_divmbl'>
                                                                <div className='pfr_mybooking_imgdiv'><span className='pfr_mybooking_pricembl'>{reserv.price}</span></div>
                                                                <div className='pfr_mybooking_midrow'>
                                                                    <div className='pfr_mybooking_h2div'>
                                                                        <h2>{reserv.name.length > 250 ? `${reserv.name.substring(0, 250)}...` : reserv.name}</h2>
                                                                    </div>
                                                                    <div className='pfr_mybooking_datetimediv'>
                                                                        <p className='pfr_mybooking_datetime'>{reserv.datetime}</p>
                                                                    </div>
                                                                </div>
                                                                <div className='pfr_mybooking_divlastdsk'>
                                                                    <div className='pfr_mybooking_divlabeldsk pfr_mybooking_mbl'>
                                                                        <span className={`pfr_mybooking_label ` + reservTypeClass}>{reserv.type}</span>
                                                                    </div>
                                                                    <i className="fas fa-chevron-right"></i>
                                                                    <div className='pfr_mybooking_dividdsk'>
                                                                        <span>{reserv.reserv_id}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </React.Fragment>
                                                    )
                                                })
                                                :
                                                <div className='pfr_mybooking_logdiv'>
                                                    <img
                                                        src={require(`../../../assets/img/mybookingdsk.png`).default}
                                                        className=""
                                                        alt="ParkingAeroPortFr"
                                                    />
                                                    <div className='pfr_mybooking_logsubdiv'>
                                                        <h2 className='pfr_mybooking_logdiv_h2'>Aucune réservation</h2>
                                                        <p className='pfr_mybooking_logdiv_p'>{this.state.userToken ? `Retrouvez ici vos réservations, ajouter votre réservation si vous en possédez une.` : `Connectez-vous ou ajouter votre réservation`}</p>
                                                        {this.state.userToken === null && <Button variant="dark" type="submit" className="pfr_mybooking_logdiv_btn shadow-none" onClick={this.toggleReservationModal}>Ajouter</Button>}
                                                    </div>
                                                </div>
                                        }
                                    </div>
                                    <div>
                                        {
                                            this.state.reservations.length ?
                                                this.state.reservations.map(function (reserv, index) {
                                                    if (reserv.type == "À venir") {
                                                        let reservTypeClass = "";
                                                        if (reserv.type == "À venir") {
                                                            reservTypeClass = 'pfr_mybooking_label_green';
                                                        }
                                                        else if (reserv.type == "En cours") {
                                                            reservTypeClass = 'pfr_mybooking_label_orange';
                                                        }
                                                        else if (reserv.type == "Terminé") {
                                                            reservTypeClass = 'pfr_mybooking_label_gray';
                                                        }
                                                        else { }
                                                        return (
                                                            <React.Fragment key={index}>
                                                                <Row className='pfr_mybooking_div pfr_mybooking_divdsk'>
                                                                    <Col lg={3} md={3} sm={4} xs={4} className='pfr_mybooking_imgdiv'></Col>
                                                                    <Col lg={9} md={9} sm={6} xs={6}>
                                                                        <Row className='pfr_mybooking_midrow'>
                                                                            <Col lg={4} md={4} sm={12} xs={12} className='pfr_mybooking_h2div'>
                                                                                <h2>{reserv.name.length > 250 ? `${reserv.name.substring(0, 250)}...` : reserv.name}</h2>
                                                                            </Col>
                                                                            <Col lg={2} md={2} sm={2} className='d-none d-sm-block pfr_mybooking_labeldivdsk'>
                                                                                <span className={`pfr_mybooking_label ` + reservTypeClass}>{reserv.type}</span>
                                                                            </Col>
                                                                            <Col lg={4} md={4} sm={12} xs={12} className='pfr_mybooking_datetimediv'>
                                                                                <p className='pfr_mybooking_datetime'>{reserv.datetime}</p>
                                                                            </Col>
                                                                            <Col lg={2} md={2} sm={2} className='d-none d-sm-block pfr_mybooking_pricedskdiv'>
                                                                                <span className='pfr_mybooking_pricedsk'>{reserv.price}</span>
                                                                            </Col>
                                                                        </Row>
                                                                    </Col>
                                                                    <Col lg={3} md={3} sm={2} xs={2} className='pfr_mybooking_divlastdsk'>
                                                                        <i className="fas fa-chevron-right"></i>
                                                                        <div className='pfr_mybooking_dividdsk'>
                                                                            <span>{reserv.reserv_id}</span>
                                                                        </div>
                                                                    </Col>
                                                                </Row>
                                                                <div className='pfr_mybooking_div pfr_mybooking_divmbl'>
                                                                    <div className='pfr_mybooking_imgdiv'><span className='pfr_mybooking_pricembl'>{reserv.price}</span></div>
                                                                    <div className='pfr_mybooking_midrow'>
                                                                        <div className='pfr_mybooking_h2div'>
                                                                            <h2>{reserv.name.length > 250 ? `${reserv.name.substring(0, 250)}...` : reserv.name}</h2>
                                                                        </div>
                                                                        <div className='pfr_mybooking_datetimediv'>
                                                                            <p className='pfr_mybooking_datetime'>{reserv.datetime}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div className='pfr_mybooking_divlastdsk'>
                                                                        <div className='pfr_mybooking_divlabeldsk pfr_mybooking_mbl'>
                                                                            <span className={`pfr_mybooking_label ` + reservTypeClass}>{reserv.type}</span>
                                                                        </div>
                                                                        <i className="fas fa-chevron-right"></i>
                                                                        <div className='pfr_mybooking_dividdsk'>
                                                                            <span>{reserv.reserv_id}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </React.Fragment>
                                                        )
                                                    }
                                                })
                                                :
                                                <div className='pfr_mybooking_logdiv'>
                                                    <img
                                                        src={require(`../../../assets/img/mybookingdsk.png`).default}
                                                        className=""
                                                        alt="ParkingAeroPortFr"
                                                    />
                                                    <div className='pfr_mybooking_logsubdiv'>
                                                        <h2 className='pfr_mybooking_logdiv_h2'>Aucune réservation</h2>
                                                        <p className='pfr_mybooking_logdiv_p'>{this.state.userToken ? `Retrouvez ici vos réservations, ajouter votre réservation si vous en possédez une.` : `Connectez-vous ou ajouter votre réservation`}</p>
                                                        {this.state.userToken === null && <Button variant="dark" type="submit" className="pfr_mybooking_logdiv_btn shadow-none" onClick={this.toggleReservationModal}>Ajouter</Button>}
                                                    </div>
                                                </div>
                                        }
                                    </div>
                                    <div>
                                        {
                                            this.state.reservations.length ?
                                                this.state.reservations.map(function (reserv, index) {
                                                    if (reserv.type == "En cours") {
                                                        let reservTypeClass = "";
                                                        if (reserv.type == "À venir") {
                                                            reservTypeClass = 'pfr_mybooking_label_green';
                                                        }
                                                        else if (reserv.type == "En cours") {
                                                            reservTypeClass = 'pfr_mybooking_label_orange';
                                                        }
                                                        else if (reserv.type == "Terminé") {
                                                            reservTypeClass = 'pfr_mybooking_label_gray';
                                                        }
                                                        else { }
                                                        return (
                                                            <React.Fragment key={index}>
                                                                <Row className='pfr_mybooking_div pfr_mybooking_divdsk'>
                                                                    <Col lg={3} md={3} sm={4} xs={4} className='pfr_mybooking_imgdiv'></Col>
                                                                    <Col lg={9} md={9} sm={6} xs={6}>
                                                                        <Row className='pfr_mybooking_midrow'>
                                                                            <Col lg={4} md={4} sm={12} xs={12} className='pfr_mybooking_h2div'>
                                                                                <h2>{reserv.name.length > 250 ? `${reserv.name.substring(0, 250)}...` : reserv.name}</h2>
                                                                            </Col>
                                                                            <Col lg={2} md={2} sm={2} className='d-none d-sm-block pfr_mybooking_labeldivdsk'>
                                                                                <span className={`pfr_mybooking_label ` + reservTypeClass}>{reserv.type}</span>
                                                                            </Col>
                                                                            <Col lg={4} md={4} sm={12} xs={12} className='pfr_mybooking_datetimediv'>
                                                                                <p className='pfr_mybooking_datetime'>{reserv.datetime}</p>
                                                                            </Col>
                                                                            <Col lg={2} md={2} sm={2} className='d-none d-sm-block pfr_mybooking_pricedskdiv'>
                                                                                <span className='pfr_mybooking_pricedsk'>{reserv.price}</span>
                                                                            </Col>
                                                                        </Row>
                                                                    </Col>
                                                                    <Col lg={3} md={3} sm={2} xs={2} className='pfr_mybooking_divlastdsk'>
                                                                        <i className="fas fa-chevron-right"></i>
                                                                        <div className='pfr_mybooking_dividdsk'>
                                                                            <span>{reserv.reserv_id}</span>
                                                                        </div>
                                                                    </Col>
                                                                </Row>
                                                                <div className='pfr_mybooking_div pfr_mybooking_divmbl'>
                                                                    <div className='pfr_mybooking_imgdiv'><span className='pfr_mybooking_pricembl'>{reserv.price}</span></div>
                                                                    <div className='pfr_mybooking_midrow'>
                                                                        <div className='pfr_mybooking_h2div'>
                                                                            <h2>{reserv.name.length > 250 ? `${reserv.name.substring(0, 250)}...` : reserv.name}</h2>
                                                                        </div>
                                                                        <div className='pfr_mybooking_datetimediv'>
                                                                            <p className='pfr_mybooking_datetime'>{reserv.datetime}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div className='pfr_mybooking_divlastdsk'>
                                                                        <div className='pfr_mybooking_divlabeldsk pfr_mybooking_mbl'>
                                                                            <span className={`pfr_mybooking_label ` + reservTypeClass}>{reserv.type}</span>
                                                                        </div>
                                                                        <i className="fas fa-chevron-right"></i>
                                                                        <div className='pfr_mybooking_dividdsk'>
                                                                            <span>{reserv.reserv_id}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </React.Fragment>
                                                        )
                                                    }
                                                })
                                                :
                                                <div className='pfr_mybooking_logdiv'>
                                                    <img
                                                        src={require(`../../../assets/img/mybookingdsk.png`).default}
                                                        className=""
                                                        alt="ParkingAeroPortFr"
                                                    />
                                                    <div className='pfr_mybooking_logsubdiv'>
                                                        <h2 className='pfr_mybooking_logdiv_h2'>Aucune réservation</h2>
                                                        <p className='pfr_mybooking_logdiv_p'>{this.state.userToken ? `Retrouvez ici vos réservations, ajouter votre réservation si vous en possédez une.` : `Connectez-vous ou ajouter votre réservation`}</p>
                                                        {this.state.userToken === null && <Button variant="dark" type="submit" className="pfr_mybooking_logdiv_btn shadow-none" onClick={this.toggleReservationModal}>Ajouter</Button>}
                                                    </div>
                                                </div>
                                        }
                                    </div>
                                    <div>
                                        {
                                            this.state.reservations.length ?
                                                this.state.reservations.map(function (reserv, index) {
                                                    if (reserv.type == "Terminé") {
                                                        let reservTypeClass = "";
                                                        if (reserv.type == "À venir") {
                                                            reservTypeClass = 'pfr_mybooking_label_green';
                                                        }
                                                        else if (reserv.type == "En cours") {
                                                            reservTypeClass = 'pfr_mybooking_label_orange';
                                                        }
                                                        else if (reserv.type == "Terminé") {
                                                            reservTypeClass = 'pfr_mybooking_label_gray';
                                                        }
                                                        else { }
                                                        return (
                                                            <React.Fragment key={index}>
                                                                <Row className='pfr_mybooking_div pfr_mybooking_divdsk'>
                                                                    <Col lg={3} md={3} sm={4} xs={4} className='pfr_mybooking_imgdiv'></Col>
                                                                    <Col lg={9} md={9} sm={6} xs={6}>
                                                                        <Row className='pfr_mybooking_midrow'>
                                                                            <Col lg={4} md={4} sm={12} xs={12} className='pfr_mybooking_h2div'>
                                                                                <h2>{reserv.name.length > 250 ? `${reserv.name.substring(0, 250)}...` : reserv.name}</h2>
                                                                            </Col>
                                                                            <Col lg={2} md={2} sm={2} className='d-none d-sm-block pfr_mybooking_labeldivdsk'>
                                                                                <span className={`pfr_mybooking_label ` + reservTypeClass}>{reserv.type}</span>
                                                                            </Col>
                                                                            <Col lg={4} md={4} sm={12} xs={12} className='pfr_mybooking_datetimediv'>
                                                                                <p className='pfr_mybooking_datetime'>{reserv.datetime}</p>
                                                                            </Col>
                                                                            <Col lg={2} md={2} sm={2} className='d-none d-sm-block pfr_mybooking_pricedskdiv'>
                                                                                <span className='pfr_mybooking_pricedsk'>{reserv.price}</span>
                                                                            </Col>
                                                                        </Row>
                                                                    </Col>
                                                                    <Col lg={3} md={3} sm={2} xs={2} className='pfr_mybooking_divlastdsk'>
                                                                        <i className="fas fa-chevron-right"></i>
                                                                        <div className='pfr_mybooking_dividdsk'>
                                                                            <span>{reserv.reserv_id}</span>
                                                                        </div>
                                                                    </Col>
                                                                </Row>
                                                                <div className='pfr_mybooking_div pfr_mybooking_divmbl'>
                                                                    <div className='pfr_mybooking_imgdiv'><span className='pfr_mybooking_pricembl'>{reserv.price}</span></div>
                                                                    <div className='pfr_mybooking_midrow'>
                                                                        <div className='pfr_mybooking_h2div'>
                                                                            <h2>{reserv.name.length > 250 ? `${reserv.name.substring(0, 250)}...` : reserv.name}</h2>
                                                                        </div>
                                                                        <div className='pfr_mybooking_datetimediv'>
                                                                            <p className='pfr_mybooking_datetime'>{reserv.datetime}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div className='pfr_mybooking_divlastdsk'>
                                                                        <div className='pfr_mybooking_divlabeldsk pfr_mybooking_mbl'>
                                                                            <span className={`pfr_mybooking_label ` + reservTypeClass}>{reserv.type}</span>
                                                                        </div>
                                                                        <i className="fas fa-chevron-right"></i>
                                                                        <div className='pfr_mybooking_dividdsk'>
                                                                            <span>{reserv.reserv_id}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </React.Fragment>
                                                        )
                                                    }
                                                })
                                                :
                                                <div className='pfr_mybooking_logdiv'>
                                                    <img
                                                        src={require(`../../../assets/img/mybookingdsk.png`).default}
                                                        className=""
                                                        alt="ParkingAeroPortFr"
                                                    />
                                                    <div className='pfr_mybooking_logsubdiv'>
                                                        <h2 className='pfr_mybooking_logdiv_h2'>Aucune réservation</h2>
                                                        <p className='pfr_mybooking_logdiv_p'>{this.state.userToken ? `Retrouvez ici vos réservations, ajouter votre réservation si vous en possédez une.` : `Connectez-vous ou ajouter votre réservation`}</p>
                                                        {this.state.userToken === null && <Button variant="dark" type="submit" className="pfr_mybooking_logdiv_btn shadow-none" onClick={this.toggleReservationModal}>Ajouter</Button>}
                                                    </div>
                                                </div>
                                        }
                                    </div>
                                </SwipeableViews>
                            </div>
                        </Col>
                    </Row>
                </Container>
                {this.state.userToken && this.state.reservations.length &&
                    <div className='pfr_mybooking_plusbtnmbl' onClick={this.toggleReservationModal}><i className="fas fa-plus"></i></div>
                }
                <Modal
                    show={this.state.isReservationModal}
                    onHide={this.toggleReservationModal}
                    backdrop="static"
                    keyboard={false}
                    centered
                    size="md"
                    fullscreen='md-down'
                    contentClassName="pfr_loginModalContent"
                    dialogClassName="pfr_loginModalDialog"
                >
                    <Modal.Header className='pfr_loginModalHeader'>
                        <button type="button" className="btn-close" aria-label="Close" onClick={this.toggleReservationModal}></button>
                    </Modal.Header>
                    <Modal.Body className='pfr_loginModalBody'>
                        <Row>
                            <Col>
                                <h2 className='pfr_loginModalH2'>Ajouter</h2>
                                <p>Saisissez votre adresse e-mail utilisée pour la réservation et le numéro de réservation présent sur l’e-mail de confirmation de réservation.</p>
                            </Col>
                        </Row>
                        <Row>
                            <Col className='pfr_signupModalNameDiv'>
                                <Row>
                                    <Col className='pfr_inputFloatDiv'>
                                        <Form.Floating className="pfr_inputFloat">
                                            <Form.Control
                                                id="floatingInput1"
                                                type="email"
                                                placeholder="Adresse e-mail"
                                                value={this.state.email}
                                                onChange={(val) => this.setState({
                                                    email: val.target.value
                                                })}
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
                                                type="text"
                                                placeholder="Numéro de réservation "
                                                value={this.state.reservation_number}
                                                onChange={(val) => this.setState({
                                                    reservation_number: val.target.value
                                                })}
                                            />
                                            <label htmlFor="floatingInput2">Numéro de réservation </label>
                                        </Form.Floating>
                                    </Col>
                                </Row>
                            </Col>
                        </Row>
                        <Row>
                            <Col>
                                <Button className='pfr_loginModalBtn shadow-none' onClick={this.userReservation}>Ajouter</Button>
                            </Col>
                        </Row>
                    </Modal.Body>
                </Modal>
                <MobileFooter {...this.props} {...this.state} isPage="reservation" />
            </React.Fragment>
        );
    }
}

export default MyBooking;