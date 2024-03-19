$(document).ready(function () {
    var url = window.location.href;
    var pathParts = url.split('/');
    var desiredPart1 = pathParts.find(part => part === "fleet");
    var desiredPart2 = pathParts.find(part => part === "one-airbus-a330-aeur-300");
    var combinedDesiredParts = desiredPart1 + '/' + desiredPart2;
    var lastPart = url.substr(url.lastIndexOf('/') + 1);
    if (combinedDesiredParts.trim().toLowerCase() === "fleet/one-airbus-a330-aeur-300") {
        $.ajax({
            type: "GET",
            url: "https://flyingwithdragonfly.com/phpactions/Actions/fleets.php",
            data: {
                single_fleet: lastPart,
                fleet: combinedDesiredParts,
            },




            success: function (response) {
                //console.log(response);

                const separateJSONObjects = response.match(/\{.*?\}/g);

                if (separateJSONObjects) {
                    const parsedObjects = separateJSONObjects.map(jsonString => JSON.parse(jsonString));

                    parsedObjects.forEach(obj => {
                        //console.log(obj.identifier);
                        document.getElementById('page_title1').innerText = obj.title;
                        document.getElementById('page_image1').innerHTML = `<img src="https://flyingwithdragonfly.com/typo3_site/fileadmin/${obj.identifier}" loading="lazy">`;
                    });
                } else {
                    //console.error('No valid JSON objects found in the response:', response);
                    // Handle the error or display a message to the user
                }
            }






        })
    }




    if (combinedDesiredParts.trim().toLowerCase() === "fleet/one-airbus-a330-aeur-300") {
        $.ajax({
            type: "GET",
            url: "https://flyingwithdragonfly.com/phpactions/Actions/single_feets.php",
            data: {
                single_fleet: lastPart,
                fleet: combinedDesiredParts,
            },
                success: function (response) {
                //console.log(response);
                    const parsedObjects = JSON.parse(response).slice(1);

                    // Initialize an empty string to store the generated HTML
                    var output = "";

                    parsedObjects.forEach(obj => {
                        // Dynamically generate HTML for each item
                        output += `
      <li data-aos="zoom-in">
          <div class="single-entertainment-title">
              <figure></figure>
              <h3>${obj.header}</h3>
          </div>
          <div class="single-entertainment-details">
              <p>${obj.bodytext}</p>
          </div>
       </li>`;
                    });

                    // Set the generated HTML to the element with the ID 'entertainment_id'
                    document.getElementById('entertainment_id').innerHTML = output;
                }






        })
    }


})
