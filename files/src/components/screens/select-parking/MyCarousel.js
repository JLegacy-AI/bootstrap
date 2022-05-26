import React, { Component } from 'react';
import Carousel from 'react-bootstrap/Carousel';
import sliderImage  from "../../../assets/img/mybooking_car.jpg";

class MyCarousel extends Component {
  render() {
    return (
      <>
        <Carousel interval={null}>
          <Carousel.Item>
            <img
              className="d-block w-100 card-image"
              src={sliderImage}
              alt="First slide"
            />
          </Carousel.Item>
          <Carousel.Item>
            <img
              className="d-block w-100 card-image"
              src={sliderImage}
              alt="Third slide"
            />
          </Carousel.Item>
          <Carousel.Item>
            <img
              className="d-block w-100 card-image"
              src={sliderImage}
              alt="Third slide"
            />
          </Carousel.Item>
        </Carousel>
      </>
    )
  }
}

export default MyCarousel;