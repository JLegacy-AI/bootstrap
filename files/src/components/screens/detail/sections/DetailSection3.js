import React from "react";
import { Col, Row } from "react-bootstrap";
const DetailSection3 = (props) => {
  return (
    <Row className="clt-detail-footer-mb">
      <Col className="clt-detail-footer-mb-col">
        <div className="clt-detail-left-section-3">
          <div className="d-flex justify-content-start align-items-center clt-detail-left-section-3-subdiv">
            <img src={props.imgIconSection3} alt="CLT" />
            <h2>{props.titleSection3}</h2>
          </div>
          <p>{props.subTextSection3}</p>
        </div>
      </Col>
    </Row>
  );
};

export default DetailSection3;
