const mapContainer = document.getElementById('map-container');

const placeName = mapContainer.getAttribute('data-location');

function convertToEmbedURL(placeName) {
    const encodedPlaceName = encodeURIComponent(placeName);

    const embedURL = `https://www.google.com/maps?q=${encodedPlaceName}&output=embed&z=15`;

    return embedURL;
}

function updateMap(placeName) {
    const mapFrame = document.getElementById('mapFrame');
    const newEmbedURL = convertToEmbedURL(placeName);
    mapFrame.src = newEmbedURL;
}

updateMap(placeName);