<?php 

// FileUpload class responsible for handling file uploads
class FileUpload
{
    private $targetDirectory;
    private $allowedExtensions;

    public function __construct($targetDirectory, $allowedExtensions)
    {
        $this->targetDirectory = $targetDirectory;
        $this->allowedExtensions = $allowedExtensions;
    }

    public function uploadFile($file)
    {
        $uploadedFileName = $file['name'];
        $uploadedFilePath = $this->targetDirectory . basename($uploadedFileName);
        $fileExtension = strtolower(pathinfo($uploadedFilePath, PATHINFO_EXTENSION));

        // Check if the file extension is allowed
        if (!in_array($fileExtension, $this->allowedExtensions)) {
            throw new Exception("Invalid file type. Only " . implode(', ', $this->allowedExtensions) . " files are allowed.");
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($file['tmp_name'], $uploadedFilePath)) {
            return "File uploaded successfully.";
        } else {
            throw new Exception("Failed to upload the file.");
        }
    }
}

?>