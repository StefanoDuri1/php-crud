<?php
    include('db.php');

    if(isset($_GET['id'])) {
        include('functions.php');
        include('upload.php');

        $id = $_GET['id'];
        $selectedImg = "SELECT image FROM clients WHERE id = $id";
        $data = mysqli_query($connection, $selectedImg);
        $query = "DELETE FROM clients WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Query failed');
        }

        if(mysqli_num_rows($data) == 1) {
            unlink("uploads/".$selectedImg);
        }   

        header("Location: index.php");
    }
?>