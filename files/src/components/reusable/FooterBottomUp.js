import React from "react";
import { Modal } from "react-bootstrap";
const FooterBottomUp = (props) => {
  return (
    <Modal
      show={props.bottomUp}
      onHide={props.toggleBottomUp}
      keyboard={false}
      centered={props.centered ? props.centered : true}
      size={props.size ? props.size : "lg"}
      fullscreen={props.fullscreen ? props.fullscreen : "sm-down"}
      className={props.className}
      contentClassName={props.contentClassName}
      dialogClassName={props.dialogClassName}
    >
      {props.children}
    </Modal>
  );
};

export default FooterBottomUp;
