import React from "react";
import { Button, Col, Container, Modal, Row } from "react-bootstrap";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";

const DetailGallery = (props) => {
  return (
    <Container fluid className="clt-gallery-container">
      <Row>
        <Col>
          <Row className="clt-gallery-container-header">
            <Col className="clt-gallery-container-header-col d-flex justify-content-start align-items-center">
              <Button
                className="d-flex justify-content-start align-items-center pfr_navbarToggle"
                onClick={props.setIsGalleryOpen}
              >
                <i className="fa-light fa-times"></i>
              </Button>
              <span className="d-flex">1.1</span>
            </Col>
          </Row>
          <Row className="clt-gallery-container-body">
            <Col
              lg={{ span: 8, offset: 2 }}
              md={{ span: 8, offset: 2 }}
              sm={12}
              xs={12}
              className="clt-detail-slider-maindiv"
            >
              <Carousel
                swipeable={true}
                draggable={true}
                showDots={false}
                responsive={props.responsive}
                infinite={true}
                shouldResetAutoplay={false}
                autoPlay={false}
                arrows={props.isBrowser}
                className="clt-detail-slider-main"
              >
                {props.fullScreenGallery &&
                  props.fullScreenGallery.map((value, index) => {
                    return (
                      <div
                        key={index}
                        className="clt-detail-slider-main-imgdiv"
                        style={{
                          backgroundImage: `url(${value.img})`,
                        }}
                      >
                        <span>{value.text}</span>
                      </div>
                    );
                  })}
              </Carousel>
            </Col>
          </Row>
          <Row className="clt-gallery-container-footer">
            <Col>
              <span className="">1.1</span>
            </Col>
          </Row>
        </Col>
      </Row>
    </Container>
  );
};

export default DetailGallery;
