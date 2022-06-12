import React, { useState, useEffect } from "react";
import { Button, Col, Container, Row } from "react-bootstrap";
import "./home-page.css";
import Img1 from "../../../assets/img/icon-card-1.png";
import Img2 from "../../../assets/img/icon-card-2.png";
import Img3 from "../../../assets/img/icon-card-3.png";
import Img4 from "../../../assets/img/icon-card-4.png";
import HomeMaraige from "./HomeMaraige";
import HomeProfessionalEvent from "./HomeProfessionalEvent";
import HomeAnniversary from "./HomeAnniversary";
import HomeReligiousEvent from "./HomeReligiousEvent";

const HomePage = () => {
  const [stickyBarTop, setstickyBarTop] = useState(undefined);
  const [eventType, setEventType] = useState({
    type: 1,
    color: "#08875c",
    background: "#24775b",
    img: Img1,
  });
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
        <Row className="clt-section-2-row stickyBar">
          <Col>
            <Container className="clt-section-2-row-container">
              <Row>
                <Col className="clt-section-2-row-col">
                  <div className="d-flex justify-content-start align-items-center clt-section-2">
                    <div
                      className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs"
                      onClick={() =>
                        setEventType({
                          type: 1,
                          color: "#08875c",
                          background: "#24775b",
                          img: Img1,
                        })
                      }
                    >
                      <img
                        src={
                          require(`../../../assets/img/${
                            eventType.type === 1
                              ? "icon-bar-1-active"
                              : "icon-bar-1"
                          }.png`).default
                        }
                        className=""
                        alt="ParkingAeroPortFr"
                      />
                      <h2
                        style={
                          eventType.type === 1
                            ? {
                                color: `${eventType.color}`,
                                borderBottom: `3px solid ${eventType.color}`,
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
                      onClick={() =>
                        setEventType({
                          type: 2,
                          color: "#015eea",
                          background: "#015eea",
                          img: Img2,
                        })
                      }
                    >
                      <img
                        src={
                          require(`../../../assets/img/${
                            eventType.type === 2
                              ? "icon-bar-2-active"
                              : "icon-bar-2"
                          }.png`).default
                        }
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
                      onClick={() =>
                        setEventType({
                          type: 3,
                          color: "#ad1eac",
                          background: "#c72fc3",
                          img: Img3,
                        })
                      }
                    >
                      <img
                        src={
                          require(`../../../assets/img/${
                            eventType.type === 3
                              ? "icon-bar-3-active"
                              : "icon-bar-3"
                          }.png`).default
                        }
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
                      onClick={() =>
                        setEventType({
                          type: 4,
                          color: "#b3846d",
                          background: "#d2997e",
                          img: Img4,
                        })
                      }
                    >
                      <img
                        src={
                          require(`../../../assets/img/${
                            eventType.type === 4
                              ? "icon-bar-4-active"
                              : "icon-bar-4"
                          }.png`).default
                        }
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
