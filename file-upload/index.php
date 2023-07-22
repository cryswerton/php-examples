<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Select a file:</label>
        <input type="file" id="file" name="file" accept=".jpg, .jpeg, .png, .gif">
        <br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
