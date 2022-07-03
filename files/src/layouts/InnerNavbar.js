import React from "react";
import { Container, Navbar as HomeNavbar, Row, Col } from "react-bootstrap";
import ShareIcon from "../assets/img/share.png";

const InnerNavbar = (props) => {
  return (
    <React.Fragment>
      <HomeNavbar expand={false} className="pfr_navbarNav">
        <Container fluid className="pfr_innerNav_container">
          <Row className="pfr_navbarRow">
            <Col
              lg={6}
              md={6}
              sm={6}
              xs={6}
              className="d-flex justify-content-start"
            >
              <HomeNavbar.Brand
                href={props.backClick}
                className="d-flex justify-content-start align-items-center pfr_navbarToggle"
              >
                <i className="fa-light fa-chevron-left"></i>
              </HomeNavbar.Brand>
              <HomeNavbar.Brand
                href={props.titleClick}
                className="d-flex pfr_navbarLogo"
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
              <HomeNavbar.Text className="d-flex pfr_navbarRightShare">
                <img src={ShareIcon} />
              </HomeNavbar.Text>
            </Col>
          </Row>
        </Container>
      </HomeNavbar>
    </React.Fragment>
  );
};
export default InnerNavbar;
