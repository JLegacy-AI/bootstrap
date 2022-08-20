import React from "react";
import { Button, Col, Container, Row } from "react-bootstrap";
import CustomCarousel from "../../../reusable/CustomCarousel";

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
                <i className="fa-light fa-chevron-left"></i>
              </Button>
              <span className="d-flex">{props.galleryHeaderTitle}</span>
            </Col>
          </Row>
          <Row className="clt-gallery-container-body">
            <Col
              lg={{ span: 8, offset: 2 }}
              md={12}
              sm={12}
              xs={12}
              className="clt-detail-slider-maindiv"
            >
              <CustomCarousel
                responsive={props.responsive}
                mainGallery={props.fullScreenGallery}
                openGallery={props.setIsGalleryOpen}
                isFullScreenGallery={props.isFullScreenGallery}
                swipeable={true}
                draggable={true}
                showDots={false}
                arrows={props.isBrowser}
                infinite={true}
                shouldResetAutoplay={false}
                autoPlay={false}
                className="clt-detail-slider-gallery"
                classNameSlider="clt-detail-slider-gallery-imgdiv"
              />
            </Col>
          </Row>
          <Row className="clt-gallery-container-footer">
            <Col>
              <span className="">{props.galleryFooterTitle}</span>
            </Col>
          </Row>
        </Col>
      </Row>
    </Container>
  );
};

export default DetailGallery;
