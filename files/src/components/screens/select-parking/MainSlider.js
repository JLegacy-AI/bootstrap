import React, { Component } from "react";
import Slider from "react-slick";

import "slick-carousel/slick/slick.css"; 
import "slick-carousel/slick/slick-theme.css";

export default class NewSlider extends Component {
  render() {
    const settings = {
      dots: true,
      // infinite: true,
      // lazyLoad: 'onDemand',
    // centerMode: true,
    mobileFirst: true,
    infinite: true,
    //   arrow: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1
    };
    return (
        <Slider {...settings}>
          <div>
            <img
                src={require('../../../assets/img/mybooking_car.jpg').default}
                className="pfr_responsive"
                alt="ParkingAeroPortFr"
            />
          </div>
          <div>
            <img
                src={require('../../../assets/img/mybooking_car.jpg').default}
                className="pfr_responsive"
                alt="ParkingAeroPortFr"
            />
          </div>
          <div>
            <img
                src={require('../../../assets/img/mybooking_car.jpg').default}
                className="pfr_responsive"
                alt="ParkingAeroPortFr"
            />
          </div>
          <div>
            <img
                src={require('../../../assets/img/mybooking_car.jpg').default}
                className="pfr_responsive"
                alt="ParkingAeroPortFr"
            />
          </div>
        </Slider>
    );
  }
}