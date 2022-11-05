<?php
    
    function yourClients() {
        include('db.php');

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
                    <span class="fw-bolder">Email: </span>
                    <?php echo $row['email']; ?>
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
        <?php } 
    } ?>

<?php

    function addingClients($id = null) { ?>

        <div class="form-group row my-3">
            <label class="col-sm-4 col-lg-4 col-form-label">Client Name:</label>
            <div class="col-sm-8 col-lg-8">
                <input 
                    type="text" 
                    name="client_name"
                    class="form-control" 
                    placeholder="Client Name" 
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
                    placeholder="Cellphone number"
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
                    placeholder="email@email.com"
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
                    placeholder="Client Description"
                ></textarea>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-sm-4 col-lg-4 col-form-label">Profile Image:</label>
            <div class="col-sm-8 col-lg-8">
                <input 
                    type="file" 
                    name="image" 
                    class="form-control" 
                >
            </div>
        </div>

    <?php }
?>