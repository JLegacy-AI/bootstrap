import React, { Component } from 'react';
import GoogleMapReact from 'google-map-react';
import { Card, Badge } from 'react-bootstrap';
import NewSlider from './MainSlider';
import MyCarousel from './MyCarousel';

const AnyReactComponent = ({ text }) => 
  <div className='pfr_Mark_holder'>
    <div className='pfr_Mark'>
      {text}
    </div>
    <div className='pfr_flex add'>
          <Card style={{ width: '18rem' }}>
              <div className='pfr_imgContent'>
                <MyCarousel />
                <div class="pfr_holderTxt d-flex justify-content-between align-items-center">
                    <span class="pfr_titleTxt">Professionnel</span>
                    <i class="fa fa-heart-o"></i>
                </div>
              </div> 
              <Card.Body>
                  <h6 className="card-subtitle mb-2 text-muted">1,0km</h6>
                  <h5 className="card-title">Parkme 1 </h5>
                  <h5 className="card-title font-weight">75€</h5>
                  <ul className='pfr_flex'>
                      <li><Badge bg="secondary">Parking extérieur</Badge></li>
                      <li><Badge bg="secondary">Navette</Badge></li>
                      <li><Badge bg="secondary">
                      <img
                          src={require('../../../assets/img/star_icon.png').default}
                          className="pfr_icon"
                          alt="ParkingAeroPortFr"
                      />
                      5.0</Badge></li>
                  </ul>
              </Card.Body>
          </Card>
      </div>
  </div>;

class NewMap extends Component {
  static defaultProps = {
    center: {
      lat: 59.95,
      lng: 30.33
    },
    zoom: 11
  };

  render() {
    return (
      // Important! Always set the container height explicitly
      <div className='newMap'>
        <GoogleMapReact
          bootstrapURLKeys={{ key: 'AIzaSyAQX52b7LqGih5YZ1ZwiNDU7GJ4zz8p0OI' }}
          defaultCenter={this.props.center}
          defaultZoom={this.props.zoom}
        >
          <AnyReactComponent
            lat={59.955413}
            lng={30.337844}
            text="75€"
          />
        </GoogleMapReact>
      </div>
    );
  }
}

export default NewMap;