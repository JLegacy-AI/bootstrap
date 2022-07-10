import React from "react";
import { Col, Container, Row } from "react-bootstrap";
import { maraigeData } from "../../constants";
import IconBar1 from "../../assets/img/icon-bar-1.png";
import IconBar1Active from "../../assets/img/icon-bar-1-active.png";
import IconBar2 from "../../assets/img/icon-bar-2.png";
import IconBar2Active from "../../assets/img/icon-bar-2-active.png";
import IconBar3 from "../../assets/img/icon-bar-3.png";
import IconBar3Active from "../../assets/img/icon-bar-3-active.png";
import IconBar4 from "../../assets/img/icon-bar-4.png";
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
                    className="d-flex flex-column justify-content-center align-items-center clt-section-2-divs"
                    onClick={props.setEventTypeMaraige}
                  >
                    <img
                      src={
                        props.eventType.type === 1 ? IconBar1Active : IconBar1
                      }
                      className=""
                      alt="ParkingAeroPortFr"
                    />
                    <h2
                      style={
                        props.eventType.type === 1
                          ? {
                              color: `${props.eventType.color}`,
                              borderBottom: `2px solid ${props.eventType.color}`,
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
                    onClick={props.setEventTypeAnniversaire}
                  >
                    <img
                      src={
                        props.eventType.type === 2 ? IconBar2Active : IconBar2
                      }
                      className=""
                      alt="ParkingAeroPortFr"
                    />
                    <h2
                      style={
                        props.eventType.type === 2
                          ? {
                              color: `${props.eventType.color}`,
                              borderBottom: `2px solid ${props.eventType.color}`,
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
                    onClick={props.setEventTypeProfesionnel}
                  >
                    <img
                      src={
                        props.eventType.type === 3 ? IconBar3Active : IconBar3
                      }
                      className=""
                      alt="ParkingAeroPortFr"
                    />
                    <h2
                      style={
                        props.eventType.type === 3
                          ? {
                              color: `${props.eventType.color}`,
                              borderBottom: `2px solid ${props.eventType.color}`,
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
                    onClick={props.setEventTypeReligieux}
                  >
                    <img
                      src={
                        props.eventType.type === 4 ? IconBar4Active : IconBar4
                      }
                      className=""
                      alt="ParkingAeroPortFr"
                    />
                    <h2
                      style={
                        props.eventType.type === 4
                          ? {
                              color: `${props.eventType.color}`,
                              borderBottom: `2px solid ${props.eventType.color}`,
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
  );
};

export default EventsNavbar;
