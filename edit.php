<?php
    include('db.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM clients WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $client_name = $row['client_name'];
            $cellphone = $row['cellphone'];
            $email = $row['email'];
            $description = $row['description'];
        }
    }

    if(isset($_POST['edit'])) {
        $id = $_GET['id'];
        $client_name = $_POST['client_name'];
        $cellphone = $_POST['cellphone'];
        $email = $_POST['email'];
        $description = $_POST['description'];

        $query = "UPDATE clients set client_name = '$client_name', cellphone = '$cellphone', email = '$email', description = '$description' WHERE id = $id";
        mysqli_query($connection, $query);
        header('Location: index.php');
    }

?>

<?php include("includes/header.php"); ?>

<h1 class='text-center my-5 title'>EDIT YOUR CLIENTS</h1>

<div class="container bg-white mt-5 p-5">
    <div class='row'>
        <div class="col-md-6">
            <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                <h3 class="mb-4">Edit here</h3>

                <div class="form-group row my-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Client Name:</label>
                    <div class="col-sm-8 col-lg-8">
                        <input 
                            type="text" 
                            name="client_name"
                            class="form-control"
                            placeholder="Update name"
                            value="<?php echo $client_name;?>"
                        >
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Cellphone:</label>
                    <div class="col-sm-8 col-lg-8">
                        <input 
                            type="tel" 
                            name="cellphone" 
                            class="form-control"  
                            placeholder="Edit cellphone"
                            value="<?php echo $cellphone;?>"
                        >
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Email:</label>
                    <div class="col-sm-8 col-lg-8">
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control" 
                            placeholder="Edit email"
                            value="<?php echo $email;?>"
                        >
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Description:</label>
                    <div class="col-sm-8 col-lg-8">
                        <textarea 
                            type="text" 
                            name="description" 
                            class="form-control"
                            rows="2"
                            placeholder="Edit Client's Description"
                        ><?php echo $description;?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Edit Client" name="edit" class="btn btn-outline-success w-100 d-block" />
                </div>
            </form>
        </div>

        <div class="col-md-6">
                <h3 class="mb-4">Your Clients</h3>
                <ul class="list-group">
                    <?php

                        $query = "SELECT * FROM clients";
                        $clientsData = mysqli_query($connection, $query);

                        while($row = mysqli_fetch_array($clientsData)) { ?>
                            <div class"info p-3">
                                <h2 class="card-title fw-bolder"> <?php echo $row['client_name'];?> </h2>
                                <p>
                                    <span class="fw-bolder">Cellphone: </span>
                                    <?php echo $row['cellphone']; ?>
                                </p>
                                <p>
                                    <span class="fw-bolder">Email: </span><?php echo $row['email']; ?>
                                </p>
                                <p>
                                    <span class="fw-bolder">Description: </span>
                                    <?php echo $row['description']; ?>
                                </p>
                            </div>
                        <?php } ?>
                </ul>
            </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>