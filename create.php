<?php
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMessage = "All the fields are required";
            break;
        }

        //add new client to database
        $name = "";
        $email = "";
        $phone = "";
        $address = "";

        $successMessage = "Client added correctly";
    } while (false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <?php
        if(!empty($errorMessage)){
            echo "
                <div class ='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong><$errorMessage/strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }
        ?>
        <form method="post" action="">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="">
                </div>

                <?php
                    if(!empty($successMessage)){
                    echo "
                        <div class = 'row mb-3'>
                            <div class = 'offet-sm-3 col-sm-6'>
                                <div class ='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong><$sucessMessage/strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            </div>
                        </div>
                        ";
                    }
                ?>
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="/" role="button">Cancel</a>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
    
</body>
</html>