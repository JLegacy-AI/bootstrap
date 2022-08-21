import React, { useState, useEffect } from "react";
import { Button, Col, Container, Offcanvas, Row } from "react-bootstrap";
import "./detail-page.css";
import DetailIcon1 from "../../../assets/img/detail_icon_1.jpg";
import DetailIcon2 from "../../../assets/img/detail_icon_2.jpg";
import DetailIcon3 from "../../../assets/img/detail_icon_3.jpg";
import DetailIcon4 from "../../../assets/img/detail_icon_4.jpg";
import DetailSlider_1_1 from "../../../assets/img/detail_slider_1_1.jpg";
import DetailSlider_1_2 from "../../../assets/img/detail_slider_1_2.jpg";
import DetailSlider_1_3 from "../../../assets/img/detail_slider_1_3.png";
import DetailSlider_1_4 from "../../../assets/img/detail_slider_1_4.png";
import IconContactUs from "../../../assets/img/icon_contact_us.png";
import IconReserve from "../../../assets/img/icon_reserve.png";
import DetailSection4_1 from "../../../assets/img/detail_section_4_1.png";
import DetailSection5_Icon1 from "../../../assets/img/detail_section_5_icon_1.png";
import DetailSection5_Icon2 from "../../../assets/img/detail_section_5_icon_2.png";
import DetailSection5_Icon3 from "../../../assets/img/detail_section_5_icon_3.png";
import InnerNavbar from "../../../layouts/InnerNavbar";
import { isBrowser, isMobile, isTablet } from "react-device-detect";
import FooterBottomUp from "../../reusable/FooterBottomUp";
import DetailFooter from "./components/DetailFooter";
import DetailGallery from "./components/DetailGallery";
import DetailContactForm from "./components/DetailContactForm";
import DetailReserveForm from "./components/DetailReserveForm";
import CustomModal from "../../reusable/CustomModal";
import CustomCarousel from "../../reusable/CustomCarousel";
import DetailSection1 from "./sections/DetailSection1";
import DetailSection2 from "./sections/DetailSection2";
import CustomHr from "../../reusable/CustomHr";
import DetailSection3 from "./sections/DetailSection3";
import {
  anniversaireData,
  detailMainSliderResponsive,
  detailSecondarySliderResponsive,
  maraigeData,
  profesionnelData,
  religieuxData,
  section4SliderResponsive,
} from "../../../constants";
import EventsNavbar from "../../reusable/EventsNavbar";
import { baseUrl } from "../../../config";
import DetailSection5 from "./sections/DetailSection5";

