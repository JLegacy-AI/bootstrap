import React, { useState } from "react";
import { Button, Col, Container, Row } from "react-bootstrap";
import "./home-page.css";
const HomePage = () => {
  return (
    <React.Fragment>
      <Container>
        <Row>
          <Col>
            <div className="clt-section-1-div d-flex flex-column align-items-start justify-content-center">
              <video autoPlay loop muted>
                <source
                  src={
                    require(`../../../assets/vid/home-background.mp4`).default
                  }
                  type="video/mp4"
                />
              </video>
              <div className="">
                <h2 className="clt-section-1-h2">
                  Some text here according to design
                </h2>
                <Button
                  onClick={() => console.log("clicked!")}
                  className="clt-section-1-btn shadow-none"
                >
                  <span>Discover</span>
                </Button>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
      <Container fluid>
        <Row>
          <Col>
            <Container>
              <Row>
                <Col>
                  <div className="d-flex justify-content-start align-items-center clt-section-2">
                    <div className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs">
                      <img
                        src={
                          require(`../../../assets/img/icon-bar-1.png`).default
                        }
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2>Marraige</h2>
                    </div>
                    <div className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs">
                      <img
                        src={
                          require(`../../../assets/img/icon-bar-2.png`).default
                        }
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2>Environemt professional</h2>
                    </div>
                    <div className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs">
                      <img
                        src={
                          require(`../../../assets/img/icon-bar-3.png`).default
                        }
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2>Anniverse</h2>
                    </div>
                    <div className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs">
                      <img
                        src={
                          require(`../../../assets/img/icon-bar-4.png`).default
                        }
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2>Envent religion</h2>
                    </div>
                  </div>
                </Col>
              </Row>
            </Container>
          </Col>
        </Row>
      </Container>
      <Container>
        <Row>
          <Col>
            <div className="clt-section-3">
              <h2>Marraige</h2>
              <div className="d-flex flex-row justify-content-start align-items-center clt-section-3-cards-div">
                <div className="d-flex justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-main">
                  <h2>Votre lieu de maraige</h2>
                </div>
                <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                  <h2>1</h2>
                  <div>
                    <span>some heading</span>
                    <p>
                      SOme text here some text here some text here some text
                      here
                    </p>
                  </div>
                </div>
                <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                  <h2>2</h2>
                  <div>
                    <span>some heading</span>
                    <p>
                      SOme text here some text here some text here some text
                      here
                    </p>
                  </div>
                </div>
                <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                  <h2>3</h2>
                  <div>
                    <span>some heading</span>
                    <p>
                      SOme text here some text here some text here some text
                      here
                    </p>
                  </div>
                </div>
                <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-end">
                  <h2>Some text here some text here some text</h2>
                  <Button
                    onClick={() => console.log("clicked!")}
                    className="clt-section-3-cards-button shadow-none"
                  >
                    <span>En savor plus <i className="fa-solid fa-arrow-right"></i></span>
                  </Button>
                </div>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
      <Container>
        <Row>
          <Col>
            <div className="clt-section-4">
              <h2>Planifiez votre maraige ideal</h2>
            </div>
          </Col>
        </Row>
      </Container>
    </React.Fragment>
  );
};
export default HomePage;
