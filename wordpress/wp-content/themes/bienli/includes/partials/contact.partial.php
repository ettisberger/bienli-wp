<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>

<script type="application/javascript">
    var xmlhttp = new XMLHttpRequest();
    var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + <?php echo json_encode($params['adresse']); ?>;

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            myArr = JSON.parse(xmlhttp.responseText);
            var lat = myArr['results'][0]['geometry']['location']['lat'];
            var lng = myArr['results'][0]['geometry']['location']['lng'];

            google.maps.event.addDomListener(window, 'load', init(lat, lng));
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    function init(lat, lng) {
        var mapOptions = {
            center: new google.maps.LatLng(lat, lng),
            zoom: 15
        }
        var map = new google.maps.Map(document.getElementById('bienli-contact-google-maps'), mapOptions);

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lng),
            map: map,
            title: <?php echo json_encode($params['marker-title']); ?>
        });
    }
</script>

<div class="bienli-contact">
    <div class="bienli-inlay">
        <div class="bienli-row bienli-row-hcenter bienli-row-padding">
            <div class="bienli-column-8 bienli-column-phone-12">
                <div id='bienli-contact-google-maps'></div>
            </div>
            <div class="bienli-column-4 bienli-column-phone-12">
                <div>
                    <?php echo $params['content']; ?>
                </div>
            </div>
        </div>
    </div>
</div>