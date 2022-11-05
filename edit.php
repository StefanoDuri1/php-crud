<?php
    include('db.php');
    include('functions.php');
    include('upload.php');

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
            $image = $row['image'];
        }
    }

    if(isset($_POST['edit'])) {
        $id = $_GET['id'];
        $client_name = $_POST['client_name'];
        $cellphone = $_POST['cellphone'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $image = $newImageName;

        $query = "UPDATE clients set client_name = '$client_name', cellphone = '$cellphone', email = '$email', description = '$description', image = '$newImageName' WHERE id = $id";
        mysqli_query($connection, $query);
        header('Location: index.php');
    }

?>

<?php include("includes/header.php"); ?>

<h1 class='text-center my-5 title'>EDIT YOUR CLIENTS</h1>

<div class="container bg-white mt-5 p-5">
    <div class='row'>
        <div class="col-md-6">
            <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST" enctype="multipart/form-data">
                <h3 class="mb-4">Edit here</h3>

                <?php addingClients($_GET['id']); ?>
                <div class="form-group">
                    <input type="submit" value="Edit Client" name="edit" class="btn btn-outline-success w-100 d-block" />
                </div>
            </form>
        </div>

        <div class="col-md-6">
                <h3 class="mb-4">Your Clients</h3>
                <ul class="list-group">
                    <?php yourClients(); ?>
                </ul>
            </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>