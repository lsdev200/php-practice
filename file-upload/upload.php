<?php

$servername = "localhost";
$username = "root"; // Use your DB username
$password = ""; // Use your DB password
$dbname = "files_uploaded"; // Replace with your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check !== false) {
        echo "file in an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


if (file_exists($target_file)) {
    echo " file alredy exist.";
    $uploadOk = 0;
}


if ($_FILES["fileToUpload"]["size"] > 5 * 1024 * 1024 * 1024) {
    echo " your file is too large.";
    $uploadOk = 0;
}


if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "zip" && $imageFileType != "rar" && $imageFileType != "gz") {
    echo "only jpg, png, jpeg, gz, zip and gif file can be uploaded";
    $uploadOk = 0;
}


// Check if everything is OK before uploading
if ($uploadOk == 0) {
    echo " your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";

        // Insert file details into the database
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $filePath = $target_file;

        // SQL query to insert file data into your table
        $sql = "INSERT INTO file_uploads (file_name, file_path) VALUES ('$fileName', '$filePath')";

        if ($conn->query($sql) === TRUE) {
            echo "File details saved to the database.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    } else {
        echo ", there was an error uploading your file.";
    }
}

// Close the database connection    
$conn->close();



// How the Upload Process Works:
// File Selection: The user selects a file and submits the form.
// File Validation: The script checks:
// If the file is a valid image.
// If a file with the same name already exists.
// If the file size is acceptable.
// If the file type is allowed.
// File Upload: If all checks pass, the file is moved to the uploads/ directory.
// Feedback: The user is given a message indicating success or failure.
// Best Practices:
// Security:

// Always validate file types and sizes to avoid malicious uploads.
// Ensure that the upload directory is protected against execution of uploaded scripts by using .htaccess or similar server settings.
// User Feedback:

// Provide clear messages to users about the status of their uploads (success or errors).
// Use the htmlspecialchars() function when displaying user-uploaded file names to prevent cross-site scripting (XSS) attacks.
// Improving User Experience:

// You can improve the experience by using JavaScript to validate the file size and type before submitting the form.
// Implement file upload progress bars for a better user experience.