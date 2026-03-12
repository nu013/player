<?php
// checkAppInstalled.php
// App থেকে ping এ server জানাবে যে app installed
// cookie বা localStorage এর জন্য client-side JS read করবে

header("Content-Type: application/json");

// Default false
$installed = false;

// Example: app sends ?device_id=xxxx when installed
if(isset($_GET['device_id']) && !empty($_GET['device_id'])){
    // Server can store device_id in database if needed
    $installed = true;
}

echo json_encode(['installed' => $installed]);
?>
