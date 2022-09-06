import React from "react";
import { Col, Container, Row } from "react-bootstrap";
import { IMG_ALT } from "../../constants";
import IconBar1Active from "../../assets/img/icon-bar-1-active.png";
import IconBar2Active from "../../assets/img/icon-bar-2-active.png";
import IconBar3Active from "../../assets/img/icon-bar-3-active.png";
import IconBar4Active from "../../assets/img/icon-bar-4-active.png";

const EventsNavbar = (props) => {
  return (
    <Container fluid>
      <Row className="clt-section-2-row stickyBar">
        <Col>
          <Container className="clt-section-2-row-container">
            <Row>
              <Col className="clt-section-2-row-col">
                <div className="d-flex justify-content-start align-items-center clt-section-2">
                  <div
                    className={`d-flex flex-column justify-content-center align-items-center clt-section-2-divs ${
                      props.eventType.type === 1 && "active"
                    }`}
                    onClick={props.setEventTypeMaraige}
                  >
                    <img
                      src={IconBar1Active}
                      style={
                        props.eventType.type === 1
                          ? { color: `${props.eventType.color}` }
                          : { color: `#8c8c8c` }
                      }
                      className=""
                      alt={IMG_ALT}
                    />
                    <h2
                      style={
                        props.eventType.type === 1
                          ? {
                              color: `${props.eventType.color}`,
                              borderBottom: `2px solid ${props.eventType.color}`,
                            }
                          : {
                              color: `#8c8c8c`,
                              borderBottom: `2px solid transparent`,
                            }
                      }
                    >
                      Mariage
                    </h2>
                  </div>
                  <div
                    className={`d-flex flex-column justify-content-center align-items-center clt-section-2-divs ${
                      props.eventType.type === 2 && "active"
                    }`}
                    onClick={props.setEventTypeProfesionnel}
                  >
                    <img
                      src={IconBar2Active}
                      style={
                        props.eventType.type === 2
                          ? { color: `${props.eventType.color}` }
                          : { color: `#8c8c8c` }
                      }
                      className=""
                      alt={IMG_ALT}
                    />
                    <h2
                      style={
                        props.eventType.type === 2
                          ? {
                              color: `${props.eventType.color}`,
                              borderBottom: `2px solid ${props.eventType.color}`,
                            }
                          : {
                              color: `#8c8c8c`,
                              borderBottom: `2px solid transparent`,
                            }
                      }
                    >
                      Événement professionnel
                    </h2>
                  </div>
                  <div
                    className={`d-flex flex-column justify-content-center align-items-center clt-section-2-divs ${
                      props.eventType.type === 3 && "active"
                    }`}
                    onClick={props.setEventTypeAnniversaire}
                  >
                    <img
                      src={IconBar3Active}
                      style={
                        props.eventType.type === 3
                          ? { color: `${props.eventType.color}` }
                          : { color: `#8c8c8c` }
                      }
                      className=""
                      alt={IMG_ALT}
                    />
                    <h2
                      style={
                        props.eventType.type === 3
                          ? {
                              color: `${props.eventType.color}`,
                              borderBottom: `2px solid ${props.eventType.color}`,
                            }
                          : {
                              color: `#8c8c8c`,
                              borderBottom: `2px solid transparent`,
                            }
                      }
                    >
                      Anniversaire
                    </h2>
                  </div>
                  <div
                    className={`d-flex flex-column justify-content-center align-items-center clt-section-2-divs ${
                      props.eventType.type === 4 && "active"
                    }`}
                    onClick={props.setEventTypeReligieux}
                  >
                    <img
                      src={IconBar4Active}
                      style={
                        props.eventType.type === 4
                          ? { color: `${props.eventType.color}` }
                          : { color: `#8c8c8c` }
                      }
                      className=""
                      alt={IMG_ALT}
                    />
                    <h2
                      style={
                        props.eventType.type === 4
                          ? {
                              color: `${props.eventType.color}`,
                              borderBottom: `2px solid ${props.eventType.color}`,
                            }
                          : {
                              color: `#8c8c8c`,
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
  );
};

export default EventsNavbar;
