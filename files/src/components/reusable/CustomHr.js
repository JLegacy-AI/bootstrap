import React from "react";
import { Col, Modal, Row } from "react-bootstrap";
const CustomHr = (props) => {
  return (
    <Row className={props.rowClass}>
      <Col className={props.colClass}>
        <hr className={props.hrClass} />
      </Col>
    </Row>
  );
};

export default CustomHr;
