var startTime = performance.now();
let loadTime;
document.addEventListener('readystatechange', function () {
    // Check if the readyState is 'complete'
    if (document.readyState === 'complete') {
        var endTime = performance.now();
        loadTime = endTime - startTime;
        console.log('Page load time: ' + loadTime + ' milliseconds');
    }
    setTimeout(function () {
        // Show the content
        document.getElementById('content1').classList.remove('hidden1');
        // Hide the skeleton
        document.querySelectorAll('.skeleton').forEach(function (skeleton) {
            skeleton.style.display = 'none';
        });
    }, loadTime);
});
