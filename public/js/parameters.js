// JavaScript code to handle URL parameters
(function() {
    // Function to retrieve URL parameters
    function getParameterByName(name, url = window.location.href) {
        name = name.replace(/[\[\]]/g, '\\$&');
        const regex = new RegExp(`[?&]${name}(=([^&#]*)|&|#|$)`);
        const results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    // Get and use URL parameter 'param1'
    const param1Value = getParameterByName('param1');
    if (param1Value !== null) {
        // Use param1Value in your JavaScript logic (e.g., console.log, modify UI, etc.)
        console.log('Value of param1:', param1Value);
    }
})();
