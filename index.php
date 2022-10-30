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
            <ul class="clients-list">
                <?php

                    $query = "SELECT * FROM clients";
                    $clientsData = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_array($clientsData)) { ?>
                        <div class= "client p-3">
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
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                                <i class="fa-solid fa-marker"></i>
                            </a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </div>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

