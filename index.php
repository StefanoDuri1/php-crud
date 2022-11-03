<?php include('db.php');?>
<?php include('includes/header.php'); ?>
<?php include('functions.php');?>

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
                <?php yourClients();?>
            </ul>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

