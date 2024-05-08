<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $target_dir = "uploads/";
    $file_target = $target_dir . basename($_FILES["file"]["name"]);
    $video_target = $target_dir . basename($_FILES["video"]["name"]);

    // Save file
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $file_target) && 
        move_uploaded_file($_FILES["video"]["tmp_name"], $video_target)) {
        echo "The file ". htmlspecialchars(basename($_FILES["file"]["name"])) . " and video have been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Invalid request";
}
?>
