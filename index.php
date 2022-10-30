<?php include('db.php');?>
<?php include('includes/header.php'); ?>

<h1 class='text-center my-5 title'>CLIENTS LIST ADMINISTRATOR</h1>

<div class="container bg-white mt-5  p-5">
    <div class='row'>
        <div class="col-md-6">
            <form action="index.php" method="POST">
            <h3 class="mb-4">Client Information</h3>

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

            <div class="form-group">
                <input type="submit" value="Create Client" name="submit" class="btn btn-outline-success w-100 d-block" />
            </div>
        </form>
        </div>
        <div class="col-md-6">
            <h3 class="mb-4">Your Clients</h3>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

