import React, { useState } from "react";
import { Container, Navbar as HomeNavbar, Row, Col } from "react-bootstrap";
import AuthModal from "../components/screens/auth/AuthModal";
import MenuBlack from "../assets/img/menu_black.png";
import { IMG_ALT } from "../constants";

const Navbar = () => {
  const [isLoginModal, setIsLoginModal] = useState(false);
  const [userToken, setUserToken] = useState(null);

  const toggleAuthModal = () => {
    setIsLoginModal((prevState) => !prevState);
    setUserToken("null");
  };
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
              <HomeNavbar.Toggle
                aria-controls="offcanvasNavbar"
                className="pfr_navbarToggle"
              >
                <img src={MenuBlack} className="" alt={IMG_ALT} />
              </HomeNavbar.Toggle>
              <HomeNavbar.Brand href="/" className="d-flex pfr_navbarLogo">
                Château la tournelle
              </HomeNavbar.Brand>
            </Col>
            <Col
              lg={6}
              md={6}
              sm={6}
              xs={6}
              className="d-flex justify-content-end"
            >
              <HomeNavbar.Text className="d-flex pfr_navbarRightTxt">
                {userToken ? (
                  <span>
                    Name<i className="fas fa-chevron-down"></i>
                  </span>
                ) : (
                  <span onClick={toggleAuthModal}>Connexion</span>
                )}
              </HomeNavbar.Text>
            </Col>
          </Row>
        </Container>
      </HomeNavbar>
      <AuthModal
        toggleAuthModal={toggleAuthModal}
        isLoginModal={isLoginModal}
      />
    </React.Fragment>
  );
};
export default Navbar;
