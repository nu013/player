<?php
// checkApp.php
// যদি user device থেকে app request আসে (custom header বা token দ্বারা detect)
if(isset($_GET['app_installed']) && $_GET['app_installed'] === "1"){
    echo json_encode(['installed' => true]);
} else {
    echo json_encode(['installed' => false]);
}
?>
