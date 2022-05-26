import React, { useEffect, useRef } from 'react';

const GMap = (props) => {
  const googleMapRef = useRef(null);
  let googleMap = null;

  useEffect(() => {
    googleMap = initGoogleMap();
    var bounds = new window.google.maps.LatLngBounds();
    props.mapData.map(x => {
      const marker = createMarker(x);
      bounds.extend(marker.position);
      return true
      // marker.addListener("click", () => {
      //   console.log(x.label);
      // });
    });
    var theCenter = bounds.getCenter();
    // TO SET ON LOAD THE MAP MARKERS POSITION
    if (window.innerWidth <= 768) {
      googleMap.fitBounds(bounds); // the map to contain all markers
    }
    else {
      // set center of map
      googleMap.setCenter({ lat: theCenter.lat(), lng: theCenter.lng() - 0.036 });
      googleMap.setZoom(14);
    }
    // ON RESIZING THE MARKER POSITIONS
    window.addEventListener('resize', () => {
      if (window.innerWidth <= 768) {
        googleMap.fitBounds(bounds); // the map to contain all markers
      }
      else {
        googleMap.setCenter({ lat: theCenter.lat(), lng: theCenter.lng() - 0.036 });
        googleMap.setZoom(14);
      }
    });

    return () => {
      window.removeEventListener('resize', () => {
        if (window.innerWidth <= 768) {
          googleMap.fitBounds(bounds); // the map to contain all markers
        }
        else {
          googleMap.setCenter({ lat: theCenter.lat(), lng: theCenter.lng() - 0.036 });
          googleMap.setZoom(14);
        }
      });
    }
  }, []);

  // initialize the google map
  const initGoogleMap = () => {
    return new window.google.maps.Map(googleMapRef.current, {
      center: { lat: 43.641296, lng: 1.370722 },
      zoom: 14,
      mapId: 'fdf14b73aa294938',
      disableDefaultUI: true,
      fullscreenControl: false,
      streetViewControl: false,
      zoomControl: false,
      scaleControl: false,
      keyboardShortcuts: false,
      draggable: false,
      draggableCursor: false,
      draggingCursor: false,
      maxZoom: 14,
      minZoom: 14,
      mapTypeControl: false,
      scrollwheel: false,
      // mapTypeId: window.google.maps.MapTypeId.ROADMAP,
      // gestureHandling: "cooperative",
      //styles: mapstyles
    });
  }

  // create marker on google map
  const createMarker = (markerObj) => new window.google.maps.Marker({
    position: { lat: markerObj.lat, lng: markerObj.lng },
    map: googleMap,
    icon: {
      url: markerObj.icon,
      // set marker width and height
      scaledSize: new window.google.maps.Size(30, 30)
    },
    // title: markerObj.text,
    // label: markerObj.label,
    // animation: window.google.maps.Animation.DROP,
  });

  return <div
    ref={googleMapRef}
    style={{ width: '100%', height: '100vh' }}
  />
}

export default GMap;