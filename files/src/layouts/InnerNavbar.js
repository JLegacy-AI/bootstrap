import React from "react";
import { Container, Navbar as HomeNavbar, Row, Col } from "react-bootstrap";
import ShareIcon from "../assets/img/share.png";
import { RWebShare } from "react-web-share";
import { IMG_ALT } from "../constants";

const InnerNavbar = (props) => {
  return (
    <React.Fragment>
      <HomeNavbar expand={false} className="pfr_innerNavbarNav">
        <Container fluid className="pfr_innerNav_container">
          <Row className="pfr_innerNavbarRow">
            <Col
              lg={6}
              md={6}
              sm={6}
              xs={6}
              className="d-flex justify-content-start"
            >
              <HomeNavbar.Brand
                href={props.backClick}
                className="d-flex justify-content-start align-items-center pfr_innerNavbarToggle"
              >
                <i className="fa-light fa-chevron-left"></i>
              </HomeNavbar.Brand>
              <HomeNavbar.Brand
                href={props.titleClick}
                className="d-flex pfr_innerNavbarLogo"
              >
                {props.title}
              </HomeNavbar.Brand>
            </Col>
            <Col
              lg={6}
              md={6}
              sm={6}
              xs={6}
              className="d-flex justify-content-end"
            >
              <HomeNavbar.Text className="d-flex pfr_innerNavbarRightShare">
                <RWebShare
                  data={{
                    text: props.shareText,
                    url: props.shareLink,
                    title: props.shareTitle,
                  }}
                >
                  <img src={ShareIcon} alt={IMG_ALT} />
                </RWebShare>
              </HomeNavbar.Text>
            </Col>
          </Row>
        </Container>
      </HomeNavbar>
    </React.Fragment>
  );
};
export default InnerNavbar;
