<footer class="bg-dark text-white p-md-4 container-fluid">
    <div class="row">
    
      <div class="col-md-8">
          <div id="googleMap" style="width:100%;height:200px;">
          
          </div>
          <script>
            function myMap() {
            var mapProp= {
            center:new google.maps.LatLng(-42.9114700, -71.3194700),
            zoom:10,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzYei32l-gSTdBoiIbisGgg2cBwPutAf4&callback=myMap"></script>

      </div>
      <div class="col-md-4">
        <h4><p>Escuela 713</p></h4>
        <h6><p>Alsina 2252, 9200 Esquel</p></h6>
        <h6><p>02945-451395</p></h6>
        <br><br>
        <h6> <center>
            <button class="w3-btn w3-white w3-round-large">
                <a  href="https://www.facebook.com/escuela713/?ref=br_rs" target="_blak"> <i class='fab fa-facebook' style='font-size:36px'></i> </a>
              </button>
            </center>
        </h6>
      </div>
   </div>

</footer>