import MaraigeImg from "../assets/img/icon-card-1.png";
import AnniversaireImg from "../assets/img/icon-card-2.png";
import ProfesionnelImg from "../assets/img/icon-card-3.png";
import ReligieuxImg from "../assets/img/icon-card-4.png";

const homeSliderResponsive = {
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
const detailMainSliderResponsive = {
  desktop: {
    breakpoint: { max: 3000, min: 1024 },
    items: 1,
  },
  tablet: {
    breakpoint: { max: 1024, min: 464 },
    items: 1,
  },
  mobile: {
    breakpoint: { max: 464, min: 0 },
    items: 1,
  },
};
const detailSecondarySliderResponsive = {
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
    items: 2.1,
    slidesToSlide: 0.1,
  },
  mobile: {
    breakpoint: { max: 464, min: 0 },
    items: 1.1,
    slidesToSlide: 0.1,
  },
};
export {
  homeSliderResponsive,
  maraigeData,
  anniversaireData,
  profesionnelData,
  religieuxData,
  detailMainSliderResponsive,
  detailSecondarySliderResponsive
};
