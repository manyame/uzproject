<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
   integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
   integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
   crossorigin=""></script>
   <style type="text/css">
   		#map{ height: 600px; }
   		#map{ width: 600px; }
   		#map{ margin: 0 auto; }

   </style>

	<title>
		Map
	</title>
</head>
<body>


 <?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'applicant'; 
 
/* End config */
 
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        for ($i=0; $i <7 ; $i++) { 
        	// code...
		$result = $db->prepare("SELECT latitude, longitude FROM personal_details WHERE applicant_id={$i}");

  		}
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){




        


	 echo $row['latitude'];
				echo	'<div id="map"></div>';
			  echo  '<script type="text/javascript">';
			echo	 	"var map = L.map('map').setView([-19.505, 29.90], 6.4);";
				echo 	"L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {";
			    echo "maxZoom: 19,";
			    echo "attribution: '© OpenStreetMap'";
				echo "}).addTo(map);";

        
            


				echo "var marker =L.marker([";
				echo $row['latitude'];
				echo ",";
				echo $row['longitude'];
				echo "]).addTo(map);";
                
            	echo "var marker =L.marker([-18.505,29.09]).addTo(map);";
            	echo "var marker =L.marker([-19.905,30.89]).addTo(map);";
            	echo "var marker =L.marker([-18.905,28.89]).addTo(map);";
            	echo "var marker =L.marker([-18.305,28.89]).addTo(map);";
            	echo "var marker =L.marker([-18.505,28.89]).addTo(map)";
            	

				 echo "</script>"




		 ?>
		

	<?php
		}
	?>


</body>
</html>

