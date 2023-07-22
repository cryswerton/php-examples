<?php

require_once 'FileUpload.php';

// Example usage:
try {
    $uploadDirectory = 'uploads/';
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    $fileUploader = new FileUpload($uploadDirectory, $allowedExtensions);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
        $result = $fileUploader->uploadFile($_FILES['file']);
        echo $result;
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
