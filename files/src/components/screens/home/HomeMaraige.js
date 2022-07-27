import React from "react";
import { Accordion, Button, Col, Container, Row } from "react-bootstrap";
import "./home-page.css";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";
import { homeSliderResponsive } from "../../../constants";
import HomeSection4Desktop from "../../../assets/img/home-section-4-maraige.png";
import HomeSection4Mobile from "../../../assets/img/home-section-4-mbl-maraige.jpg";
import HomeSection6 from "../../../assets/img/home-section-6.png";

const HomeMaraige = (props) => {
  const ButtonGroup = ({ next, previous, goToSlide, ...rest }) => {
    const {
      carouselState: { currentSlide, totalItems, slidesToShow },
    } = rest;
    const disableState = totalItems - slidesToShow;
    return (
      <div className="d-flex justify-content-between mt-3 mb-3">
        <h2 className="clt-section-3-h2">Mariage</h2>
        <div>
          <Button
            className={
              currentSlide === 0
                ? "disable clt-section-3-cards-arrowBtn me-2"
                : "clt-section-3-cards-arrowBtn me-2"
            }
            onClick={() => previous()}
          >
            <i className="fa-solid fa-chevron-left"></i>
          </Button>
          <Button
            className={
              currentSlide === disableState
                ? "disable clt-section-3-cards-arrowBtn"
                : "clt-section-3-cards-arrowBtn"
            }
            onClick={() => next()}
          >
            <i className="fa-solid fa-chevron-right"></i>
          </Button>
        </div>
      </div>
    );
  };
  return (
    <React.Fragment>
      <Container className="showMobile">
        <Row>
          <Col className="clt-section-3-h2-mt clt-section-row-col-pd">
            <h2 className="clt-section-3-h2">Mariage</h2>
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
                        <h2>Pour votre mariage</h2>
                      </div>
                    </div>
                    <div>
                      <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                        <h2>1</h2>
                        <div>
                          <span>Le château</span>
                          <p>
                            Célebrer une cérémonie et des réceptions de mariage jusqu’à 100 invités.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                        <h2>2</h2>
                        <div>
                          <span>Prestataire</span>
                          <p>
                            Sélectionner des prestataires si vous en avez besoin: Traiteur, fleur, décoration, photographe…
                          </p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                        <h2>3</h2>
                        <div>
                          <span>Équipement</span>
                          <p>
                            Table, chaise, matériel sonore, lumière, cuisine
                            disponible, pour mener à bien votre événement.
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
          <Col className="clt-section-row-col-pd">
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
                  responsive={homeSliderResponsive}
                  className="clt-section-3-cards-div"
                >
                  <div
                    className="d-flex justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-main"
                    style={{
                      backgroundColor: `${props.eventType.background}`,
                      backgroundImage: `url(${props.eventType.img})`,
                    }}
                  >
                    <h2>Pour votre mariage</h2>
                  </div>
                  <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                    <h2>1</h2>
                    <div>
                      <span>Le château</span>
                      <p>
                        Célebrer une cérémonie et des réceptions de mariage jusqu’à 100 invités.
                      </p>
                    </div>
                  </div>
                  <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                    <h2>2</h2>
                    <div>
                      <span>Prestataire</span>
                      <p>
                        Sélectionner des prestataires si vous en avez besoin: Traiteur, fleur, décoration, photographe… 
                      </p>
                    </div>
                  </div>
                  <div className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-secondary">
                    <h2>3</h2>
                    <div>
                      <span>Équipement</span>
                      <p>
                        Table, chaise, matériel sonore, lumière, cuisine
                        disponible, pour mener à bien votre événement.
                      </p>
                    </div>
                  </div>
                  <div
                    className="d-flex flex-column justify-content-start align-items-start clt-section-3-cards clt-section-3-cards-end"
                    style={{ backgroundColor: `${props.eventType.background}` }}
                  >
                    <h2>
                      Découvrez le château en détail
                    </h2>
                    <Button
                      onClick={() => console.log("clicked!")}
                      className="clt-section-3-cards-button shadow-none"
                    >
                      <span>
                        Continuer{" "}
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
          <Col className="clt-section-row-col-pd">
            <div className="border_bottom_light">
              <div className="clt-section-4">
                <img
                  src={HomeSection4Desktop}
                  className="clt-section-4-img-desktop"
                  alt="ParkingAeroPortFr"
                />
                <h2>Planifiez votre événement idéal</h2>
                <img
                  src={HomeSection4Mobile}
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
          <Col className="clt-section-row-col-pd">
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
                    Comment réserver pour un mariage ?
                  </Accordion.Header>
                  <Accordion.Body className="clt-section-5-accordion-body">
                    <p>Vous pouvez réserver depuis le site internet.</p>
                    <a href="#">Faire une réservation</a>
                  </Accordion.Body>
                </Accordion.Item>
                <Accordion.Item
                  eventKey="1"
                  className="clt-section-5-accordion-item"
                >
                  <Accordion.Header className="clt-section-5-accordion-header">
                    Quel budget faut-il prévoir ?
                  </Accordion.Header>
                  <Accordion.Body className="clt-section-5-accordion-body">
                    <p>
                      Les différentes prestations et espaces du château liée à
                      votre événement peuvent variés selon vos besoins. Effectué
                      une simulation depuis la page détail en ajoutant vos dates
                      et options pour voir le budget à prévoir.
                    </p>
                    <a href="#">Faire une simulation</a>
                  </Accordion.Body>
                </Accordion.Item>
                <Accordion.Item
                  eventKey="2"
                  className="clt-section-5-accordion-item"
                >
                  <Accordion.Header className="clt-section-5-accordion-header">
                    Pouvons-nous faire une visite ? et quand ?
                  </Accordion.Header>
                  <Accordion.Body className="clt-section-5-accordion-body">
                    <p>
                      Une visite du château est programmable depuis le site
                      internet.
                    </p>
                    <a href="#">Programmer une visite</a>
                  </Accordion.Body>
                </Accordion.Item>
                <Accordion.Item
                  eventKey="3"
                  className="clt-section-5-accordion-item"
                >
                  <Accordion.Header className="clt-section-5-accordion-header">
                    Avez-vous un dortoir ?
                  </Accordion.Header>
                  <Accordion.Body className="clt-section-5-accordion-body">
                    <p>
                      Vous pouvez sélectionné dans votre réservation l'option
                      "dortoir". Faites dormir jusqu'à 40 invités directement
                      sur place.
                    </p>
                    <a href="#">Tous les sujets</a>
                  </Accordion.Body>
                </Accordion.Item>
                <Accordion.Item
                  eventKey="4"
                  className="clt-section-5-accordion-item"
                >
                  <Accordion.Header className="clt-section-5-accordion-header">
                    Qu'est-ce que le centre d'aide ?
                  </Accordion.Header>
                  <Accordion.Body className="clt-section-5-accordion-body">
                    <p>
                      Le centre d'aide est une page du site internet permettant
                      de résoudre chacune de vos questions.
                    </p>
                    <a href="#">Visitez le centre d'aide</a>
                  </Accordion.Body>
                </Accordion.Item>
              </Accordion>
            </div>
          </Col>
        </Row>
      </Container>
      <Container>
        <Row>
          <Col className="clt-section-row-col-pd">
            <div className="border_bottom_light">
              <div
                className="clt-section-6"
                style={{ backgroundColor: `${props.eventType.background}` }}
              >
                <h2>Découvrez le château en détail</h2>
                <img src={HomeSection6} className="" alt="ParkingAeroPortFr" />
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
          <Col className="clt-section-row-col-pd">
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
          <Col className="clt-section-row-col-pd">
            <div className="">
              <div className="clt-section-8">
                <div className="d-flex flex-column mb-5">
                  <a href="#">Nous contacter</a>
                  <a href="#">Programmer une visite</a>
                  <a href="#">Réserver</a>
                  <a href="#">Centre d’aide</a>
                  <a href="#">Se connecter</a>
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
export default HomeMaraige;
