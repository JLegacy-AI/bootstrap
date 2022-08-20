import React from "react";
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
      {props.children}
    </Carousel>
  );
};

export default CustomCarousel;
