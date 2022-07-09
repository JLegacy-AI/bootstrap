import React from "react";
import { Col, Modal, Row } from "react-bootstrap";
const FooterBottomUp = (props) => {
  return (
    <Modal
      show={props.bottomUp}
      onHide={props.toggleBottomUp}
      keyboard={false}
      centered={props.centered && true}
      size={props.size && "lg"}
      fullscreen={props.fullscreen && true}
      className={props.className}
      contentClassName={props.contentClassName}
      dialogClassName={props.dialogClassName}
    >
      {props.children}
    </Modal>
  );
};

export default FooterBottomUp;
