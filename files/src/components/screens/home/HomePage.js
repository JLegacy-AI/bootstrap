import React, { useState, useEffect } from "react";
import { Button, Col, Container, Row } from "react-bootstrap";
import "./home-page.css";
import MaraigeImg from "../../../assets/img/icon-card-1.png";
import AnniversaireImg from "../../../assets/img/icon-card-2.png";
import ProfesionnelImg from "../../../assets/img/icon-card-3.png";
import ReligieuxImg from "../../../assets/img/icon-card-4.png";
import IconBar1 from "../../../assets/img/icon-bar-1.png";
import IconBar1Active from "../../../assets/img/icon-bar-1-active.png";
import IconBar2 from "../../../assets/img/icon-bar-2.png";
import IconBar2Active from "../../../assets/img/icon-bar-2-active.png";
import IconBar3 from "../../../assets/img/icon-bar-3.png";
import IconBar3Active from "../../../assets/img/icon-bar-3-active.png";
import IconBar4 from "../../../assets/img/icon-bar-4.png";
import IconBar4Active from "../../../assets/img/icon-bar-4-active.png";
import VideoDesktop from "../../../assets/vid/home-background.mp4";
import VideoMobile from "../../../assets/vid/home-background.mp4";
import HomeMaraige from "./HomeMaraige";
import HomeProfessionalEvent from "./HomeProfessionalEvent";
import HomeAnniversary from "./HomeAnniversary";
import HomeReligiousEvent from "./HomeReligiousEvent";

const HomePage = () => {
  const maraigeData = {
    type: 1,
    color: "#08875c",
    background: "#24775b",
    img: MaraigeImg,
  };
  const anniversaireData = {
    type: 2,
    color: "#015eea",
    background: "#025adf",
    img: AnniversaireImg,
  };
  const profesionnelData = {
    type: 3,
    color: "#ad1eac",
    background: "#c72fc3",
    img: ProfesionnelImg,
  };
  const religieuxData = {
    type: 4,
    color: "#b3846d",
    background: "#d2997e",
    img: ReligieuxImg,
  };
  const [stickyBarTop, setstickyBarTop] = useState(undefined);
  const [eventType, setEventType] = useState(maraigeData);
  useEffect(() => {
    const stickyBarEl = document
      .querySelector(".stickyBar")
      .getBoundingClientRect();
    setstickyBarTop(stickyBarEl.top);
  }, []);

  useEffect(() => {
    if (!stickyBarTop) return;

    window.addEventListener("scroll", isSticky);
    return () => {
      window.removeEventListener("scroll", isSticky);
    };
  }, [stickyBarTop]);

  const isSticky = (e) => {
    const stickyBarEl = document.querySelector(".stickyBar");
    const scrollTop = window.scrollY;
    if (scrollTop >= stickyBarTop - 10) {
      stickyBarEl.classList.add("is-sticky");
    } else {
      stickyBarEl.classList.remove("is-sticky");
    }
  };
  return (
    <React.Fragment>
      <Container>
        <Row>
          <Col className="clt-section-row-col-pd">
            <div className="clt-section-1-div d-flex flex-column align-items-start justify-content-start">
              <video autoPlay loop muted className="hideMobile">
                <source src={VideoDesktop} type="video/mp4" />
              </video>
              <video autoPlay loop muted className="showMobile">
                <source src={VideoMobile} type="video/mp4" />
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
        <Row className="clt-section-2-row stickyBar">
          <Col>
            <Container className="clt-section-2-row-container">
              <Row>
                <Col className="clt-section-2-row-col">
                  <div className="d-flex justify-content-start align-items-center clt-section-2">
                    <div
                      className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs"
                      onClick={() => setEventType(maraigeData)}
                    >
                      <img
                        src={eventType.type === 1 ? IconBar1Active : IconBar1}
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2
                        style={
                          eventType.type === 1
                            ? {
                                color: `${eventType.color}`,
                                borderBottom: `2px solid ${eventType.color}`,
                              }
                            : {
                                color: `#7f7f7f`,
                                borderBottom: `2px solid transparent`,
                              }
                        }
                      >
                        Mariage
                      </h2>
                    </div>
                    <div
                      className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs"
                      onClick={() => setEventType(anniversaireData)}
                    >
                      <img
                        src={eventType.type === 2 ? IconBar2Active : IconBar2}
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2
                        style={
                          eventType.type === 2
                            ? {
                                color: `${eventType.color}`,
                                borderBottom: `2px solid ${eventType.color}`,
                              }
                            : {
                                color: `#7f7f7f`,
                                borderBottom: `2px solid transparent`,
                              }
                        }
                      >
                        Événement professionnel
                      </h2>
                    </div>
                    <div
                      className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs"
                      onClick={() => setEventType(profesionnelData)}
                    >
                      <img
                        src={eventType.type === 3 ? IconBar3Active : IconBar3}
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2
                        style={
                          eventType.type === 3
                            ? {
                                color: `${eventType.color}`,
                                borderBottom: `2px solid ${eventType.color}`,
                              }
                            : {
                                color: `#7f7f7f`,
                                borderBottom: `2px solid transparent`,
                              }
                        }
                      >
                        Anniversaire
                      </h2>
                    </div>
                    <div
                      className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs"
                      onClick={() => setEventType(religieuxData)}
                    >
                      <img
                        src={eventType.type === 4 ? IconBar4Active : IconBar4}
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2
                        style={
                          eventType.type === 4
                            ? {
                                color: `${eventType.color}`,
                                borderBottom: `2px solid ${eventType.color}`,
                              }
                            : {
                                color: `#7f7f7f`,
                                borderBottom: `2px solid transparent`,
                              }
                        }
                      >
                        Événement religieux
                      </h2>
                    </div>
                  </div>
                </Col>
              </Row>
            </Container>
          </Col>
        </Row>
      </Container>
      {eventType.type === 1 && <HomeMaraige eventType={eventType} />}
      {eventType.type === 2 && <HomeProfessionalEvent eventType={eventType} />}
      {eventType.type === 3 && <HomeAnniversary eventType={eventType} />}
      {eventType.type === 4 && <HomeReligiousEvent eventType={eventType} />}
    </React.Fragment>
  );
};
export default HomePage;
