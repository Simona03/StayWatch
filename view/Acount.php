<?php 
session_start();
setcookie("image_name",$_SESSION['image'],36000)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="../tools/css/acount.css">
    <title>Profile</title>
</head>
<style>
 
</style>
<body style="background-color: #eee;color:black;">
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="../php/functions/image/<?php echo $_SESSION['image'] ?>"
                class="rounded-circle img-fluid" width="100" height="100" />
            </div>
            <h4 class="mb-2"><?php echo $_SESSION['name'] ?></h4>
            <p class="text-muted mb-4"><?php echo $_SESSION['email'] ?></p>
           
            <button type="button" onclick="window.location='../index.php'" class="btn btn-primary btn-rounded btn-lg">
              Back
            </button>
            <button type="button" onclick="window.location='ProfileUpdate.php'" class="btn btn-primary btn-rounded btn-lg">
              Edit
            </button>
            <div class="justify-content-between text-center mt-5 mb-2">
              
              <div class="px-3">
                <p class="mb-2 h5">Subscribe to</p>
                <p class="text-muted mb-0"><?php echo date("d/m/Y") ?></p>
              </div>
             
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
</html>