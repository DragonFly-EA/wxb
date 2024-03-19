function getSliders() {
    $.getJSON("https://flyingwithdragonfly.com/phpactions/Actions/sliders.php", function (sliders) {
        let slider_output = "";
        for (var i = 0; i < sliders.length; i++) {
            const activeClass = i === 0 ? "active" : "";
            slider_output += `
                        <li style="float: left; list-style: none; position: relative; width: 1920px;" class="bx-clone" aria-hidden="true">
                            <img src="https://flyingwithdragonfly.com/typo3_site/fileadmin/${sliders[i].identifier}" alt="slider1">
                            <div class="bx-caption">
                                <div class="display-caption">
                                    <div class="slider-vertical">
                                        <h1>${sliders[i].title}</h1>
                                        <p>${sliders[i].description}</p>
                                        <a href="${sliders[i].alternative}">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </li>`;
        }
        document.getElementById('slider_output').innerHTML = slider_output;
    });
}
function getServiceSliders() {
    $.getJSON("https://flyingwithdragonfly.com/phpactions/Actions/service_slider.php", function (sliders) {
        let slider_output = "";
        slider_output +=`<div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 465.117px;">`
        slider_output +=`<ul class="bxslider" style="width: 3215%; position: relative; transition-duration: 0s;">`
        for (var i = 0; i < sliders.length; i++) {
            const activeClass = i === 0 ? "active" : "";
            slider_output += `
                    <li style="float: left; list-style: none; position: relative; width: 1920px;">
                        <img src="https://flyingwithdragonfly.com/typo3_site/fileadmin/${sliders[i].identifier}"/>
                        <div class="bx-caption">
                            <div class="display-caption">
                                <div class="slider-vertical">
                                    <h3 data-aos="fade-right">${sliders[i].title}</h3>
                                    <p data-aos="fade-right">${sliders[i].description}</p>
                                    <a href="${sliders[i].alternative}" data-aos="fade-right">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </li>`;
        }
        slider_output+=`</ul>`;
        slider_output+=`</div>`;
        document.getElementById('service_slider_output').innerHTML = slider_output;
    });
}

getSliders();
getServiceSliders();
