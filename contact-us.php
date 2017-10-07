<?php require_once("includes/header.php") ?>
	<!-- 14.663284, 121.009600 -->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIiIvAXZx5U-KCX8TQGkviHIJ0AGT0jJk&callback=myMap"></script>

<script>
var myCenter= new google.maps.LatLng(14.663284, 121.009600);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
	<div class="container backdrop">
		<div class="row">
			<div class="col-md-8">
			<h2><span class="glyphicons glyphicons-road"></span> MAP </h2>	
			<div id="googleMap" style="width:100%;height:380px;"></div>
			</div>
			<div class="col-md-4">

                <h2>CONTACT INFO</h2>
                <address>
                    <span class="glyphicon glyphicons-cars"></span><strong> Address</strong>:
                    <br>No. 55 Howmart Road, Baesa Quezon City 
                    
                    <br>
                </address>
                <address>
                    <abbr title="Phone"> </abbr> <span class="glyphicon glyphicon-phone"></span> <strong>Phone</strong>:
                    <br>
                    (632) 294-1528, 294-1238, 294-1092, 294-1665 <br>
                    <br>
                    <abbr title="Email"></abbr><span class="glyphicon glyphicon-envelope"></span> <strong>Email</strong>: 

                    <br> airmovementinc@gmail.com 
                    <br><br>
                    <abbr title="Fax"> </abbr> <span class="glyphicon glyphicon-phone"></span> <strong>Fax</strong>:
                    <br> (632) 330-0452
                </address>

			</div>

		</div>

	</div>



    <!-- Footer -->
<?php require_once("includes/footer.php") ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>