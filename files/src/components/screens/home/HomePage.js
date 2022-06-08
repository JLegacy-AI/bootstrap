import React, { useState } from "react";
import { Accordion, Button, Col, Container, Row } from "react-bootstrap";
import "./home-page.css";

const HomePage = () => {
  return (
    <React.Fragment>
      <Container>
        <Row>
          <Col>
            <div className="clt-section-1-div d-flex flex-column align-items-start justify-content-start">
              <video autoPlay loop muted>
                <source
                  src={
                    require(`../../../assets/vid/home-background.mp4`).default
                  }
                  type="video/mp4"
                />
              </video>
              <div className="clt-section-1-div-inner">
                <h2 className="clt-section-1-h2">
                  Découvrez un château à 20min de Toulouse
                </h2>
                <Button
                  onClick={() => console.log("clicked!")}
                  className="clt-section-1-btn shadow-none"
                >
                  <span>Découvrir</span>
                </Button>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
      <Container fluid>
        <Row className="clt-section-2-row">
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
                      <h2>Mariage</h2>
                    </div>
                    <div className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs">
                      <img
                        src={
                          require(`../../../assets/img/icon-bar-2.png`).default
                        }
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2>Événement professionnel</h2>
                    </div>
                    <div className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs">
                      <img
                        src={
                          require(`../../../assets/img/icon-bar-3.png`).default
                        }
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2>Anniversaire</h2>
                    </div>
                    <div className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs">
                      <img
                        src={
                          require(`../../../assets/img/icon-bar-4.png`).default
                        }
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2>Événement religieux</h2>
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
              <h2>Mariage</h2>
              <div>
                <div className="d-flex flex-row justify-content-start align-items-center clt-section-3-cards-div">
                  <div className="d-flex justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-main">
                    <h2>Votre lieu de mariage</h2>
                  </div>
                  <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                    <h2>1</h2>
                    <div>
                      <span>Le château</span>
                      <p>
                        Ce lieu permet d'accueillir des cérémonies et des
                        réceptions jusqu’à 100 invités.
                      </p>
                    </div>
                  </div>
                  <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                    <h2>2</h2>
                    <div>
                      <span>Optionnel: Prestataire</span>
                      <p>Traiteur, fleur, décoration, photographe…</p>
                      <p>
                        Une sélection de prestataire pouvant vous accompagner
                      </p>
                    </div>
                  </div>
                  <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                    <h2>3</h2>
                    <div>
                      <span>Optionnel: Dortoir</span>
                      <p>
                        Faites dormir vous et vos proches directement dans le
                        château.
                      </p>
                    </div>
                  </div>
                  <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-end">
                    <h2>
                      Retrouver toutes les informations sur la page du château
                    </h2>
                    <Button
                      onClick={() => console.log("clicked!")}
                      className="clt-section-3-cards-button shadow-none"
                    >
                      <span>
                        En savoir plus{" "}
                        <i className="fa-solid fa-arrow-right"></i>
                      </span>
                    </Button>
                  </div>
                </div>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
      <Container>
        <Row>
          <Col>
            <div className="border_bottom_light">
              <div className="clt-section-4">
                <img
                  src={
                    require(`../../../assets/img/home-section-4.png`).default
                  }
                  className=""
                  alt="ParkingAeroPortFr"
                />
                <h2>Planifiez votre événement idéal</h2>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
      <Container>
        <Row>
          <Col>
            <div className="clt-section-5">
              <h2 className="clt-section-5-h2">
                Questions fréquentes pour votre événement
              </h2>
              <Accordion
                defaultActiveKey="0"
                className="clt-section-5-accordion"
              >
                <Accordion.Item
                  eventKey="0"
                  className="clt-section-5-accordion-item"
                >
                  <Accordion.Header className="clt-section-5-accordion-header">
                    Ask 1 - Wedding
                  </Accordion.Header>
                  <Accordion.Body className="clt-section-5-accordion-body">
                    <p>Answer 1 - Wedding</p>
                    <a href="#">Tous les sujets</a>
                  </Accordion.Body>
                </Accordion.Item>
                <Accordion.Item
                  eventKey="1"
                  className="clt-section-5-accordion-item"
                >
                  <Accordion.Header className="clt-section-5-accordion-header">
                    Ask 2 - Wedding
                  </Accordion.Header>
                  <Accordion.Body className="clt-section-5-accordion-body">
                    <p>Answer 2 - Wedding</p>
                    <a href="#">Tous les sujets</a>
                  </Accordion.Body>
                </Accordion.Item>
              </Accordion>
            </div>
          </Col>
        </Row>
      </Container>
      <Container>
        <Row>
          <Col>
            <div className="border_bottom_light">
              <div className="clt-section-6">
                <h2>Retrouvez plus de détail sur notre page dédiée</h2>
                <img
                  src={
                    require(`../../../assets/img/home-section-6.png`).default
                  }
                  className=""
                  alt="ParkingAeroPortFr"
                />
                <Button
                  onClick={() => console.log("clicked!")}
                  className="clt-section-6-btn shadow-none"
                >
                  <span>Continuer</span>
                </Button>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
      <Container>
        <Row>
          <Col>
            <div className="border_bottom_light">
              <div className="clt-section-7">
                <h2>Besoin d’aide ?</h2>
                <p>
                  Résolvez votre problème ici. Nous vous mettrons en relation
                  avec le support téléphonique si besoin.
                </p>
                <Button
                  onClick={() => console.log("clicked!")}
                  className="clt-section-7-btn shadow-none"
                >
                  <span>
                    Visitez le centre d’aide{" "}
                    <i className="fa-solid fa-arrow-right"></i>
                  </span>
                </Button>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
      <Container>
        <Row>
          <Col>
            <div className="">
              <div className="clt-section-8">
                <div className="d-flex flex-column mb-5">
                  <a href="#">Centre d’aide</a>
                  <a href="#">Connexion</a>
                  <a href="#">Créer un compte</a>
                </div>
                <div>
                  <p>@2022 Château la tournelle</p>
                  <p>
                    <a href="#">Conditions générales de ventes</a> -{" "}
                    <a href="#">Mentions légales</a>
                  </p>
                </div>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
    </React.Fragment>
  );
};
export default HomePage;
