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