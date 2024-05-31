<?php
$url = $_GET['url'];
if (isset($url)) {
    header('Content-Type: application/json');
    echo file_get_contents($url);
} else {
    http_response_code(400);
    echo json_encode(array('error' => 'URL parameter is missing'));
}
?>
