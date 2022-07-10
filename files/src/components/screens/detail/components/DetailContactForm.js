import React from "react";
import { Button, Form } from "react-bootstrap";
const DetailContactForm = (props) => {
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
      <div className="clt-detail-right-form-contact">
        <div className="clt_inputFloatDiv">
          <Form.Floating className="clt_inputFloat">
            <Form.Control
              id="floatingInput1"
              type="text"
              placeholder="Name"
              onChange={(event) => console.log(event.target.value)}
            />
            <label htmlFor="floatingInput1">Name</label>
          </Form.Floating>
        </div>
        <div className="clt_inputFloatDiv">
          <Form.Floating className="clt_inputFloat">
            <Form.Control
              id="floatingInput1"
              type="email"
              placeholder="Email"
              onChange={(event) => console.log(event.target.value)}
            />
            <label htmlFor="floatingInput1">Email</label>
          </Form.Floating>
        </div>
        <div className="clt_inputFloatDiv">
          <Form.Floating className="clt_inputFloat">
            <Form.Control
              id="floatingInput1"
              type="number"
              placeholder="Phone"
              onChange={(event) => console.log(event.target.value)}
            />
            <label htmlFor="floatingInput1">Phone</label>
          </Form.Floating>
        </div>
        <div className="clt_inputFloatDiv">
          <Form.Floating className="clt_inputFloat">
            <Form.Control
              id="floatingInput1"
              type="text"
              placeholder="Date"
              onChange={(event) => console.log(event.target.value)}
            />
            <label htmlFor="floatingInput1">Date</label>
          </Form.Floating>
        </div>
        <div className="clt_inputFloatDiv">
          <Form.Floating className="clt_inputFloat">
            <Form.Control
              as="textarea"
              placeholder="Leave a comment here"
              style={{ height: "100px" }}
              id="floatingInput1"
              type="text"
              onChange={(event) => console.log(event.target.value)}
            />
            <label htmlFor="floatingInput1">Message</label>
          </Form.Floating>
        </div>
        <div className={props.customFooterButton}>
          <Button
            onClick={() => console.log("")}
            className="clt_formButton shadow-none"
          >
            <span>Contact Us</span>
          </Button>
        </div>
      </div>
    </div>
  );
};

export default DetailContactForm;
