import React, { useState } from "react";
import { Button, Col, Container, Row } from "react-bootstrap";
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
import DetailSection5_Icon4 from "../../../assets/img/detail_section_5_icon_4.png";
import DetailSection5_Icon5 from "../../../assets/img/detail_section_5_icon_5.png";
import DetailSection5_Icon6 from "../../../assets/img/detail_section_5_icon_6.png";
import DetailSection5_Icon7 from "../../../assets/img/detail_section_5_icon_7.png";
import DetailSection5_Icon8 from "../../../assets/img/detail_section_5_icon_8.png";
import DetailSection7ImageMobile from "../../../assets/img/detail_section_7_img_mobile.jpg";
import DetailSection7ImageDesktop from "../../../assets/img/detail_section_7_img_desktop.jpg";
import InnerNavbar from "../../../layouts/InnerNavbar";
import { isBrowser, isTablet } from "react-device-detect";
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
  IMG_ALT,
  section4SliderResponsive,
} from "../../../constants";
import { baseUrl } from "../../../config";
import DetailSection5 from "./sections/DetailSection5";
import CustomOffCanvas from "../../reusable/CustomOffCanvas";
import DetailSection6 from "./sections/DetailSection6";
import DetailSection7 from "./sections/DetailSection7";
import DetailEventsNavbar from "./components/DetailEventsNavbar";

