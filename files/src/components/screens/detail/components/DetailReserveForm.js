import React from "react";
import { Button, Form } from "react-bootstrap";
const DetailReserveForm = (props) => {
  return (
    <div>
      <div className="clt-detail-right-head-div">
        {props.isModal ? (
          <div className="clt-detail-right-head-sub-div">
            <span>{props.formTitle}</span>
          </div>
        ) : (
          <>
            <h2 className="clt-detail-right-head-heading">
              {props.formEventType}
            </h2>
            <div className="clt-detail-right-head-sub-div">
              <span>{props.formTitle}</span>/ {props.formSubtitle}
            </div>
          </>
        )}
      </div>
      <div className="clt-detail-right-form-reserve">
        <div className="clt_inputFloatDiv">
          <Form.Floating className="clt_inputFloat">
            <Form.Control
              id="floatingInput1"
              type="text"
              placeholder="Date Arrival and Return"
              onChange={(event) => console.log(event.target.value)}
            />
            <label htmlFor="floatingInput1">Date Arrival and Return</label>
          </Form.Floating>
        </div>
        <div className={props.customFooterButton}>
          <Button
            onClick={() => console.log("")}
            className="clt_formButton shadow-none"
          >
            <span>Reserve</span>
          </Button>
        </div>
      </div>
    </div>
  );
};

export default DetailReserveForm;
