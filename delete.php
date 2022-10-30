<?php
    include('db.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM clients WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Query failed');
        }

        header("Location: index.php");
    }
?>