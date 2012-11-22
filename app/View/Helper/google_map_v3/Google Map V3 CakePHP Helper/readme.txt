CAKEPHP GOOGLE MAPS API V3 HELPER
by Marc Fernandez

INSTRUCTIONS

Step 1:
Download the helper from: http://www.marcfg.com/portfolio/files/google_map_v3.php

Step 2:
Place it in the folder app/views/helpers/

Step 3:
In your Controller add the helper

var $helpers = array('GoogleMapV3'); 

Step 4:
In your View
Add the map:

echo $googleMapV3->map();  

Add a marker:

echo $googleMapV3->addMarker(array('latitude'=>40.69847,'longitude'=>-73.9514)); 

See the file for more flexible options
