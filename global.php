<?php
<<<<<<< Updated upstream
    $BASE_URL = "/nhom1-du-an-mau";
    $CONTENT_URL = "$BASE_URL/content";
    $ADMIN_URL = "$BASE_URL/admin";
    $SITE_URL = "$BASE_URL/site";

    function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
    }

?>
=======
$BASE_URL = "/nhom1-du-an-mau";
$CONTENT_URL = "$BASE_URL/content";
$ADMIN_URL = "$BASE_URL/admin";
$SITE_URL = "$BASE_URL/site";

function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
}



?>
>>>>>>> Stashed changes
