import React from "react";
import { Accordion, Button, Col, Container, Row } from "react-bootstrap";
import "./home-page.css";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";

const HomeProfessionalEvent = (props) => {
  const responsive = {
    superLargeDesktop: {
      breakpoint: { max: 4000, min: 3000 },
      items: 4,
    },
    desktop: {
      breakpoint: { max: 3000, min: 1024 },
      items: 4,
    },
    tablet: {
      breakpoint: { max: 1024, min: 464 },
      items: 2,
    },
    mobile: {
      breakpoint: { max: 464, min: 0 },
      items: 1,
    },
  };
  const ButtonGroup = ({ next, previous, goToSlide, ...rest }) => {
    const {
      carouselState: { currentSlide, totalItems, slidesToShow },
    } = rest;
    const disableState = totalItems - slidesToShow;
    return (
      <div className="d-flex justify-content-between mt-3 mb-3">
        <h2 className="clt-section-3-h2">Événement professionnel</h2>
        <div>
          <Button
            className={
              currentSlide === 0
                ? "disable clt-section-3-cards-arrowBtn me-2"
                : "clt-section-3-cards-arrowBtn me-2"
            }
            onClick={() => previous()}
          >
            <i class="fa-solid fa-chevron-left"></i>
          </Button>
          <Button
            className={
              currentSlide === disableState
                ? "disable clt-section-3-cards-arrowBtn"
                : "clt-section-3-cards-arrowBtn"
            }
            onClick={() => next()}
          >
            <i class="fa-solid fa-chevron-right"></i>
          </Button>
        </div>
      </div>
    );
  };
  return (
    <React.Fragment>
      <Container className="showMobile">
        <Row>
          <Col className="clt-section-3-h2-mt">
            <h2 className="clt-section-3-h2">Événement professionnel</h2>
          </Col>
        </Row>
      </Container>
      <Container fluid className="showMobile">
        <Row className="clt-section-3-row">
          <Col>
            <Container className="clt-section-3-row-container">
              <Row>
                <Col className="clt-section-3-row-col">
                  <div className="d-flex justify-content-start align-items-center clt-section-3">
                    <div>
                      <div
                        className="d-flex justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-main"
                        style={{
                          backgroundColor: `${props.eventType.background}`,
                          backgroundImage: `url(${props.eventType.img})`,
                        }}
                      >
                        <h2>Lieu pour votre événement professionnel</h2>
                      </div>
                    </div>
                    <div>
                      <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                        <h2>1</h2>
                        <div>
                          <span>Le château</span>
                          <p>
                          Ce lieu met à disposition une salle intérieur et extérieur pouvant accueillir jusqu’à 100 invités.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                        <h2>2</h2>
                        <div>
                          <span>Équipement</span>
                          <p>
                          Microphone, vidéoprojecteur, connexion internet pour mener à bien votre événement.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                        <h2>3</h2>
                        <div>
                          <span>Optionnel: Prestataire</span>
                          <p>
                          Traiteur, fleur, décoration, photographe… Une sélection de prestataire pouvant vous accompagner.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div
                        className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-end"
                        style={{
                          backgroundColor: `${props.eventType.background}`,
                        }}
                      >
                        <h2>
                          Retrouver toutes les informations sur la page du
                          château
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
                </Col>
              </Row>
            </Container>
          </Col>
        </Row>
      </Container>
      <Container className="clt-hr-mbl">
        <Row>
          <Col>
            <hr />
          </Col>
        </Row>
      </Container>
      <Container className="hideMobile">
        <Row>
          <Col>
            <div className="clt-section-3">
              <div className="d-flex flex-column-reverse">
                <Carousel
                  shouldResetAutoplay={false}
                  arrows={false}
                  renderButtonGroupOutside={true}
                  customButtonGroup={<ButtonGroup />}
                  responsive={responsive}
                  className="clt-section-3-cards-div"
                >
                  <div
                    className="d-flex justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-main"
                    style={{
                      backgroundColor: `${props.eventType.background}`,
                      backgroundImage: `url(${props.eventType.img})`,
                    }}
                  >
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
                  <div
                    className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-end"
                    style={{ backgroundColor: `${props.eventType.background}` }}
                  >
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
                </Carousel>
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
                  className="clt-section-4-img-desktop"
                  alt="ParkingAeroPortFr"
                />
                <h2>Planifiez votre événement idéal</h2>
                <img
                  src={
                    require(`../../../assets/img/home-section-4-mbl.jpg`)
                      .default
                  }
                  className="clt-section-4-img-mbl"
                  alt="ParkingAeroPortFr"
                />
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
                    Ask 1 - pro
                  </Accordion.Header>
                  <Accordion.Body className="clt-section-5-accordion-body">
                    <p>Answer 1 - pro</p>
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
              <div
                className="clt-section-6"
                style={{ backgroundColor: `${props.eventType.background}` }}
              >
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
export default HomeProfessionalEvent;
