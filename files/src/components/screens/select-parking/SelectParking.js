// import { ButtonBase } from '@material-ui/core';
import React, { Component } from 'react';
import { Col, Container, Row, Button, Dropdown } from 'react-bootstrap';
// import NewSlider from './MainSlider';
import SliderOnMobile from './MobileSlider';
import NewMap from './PricingMap';
import './select-parking.css';
// import MyCard from './ImageSlider';

class SelectParking extends Component {
    constructor(props) {
        super(props);
        this.state = {isToggleOn: true};
    this.handleClick = this.handleClick.bind(this);
    }

    handleClick() {
        this.setState(prevState => ({
          isToggleOn: !prevState.isToggleOn
        }));
      }

    render() {
        return (
            <React.Fragment>
                <Container fluid className='pfr_padding-0'>
                    <div className="form-group has-search">
                        <i className="fa fa-arrow-left form-control-feedback" />
                        <input type="text" className="form-control" placeholder="Search" />
                        <img
                            src={require('../../../assets/img/icon_filter.png').default}
                            className="pfr_icon_filter"
                            alt="ParkingAeroPortFr"
                        />
                    </div>
                    <div className='pfr-flex-style'>
                    <ul class="pfr_flex pfr_desktop_none">
                        <li>
                            <Dropdown className="d-inline">
                                <Dropdown.Toggle variant="outline-dark" id="dropdown-autoclose-true">
                                16 juil - 18 juil
                                </Dropdown.Toggle>

                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </li>
                        <li>
                            <Dropdown className="d-inline">
                                <Dropdown.Toggle variant="outline-dark" id="dropdown-autoclose-true">
                                Pertinence
                                </Dropdown.Toggle>

                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </li>
                        <li>
                            <Dropdown className="d-inline">
                                <Dropdown.Toggle variant="outline-dark" id="dropdown-autoclose-true">
                                Prix
                                </Dropdown.Toggle>

                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </li>
                        <li>
                            <Dropdown className="d-inline">
                                <Dropdown.Toggle variant="outline-dark" id="dropdown-autoclose-true">
                                Distance
                                </Dropdown.Toggle>

                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </li>
                        <li><Button variant="outline-dark">Distance</Button></li>
                        <li><Button variant="outline-dark">Plus de filtres</Button></li>
                    </ul>
                    </div>
                    <Row className='pfr_addStyle pfr_gutters'>
                        <Col xs={12} sm={6} md={5}>
                        <div className='pfr_mobileSlider pfr_newMapSlider'>
                        
                                <SliderOnMobile />
                        </div>
                        <div className='pfr_scroll'>
                        <div className='pfr_flex'>
                        </div>
                        
                        <h1 className='pfr_main_heading'>Tous les parkings</h1>
                        <ul class="pfr_flex pfr_desktop_block">
                        <li>
                            <Dropdown className="d-inline">
                                <Dropdown.Toggle variant="outline-dark" id="dropdown-autoclose-true">
                                16 juil - 18 juil
                                </Dropdown.Toggle>

                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </li>
                        <li>
                            <Dropdown className="d-inline">
                                <Dropdown.Toggle variant="outline-dark" id="dropdown-autoclose-true">
                                Pertinence
                                </Dropdown.Toggle>

                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </li>
                        <li>
                            <Dropdown className="d-inline">
                                <Dropdown.Toggle variant="outline-dark" id="dropdown-autoclose-true">
                                Prix
                                </Dropdown.Toggle>

                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </li>
                        <li>
                            <Dropdown className="d-inline">
                                <Dropdown.Toggle variant="outline-dark" id="dropdown-autoclose-true">
                                Distance
                                </Dropdown.Toggle>

                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                    <Dropdown.Item href="#">Menu Item</Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </li>
                        <li><Button variant="outline-dark">Plus de filtres</Button></li>
                    </ul>
                            <div className={this.state.isToggleOn ? 'pfr_mobileSlider' : 'pfr_mobileSlider slide'}>
                                <div class="pfr_panel-header" onClick={this.handleClick}></div>
                                <div className="pfr_slider_box">
                                    <div className='pfr_slideButton'>
                                        <i className='fa fa-arrow-up' />
                                        <h1 className='pfr_main_heading upHeading'>Tous les parkings</h1>
                                        <h1 className='pfr_main_heading'>Revenir à la liste</h1>
                                    </div>
                                    <SliderOnMobile />
                                    </div>
                                </div>
                            </div>
                        </Col>
                        <Col xs={12} sm={6}  md={7}>
                            <NewMap />
                        </Col>
                    </Row>
                    
                    
                </Container>
                
            </React.Fragment>
        );
    }
}

export default SelectParking;