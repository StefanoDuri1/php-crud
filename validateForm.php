<?php

    include('db.php');

    if(isset($_POST['submit'])) {
        $client_name = $_POST['client_name'];
        $cellphone = $_POST['cellphone'];
        $email = $_POST['email'];
        $description = $_POST['description'];

        if(!empty($client_name) && !empty($cellphone) && !empty($email) && !empty($description)) {
            $query = "INSERT INTO clients(client_name, cellphone, email, description) VALUES('$client_name', '$cellphone', '$email', '$description')";
            $data = mysqli_query($connection, $query);

            if(!$data) {
                die('Query failed');
            }
            $_SESSION['labels'] = array();
        }else {
            if(empty($client_name)) {
                $_SESSION['labels'][] = "The name can't be empty";
            }
            if(empty($cellphone) || !is_numeric($cellphone)) {
                $_SESSION['labels'][] = "Enter a valid cellphone number";
            }
            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['labels'][] = "Enter a valid email";
            }
            if(empty($description)) {
                $_SESSION['labels'][] = "Enter a description";
            }
            }
        

        if(count($_SESSION['labels']) > 0) {
            echo "<div class='alert alert-danger mx-3 list-unstyled'>";
            for($i = 0; $i < count($_SESSION['labels']); $i++) {
                echo "<li class='text-center'>" . $_SESSION['labels'][$i] . "</li>";
            }
        }else {
            echo "<div class='alert alert-success text-center'>Client successfully created";
        }
        echo"</div>";
    }

?>