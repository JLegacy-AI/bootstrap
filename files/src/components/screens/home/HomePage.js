import React, { Component } from 'react';
import { Col, Container, Form, FormControl, InputGroup, Row, Spinner, Button } from 'react-bootstrap';
import PlacesAutocomplete, {
    geocodeByAddress,
    getLatLng,
} from 'react-places-autocomplete';
import MobileFooter from '../../../layouts/MobileFooter';

import GMap from './GMap';
import GSearch from './GSearch';
import './home-page.css';
import './home-gsearch.css';

import queryString from 'query-string';
import { firebase, auth } from '../auth/firebase';

// list of icons
const iconList = {
    icon1: require('../../../assets/img/map_marker.png').default,
}
class HomePage extends Component {
    constructor(props) {
        super(props);
        this.state = {
            isMobileSearch: false,
            address: '',
            selectedAddress: '',
            parkingSuggDivMaxWidth: 500,
            leftArrow: false,
            rightArrow: false,
            scrollDivWidth: 0,
            scrollRightVal: 0,
            markerList: [
                { lat: 43.641296, lng: 1.370722, icon: iconList.icon1, label: 'marker1' },
                { lat: 43.632047, lng: 1.374143, icon: iconList.icon1, label: 'marker2' },
            ],
            parkingItems: [],
        };
        this.homeRef = React.createRef();

        let params = queryString.parse(props.location.search)
        if (params.oobCode) {
            this.verifyEmail(params.oobCode);
        }
    }
    verifyEmail = (actionCode) => {
        auth.applyActionCode(actionCode).then((resp) => {
            alert('email verified successfully');
            // console.log(resp);
        }).catch((error) => {
            alert('email verified successfully');
            // alert(error.message);
        });
    }

    componentDidMount() {
        this.setState({ scrollDivWidth: this.homeRef.current.offsetWidth });
        this.getSuggestedParkings();
    }

    handleGooglePlaceChange = address => {
        this.setState({ address });
    };
    handleGooglePlaceSelect = address => {
        this.setState({ address: address, selectedAddress: address });
        // BELOW CODE : IF LAT/LNG Needed for any address selected.
        geocodeByAddress(address)
            .then(results => getLatLng(results[0]))
            .then(latLng => console.log('Success', latLng))
            .catch(error => console.error('Error', error));
    };
    handleGooglePlaceError = (status, clearSuggestions) => {
        console.log('Google Maps API returned error with status: ', status)
        clearSuggestions()
    }
    openMobileGooglePlaceSearch = () => {
        console.log('open');
        // open the mobile search panel
        this.setState({ isMobileSearch: true });
    }
    closeMobileGooglePlaceSearch = () => {
        console.log('close');
        // open the mobile search panel
        this.setState({ isMobileSearch: false });
    }

