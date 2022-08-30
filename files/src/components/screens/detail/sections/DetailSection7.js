import React from "react";
import { Col, Row } from "react-bootstrap";
const DetailSection7 = (props) => {
  return (
    <Row className="clt-detail-section-7">
      <Col>
        <Row className="clt-detail-section-7-header">
          <Col>
            <h2>{props.title}</h2>
            <p>{props.subTitle}</p>
          </Col>
        </Row>
        <Row className="clt-detail-section-7-img-row m-0">
          <Col
            className="clt-detail-section-7-img-div d-none d-sm-block"
            style={{
              backgroundImage: `url(${props.imageDesktop})`,
            }}
          ></Col>
          <Col
            className="clt-detail-section-7-img-div d-block d-sm-none"
            style={{
              backgroundImage: `url(${props.imageMobile})`,
            }}
          ></Col>
        </Row>
      </Col>
    </Row>
  );
};

export default DetailSection7;
