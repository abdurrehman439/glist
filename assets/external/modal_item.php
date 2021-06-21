<?php

$currentLocation = "";

// ---------------------------------------------------------------------------------------------------------------------
// Here comes your script for loading from the database.
// ---------------------------------------------------------------------------------------------------------------------

// Remove this example in your live site and replace it with a connection to database //////////////////////////////////

ob_start();
include 'data.php';
ob_end_clean();

for( $i=0; $i < count($data); $i++){
    if( $data[$i]['id'] == $_POST['id'] ){
        $currentLocation = $data[$i]; // Loaded data must be stored in the "$currentLocation" variable
    }
}

// End of example //////////////////////////////////////////////////////////////////////////////////////////////////////

// Modal HTML code

$latitude = "";
$longitude = "";
$address = "";

if( !empty($currentLocation['latitude']) ){
    $latitude = $currentLocation['latitude'];
}

if( !empty($currentLocation['longitude']) ){
    $longitude = $currentLocation['longitude'];
}

if( !empty($currentLocation['address']) ){
    $address = $currentLocation['address'];
}

echo

'<div class="modal-item-detail modal-dialog" style="width:400px;" role="document" data-latitude="'. $latitude .'" data-longitude="'. $longitude .'" data-address="'. $address .'">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2 style="text-align:center;">'. 'Coming Soon' .'</h2>';
                echo '
            </div>
            <!--end section-title-->
        </div>
        <!--end modal-header-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->
';