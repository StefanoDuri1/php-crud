<?php include('db.php');?>
<?php include('includes/header.php'); ?>

<h1 class='text-center my-5 title'>CLIENTS LIST ADMINISTRATOR</h1>

<div class="container bg-white mt-5 p-5">

    <?php include("validateForm.php");?>

    <div class='row'>
        <div class="col-md-6">
            <?php include('form.php'); ?>
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

<?php include('includes/footer.php'); ?>

