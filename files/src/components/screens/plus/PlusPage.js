import React, { Component } from 'react';
import { Col, Container, Row, Offcanvas, Button, Form, Dropdown, ButtonGroup } from 'react-bootstrap';
import MobileFooter from '../../../layouts/MobileFooter';
import './plus-page.css';

class PlusPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
            paymentSidebarShow: false,
            userPaymentCards: [],
            viewPaymentCards: true,
            addPaymentCard: false,
            editPaymentCard: false,
            paymentCardForm: false,
            cardName: '',
            cardNumber: '',
            cardExpiry: '',
            cardCVC: ''
        };
    }

    handleCloseSidebar = () => {
        this.setState(prevState => { return { paymentSidebarShow: !prevState.paymentSidebarShow } });
    };
    handleAddPaymentCard = () => {
        this.setState({ viewPaymentCards: false, paymentCardForm: true, addPaymentCard: true, cardName: '', cardNumber: '', cardExpiry: '', cardCVC: '' });
    }
    handleSavePaymentCard = () => {
        this.setState({ viewPaymentCards: true, paymentCardForm: false, addPaymentCard: false });
        this.setState(prevState => { return { userPaymentCards: [...prevState.userPaymentCards, { id: 1 }] } });
    }
    handleEditPaymentCard = () => {
        this.setState({ viewPaymentCards: false, paymentCardForm: true, editPaymentCard: true, cardName: 'MasterCard', cardNumber: '2141412414', cardExpiry: '02/24', cardCVC: "768" });
    }
    handleBack = (from, to) => {
        this.setState(prevState => { return { [from]: !prevState[from], [to]: !prevState[to], paymentCardForm: !prevState.paymentCardForm } });
    }
    handleInputChange = (event) => {
        this.setState({ [event.target.name]: [event.target.value] });
    }
    componentDidMount() {
        console.log('props plus ', this.props);
    }

    render() {
        const CustomToggle = React.forwardRef(({ children, onClick }, ref) => (
            <a
                href=""
                ref={ref}
                className='pfr_payment_card3dot'
                onClick={e => {
                    e.preventDefault();
                    onClick(e);
                    console.log(e);
                }}
            >
                {children}
                <i className="fa fa-ellipsis-v" aria-hidden="true"></i>
            </a>
        ));

        return (
            <React.Fragment>
                <Container>
                    <Row>
                        <Col lg={{ span: 8, offset: 2 }} md={{ span: 6, offset: 3 }} sm={12} xs={12} className='pfr_plus_col'>
                            <div className='d-none d-md-flex pfr_plus_header'>
                                <h2>Plus</h2>
                                <div className='pfr_plus_header_innerdiv'>
                                    <span className='pfr_plus_header_spantext'>Heureux de vous revoir Name !</span>
                                    <span className='pfr_plus_header_spanround'>N</span>
                                </div>
                            </div>
                            <div className='d-md-none d-sm-flex pfr_plus_header'>
                                <div className='pfr_plus_header_innerdiv'>
                                    <span className='pfr_plus_header_spanround'>N</span>
                                    <span className='pfr_plus_header_spantext'>Bonjour Name</span>
                                </div>
                            </div>
                            <div className='pfr_plus_main_div'>
                                <h2 className='pfr_plus_h2'>Espace utilisateur</h2>
                                <div className='pfr_plus_upper_maindiv'>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/plus_8_message.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Message</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/drawer_m4.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Favoris</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/plus_1_info_account.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Information personnelle</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/plus_2_my_booking.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Mes réservations</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/plus_3_my_vehicle.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Mes véhicules</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div className='pfr_plus_upperdiv' onClick={this.handleCloseSidebar}>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/plus_4_payment_method.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Mes moyens de paiements</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className='pfr_plus_main_div'>
                                <h2 className='pfr_plus_h2'>Espace partenaire</h2>
                                <div className='pfr_plus_upper_maindiv'>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/plus_5_add_a_parking.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Passer à l'espace partenaire</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/plus_6_estimate_my_parking.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Estimer mon parking</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/plus_7_how_that_work.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Comment ça marche ?</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className='pfr_plus_main_div'>
                                <h2 className='pfr_plus_h2'>Assistance</h2>
                                <div className='pfr_plus_upper_maindiv'>
                                    <div className='pfr_plus_upperdiv'>
                                        <div className='pfr_plus_innerdiv'>
                                            <img
                                                src={require('../../../assets/img/drawer_m6.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                            <span>Centre d'aide</span>
                                            <i className="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Col>
                    </Row>
                </Container>
                <MobileFooter {...this.props} {...this.state} isPage="plus" />
                <Offcanvas placement='end' className='pfr_payment_offcanvas' show={this.state.paymentSidebarShow} onHide={this.handleCloseSidebar}>
                    <Offcanvas.Header className="pfr_payment_header">
                        {this.state.viewPaymentCards &&
                            <React.Fragment>
                                <button type="button" className="btn-close shadow-none" aria-label="Close" onClick={this.handleCloseSidebar}></button>
                                <Offcanvas.Title className='pfr_payment_header_title'>Moyen de paiement</Offcanvas.Title>
                                <div className='pfr_payment_circle_btn' onClick={this.handleAddPaymentCard}><i className="fas fa-plus"></i></div>
                            </React.Fragment>
                        }
                        {this.state.addPaymentCard &&
                            <React.Fragment>
                                <button type="button" className="btn-close btn-back shadow-none d-flex" aria-label="Close" onClick={() => this.handleBack("addPaymentCard", "viewPaymentCards")}>
                                    <img src={require('../../../assets/img/back_arrow.png').default}
                                        className=""
                                        alt="ParkingAeroPortFr" />
                                </button>
                                <Offcanvas.Title className='pfr_payment_header_title'>Nouveau</Offcanvas.Title>
                                <div style={{ width: '28px' }}></div>
                            </React.Fragment>
                        }
                        {this.state.editPaymentCard &&
                            <React.Fragment>
                                <button type="button" className="btn-close btn-back shadow-none d-flex" aria-label="Close" onClick={() => this.handleBack("editPaymentCard", "viewPaymentCards")}>
                                    <img src={require('../../../assets/img/back_arrow.png').default}
                                        className=""
                                        alt="ParkingAeroPortFr" />
                                </button>
                                <Offcanvas.Title className='pfr_payment_header_title'>Moyen de paiement</Offcanvas.Title>
                                <div style={{ width: '28px' }}></div>
                            </React.Fragment>
                        }
                    </Offcanvas.Header>
                    <Offcanvas.Body className='pfr_payment_body'>
                        {this.state.viewPaymentCards &&
                            (this.state.userPaymentCards.length > 0 ?
                                <div className='pfr_payment_innerdivs'>
                                    <h2 className='pfr_payment_innerhead'>Carte bancaire</h2>
                                    {this.state.userPaymentCards.map((value, index) => {
                                        return (
                                            <div className='d-flex align-items-center justify-content-start pfr_payment_cardsdiv' key={index}>
                                                <div className='d-flex align-items-center justify-content-start' style={{ width: '20%' }}>
                                                    <div className='pfr_payment_imgdiv'>
                                                        <img src={require('../../../assets/img/icon_credit_card.png').default}
                                                            className=""
                                                            alt="ParkingAeroPortFr" />
                                                    </div>
                                                </div>
                                                <div className='d-flex align-items-start justify-content-center flex-column' style={{ width: '70%' }}>
                                                    <h3 className='pfr_payment_cardnumber'>**** 4947</h3>
                                                    <p className='pfr_payment_cardname'>Carte bancaire</p>
                                                </div>
                                                <div className='d-flex align-items-center justify-content-end pfr_payment_cards3dots' style={{ width: '10%' }}>
                                                    <Dropdown>
                                                        <Dropdown.Toggle as={CustomToggle} />
                                                        <Dropdown.Menu size="sm" title="">
                                                            <Dropdown.Item onClick={this.handleEditPaymentCard} className='pfr_payment_cards3dots_options'>Modifier</Dropdown.Item>
                                                            <Dropdown.Item onClick={() => console.log('Supprimer')} className='pfr_payment_cards3dots_options'>Supprimer</Dropdown.Item>
                                                        </Dropdown.Menu>
                                                    </Dropdown>
                                                </div>
                                            </div>
                                        );
                                    })}
                                </div>
                                :
                                <div className='pfr_payment_first_section'>
                                    <h2 className='pfr_payment_body_h'>Aucun moyen de paiement</h2>
                                    <p className='pfr_payment_body_p'>Ajouter un moyen de paiement pour vos prochaines réservations</p>
                                    <Button className='pfr_payment_big_btn shadow-none' onClick={this.handleAddPaymentCard}>Ajouter</Button>
                                </div>
                            )
                        }
                        {this.state.paymentCardForm &&
                            <div className='pfr_payment_innerdivs'>
                                <h2 className='pfr_payment_innerhead'>Ajouter un moyen de paiement</h2>
                                <Row>
                                    <Col lg={12} md={12} sm={12} xs={12} className='pfr_inputFloatDiv'>
                                        <Form.Floating className="pfr_inputFloat">
                                            <Form.Control
                                                id="floatingInput1"
                                                name="cardName"
                                                type="text"
                                                placeholder="Nom sur la carte"
                                                value={this.state.cardName}
                                                onFocus={(event) => console.log(event)}
                                                onFocusCapture={() => console.log('event')}
                                                onAbort={() => console.log('abort')}
                                                onTouchStart={() => console.log('start')}
                                                onTouchCancel={() => console.log('cancel')}
                                                onChange={(event) => this.handleInputChange(event)}
                                            />
                                            <label htmlFor="floatingInput1">Nom sur la carte</label>
                                        </Form.Floating>
                                    </Col>
                                    <Col lg={12} md={12} sm={12} xs={12} className='pfr_inputFloatDiv'>
                                        <Form.Floating className="pfr_inputFloat">
                                            <Form.Control
                                                id="floatingInput1"
                                                name="cardNumber"
                                                type="text"
                                                placeholder="Numéro sur la carte"
                                                value={this.state.cardNumber}
                                                onChange={(event) => this.handleInputChange(event)}
                                            />
                                            <label htmlFor="floatingInput1">Numéro sur la carte</label>
                                        </Form.Floating>
                                    </Col>
                                    <Col lg={12} md={12} sm={12} xs={12} className='pfr_inputFloatDiv'>
                                        <Row>
                                            <Col lg={6} md={6} sm={6} xs={6}>
                                                <Form.Floating className="pfr_inputFloat">
                                                    <Form.Control
                                                        id="floatingInput1"
                                                        name="cardExpiry"
                                                        type="text"
                                                        placeholder="MM/AA"
                                                        value={this.state.cardExpiry}
                                                        onChange={(event) => this.handleInputChange(event)}
                                                    />
                                                    <label htmlFor="floatingInput1">MM/AA</label>
                                                </Form.Floating>
                                            </Col>
                                            <Col lg={6} md={6} sm={6} xs={6}>
                                                <Form.Floating className="pfr_inputFloat">
                                                    <Form.Control
                                                        id="floatingInput1"
                                                        name="cardCVC"
                                                        type="text"
                                                        placeholder="CVC"
                                                        value={this.state.cardCVC}
                                                        onChange={(event) => this.handleInputChange(event)}
                                                    />
                                                    <label htmlFor="floatingInput1">CVC</label>
                                                </Form.Floating>
                                            </Col>
                                        </Row>
                                    </Col>
                                </Row>
                                <div className='pfr_payment_space_bottom' />
                            </div>
                        }
                        {this.state.addPaymentCard &&
                            <div className='pfr_payment_footer'>
                                <Button className='shadow-none' onClick={this.handleSavePaymentCard}>Ajouter</Button>
                            </div>
                        }
                        {this.state.editPaymentCard &&
                            <div className='pfr_payment_footer'>
                                <Button className='shadow-none pfr_background_black'>Modifier</Button>
                            </div>
                        }
                    </Offcanvas.Body>
                </Offcanvas>
            </React.Fragment>
        );
    }
}

export default PlusPage;