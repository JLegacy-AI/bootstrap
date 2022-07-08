import React, { useState, useEffect } from "react";
import { Button, Col, Container, Form, Row } from "react-bootstrap";
import "./detail-page.css";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";
import DetailIcon1 from "../../../assets/img/detail_icon_1.png";
import DetailIcon2 from "../../../assets/img/detail_icon_2.png";
import DetailIcon3 from "../../../assets/img/detail_icon_3.png";
import DetailIcon4 from "../../../assets/img/detail_icon_4.png";
import DetailSlider_1_1 from "../../../assets/img/detail_slider_1_1.png";
import DetailSlider_1_2 from "../../../assets/img/detail_slider_1_2.png";
import DetailSlider_1_3 from "../../../assets/img/detail_slider_1_3.png";
import DetailSlider_1_4 from "../../../assets/img/detail_slider_1_4.png";
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
import InnerNavbar from "../../../layouts/InnerNavbar";

const DetailPage = () => {
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
  const [formType, setFormType] = useState("contact");
  const [isGalleryOpen, setIsGalleryOpen] = useState(false);
  const [fullScreenGallery, setFullScreenGallery] = useState([]);
  const [mainGallery, setMainGallery] = useState([
    {
      img: DetailSlider_1_1,
      text: "1/4",
    },
    {
      img: DetailSlider_1_2,
      text: "2/4",
    },
    {
      img: DetailSlider_1_3,
      text: "3/4",
    },
    {
      img: DetailSlider_1_4,
      text: "4/4",
    },
  ]);
  const [secondaryGallery, setSecondaryGallery] = useState([
    {
      img: DetailSlider_1_1,
      text: "1/4",
    },
    {
      img: DetailSlider_1_2,
      text: "2/4",
    },
    {
      img: DetailSlider_1_3,
      text: "3/4",
    },
    {
      img: DetailSlider_1_4,
      text: "4/4",
    },
  ]);
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
  const responsive = {
    desktop: {
      breakpoint: { max: 3000, min: 1024 },
      items: 1,
      slidesToSlide: 1, // optional, default to 1.
    },
    tablet: {
      breakpoint: { max: 1024, min: 464 },
      items: 1,
      slidesToSlide: 1, // optional, default to 1.
    },
    mobile: {
      breakpoint: { max: 464, min: 0 },
      items: 1,
      slidesToSlide: 1,
    },
  };
  const responsive2 = {
    superLargeDesktop: {
      breakpoint: { max: 4000, min: 3000 },
      items: 2.1,
      slidesToSlide: 0.5,
    },
    desktop: {
      breakpoint: { max: 3000, min: 1024 },
      items: 2.1,
      slidesToSlide: 0.5,
    },
    tablet: {
      breakpoint: { max: 1024, min: 464 },
      items: 2,
      slidesToSlide: 1,
    },
    mobile: {
      breakpoint: { max: 464, min: 0 },
      items: 1,
      slidesToSlide: 1,
    },
  };
  const openGallery = (type) => {
    if (type === "main") {
      setIsGalleryOpen(true);
      setFullScreenGallery(mainGallery);
    }
    if (type === "secondary") {
      setIsGalleryOpen(true);
      setFullScreenGallery(secondaryGallery);
    }
  };
  const ButtonGroup = ({ next, previous, goToSlide, ...rest }) => {
    const {
      carouselState: { currentSlide, totalItems, slidesToShow },
    } = rest;
    const disableState = totalItems - slidesToShow;
    return (
      <div className="d-flex justify-content-between clt-detail-left-section-2-header">
        <h2 className="clt-detail-left-section-2-h2">Title section 2</h2>
        <div>
          <Button
            className={
              currentSlide === 0
                ? "disable clt-detail-left-section-2-cards-arrowBtn me-2"
                : "clt-detail-left-section-2-cards-arrowBtn me-2"
            }
            onClick={() => previous()}
          >
            <i className="fa-solid fa-chevron-left"></i>
          </Button>
          <Button
            className={
              currentSlide === disableState
                ? "disable clt-detail-left-section-2-cards-arrowBtn"
                : "clt-detail-left-section-2-cards-arrowBtn"
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
      <InnerNavbar title="Title Header" backClick="/" titleClick="/detail" />
      <Container>
        <Row>
          <Col className="clt-detail-section-1">
            <h2>Title</h2>
            <div className="clt-detail-section-1-subdiv d-flex justify-content-start align-items-center">
              <img src={DetailIcon1} />
              <span>Sub title</span>
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
      <Container>
        <Row className="clt-detail-sections-div">
          <Col lg={8} xs={12}>
            <Row>
              <Col className="clt-detail-slider-maindiv">
                <Carousel
                  swipeable={true}
                  draggable={true}
                  showDots={false}
                  responsive={responsive}
                  // ssr={true} // means to render carousel on server-side.
                  infinite={true}
                  shouldResetAutoplay={false}
                  autoPlay={false}
                  // autoPlaySpeed={1000}
                  // keyBoardControl={true}
                  // customTransition="all 5"
                  // transitionDuration={1500}
                  // containerClass="carousel-container"
                  // removeArrowOnDeviceType={["tablet", "mobile"]}
                  // deviceType={this.props.deviceType}
                  // dotListClass="custom-dot-list-style"
                  // itemClass="carousel-item-padding-40-px"
                  className="clt-detail-slider-main"
                >
                  {mainGallery.map((value, index) => {
                    return (
                      <div
                        key={index}
                        className="clt-detail-slider-main-imgdiv"
                        style={{
                          backgroundImage: `url(${value.img})`,
                        }}
                        onClick={() => openGallery("main")}
                      >
                        <span>{value.text}</span>
                      </div>
                    );
                  })}
                </Carousel>
              </Col>
            </Row>
            <Row>
              <Col className="clt-section-hr-pd">
                <hr className="p-0 m-0 clt-hr" />
              </Col>
            </Row>
            <Row>
              <Col className="clt-detail-left-section-1">
                <h2 className="clt-detail-left-section-1-heading">
                  Title Section 1
                </h2>
                <div className="clt-detail-left-section-subdiv-1">
                  <div className="d-flex justify-content-start align-items-center clt-detail-left-section-subdiv-1-div">
                    <div className="clt-detail-left-section-subdiv-1-div-img">
                      <img src={DetailIcon2} />
                    </div>
                    <div className="d-flex flex-column justify-content-center align-items-start clt-detail-left-section-subdiv-1-div-txt">
                      <h3>Text 1</h3>
                      <p>Subtext 1</p>
                    </div>
                  </div>
                  <div className="d-flex justify-content-start align-items-center clt-detail-left-section-subdiv-1-div">
                    <div className="clt-detail-left-section-subdiv-1-div-img">
                      <img src={DetailIcon3} />
                    </div>
                    <div className="d-flex flex-column justify-content-center align-items-start clt-detail-left-section-subdiv-1-div-txt">
                      <h3>Text 1</h3>
                      <p>Subtext 1</p>
                    </div>
                  </div>
                </div>
                <div className="d-flex justify-content-start align-items-center clt-detail-left-section-subdiv-2">
                  <span>subtext</span>
                  <span>subtext</span>
                  <span>subtext</span>
                  <span>subtext</span>
                </div>
              </Col>
            </Row>
            <Row>
              <Col className="clt-section-hr-pd">
                <hr className="p-0 m-0 clt-hr" />
              </Col>
            </Row>
            <Row>
              <Col>
                <div className="clt-detail-left-section-2">
                  <div className="d-flex flex-column-reverse">
                    <Carousel
                      shouldResetAutoplay={false}
                      arrows={false}
                      renderButtonGroupOutside={true}
                      customButtonGroup={<ButtonGroup />}
                      responsive={responsive2}
                      className="clt-detail-left-section-2-cards-div"
                    >
                      {secondaryGallery.map((value, index) => {
                        return (
                          <div
                            key={index}
                            className="d-flex justify-content-start align-items-start clt-detail-left-section-2-cards clt-detail-left-section-2-cards-main"
                            style={{
                              backgroundImage: `url(${value.img})`,
                            }}
                            onClick={() => openGallery("secondary")}
                          >
                            <span>{value.text}</span>
                          </div>
                        );
                      })}
                    </Carousel>
                  </div>
                </div>
              </Col>
            </Row>
            <Row>
              <Col className="clt-section-hr-pd">
                <hr className="p-0 m-0 clt-hr" />
              </Col>
            </Row>
            <Row>
              <Col>
                <div className="clt-detail-left-section-3">
                  <div className="d-flex justify-content-start align-items-center clt-detail-left-section-3-subdiv">
                    <img src={DetailIcon4} />
                    <h2>Title Section 3</h2>
                  </div>
                  <p>Text section 3</p>
                </div>
              </Col>
            </Row>
          </Col>
          <Col lg={4} xs={12} className="">
            <div className="clt-detail-right-main">
              <div className="clt-detail-right-toggle">
                <span
                  className={
                    formType === "reserve"
                      ? "clt-detail-right-toggle-tab active"
                      : "clt-detail-right-toggle-tab"
                  }
                  onClick={() => setFormType("reserve")}
                >
                  Reserve
                </span>
                <span
                  className={
                    formType === "contact"
                      ? "clt-detail-right-toggle-tab active"
                      : "clt-detail-right-toggle-tab"
                  }
                  onClick={() => setFormType("contact")}
                >
                  Contact Us
                </span>
              </div>
              {formType === "contact" && (
                <div>
                  <div className="clt-detail-right-head-div">
                    <h2 className="clt-detail-right-head-heading">Wedding</h2>
                    <div className="clt-detail-right-head-sub-div">
                      <span>Title</span>/ subtitle
                    </div>
                  </div>
                  <div className="clt-detail-right-form-contact">
                    <div className="clt_inputFloatDiv">
                      <Form.Floating className="clt_inputFloat">
                        <Form.Control
                          id="floatingInput1"
                          type="text"
                          placeholder="Name"
                          onChange={(event) => console.log(event.target.value)}
                        />
                        <label htmlFor="floatingInput1">Name</label>
                      </Form.Floating>
                    </div>
                    <div className="clt_inputFloatDiv">
                      <Form.Floating className="clt_inputFloat">
                        <Form.Control
                          id="floatingInput1"
                          type="email"
                          placeholder="Email"
                          onChange={(event) => console.log(event.target.value)}
                        />
                        <label htmlFor="floatingInput1">Email</label>
                      </Form.Floating>
                    </div>
                    <div className="clt_inputFloatDiv">
                      <Form.Floating className="clt_inputFloat">
                        <Form.Control
                          id="floatingInput1"
                          type="number"
                          placeholder="Phone"
                          onChange={(event) => console.log(event.target.value)}
                        />
                        <label htmlFor="floatingInput1">Phone</label>
                      </Form.Floating>
                    </div>
                    <div className="clt_inputFloatDiv">
                      <Form.Floating className="clt_inputFloat">
                        <Form.Control
                          id="floatingInput1"
                          type="text"
                          placeholder="Date"
                          onChange={(event) => console.log(event.target.value)}
                        />
                        <label htmlFor="floatingInput1">Date</label>
                      </Form.Floating>
                    </div>
                    <div className="clt_inputFloatDiv">
                      <Form.Floating className="clt_inputFloat">
                        <Form.Control
                          as="textarea"
                          placeholder="Leave a comment here"
                          style={{ height: "100px" }}
                          id="floatingInput1"
                          type="text"
                          onChange={(event) => console.log(event.target.value)}
                        />
                        <label htmlFor="floatingInput1">Message</label>
                      </Form.Floating>
                    </div>
                    <Button
                      onClick={() => console.log("")}
                      className="clt_formButton shadow-none"
                    >
                      <span>Contact Us</span>
                    </Button>
                  </div>
                </div>
              )}
              {formType === "reserve" && (
                <div>
                  <div className="clt-detail-right-head-div">
                    <h2 className="clt-detail-right-head-heading">Wedding</h2>
                    <div className="clt-detail-right-head-sub-div">
                      <span>Title</span>/ subtitle
                    </div>
                  </div>
                  <div className="clt-detail-right-form-reserve">
                    <div className="clt_inputFloatDiv">
                      <Form.Floating className="clt_inputFloat">
                        <Form.Control
                          id="floatingInput1"
                          type="text"
                          placeholder="Name"
                          onChange={(event) => console.log(event.target.value)}
                        />
                        <label htmlFor="floatingInput1">Name</label>
                      </Form.Floating>
                    </div>
                    <Button
                      onClick={() => console.log("")}
                      className="clt_formButton shadow-none"
                    >
                      <span>Reserve</span>
                    </Button>
                  </div>
                </div>
              )}
            </div>
          </Col>
        </Row>
      </Container>
      {isGalleryOpen && (
        <Container fluid className="clt-gallery-container">
          <Row>
            <Col>
              <Row className="clt-gallery-container-header">
                <Col className="clt-gallery-container-header-col d-flex justify-content-start align-items-center">
                  <Button
                    className="d-flex justify-content-start align-items-center pfr_navbarToggle"
                    onClick={() => setIsGalleryOpen(false)}
                  >
                    <i className="fa-light fa-times"></i>
                  </Button>
                  <span className="d-flex">1.1</span>
                </Col>
              </Row>
              <Row className="clt-gallery-container-body">
                <Col
                  lg={{ span: 8, offset: 2 }}
                  md={{ span: 8, offset: 2 }}
                  sm={12}
                  xs={12}
                  className="clt-detail-slider-maindiv"
                >
                  <Carousel
                    swipeable={true}
                    draggable={true}
                    showDots={false}
                    responsive={responsive}
                    infinite={true}
                    shouldResetAutoplay={false}
                    autoPlay={false}
                    className="clt-detail-slider-main"
                  >
                    {fullScreenGallery &&
                      fullScreenGallery.map((value, index) => {
                        return (
                          <div
                            key={index}
                            className="clt-detail-slider-main-imgdiv"
                            style={{
                              backgroundImage: `url(${value.img})`,
                            }}
                          >
                            <span>{value.text}</span>
                          </div>
                        );
                      })}
                  </Carousel>
                </Col>
              </Row>
              <Row className="clt-gallery-container-footer">
                <Col>
                  <span className="">1.1</span>
                </Col>
              </Row>
            </Col>
          </Row>
        </Container>
      )}
    </React.Fragment>
  );
};
export default DetailPage;