const DetailPage = () => {
  const [stickyBarTop, setstickyBarTop] = useState(undefined);
  const [stickySidebar, setStickySidebar] = useState(undefined);
  const [eventType, setEventType] = useState(maraigeData);
  const [formType, setFormType] = useState("contact");
  const [bottomUp, setBottomUp] = useState(false);
  const [isFormModal, setIsFormModal] = useState(false);
  const [isGalleryOpen, setIsGalleryOpen] = useState(false);
  const [isRightSidebarOpen, setIsRightSidebarOpen] = useState(false);
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
  const [section4Products, setSection4Products] = useState([
    {
      img: DetailSection4_1,
      name: "Product 1.1",
      secondary_text: "Secondary text",
      description: "Description",
    },
    {
      img: DetailSection4_1,
      name: "Product 1.2",
      secondary_text: "Secondary text",
      description: "Description",
    },
    {
      img: DetailSection4_1,
      name: "Product 2.1",
      secondary_text: "Secondary text",
      description: "Description",
    },
    {
      img: DetailSection4_1,
      name: "Product 2.2",
      secondary_text: "Secondary text",
      description: "Description",
    },
    {
      img: DetailSection4_1,
      name: "Product 3.1",
      secondary_text: "Secondary text",
      description: "Description",
    },
  ]);
  useEffect(() => {
    const stickyBarEl = document
      .querySelector(".stickyBar")
      .getBoundingClientRect();
    setstickyBarTop(stickyBarEl.top);
    const stickySideBarEl = document
      .querySelector(".stickySideBar")
      .getBoundingClientRect();
    setStickySidebar(stickySideBarEl.top);
  }, []);

  useEffect(() => {
    if (!stickyBarTop) return;

    window.addEventListener("scroll", isSticky);
    return () => {
      window.removeEventListener("scroll", isSticky);
    };
  }, [stickyBarTop]);
  useEffect(() => {
    if (!stickySidebar) return;

    window.addEventListener("scroll", isSidebarSticky);
    return () => {
      window.removeEventListener("scroll", isSidebarSticky);
    };
  }, [stickySidebar]);

  const isSticky = (e) => {
    const stickyBarEl = document.querySelector(".stickyBar");
    const scrollTop = window.scrollY;
    let check;
    if (isTablet) {
      check = scrollTop >= stickyBarTop - 10;
    } else if (isMobile) {
      check = scrollTop >= stickyBarTop + 200;
    } else {
      check = scrollTop >= stickyBarTop - 10;
    }

    if (check) {
      stickyBarEl.classList.add("is-sticky");
    } else {
      stickyBarEl.classList.remove("is-sticky");
    }
  };

  const isSidebarSticky = (e) => {
    const stickySideBarEl = document.querySelector(".stickySideBar");
    const scrollTop = window.scrollY;
    let check;
    if (isTablet) {
      check = false;
    } else if (isMobile) {
      check = false;
    } else {
      check = scrollTop >= stickySidebar - 10;
    }

    if (check) {
      stickySideBarEl.classList.add("is-sticky");
    } else {
      stickySideBarEl.classList.remove("is-sticky");
    }
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
  const openForm = (type) => {
    setBottomUp(false);
    setIsFormModal(true);
    setFormType(type);
  };
  const toggleBottomUp = () => {
    setBottomUp((prevState) => !prevState);
  };
  const toggleForm = () => {
    setIsFormModal((prevState) => !prevState);
  };
  const DetailMainSliderArrows = ({ next, previous, goToSlide, ...rest }) => {
    const {
      carouselState: { currentSlide, totalItems, slidesToShow },
    } = rest;
    const disableState = totalItems - slidesToShow;
    return (
      <div className="d-flex justify-content-between clt-detail-left-section-2-header">
        <h2 className="clt-detail-left-section-2-h2">{rest.title}</h2>
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
      <InnerNavbar
        title="Title Header"
        backClick="/"
        titleClick="/detail"
        shareTitle="Chateau La Tournelle"
        shareLink={`${baseUrl}/detail`}
        shareText="Chateau La Tournelle"
      />
      <Container>
        <Row>
          <Col className="clt-detail-slider-maindiv">
            <CustomCarousel
              responsive={detailMainSliderResponsive}
              swipeable={true}
              draggable={true}
              showDots={false}
              arrows={false}
              infinite={true}
              shouldResetAutoplay={false}
              autoPlay={false}
              className="clt-detail-slider-main showMobile"
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
            </CustomCarousel>
          </Col>
        </Row>
      </Container>
      <DetailSection1
        titleSection1="Title"
        subTitleSection1="Sub title"
        imgIconSection1={DetailIcon1}
      />
      <EventsNavbar
        eventType={eventType}
        setEventTypeMaraige={() => setEventType(maraigeData)}
        setEventTypeAnniversaire={() => setEventType(anniversaireData)}
        setEventTypeReligieux={() => setEventType(religieuxData)}
        setEventTypeProfesionnel={() => setEventType(profesionnelData)}
      />
      <Container>
        <Row className="clt-detail-sections-div">
          <Col lg={8} xs={12}>
            <Row>
              <Col className="clt-detail-slider-maindiv">
                <CustomCarousel
                  responsive={detailMainSliderResponsive}
                  swipeable={true}
                  draggable={true}
                  showDots={false}
                  arrows={true}
                  infinite={true}
                  shouldResetAutoplay={false}
                  autoPlay={false}
                  className="clt-detail-slider-main hideMobile"
                >
                  {mainGallery.map((value, index) => {
                    return (
                      <div
                        key={index}
                        className="clt-detail-slider-main-imgdiv cursor-zoom-in"
                        style={{
                          backgroundImage: `url(${value.img})`,
                        }}
                        onClick={() => openGallery("main")}
                      >
                        <span>{value.text}</span>
                      </div>
                    );
                  })}
                </CustomCarousel>
              </Col>
            </Row>
            <CustomHr
              rowClass="hideMobile"
              colClass="clt-section-hr-pd"
              hrClass="p-0 m-0 clt-hr"
            />

            <DetailSection2
              headTitleSection2="Title Section 1"
              imgIconSection2_1={DetailIcon2}
              innerTitlesSection2={[
                {
                  imgIcon: DetailIcon2,
                  title: "Text 1",
                  subTitle: "Sub Text 1",
                },
                {
                  imgIcon: DetailIcon3,
                  title: "Text 2",
                  subTitle: "Sub Text 2",
                },
              ]}
              innerSubTextsSection2={[
                "subtext",
                "subtext",
                "subtext",
                "subtext",
              ]}
            />
            <CustomHr colClass="clt-section-hr-pd" hrClass="p-0 m-0 clt-hr" />
            <Row className="showMobile">
              <Col className="clt-detail-left-section-2-h2-mt clt-section-row-col-pd">
                <h2 className="clt-detail-left-section-2-h2">
                  Title Section 2
                </h2>
              </Col>
            </Row>
            <Row className="clt-detail-left-section-2-row showMobile">
              <Col>
                <Container className="clt-detail-left-section-2-row-container">
                  <Row>
                    <Col className="clt-detail-left-section-2-row-col">
                      <div className="d-flex justify-content-start align-items-center clt-detail-left-section-2">
                        {secondaryGallery.map((value, index) => {
                          return (
                            <div key={index}>
                              <div
                                className="d-flex justify-content-start align-items-start clt-detail-left-section-2-cards clt-detail-left-section-2-cards-main"
                                style={{
                                  backgroundImage: `url(${value.img})`,
                                }}
                                onClick={() => openGallery("secondary")}
                              >
                                <span>{value.text}</span>
                              </div>
                            </div>
                          );
                        })}
                      </div>
                    </Col>
                  </Row>
                </Container>
              </Col>
            </Row>
            <Row className="hideMobile">
              <Col className="clt-detail-left-section-2-col">
                <div className="d-flex flex-column-reverse">
                  <CustomCarousel
                    responsive={detailSecondarySliderResponsive}
                    arrows={false}
                    shouldResetAutoplay={false}
                    renderButtonGroupOutside={true}
                    customButtonGroup={
                      <DetailMainSliderArrows title="Title Ssection 2" />
                    }
                    className="clt-detail-left-section-2-cards-div"
                  >
                    {secondaryGallery.map((value, index) => {
                      return (
                        <div
                          key={index}
                          className="d-flex justify-content-start align-items-start clt-detail-left-section-2-cards clt-detail-left-section-2-cards-main cursor-zoom-in"
                          style={{
                            backgroundImage: `url(${value.img})`,
                          }}
                          onClick={() => openGallery("secondary")}
                        >
                          <span>{value.text}</span>
                        </div>
                      );
                    })}
                  </CustomCarousel>
                </div>
              </Col>
            </Row>
            <CustomHr colClass="clt-section-hr-pd" hrClass="p-0 m-0 clt-hr" />
            <DetailSection3
              imgIconSection3={DetailIcon4}
              titleSection3="Title Section 3"
              subTextSection3="Text section 3"
            />
            <CustomHr colClass="clt-section-hr-pd" hrClass="p-0 m-0 clt-hr" />
            {/* section 4 */}
            <Row className="showMobile">
              <Col className="clt-detail-left-section-4-h2-mt clt-section-row-col-pd">
                <h2 className="clt-detail-left-section-4-h2">
                  Title Section 4
                </h2>
              </Col>
            </Row>
            <Row className="clt-detail-left-section-4-row showMobile">
              <Col>
                <Container className="clt-detail-left-section-4-row-container">
                  <Row>
                    <Col className="clt-detail-left-section-4-row-col">
                      <div className="d-flex justify-content-start align-items-center clt-detail-left-section-4">
                        {section4Products.map((value, index) => {
                          return (
                            <div key={index}>
                              <div
                                className="clt-detail-left-section-4-card-item cursor-zoom-in"
                                onClick={() => setIsRightSidebarOpen(!isRightSidebarOpen)}
                              >
                                <div className="d-flex justify-content-between align-items-start">
                                  <div
                                    className="clt-detail-left-section-4-card-item-div"
                                    style={{
                                      backgroundImage: `url(${value.img})`,
                                    }}
                                  ></div>
                                  <div>
                                    <i className="fa-light fa-chevron-right"></i>
                                  </div>
                                </div>
                                <h2 className="clt-detail-left-section-4-card-item-h2">
                                  {value.name}
                                </h2>
                                <p className="clt-detail-left-section-4-card-item-secondary">
                                  {value.secondary_text}
                                </p>
                                <p className="clt-detail-left-section-4-card-item-desc">
                                  {value.description}
                                </p>
                              </div>
                            </div>
                          );
                        })}
                      </div>
                    </Col>
                  </Row>
                </Container>
              </Col>
            </Row>
            <Row className="hideMobile">
              <Col className="clt-detail-left-section-4-col">
                <div className="d-flex flex-column-reverse">
                  <CustomCarousel
                    responsive={section4SliderResponsive}
                    arrows={false}
                    shouldResetAutoplay={false}
                    renderButtonGroupOutside={true}
                    customButtonGroup={
                      <DetailMainSliderArrows title="Title section 4" />
                    }
                    className="clt-detail-left-section-4-cards-div"
                  >
                    {section4Products.map((value, index) => {
                      return (
                        <div
                          key={index}
                          className="clt-detail-left-section-4-card-item cursor-zoom-in"
                          onClick={() => setIsRightSidebarOpen(!isRightSidebarOpen)}
                        >
                          <div className="d-flex justify-content-between align-items-start">
                            <div
                              className="clt-detail-left-section-4-card-item-div"
                              style={{
                                backgroundImage: `url(${value.img})`,
                              }}
                            ></div>
                            <div>
                              <i className="fa-light fa-chevron-right"></i>
                            </div>
                          </div>
                          <h2 className="clt-detail-left-section-4-card-item-h2">
                            {value.name}
                          </h2>
                          <p className="clt-detail-left-section-4-card-item-secondary">
                            {value.secondary_text}
                          </p>
                          <p className="clt-detail-left-section-4-card-item-desc">
                            {value.description}
                          </p>
                        </div>
                      );
                    })}
                  </CustomCarousel>
                </div>
              </Col>
            </Row>
            <CustomHr colClass="clt-section-hr-pd" hrClass="p-0 m-0 clt-hr" />
            <DetailSection5
              headTitleSection5="Title section 5"
              sectionTextList={[
                {
                  subTitle: "SubTitle",
                  subSections: [
                    {
                      img: DetailSection5_Icon1,
                      title: "Text 1",
                    },
                    {
                      img: DetailSection5_Icon2,
                      title: "Text 2",
                    },
                  ],
                },
                {
                  subTitle: "SubTitle",
                  subSections: [
                    {
                      img: DetailSection5_Icon3,
                      title: "Text 3",
                    },
                  ],
                },
              ]}
            />
            {/* Last section bottom */}
            <Row className="clt-detail-footer-mb" />
          </Col>
          <Col lg={4} xs={12} className="hideMobile">
            <Row className="clt-sidebar-forms stickySideBar">
              <Col>
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
                    <DetailContactForm
                      formTitle="Title"
                      formSubtitle="subtitle"
                      formEventType="WEDDING"
                    />
                  )}
                  {formType === "reserve" && (
                    <DetailReserveForm
                      formTitle="Title"
                      formSubtitle="subtitle"
                      formEventType="WEDDING"
                    />
                  )}
                </div>
              </Col>
            </Row>
          </Col>
        </Row>
      </Container>
      <DetailFooter
        title="Title"
        subtitle="subtitle"
        setBottomUp={() => setBottomUp(!bottomUp)}
      />
      <FooterBottomUp
        bottomUp={bottomUp}
        toggleBottomUp={toggleBottomUp}
        centered={true}
        size={"lg"}
        fullscreen={true}
        className="clt_footer_bottom_up_modal"
        contentClassName="clt_footer_bottom_up_modal_content"
        dialogClassName="clt_footer_bottom_up_modal_dailog"
      >
        <Row>
          <Col lg={12} className="">
            <h2 className="clt-detail-footer-bottom-up-h2">
              What do you want to do?
            </h2>
          </Col>
          <Col lg={12} className="clt-detail-footer-bottom-up-menus-div">
            <div
              className="d-flex justify-content-start align-items-center clt-detail-footer-bottom-up-menus"
              onClick={() => openForm("reserve")}
            >
              <img src={IconReserve} alt="CLT" />
              <span>Reserve</span>
            </div>
            <div
              className="d-flex justify-content-start align-items-center clt-detail-footer-bottom-up-menus"
              onClick={() => openForm("contact")}
            >
              <img src={IconContactUs} alt="CLT" />
              <span>Contact us (Ask, Visit...)</span>
            </div>
          </Col>
        </Row>
      </FooterBottomUp>
      <CustomModal
        show={isFormModal}
        onHide={toggleForm}
        title={
          (formType === "contact" && "Contact Header") ||
          (formType === "reserve" && "Reserve Title")
        }
        className="clt-detail-custom-modal-class"
        contentClassName="clt-detail-custom-modal-content-class"
        dialogClassName="clt-detail-custom-modal-dialog-class"
      >
        {formType === "contact" && (
          <DetailContactForm
            formTitle="Title"
            formSubtitle="subtitle"
            formEventType="WEDDING"
            isModal={true}
            customFooterButton="clt-custom-modal-footer-btn"
          />
        )}
        {formType === "reserve" && (
          <DetailReserveForm
            formTitle="Title"
            formSubtitle="subtitle"
            formEventType="WEDDING"
            isModal={true}
            customFooterButton="clt-custom-modal-footer-btn"
          />
        )}
      </CustomModal>

      {isGalleryOpen && (
        <DetailGallery
          galleryHeaderTitle="1.1"
          galleryFooterTitle="1.1"
          setIsGalleryOpen={() => setIsGalleryOpen(!isGalleryOpen)}
          responsive={detailMainSliderResponsive}
          isBrowser={isBrowser || isTablet}
          fullScreenGallery={fullScreenGallery}
        />
      )}
      <Offcanvas
        placement="end"
        className="clt_products_offcanvas"
        show={isRightSidebarOpen}
        onHide={() => setIsRightSidebarOpen(!isRightSidebarOpen)}
      >
        <Offcanvas.Header className="">
          <React.Fragment>
            <button
              type="button"
              className="btn-close shadow-none"
              aria-label="Close"
              // onClick={() => this.handleCloseSidebar("vehicleSidebarShow")}
              onClick={() => setIsRightSidebarOpen(!isRightSidebarOpen)}
            ></button>
            <Offcanvas.Title className="">
              Mes véhicules
            </Offcanvas.Title>
          </React.Fragment>
          {/* {this.state.editVehicle && (
            <React.Fragment>
              <button
                type="button"
                className="btn-close btn-back shadow-none d-flex"
                aria-label="Close"
                onClick={() => this.handleBack("editVehicle", "viewVehicles")}
              >
                <img
                  src={require("../../../assets/img/back_arrow.png").default}
                  className=""
                  alt="ParkingAeroPortFr"
                />
              </button>
              <Offcanvas.Title className="pfr_payment_header_title">
                Mes véhicules
              </Offcanvas.Title>
              <div style={{ width: "28px" }}></div>
            </React.Fragment>
          )} */}
        </Offcanvas.Header>
        <Offcanvas.Body className="">
          body
        </Offcanvas.Body>
      </Offcanvas>
    </React.Fragment>
  );
};
export default DetailPage;
