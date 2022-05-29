import React, { Component } from 'react';
import { Col, Container, Row } from 'react-bootstrap';
import './select-parking.css';

class SelectParking extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }
    render() {
        return (
            <React.Fragment>
                {/* Just for demo */}
                <div style={{ height: '1000px' }}>
                    Select Parking
                </div>
            </React.Fragment>
        );
    }
}

export default SelectParking;