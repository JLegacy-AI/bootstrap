import React from "react";
import { Offcanvas } from "react-bootstrap";
import BackArrow from "../../assets/img/back_arrow.png";
import { IMG_ALT } from "../../constants";

const CustomOffCanvas = (props) => {
  return (
    <Offcanvas
      placement={props.placement}
      className={props.className}
      show={props.show}
      onHide={props.onHide}
    >
      <Offcanvas.Header className={props.headerClassName}>
        <React.Fragment>
          {props.isBackBtn ? (
            <button
              type="button"
              className="btn-close btn-back shadow-none d-flex"
              aria-label="Close"
              onClick={props.handleBack}
            >
              <img
                src={BackArrow}
                className=""
                alt={IMG_ALT}
              />
            </button>
          ) : (
            <button
              type="button"
              className="btn-close shadow-none"
              aria-label="Close"
              onClick={props.onHide}
            ></button>
          )}
          <Offcanvas.Title>{props.headerTitle}</Offcanvas.Title>
        </React.Fragment>
      </Offcanvas.Header>
      <Offcanvas.Body className={props.bodyClassName}>
        {props.children}
      </Offcanvas.Body>
    </Offcanvas>
  );
};

export default CustomOffCanvas;
