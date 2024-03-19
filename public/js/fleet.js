$(document).ready(function () {
    var url = window.location.href;
    var pathParts = url.split('/');
    var desiredPart = pathParts.find(part => part === "fleet");
    var lastPart = url.substr(url.lastIndexOf('/') + 1);
    if (desiredPart === "fleet") {
        $.ajax({
            type: "GET",
            url: "https://flyingwithdragonfly.com/phpactions/Actions/fleets.php",
            data: {
                single_fleet: lastPart,
                fleet: desiredPart,
            },
            success: function (response) {
                const separateJSONObjects = response.match(/\{.*?\}/g);
                const parsedObjects = separateJSONObjects.map(jsonString => JSON.parse(jsonString));
                parsedObjects.forEach(obj => {
                    document.getElementById('page_title').innerText = obj.title;
                    document.getElementById('page_image').innerHTML = `<img src="https://flyingwithdragonfly.com/typo3_site/fileadmin/${obj.identifier}"
                                 loading="lazy">`;
                });
            }
        })
    }
    if(lastPart==="fleet")
    {
        $.ajax({
            type: "GET",
            url: "https://flyingwithdragonfly.com/phpactions/Actions/all_fleet.php",
            success: function (response) {
                let fleets = '';
                const separateJSONObjects = response.match(/\{.*?\}/g);
                const parsedObjects = separateJSONObjects.map(jsonString => JSON.parse(jsonString));
                parsedObjects.forEach(obj => {
                    fleets +=`<li data-aos="fade-up">
                        <figure><img src="https://flyingwithdragonfly.com/typo3_site/fileadmin/${obj.identifier}"></figure>
                        <div class="fleet-details">
                            <div class="fleet-title">
                                <h3>${obj.title}</h3>
                                <h4>Seating Capacity:</h4>
                            </div>
                            <div class="fleet-classes-columns">
                                <div class="fleet-class-column1">
                                    <figure><i class="fi fi-tr-person-seat-reclined"></i></figure>
                                    <b>
                                        <h4>30</h4>
                                        <p>Business Class</p>
                                    </b>

                                </div>
                                <div class="fleet-class-column2">
                                    <figure><i class="fi fi-br-person-seat-reclined"></i></figure>
                                    <b>
                                        <h4>244</h4>
                                        <p>Economy Class</p>
                                    </b>

                                </div>

                            </div>
                            <div class="fleet-ordered-lists">
                                <ol>
                                    <li>Cargo Capacity 132.20m³</li>
                                    <li>Overall Length 63.69m</li>
                                    <li>Wingspan 60.30m</li>
                                    <li>Overall Height 17.18m</li>
                                    <li>Cabin Width 5.18m (Inside)</li>
                                    <li>Cabin Height 2.38m (Floor to ceiling)</li>
                                    <li>Max. Takeoff Weight 235t</li>
                                    <li>Cruising Speed / Max. Speed 1062.kph</li>
                                </ol>
                                <div class="fleet-learn-more"><a href="https://flyingwithdragonfly.com/typo3_site${obj.slug}">Learn More</a></div>
                            </div>

                        </div>
                    </li>`;
                });
                document.getElementById('fleets_list').innerHTML  = fleets;
            }
        })
    }
})
