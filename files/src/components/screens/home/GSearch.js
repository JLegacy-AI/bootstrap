import React, { Component } from 'react';
import { FormControl, InputGroup } from 'react-bootstrap';
import PlacesAutocomplete from 'react-places-autocomplete';
import './home-page.css';
import './home-gsearch.css';

class GSearch extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }
    componentDidMount() {
        document.body.style.overflow = 'hidden';
    }

    componentWillUnmount() {
        document.body.style.overflow = 'unset';
    }

    render() {
        return (
            <div className='pfr_mblHomeGSearchDiv'>
                <div className="p-0 pfr_mblHomeGSearchSubDiv">
                    <InputGroup className="pfr_homeInput pfr_mblHomeInput">
                        <InputGroup.Text id="searchforminput_1" onClick={this.props.onClose}>
                            <img
                                src={require('../../../assets/img/back_arrow.png').default}
                                className="pfr_back_iconimg_mbl"
                                alt="ParkingAeroPortFr"
                            />
                        </InputGroup.Text>
                        <PlacesAutocomplete
                            value={this.props.address}
                            onChange={this.props.handleGooglePlaceChange}
                            onSelect={this.props.handleGooglePlaceSelect}
                            searchOptions={{
                                componentRestrictions: { country: ['fr'] }
                            }}
                            onError={this.props.handleGooglePlaceError}
                        >
                            {({ getInputProps, suggestions, getSuggestionItemProps, loading }) => (
                                <React.Fragment>
                                    <FormControl
                                        {...getInputProps({
                                            placeholder: 'Où voulez-vous vous garer ? ',
                                            className: 'pfr_homeLocationSearchInput',
                                        })}
                                        className='pfr_homeLocationSearchInput shadow-none'
                                        placeholder="Où voulez-vous vous garer ? "
                                        aria-label="Où voulez-vous vous garer ? "
                                        aria-describedby="searchforminput_1"
                                        autoFocus={true}
                                    />
                                    <div className="pfr_homeAutocompleteDropdownContainer">
                                        {/* {loading && <div className='pfr_homeLocationLoading'><Spinner animation="border" size='sm' variant='dark' /></div>} */}
                                        {suggestions.map((suggestion, sindx) => {
                                            let iconmap = 'location_icon';
                                            suggestion.types.map(x => {
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
            </div>
        );
    }
}
export default GSearch;