<?php
use FileUploader;

$uploadFile = new FileUploader();
$fileName = $uploadFile->uploadFile(__DIR__, 2048000, $_FILES['file'], uniqid('file_'));

$data['link'] = $fileName['filename'];

header('Content-type: application/json');
//Returning a JSON data to plugin
echo json_encode($data);
exit;