// API key of the google map
const GOOGLE_MAP_API_KEY = 'AIzaSyAQX52b7LqGih5YZ1ZwiNDU7GJ4zz8p0OI';

// load google map script
const loadGoogleMapScript = (callback) => {
    if (typeof window.google === 'object' && typeof window.google.maps === 'object') {
        callback();
    } else {
        const googleMapScript = document.createElement("script");
        googleMapScript.src = `https://maps.googleapis.com/maps/api/js?key=${GOOGLE_MAP_API_KEY}&libraries=places,drawing,geometry`;
        window.document.body.appendChild(googleMapScript);
        googleMapScript.addEventListener("load", callback);
    }
}
module.exports = loadGoogleMapScript;