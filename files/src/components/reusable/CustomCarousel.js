import React from "react";
import { Col, Modal, Row } from "react-bootstrap";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";
const CustomCarousel = (props) => {
  return (
    <Carousel
      swipeable={props.swipeable}
      draggable={props.draggable}
      showDots={props.showDots}
      responsive={props.responsive}
      arrows={props.arrows}
      infinite={props.infinite}
      shouldResetAutoplay={props.shouldResetAutoplay}
      autoPlay={props.autoPlay}
      renderButtonGroupOutside={props.renderButtonGroupOutside}
      customButtonGroup={props.customButtonGroup}
      className={props.className}
    >
      {props.mainGallery.map((value, index) => {
        return (
          <div
            key={index}
            className={props.classNameSlider}
            style={{
              backgroundImage: `url(${value.img})`,
            }}
            onClick={props.openGallery}
          >
            <span>{value.text}</span>
          </div>
        );
      })}
    </Carousel>
  );
};

export default CustomCarousel;
