import React, { useState, useEffect } from "react";
import { Button, Col, Container, Row } from "react-bootstrap";
import "./home-page.css";
import VideoDesktop from "../../../assets/vid/home-background.mp4";
import VideoMobile from "../../../assets/vid/home-background.mp4";
import HomeMaraige from "./HomeMaraige";
import HomeProfessionalEvent from "./HomeProfessionalEvent";
import HomeAnniversary from "./HomeAnniversary";
import HomeReligiousEvent from "./HomeReligiousEvent";
import {
  anniversaireData,
  maraigeData,
  profesionnelData,
  religieuxData,
} from "../../../constants";
import EventsNavbar from "../../reusable/EventsNavbar";
import { useHistory } from "react-router-dom";

const HomePage = () => {
  const history = useHistory();
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
                  onClick={() =>
                    history.push(`/detail/${maraigeData.detail_page}`)
                  }
                  className="clt-section-1-btn shadow-none"
                >
                  <span>Découvrir</span>
                </Button>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
      <EventsNavbar
        eventType={eventType}
        setEventTypeMaraige={() => setEventType(maraigeData)}
        setEventTypeAnniversaire={() => setEventType(anniversaireData)}
        setEventTypeReligieux={() => setEventType(religieuxData)}
        setEventTypeProfesionnel={() => setEventType(profesionnelData)}
      />
      {eventType.type === 1 && <HomeMaraige eventType={eventType} />}
      {eventType.type === 2 && <HomeProfessionalEvent eventType={eventType} />}
      {eventType.type === 3 && <HomeAnniversary eventType={eventType} />}
      {eventType.type === 4 && <HomeReligiousEvent eventType={eventType} />}
    </React.Fragment>
  );
};
export default HomePage;
