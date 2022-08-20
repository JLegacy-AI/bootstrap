import React from "react";
import { Col, Row } from "react-bootstrap";
const DetailSection5 = (props) => {
  return (
    <Row>
      <Col className="clt-detail-left-section-1">
        <h2 className="clt-detail-left-section-1-heading">
          {props.headTitleSection5}
        </h2>
        <div className="clt-detail-left-section-subdiv-1">
          {props.sectionTextList.map((value, index) => {
            return (
              <div key={index} className="clt-detail-left-sub-section-div-main">
                <div className="clt-detail-left-sub-section-div-p">
                  <p>{value.subTitle}</p>
                </div>
                {value.subSections.map((subVal, i) => {
                  return (
                    <div
                      key={i}
                      className="d-flex justify-content-start align-items-center clt-detail-left-sub-section-div"
                    >
                      <img src={subVal.img} alt="CLT" />
                      <h3>{subVal.title}</h3>
                    </div>
                  );
                })}
              </div>
            );
          })}
        </div>
      </Col>
    </Row>
  );
};

export default DetailSection5;
