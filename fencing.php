<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChc93JKTU0BEq4WiZ7XIDS8oy5JWEM9UM&callback=initMap">
</script>


<style type="text/css">
  
.button{
  background: #3498db;
    color: #fff;
    border-radius: 50px;
    margin: 0 15px;
    padding: 10px 30px; 
}
  
.counts .count-box span {
    font-size: 32px;
    line-height: 30px;
    display: block;
    font-weight: 700;
    color: #2f4d5a;
    /* margin-top: 42px; */
    /* margin-left: 60px; */
}

#map{
  margin-top: 70px;
  height: 650px;
  width: 100%
}


</style>

<br><br><br><br>

  <h1 style="margin-left: 10px;">Cluster GeoFencing</h1>
  
    <div class="card-deck col-lg-12"> 

    <div class=" card col-lg-6">
        
            <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-xl-12 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">

                <div class="col-md-12 ">
                  <div class="count-box">
                    <br><br>
                    <h5><strong>Current Location</strong> </h5>
                     <h6 id="show">locating...</h6>
                  </div>
                </div>

                <div class="col-md-12 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                     <h5><strong>Distance from the containment zone: </strong> </h5>
                    <span data-toggle="counter-up" id="distance" >0</span>
                    
                  </div>
                </div>

                 <div class="col-md-12 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <br>
                     <h5><strong>&nbsp; Are we inside the zone?</strong> </h5>
                    <span id="message">detecting....</span>
                    
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>

      </div>
    </section> 

    </div> 

    <div class=" card col-lg-6">
      <div id="map"></div>
      
    </div> 

    </div>   
<br><br>
    <script type="text/javascript" src="js/fence.js"></script>




<script type="text/javascript">
  function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 3,
    center: {lat: -28.024, lng: 140.887}
  });

  // Create an array of alphabetical characters used to label the markers.
  var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  // Add some markers to the map.
  // Note: The code uses the JavaScript Array.prototype.map() method to
  // create an array of markers based on a given "locations" array.
  // The map() method here has nothing to do with the Google Maps API.
  var markers = locations.map(function(location, i) {
    return new google.maps.Marker({
      position: location,
      label: labels[i % labels.length]
    });
  });

  // Add a marker clusterer to manage the markers.
  var markerCluster = new MarkerClusterer(map, markers,
      {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}
var locations = [
  {lat: -31.563910, lng: 147.154312},
  {lat: -33.718234, lng: 150.363181},
  {lat: -33.727111, lng: 150.371124},
  {lat: -33.848588, lng: 151.209834},
  {lat: -33.851702, lng: 151.216968},
  {lat: -34.671264, lng: 150.863657},
  {lat: -35.304724, lng: 148.662905},
  {lat: -36.817685, lng: 175.699196},
  {lat: -36.828611, lng: 175.790222},
  {lat: -37.750000, lng: 145.116667},
  {lat: -37.759859, lng: 145.128708},
  {lat: -37.765015, lng: 145.133858},
  {lat: -37.770104, lng: 145.143299},
  {lat: -37.773700, lng: 145.145187},
  {lat: -37.774785, lng: 145.137978},
  {lat: -37.819616, lng: 144.968119},
  {lat: -38.330766, lng: 144.695692},
  {lat: -39.927193, lng: 175.053218},
  {lat: -41.330162, lng: 174.865694},
  {lat: -42.734358, lng: 147.439506},
  {lat: -42.734358, lng: 147.501315},
  {lat: -42.735258, lng: 147.438000},
  {lat: -43.999792, lng: 170.463352}
]
</script>

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>




