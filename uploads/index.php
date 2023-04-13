<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo getcwd();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = 'img/'; // set the directory to save uploaded files
    $fileName = basename($_FILES['uploadedFile']['name']);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileType, $allowTypes)) {
        // Upload file to the server
        if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFilePath)) {
            // Call exiftool on the uploaded file to extract metadata
            $exiftoolOutput = shell_exec('exiftool ' . $targetFilePath);

            // Display the metadata to the user
            echo "<pre>$exiftoolOutput</pre>";
        } else{
    		// There was an error uploading the file
    		$lastError = error_get_last();
    		echo "Error: " . $lastError['message'];
	}
    } else {
        echo 'Sorry, only JPG, JPEG, PNG, and GIF files are allowed to upload.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Image and Extract Metadata</title>
</head>
<body>
    <h2>Upload Image and Extract Metadata</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadedFile" required>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
