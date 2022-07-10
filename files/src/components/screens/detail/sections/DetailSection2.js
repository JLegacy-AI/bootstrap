import React from "react";
import { Button, Col, Container, Form, Modal, Row } from "react-bootstrap";
const DetailSection2 = (props) => {
  return (
    <Row>
      <Col className="clt-detail-left-section-1">
        <h2 className="clt-detail-left-section-1-heading">
          {props.headTitleSection2}
        </h2>
        <div className="clt-detail-left-section-subdiv-1">
          {props.innerTitlesSection2.map((value, index) => {
            return (
              <div
                className="d-flex justify-content-start align-items-center clt-detail-left-section-subdiv-1-div"
                key={index}
              >
                <div className="clt-detail-left-section-subdiv-1-div-img">
                  <img src={value.imgIcon} />
                </div>
                <div className="d-flex flex-column justify-content-center align-items-start clt-detail-left-section-subdiv-1-div-txt">
                  <h3>{value.title}</h3>
                  <p>{value.subTitle}</p>
                </div>
              </div>
            );
          })}
        </div>
        <div className="d-flex justify-content-start align-items-center clt-detail-left-section-subdiv-2">
          {props.innerSubTextsSection2.map((value, index) => {
            return <span key={index}>{value}</span>;
          })}
        </div>
      </Col>
    </Row>
  );
};

export default DetailSection2;