const DetailPageAnniversary = () => {
  const [eventType, setEventType] = useState(anniversaireData);
  const [formType, setFormType] = useState("contact");
  const [bottomUp, setBottomUp] = useState(false);
  const [isFormModal, setIsFormModal] = useState(false);
  const [isGalleryOpen, setIsGalleryOpen] = useState(false);
  const [isProductsSidebarOpen, setIsProductsSidebarOpen] = useState(false);
  const [isProductsSidebarList, setIsProductsSidebarList] = useState(false);
  const [isProductsSiderbarDetail, setIsProductsSiderbarDetail] =
    useState(false);
  const [isSection6SiderbarDetail, setIsSection6SiderbarDetail] =
    useState(false);
  const [productDetail, setProductDetail] = useState({});
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
  const [section4ProductsSidebar, setSection4ProductsSidebar] = useState([
    {
      category: "Category 1",
      products: [
        {
          img: DetailSection4_1,
          name: "Product 1.1",
          secondary_text: "Secondary text",
          description: "Description",
          subTexts: [
            {
              title: "Text 1",
              subText: "Sub text",
            },
            {
              title: "Text 1",
              subText: "Sub text",
            },
          ],
        },
        {
          img: DetailSection4_1,
          name: "Product 1.2",
          secondary_text: "Secondary text",
          description: "Description",
          subTexts: [
            {
              title: "Text 1",
              subText: "Sub text",
            },
            {
              title: "Text 1",
              subText: "Sub text",
            },
          ],
        },
      ],
    },
    {
      category: "Category 2",
      products: [
        {
          img: DetailSection4_1,
          name: "Product 2.1",
          secondary_text: "Secondary text",
          description: "Description",
          subTexts: [
            {
              title: "Text 1",
              subText: "Sub text",
            },
            {
              title: "Text 1",
              subText: "Sub text",
            },
          ],
        },
        {
          img: DetailSection4_1,
          name: "Product 2.2",
          secondary_text: "Secondary text",
          description: "Description",
          subTexts: [
            {
              title: "Text 1",
              subText: "Sub text",
            },
            {
              title: "Text 1",
              subText: "Sub text",
            },
            {
              title: "Text 1",
              subText: "Sub text",
            },
          ],
        },
      ],
    },
    {
      category: "Category 3",
      products: [
        {
          img: DetailSection4_1,
          name: "Product 3.1",
          secondary_text: "Secondary text",
          description: "Description",
          subTexts: [
            {
              title: "Text 1",
              subText: "Sub text",
            },
          ],
        },
      ],
    },
  ]);

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
  const handleProductSlider = () => {
    setIsProductsSidebarOpen(!isProductsSidebarOpen);
    setIsProductsSidebarList(true);
    setIsProductsSiderbarDetail(false);
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
        titleClick={`/detail/${anniversaireData.detail_page}`}
        shareTitle="Chateau La Tournelle"
        shareLink={`${baseUrl}/detail/${anniversaireData.detail_page}`}
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
      <DetailEventsNavbar eventType={eventType} />
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
                      <DetailMainSliderArrows title="Title Section 2" />
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
                                onClick={handleProductSlider}
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
                          onClick={handleProductSlider}
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
                  subTitle: "MEUBLE",
                  subSections: [
                    {
                      img: DetailSection5_Icon1,
                      title: "Table ronde (20)",
                    },
                    {
                      img: DetailSection5_Icon2,
                      title: "Table rectangle (30)",
                    },
                    {
                      img: DetailSection5_Icon7,
                      title: "Chaise (150)",
                    },
                    {
                      img: DetailSection5_Icon6,
                      title: "Couvert (fourni par traiteur ou vous)",
                    },
                  ],
                },
                {
                  subTitle: "MATÉRIEL",
                  subSections: [
                    {
                      img: DetailSection5_Icon8,
                      title: "Wifi",
                    },
                    {
                      img: DetailSection5_Icon5,
                      title: "Vidéoprojecteur",
                    },
                    {
                      img: DetailSection5_Icon4,
                      title: "Microphone",
                    },
                  ],
                },
                {
                  subTitle: "INSTALLATION",
                  subSections: [
                    {
                      img: DetailSection5_Icon3,
                      title: "Accès handicapé",
                    },
                  ],
                },
              ]}
            />
            <CustomHr colClass="clt-section-hr-pd" hrClass="p-0 m-0 clt-hr" />
            <DetailSection6
              title="Règles et conditions"
              subTitle="En réservant le château, vous acceptez les règles et conditions. Prenez connaissances des conditions ci-dessous."
              column1={{
                title: "Title1",
                subTitle: "Subtitle1",
              }}
              column2={{
                title: "Title2",
                subTitle: "Subtitle2",
              }}
              column3={{
                title: "Title3",
                subTitle: "Subtitle3",
              }}
              column4={{
                title: "Title4",
                subTitle: "Subtitle4",
              }}
              column5={{
                title: "Title5",
                subTitle: "Subtitle5",
              }}
              onClick={() => setIsSection6SiderbarDetail(true)}
            />
            <CustomHr colClass="clt-section-hr-pd" hrClass="p-0 m-0 clt-hr" />
            <DetailSection7
              title="Localisation"
              subTitle="42 Rue Seveso, 31150 Fenouillet"
              imageDesktop={DetailSection7ImageDesktop}
              imageMobile={DetailSection7ImageMobile}
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
                      formEventType="ANNIVERSARY"
                      eventType={eventType}
                    />
                  )}
                  {formType === "reserve" && (
                    <DetailReserveForm
                      formTitle="Title"
                      formSubtitle="subtitle"
                      formEventType="ANNIVERSARY"
                      eventType={eventType}
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
        eventType={eventType}
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
              <img src={IconReserve} alt={IMG_ALT} />
              <span>Reserve</span>
            </div>
            <div
              className="d-flex justify-content-start align-items-center clt-detail-footer-bottom-up-menus"
              onClick={() => openForm("contact")}
            >
              <img src={IconContactUs} alt={IMG_ALT} />
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
            formEventType="ANNIVERSARY"
            isModal={true}
            customFooterButton="clt-custom-modal-footer-btn"
            eventType={eventType}
          />
        )}
        {formType === "reserve" && (
          <DetailReserveForm
            formTitle="Title"
            formSubtitle="subtitle"
            formEventType="ANNIVERSARY"
            isModal={true}
            customFooterButton="clt-custom-modal-footer-btn"
            eventType={eventType}
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
      <CustomOffCanvas
        placement="end"
        className="clt_products_offcanvas"
        show={isProductsSidebarOpen}
        onHide={() => setIsProductsSidebarOpen(false)}
        headerClassName="justify-content-start clt_products_offcanvas_header"
        bodyClassName="clt_products_offcanvas_body"
        headerTitle={
          isProductsSidebarList ? "Title Header" : productDetail.name
        }
        isBackBtn={isProductsSiderbarDetail}
        handleBack={() => (
          setIsProductsSiderbarDetail(false), setIsProductsSidebarList(true)
        )}
      >
        {isProductsSidebarList &&
          section4ProductsSidebar.map((val, i) => {
            return (
              <Row key={i} className="clt_products_offcanvas_body_mainrow">
                <Col className="p-0">
                  <Row className="clt_products_offcanvas_body_maindiv">
                    <Col>
                      <h2 className="clt_products_offcanvas_body_category">
                        {val.category}
                      </h2>
                    </Col>
                  </Row>
                  {val.products.map((value, index) => {
                    return (
                      <Row
                        key={index}
                        className="clt_products_offcanvas_body_secdiv"
                        onClick={() => (
                          setIsProductsSiderbarDetail(true),
                          setIsProductsSidebarList(false),
                          setProductDetail(value)
                        )}
                      >
                        <Col lg={8} md={8} sm={8} xs={8}>
                          <h2 className="clt_products_offcanvas_body_product">
                            {value.name}
                          </h2>
                          <p className="clt_products_offcanvas_body_secondary">
                            {value.secondary_text}
                          </p>
                          <p className="clt_products_offcanvas_body_desc">
                            {value.description}
                          </p>
                        </Col>
                        <Col lg={4} md={4} sm={4} xs={4}>
                          <div className="clt_products_offcanvas_body_img"></div>
                        </Col>
                      </Row>
                    );
                  })}
                </Col>
              </Row>
            );
          })}
        {isProductsSiderbarDetail && (
          <Container className="clt_product_detail_offcanvas_body">
            <Row>
              <Col className="p-0">
                <div
                  className="image_div"
                  style={{
                    backgroundImage: `url(${productDetail.img})`,
                  }}
                />
              </Col>
            </Row>
            <Row>
              <Col className="header_text_div">
                <h2>{productDetail.name}</h2>
                <p>{productDetail.secondary_text}</p>
              </Col>
            </Row>
            <CustomHr
              colClass="clt_product_detail_offcanvas_hr_pd"
              hrClass="p-0 m-0 clt-hr"
            />
            <Row>
              {productDetail.subTexts.map((value, index) => {
                return (
                  <Col
                    key={index}
                    lg={12}
                    md={12}
                    sm={12}
                    xs={12}
                    className="sub_text_div"
                  >
                    <h2>{value.title}</h2>
                    <p>{value.subText}</p>
                  </Col>
                );
              })}
            </Row>
          </Container>
        )}
      </CustomOffCanvas>
      <CustomOffCanvas
        placement="end"
        className="clt_products_offcanvas"
        show={isSection6SiderbarDetail}
        onHide={() => setIsSection6SiderbarDetail(false)}
        headerClassName="justify-content-start clt_products_offcanvas_header"
        bodyClassName="clt_products_offcanvas_body"
        headerTitle="Title Header"
      >
        <Row className="clt-detail-section-6-offcanvas-row">
          <Col className="p-0">
            <Row>
              <Col>
                <h2 className="clt-detail-section-6-offcanvas-cat-h2">
                  Category 1
                </h2>
              </Col>
            </Row>
            <Row className="clt-detail-section-6-offcanvas-data-row m-0">
              <Col>
                <Row>
                  <Col className="clt-detail-section-6-offcanvas-data-row-col border-right border-bottom-none">
                    <h2>Title5</h2>
                    <p>Subtitle5</p>
                  </Col>
                  <Col className="clt-detail-section-6-offcanvas-data-row-col border-bottom-none">
                    <h2>Title5</h2>
                    <p>Subtitle5</p>
                  </Col>
                </Row>
              </Col>
            </Row>
            <Row>
              <Col>
                <h2 className="clt-detail-section-6-offcanvas-cat-h2 margin-top">
                  Category 2
                </h2>
              </Col>
            </Row>
            <Row className="clt-detail-section-6-offcanvas-data-row m-0">
              <Col>
                <Row>
                  <Col className="clt-detail-section-6-offcanvas-data-row-col">
                    <h2>Title5</h2>
                    <p>Subtitle5</p>
                  </Col>
                </Row>
                <Row>
                  <Col className="clt-detail-section-6-offcanvas-data-row-col">
                    <h2>Title5</h2>
                    <p>Subtitle5</p>
                  </Col>
                </Row>
                <Row>
                  <Col className="clt-detail-section-6-offcanvas-data-row-col">
                    <h2>Title5</h2>
                    <p>Subtitle5</p>
                  </Col>
                </Row>
              </Col>
            </Row>
          </Col>
        </Row>
      </CustomOffCanvas>
    </React.Fragment>
  );
};
export default DetailPageAnniversary;
