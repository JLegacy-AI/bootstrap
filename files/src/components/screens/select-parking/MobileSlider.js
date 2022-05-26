import React, { Component, useState } from "react";
import Slider from "react-slick";
import NewSlider from './MainSlider';
import { Card, Badge } from 'react-bootstrap';
import "slick-carousel/slick/slick.css"; 
import "slick-carousel/slick/slick-theme.css";
import MyCard from "./ImageSlider";

export default class SliderOnMobile extends Component {
  render() {
    const settings = {
        settings: 'unslick',
        responsive: [

            {
                breakpoint: 1023,
                settings: {
                    settings: 'slick',
                    centerMode: false, 
                    initialSlide: 0,
                    autoplay: true,
                    infinite: false,
                    arrows: true,
                    slidesToShow: 1.5,
                    slidesToScroll: 1,
                }
            }
        ]
    };
    return (
        
        <Slider {...settings}>
            <div className="slider-item">
            <div className='pfr_flex'>
                    <Card>
                    <div className='pfr_imgContent'>
                        <MyCard />
                        <div class="pfr_holderTxt d-flex justify-content-between align-items-center">
                            <span class="pfr_titleTxt">Professionnel</span>
                            <i class="fa fa-heart-o"></i>
                        </div>
                    </div> 
                        <Card.Body>
                            <h6 className="card-subtitle mb-2 text-muted">1,0km</h6>
                            <h5 className="card-title">Parkme 1 </h5>
                            <h5 className="card-title font-weight">75€</h5>
                            <ul className='pfr_flex'>
                                <li><Badge bg="secondary">Parking extérieur</Badge></li>
                                <li><Badge bg="secondary">Navette</Badge></li>
                                <li><Badge bg="secondary">
                                <img
                                    src={require('../../../assets/img/star_icon.png').default}
                                    className="pfr_icon"
                                    alt="ParkingAeroPortFr"
                                />
                                5.0</Badge></li>
                            </ul>
                        </Card.Body>
                    </Card>
                </div>
            </div>
            <div className="slider-item">
            <div className='pfr_flex'>
                    <Card>
                    <div className='pfr_imgContent'>
                    <MyCard />
                        <div class="pfr_holderTxt d-flex justify-content-between align-items-center">
                            <span class="pfr_titleTxt">Professionnel</span>
                            <i class="fa fa-heart-o"></i>
                        </div>
                    </div> 
                        <Card.Body>
                            <h6 className="card-subtitle mb-2 text-muted">1,0km</h6>
                            <h5 className="card-title">Parkme 1 </h5>
                            <h5 className="card-title font-weight">75€</h5>
                            <ul className='pfr_flex'>
                                <li><Badge bg="secondary">Parking extérieur</Badge></li>
                                <li><Badge bg="secondary">Navette</Badge></li>
                                <li><Badge bg="secondary">
                                <img
                                    src={require('../../../assets/img/star_icon.png').default}
                                    className="pfr_icon"
                                    alt="ParkingAeroPortFr"
                                />
                                5.0</Badge></li>
                            </ul>
                        </Card.Body>
                    </Card>
                </div>
            </div>
            <div className="slider-item">
            <div className='pfr_flex'>
                    <Card>
                    <div className='pfr_imgContent'>
                        <MyCard />
                        <div class="pfr_holderTxt d-flex justify-content-between align-items-center">
                            <span class="pfr_titleTxt">Professionnel</span>
                            <i class="fa fa-heart-o"></i>
                        </div>
                    </div> 
                        <Card.Body>
                            <h6 className="card-subtitle mb-2 text-muted">1,0km</h6>
                            <h5 className="card-title">Parkme 1 </h5>
                            <h5 className="card-title font-weight">75€</h5>
                            <ul className='pfr_flex'>
                                <li><Badge bg="secondary">Parking extérieur</Badge></li>
                                <li><Badge bg="secondary">Navette</Badge></li>
                                <li><Badge bg="secondary">
                                <img
                                    src={require('../../../assets/img/star_icon.png').default}
                                    className="pfr_icon"
                                    alt="ParkingAeroPortFr"
                                />
                                5.0</Badge></li>
                            </ul>
                        </Card.Body>
                    </Card>
                </div>
            </div>
            <div className="slider-item">
            <div className='pfr_flex'>
                    <Card>
                    <div className='pfr_imgContent'>
                    <MyCard />
                        <div class="pfr_holderTxt d-flex justify-content-between align-items-center">
                            <span class="pfr_titleTxt">Professionnel</span>
                            <i class="fa fa-heart-o"></i>
                        </div>
                    </div> 
                        <Card.Body>
                            <h6 className="card-subtitle mb-2 text-muted">1,0km</h6>
                            <h5 className="card-title">Parkme 1 </h5>
                            <h5 className="card-title font-weight">75€</h5>
                            <ul className='pfr_flex'>
                                <li><Badge bg="secondary">Parking extérieur</Badge></li>
                                <li><Badge bg="secondary">Navette</Badge></li>
                                <li><Badge bg="secondary">
                                <img
                                    src={require('../../../assets/img/star_icon.png').default}
                                    className="pfr_icon"
                                    alt="ParkingAeroPortFr"
                                />
                                5.0</Badge></li>
                            </ul>
                        </Card.Body>
                    </Card>
                </div>
            </div>
        </Slider>
    );
  }
}