import React from "react";
import { Button, Col, Row } from "react-bootstrap";
const DetailSection6 = (props) => {
  return (
    <>
      <Row className="clt-detail-section-6">
        <Col>
          <Row className="clt-detail-section-6-header">
            <Col>
              <h2>{props.title}</h2>
              <p>{props.subTitle}</p>
            </Col>
          </Row>
          <Row className="clt-detail-section-6-body m-0">
            <Col>
              <Row>
                <Col className="clt-detail-section-6-body-col border-right">
                  <h2>{props.column1.title}</h2>
                  <p>{props.column1.subTitle}</p>
                </Col>
                <Col className="clt-detail-section-6-body-col">
                  <h2>{props.column2.title}</h2>
                  <p>{props.column2.subTitle}</p>
                </Col>
              </Row>
              <Row>
                <Col className="clt-detail-section-6-body-col">
                  <h2>{props.column3.title}</h2>
                  <p>{props.column3.subTitle}</p>
                </Col>
              </Row>
              <Row>
                <Col className="clt-detail-section-6-body-col">
                  <h2>{props.column4.title}</h2>
                  <p>{props.column4.subTitle}</p>
                </Col>
              </Row>
              <Row>
                <Col className="clt-detail-section-6-body-col">
                  <h2>{props.column5.title}</h2>
                  <p>{props.column5.subTitle}</p>
                </Col>
              </Row>
              <Row>
                <Col className="clt-detail-section-6-body-col">
                  <Button
                    onClick={props.onClick}
                    className="shadow-none"
                  >
                    <span>See All</span>
                  </Button>
                </Col>
              </Row>
            </Col>
          </Row>
        </Col>
      </Row>
    </>
  );
};

export default DetailSection6;