    getSuggestedParkings = () => {
        this.setState({
            parkingItems: [
                { id: 0 },
                { id: 1 },
                { id: 2 },
                { id: 3 },
                { id: 3 },
                { id: 3 },
            ]
        })
        setTimeout(
            function () {
                if (this.state.parkingItems.length < 3) {
                    this.setState({ rightArrow: false })
                }
                else {
                    this.setState({ rightArrow: true })
                }
            }
                .bind(this),
            1500
        );

    }
    clickSuggestionsLeftArrow = () => {
        var targetDiv = this.homeRef.current;
        targetDiv.scrollLeft -= 150;

        if (targetDiv.scrollLeft < this.state.scrollRightVal) {
            this.setState({ scrollRightVal: targetDiv.scrollLeft });
            this.setState({ rightArrow: true });
        }
        if (targetDiv.scrollLeft === this.state.scrollRightVal && targetDiv.scrollLeft !== 0) {
            this.setState({ scrollRightVal: targetDiv.scrollLeft });
            this.setState({ rightArrow: true });
        }
        if (targetDiv.scrollLeft === 0) {
            this.setState({ leftArrow: false });
        }
    }
    clickSuggestionsRightArrow = () => {
        var targetDiv = this.homeRef.current;
        targetDiv.scrollLeft += 150;
        if (this.state.scrollDivWidth <= this.state.parkingSuggDivMaxWidth) {
            this.setState({ leftArrow: true });
        }
        else {
            this.setState({ leftArrow: false });
        }
        if (targetDiv.scrollLeft > this.state.scrollRightVal) {
            this.setState({ scrollRightVal: targetDiv.scrollLeft });
            this.setState({ rightArrow: true });
            this.setState({ leftArrow: true });
        }
        if (targetDiv.scrollLeft === this.state.scrollRightVal && targetDiv.scrollLeft !== 0) {
            this.setState({ scrollRightVal: targetDiv.scrollLeft });
            this.setState({ rightArrow: false });
            this.setState({ leftArrow: true });
        }
        if (targetDiv.scrollLeft > 0) {
            this.setState({ leftArrow: true });
        }
    }
    render() {
        return (
            <React.Fragment>
                <div className="pfr_homeDiv1">
                    {this.state.isMobileSearch &&
                        <GSearch
                            onClose={this.closeMobileGooglePlaceSearch}
                            address={this.state.address}
                            handleGooglePlaceChange={this.handleGooglePlaceChange}
                            handleGooglePlaceSelect={this.handleGooglePlaceSelect}
                            handleGooglePlaceError={this.handleGooglePlaceError}
                        />
                    }
                    <div className="pfr_homeDivForm">
                        <div className="pfr_homeFormBack">
                            <Container fluid>
                                <Row className="pfr_homeInputRow pfr_homeMainDiv">
                                    <Col className="p-0">
                                        <h1 className="pfr_homeHeading">123</h1>
                                    </Col>
                                </Row>
                                <Row className="d-none d-md-flex pfr_homeInputRow">
                                    <Col className="pfr_homeInputCol p-0">
                                        <div className="p-0 pfr_homeInputDiv">
                                            <InputGroup className="pfr_homeInput pfr_homeInput1">
                                                <InputGroup.Text id="searchforminput_1">
                                                    <img
                                                        src={require('../../../assets/img/location_icon.png').default}
                                                        className=""
                                                        alt="ParkingAeroPortFr"
                                                    />
                                                </InputGroup.Text>
                                                <PlacesAutocomplete
                                                    value={this.state.address}
                                                    onChange={this.handleGooglePlaceChange}
                                                    onSelect={this.handleGooglePlaceSelect}
                                                    searchOptions={{
                                                        componentRestrictions: { country: ['fr'] }
                                                    }}
                                                    onError={this.handleGooglePlaceError}
                                                >
                                                    {({ getInputProps, suggestions, getSuggestionItemProps, loading }) => (
                                                        <React.Fragment>
                                                            <FormControl
                                                                {...getInputProps({
                                                                    placeholder: 'Saisissez une destination',
                                                                    className: 'pfr_homeLocationSearchInput',
                                                                })}
                                                                className='pfr_homeLocationSearchInput shadow-none'
                                                                placeholder="Saisissez une destination"
                                                                aria-label="Saisissez une destination"
                                                                aria-describedby="searchforminput_1"
                                                            />
                                                            <div className="pfr_homeAutocompleteDropdownContainer">
                                                                {loading && <div className='pfr_homeLocationLoading'><Spinner animation="border" size='sm' variant='light' /></div>}
                                                                {suggestions.map((suggestion, sindx) => {
                                                                    let iconmap = 'location_icon';
                                                                    suggestion.types.map((x, index) => {
                                                                        if (x === 'airport') {
                                                                            iconmap = 'plane_icon'
                                                                        }
                                                                        return true;
                                                                    })
                                                                    const className = suggestion.active
                                                                        ? 'pfr_homePlacesSearchItemActive'
                                                                        : 'pfr_homePlacesSearchItem';

                                                                    // inline style for demonstration purpose
                                                                    const style = suggestion.active
                                                                        ? { backgroundColor: '#e3e3e3', cursor: 'pointer' }
                                                                        : { backgroundColor: '#ffffff', cursor: 'pointer' };

                                                                    return (
                                                                        <div
                                                                            {...getSuggestionItemProps(suggestion, {
                                                                                className,
                                                                                style,
                                                                            })}
                                                                            key={sindx}
                                                                        >
                                                                            <div className="pfr_homePlacesSearchItemIcon">
                                                                                <img
                                                                                    src={require('../../../assets/img/' + iconmap + '.png').default}
                                                                                    className=""
                                                                                    alt="ParkingAeroPortFr"
                                                                                />
                                                                            </div>
                                                                            <div className="pfr_homePlacesSearchItemTxt">
                                                                                <span className="pfr_homePlacesSearchItemTxt1">{suggestion.formattedSuggestion.mainText}</span>
                                                                                <span className="pfr_homePlacesSearchItemTxt2">{suggestion.formattedSuggestion.secondaryText}</span>
                                                                            </div>
                                                                        </div>
                                                                    );
                                                                })}
                                                            </div>
                                                        </React.Fragment>
                                                    )}
                                                </PlacesAutocomplete>
                                            </InputGroup>
                                        </div>
                                        <div className="p-0 pfr_homeInputDiv">
                                            <InputGroup className="pfr_homeInput pfr_homeInput2">
                                                <InputGroup.Text id="searchforminput_2">
                                                    <img
                                                        src={require('../../../assets/img/date_icon.png').default}
                                                        className=""
                                                        alt="ParkingAeroPortFr"
                                                    />
                                                </InputGroup.Text>
                                                <Form.Select aria-label="Date entrée et sortie" aria-describedby="searchforminput_2" className='shadow-none'>
                                                    <option>Date entrée et sortie</option>
                                                </Form.Select>
                                            </InputGroup>
                                        </div>
                                        <div className="p-0 pfr_homeInputDiv">
                                            <Button variant="dark" type="submit" className="pfr_homeSubmitBtn shadow-none">Trouver un parking</Button>
                                        </div>
                                    </Col>
                                </Row>
                                <Row className="d-md-none d-lg-none d-flex pfr_homeInputRow">
                                    <Col className="pfr_homeInputCol p-0">
                                        <InputGroup className="pfr_homeInput pfr_homeInputMbl">
                                            <InputGroup.Text id="searchforminput_3">
                                                <img
                                                    src={require('../../../assets/img/search_icon.png').default}
                                                    className=""
                                                    alt="ParkingAeroPortFr"
                                                />
                                            </InputGroup.Text>
                                            <FormControl
                                                onClick={this.openMobileGooglePlaceSearch}
                                                className='shadow-none'
                                                readOnly={true}
                                                placeholder="Réserver un parking"
                                                aria-label="Réserver un parking"
                                                aria-describedby="searchforminput_3"
                                            />
                                        </InputGroup>
                                    </Col>
                                </Row>
                            </Container>
                        </div>
                    </div>
                    <div className="pfr_homeMapDiv">
                        <div style={{ position: 'relative' }}>
                            <GMap mapData={this.state.markerList} />
                            <div className="pfr_homeMapOverlay" />
                        </div>
                    </div>
                    <div className="pfr_homeParkingSuggestion" style={{ maxWidth: this.state.parkingSuggDivMaxWidth + 'px' }}>
                        <div>
                            <Row className="m-0">
                                <Col className="p-0">
                                    <h2 className="pfr_homeParkingh2">Parking aéroport Toulouse</h2>
                                </Col>
                            </Row>
                            <Row className="m-0">
                                <Col className="pfr_homeParkingCol p-0" ref={this.homeRef}>
                                    {
                                        this.state.parkingItems.map((parking, index) => (
                                            <div className="pfr_homeParkingDiv" key={index}>
                                                <div>
                                                    <div className="pfr_homeParkingSubDiv1">
                                                        <span>parking extérieur</span>
                                                    </div>
                                                    <h2 className="pfr_homeParkingDivH2">Name parking</h2>
                                                    <div className="pfr_homeParkingSubDiv2">
                                                        <img
                                                            src={require('../../../assets/img/plane_icon.png').default}
                                                            className=""
                                                            alt="ParkingAeroPortFr"
                                                        />
                                                        <span>1,0km</span>
                                                    </div>
                                                    <div className="pfr_homeParkingSubDiv2Mbl">
                                                        <div className="pfr_homeParkingSubDiv2MblSubDiv">
                                                            <img
                                                                src={require('../../../assets/img/star_icon.png').default}
                                                                className=""
                                                                alt="ParkingAeroPortFr"
                                                            />
                                                            <span>5.0</span>
                                                        </div>
                                                        <div className="pfr_homeParkingSubDiv2MblSubDiv">
                                                            <img
                                                                src={require('../../../assets/img/plane_icon.png').default}
                                                                className=""
                                                                alt="ParkingAeroPortFr"
                                                            />
                                                            <span>1,0km</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ))
                                    }
                                </Col>
                            </Row>
                            {this.state.leftArrow && <i className="fa fa-arrow-left pfr_homeParkingArrowLeft" aria-hidden="true" onClick={this.clickSuggestionsLeftArrow}></i>}
                            {this.state.rightArrow && <i className="fa fa-arrow-right pfr_homeParkingArrowRight" aria-hidden="true" onClick={this.clickSuggestionsRightArrow}></i>}
                        </div>
                    </div>
                </div>
                <MobileFooter onOpen={this.openMobileGooglePlaceSearch} isPage="home" />
            </React.Fragment>
        );
    }
}

export default HomePage;