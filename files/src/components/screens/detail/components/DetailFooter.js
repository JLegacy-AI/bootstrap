import React from "react";
import { Button, Col, Container, Row } from "react-bootstrap";
const DetailFooter = (props) => {
  return (
    <Container className="clt-detail-footer-mbl">
      <Row>
        <Col className="d-flex flex-column justify-content-center clt-detail-footer-h-div">
          <h2>{props.title}</h2>
          <span>/ {props.subtitle}</span>
        </Col>
        <Col>
          <Button
            onClick={props.setBottomUp}
            className="clt-detail-footer-mblButton shadow-none"
            style={{
              background: props.eventType.background,
              border: `1px solid ${props.eventType.background}`,
            }}
          >
            <span>
              Contact Us <i className="fa-light fa-chevron-down"></i>
            </span>
          </Button>
        </Col>
      </Row>
    </Container>
  );
};

export default DetailFooter;
