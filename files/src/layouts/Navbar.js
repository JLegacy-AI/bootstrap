import React, { Component } from 'react';
import PlacesAutocomplete, {
    geocodeByAddress,
    getLatLng,
} from 'react-places-autocomplete';
import '../assets/css/navbar.css';
import { Container, Navbar as HomeNavbar, Row, Col, Offcanvas, Nav, Button, InputGroup, FormControl, Spinner } from 'react-bootstrap';
import { Link, NavLink } from 'react-router-dom';
import AuthModal from '../components/screens/auth/AuthModal';
const { split, startCase, isNil, includes } = require("lodash");


class Navbar extends Component {
    constructor(props) {
        super(props);
        this.state = {
            isLoginModel: false,
            userToken: null,
            routeName: '',
            pagesToShowSearchBarDesktop: ["Select Parking"],
            pagesNotToShowSearchBarMobile: ["Select Parking"],
            navbarClassName: "pfr_navbarNav"
        }
    }
    componentDidMount = () => {
        let route_name = startCase(split(this.props.locationName, '/'));
        let navbar_classname = "pfr_navbarNav";
        if (this.props.isLayoutTransparent) {
            if (includes(this.state.pagesNotToShowSearchBarMobile, route_name)) {
                navbar_classname = "pfr_navbarNav pfr_navbar_to_show_desktop";
            }
            else {
                navbar_classname = "pfr_navbarNav";
            }
        }
        else {
            if (includes(this.state.pagesNotToShowSearchBarMobile, route_name)) {
                navbar_classname = "pfr_navbarNavInnerPages pfr_navbar_to_show_desktop";
            }
            else {
                navbar_classname = "pfr_navbarNavInnerPages";
            }
        }
        this.setState({
            routeName: route_name,
            navbarClassName: navbar_classname
        })
    }
    componentDidUpdate(prevProps) {
        if (this.props.locationName !== prevProps.locationName) {
            let route_name = startCase(split(this.props.locationName, '/'));
            let navbar_classname = "pfr_navbarNav";
            if (this.props.isLayoutTransparent) {
                if (includes(this.state.pagesNotToShowSearchBarMobile, route_name)) {
                    navbar_classname = "pfr_navbarNav pfr_navbar_to_show_desktop";
                }
                else {
                    navbar_classname = "pfr_navbarNav";
                }
            }
            else {
                if (includes(this.state.pagesNotToShowSearchBarMobile, route_name)) {
                    navbar_classname = "pfr_navbarNavInnerPages pfr_navbar_to_show_desktop";
                }
                else {
                    navbar_classname = "pfr_navbarNavInnerPages";
                }
            }
            this.setState({
                routeName: route_name,
                navbarClassName: navbar_classname
            })
        }
    }
    toggleAuthModal = () => {
        this.setState(prevState => { return { isLoginModel: !prevState.isLoginModel, userToken: 'null' } })
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

    render() {
        const props = this.props;
        const state = this.state;
        return (
            <React.Fragment>
                <HomeNavbar expand={false} className={state.navbarClassName}>
                    <Container fluid>
                        <Row className="pfr_navbarRow">
                            <Col lg={includes(state.pagesToShowSearchBarDesktop, state.routeName) ? 4 : 6} md={includes(state.pagesToShowSearchBarDesktop, state.routeName) ? 4 : 6} sm={6} xs={6} className="d-flex justify-content-start">
                                <HomeNavbar.Toggle aria-controls="offcanvasNavbar" className="pfr_navbarToggle">
                                    <img
                                        src={require(`../assets/img/${props.isLayoutTransparent ? 'menu.png' : 'menu_black.png'}`).default}
                                        className=""
                                        alt="ParkingAeroPortFr"
                                    />
                                </HomeNavbar.Toggle>
                                {props.isLayoutTransparent ?
                                    <HomeNavbar.Brand href="/" className="d-flex pfr_navbarLogo">
                                        <img
                                            src={require(`../assets/img/logo.png`).default}
                                            className=""
                                            alt="ParkingAeroPortFr"
                                        />
                                    </HomeNavbar.Brand>
                                    :
                                    <React.Fragment>
                                        <HomeNavbar.Brand href="/" className="d-none d-md-flex pfr_navbarLogo">
                                            <img
                                                src={require(`../assets/img/logo.png`).default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                        </HomeNavbar.Brand>
                                        <HomeNavbar.Text className="d-md-none d-sm-flex pfr_navbarLogo">
                                            <h2>{state.routeName}</h2>
                                        </HomeNavbar.Text>
                                    </React.Fragment>
                                }
                            </Col>
                            {includes(state.pagesToShowSearchBarDesktop, state.routeName) &&
                                <Col lg={4} md={4} className="d-none d-md-flex justify-content-center">
                                    <InputGroup className="pfr_homeInput pfr_homeInput1 pfr_navbarinput">
                                        <InputGroup.Text id="searchforminput_1">
                                            <img
                                                src={require('../assets/img/search_icon.png').default}
                                                className=""
                                                alt="ParkingAeroPortFr"
                                            />
                                        </InputGroup.Text>
                                        <PlacesAutocomplete
                                            value={state.address}
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
                                                        className='pfr_homeLocationSearchInput shadow-none pfr_navbar_select_parking'
                                                        placeholder="Saisissez une destination"
                                                        aria-label="Saisissez une destination"
                                                        aria-describedby="searchforminput_1"
                                                    />
                                                    <div className="pfr_homeAutocompleteDropdownContainer" style={{ zIndex: 9999 }}>
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
                                                                            src={require('../assets/img/' + iconmap + '.png').default}
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
                                </Col>
                            }
                            <Col lg={includes(state.pagesToShowSearchBarDesktop, state.routeName) ? 4 : 6} md={includes(state.pagesToShowSearchBarDesktop, state.routeName) ? 4 : 6} sm={6} xs={6} className="d-flex justify-content-end">
                                <HomeNavbar.Text className="d-flex pfr_navbarRightTxt">
                                    {state.userToken ?
                                        <span>Name<i className="fas fa-chevron-down"></i></span>
                                        :
                                        <span onClick={this.toggleAuthModal}>Connexion</span>
                                    }
                                    <Link to="/" className='d-none d-md-flex'>Ajouter mon parking</Link>
                                </HomeNavbar.Text>
                            </Col>
                        </Row>
                        <HomeNavbar.Offcanvas
                            id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel"
                            placement="start"
                            className='pfr_navOffCanvas'
                        >
                            {state.userToken ?
                                <Offcanvas.Header className='pfr_navuseractive'>
                                    {/* <span>N</span>
                                    <h2>Bonjour Name</h2> */}
                                    <span>Name<i className="fas fa-chevron-down"></i></span>
                                </Offcanvas.Header>
                                :
                                <Offcanvas.Header className='pfr_navusernotactive'>
                                    <Button className='shadow-none' onClick={this.toggleAuthModal}>Connexion</Button>
                                    <Button className='shadow-none'>Inscription</Button>
                                </Offcanvas.Header>
                            }
                            <Offcanvas.Body className='pfr_navOffCanvasBody'>
                                <Nav className="justify-content-end flex-grow-1">
                                    <NavLink to="/" className={isNil(props.locationName) ? 'pfr_drawermenuitem activeNav' : 'pfr_drawermenuitem'}>
                                        <div className='pfr_drawermenuitemdiv'>
                                            <div className="pfr_drawermenuitem1"></div>
                                            <span>Accueil</span>
                                        </div>
                                    </NavLink>
                                    <NavLink to="/reserver" className={(props.locationName === '/reserver') ? 'pfr_drawermenuitem activeNav' : 'pfr_drawermenuitem'}>
                                        <div className='pfr_drawermenuitemdiv'>
                                            <div className="pfr_drawermenuitem2"></div>
                                            <span>Réserver</span>
                                        </div>
                                    </NavLink>
                                    <NavLink to="/favoris" className={(props.locationName === '/reservation') ? 'pfr_drawermenuitem activeNav' : 'pfr_drawermenuitem'}>
                                        <div className='pfr_drawermenuitemdiv'>
                                            <div className="pfr_drawermenuitem3"></div>
                                            <span>Mes réservations</span>
                                        </div>
                                    </NavLink>
                                    <NavLink to="/reservation" className={(props.locationName === '/favoris') ? 'pfr_drawermenuitem activeNav' : 'pfr_drawermenuitem'}>
                                        <div className='pfr_drawermenuitemdiv'>
                                            <div className="pfr_drawermenuitem4"></div>
                                            <span>Favoris</span>
                                        </div>
                                    </NavLink>
                                    <NavLink to="/plus" className={(props.locationName === '/plus') ? 'pfr_drawermenuitem activeNav' : 'pfr_drawermenuitem'}>
                                        <div className='pfr_drawermenuitemdiv'>
                                            <div className="pfr_drawermenuitem5"></div>
                                            <span>Plus</span>
                                        </div>
                                    </NavLink>
                                    <div className='pfr_drawermenuline'></div>
                                    <NavLink to="/help-center" className={(props.locationName === '/help-center') ? 'pfr_drawermenuitem activeNav' : 'pfr_drawermenuitem'}>
                                        <div className='pfr_drawermenuitemdiv'>
                                            <div className="pfr_drawermenuitem6"></div>
                                            <span>Centre d’aide</span>
                                        </div>
                                    </NavLink>
                                </Nav>
                                <div className='pfr_drawermenufooter'>
                                    <div className='pfr_drawermenufooterblue'>
                                        <h2>Génerez des revenus en louant votre parking</h2>
                                        <Button className='shadow-none' onClick={() => this.setState({ userToken: null })}>Découvrir</Button>
                                        <img
                                            src={require(`../assets/img/drawer_footer.png`).default}
                                            className=""
                                            alt="ParkingAeroPortFr"
                                        />
                                    </div>
                                    <div className='pfr_drawermenufooterblack'>
                                        <span>© 2022 Helloparking</span>
                                        <p>Conditions générales - Confidentialité - Mentions légales - Fonctionnement</p>
                                    </div>
                                </div>
                            </Offcanvas.Body>
                        </HomeNavbar.Offcanvas>
                    </Container>
                </HomeNavbar>
                <AuthModal toggleAuthModal={this.toggleAuthModal} isLoginModel={state.isLoginModel} />
            </React.Fragment>
        );
    }
}

export default Navbar;