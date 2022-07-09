import React from "react";
import { Col, Modal, Row } from "react-bootstrap";
const CustomModal = (props) => {
  return (
    <Modal
      show={props.show}
      onHide={props.onHide}
      keyboard={false}
      centered={props.centered ? props.centered : true}
      size={props.size ? props.size : "lg"}
      fullscreen={props.fullscreen ? props.fullscreen : "sm-down"}
      className={props.className ? props.className : ""}
      contentClassName={props.contentClassName}
      dialogClassName={props.dialogClassName}
    >
      <Modal.Header className="justify-content-start clt-custom-modal-header">
        <button
          type="button"
          className="btn-close btn-back"
          aria-label="Close"
          onClick={props.onHide}
        ></button>
        <span className="clt-custom-modal-title">{props.title}</span>
      </Modal.Header>
      <Modal.Body>{props.children}</Modal.Body>
    </Modal>
  );
};

export default CustomModal;
