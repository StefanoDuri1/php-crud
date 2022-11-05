<?php
    if(isset($_POST['submit']) || isset($_POST['edit'])) {

        $imageName = $_FILES['image']['name'];
        $imageSize = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
    
        $imageExt = pathinfo($imageName, PATHINFO_EXTENSION);
        $imageExtLc = strtolower($imageExt);
    
        $imageAllowed = array('png', 'jpg', 'jpeg', 'webp');

        if(in_array($imageExt, $imageAllowed)) {
            $newImageName = uniqid('IMG-', true).'.'.$imageExtLc;
            $imageUpload = "uploads/" . $newImageName;
            move_uploaded_file($tmp_name, $imageUpload);
        }
    }
?>