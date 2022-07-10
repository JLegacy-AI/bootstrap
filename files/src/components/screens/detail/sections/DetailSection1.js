import React from "react";
import { Button, Col, Container, Form, Modal, Row } from "react-bootstrap";
const DetailSection1 = (props) => {
  return (
    <Container>
      <Row>
        <Col className="clt-detail-section-1">
          <h2>{props.titleSection1}</h2>
          <div className="clt-detail-section-1-subdiv d-flex justify-content-start align-items-center">
            <img src={props.imgIconSection1} />
            <span>{props.subTitleSection1}</span>
          </div>
        </Col>
      </Row>
    </Container>
  );
};

export default DetailSection1;
