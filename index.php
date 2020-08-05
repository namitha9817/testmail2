<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-title">
            <h2 class="text-center py-2"> Contact Us </h2>
            <hr>
            <?php
            $Message="";
              if(isset($_GET['error']))
              {
                  $Message="Please fill the blanks";
                  echo '<div class="alert alert-dager">'.$Message.'</div>';
              }

              if(isset($_GET['success']))
              {
                $Message = "Your message has been sent";
                echo '<div class="alert alert-success">'.$Message.'</div>';
              }
            ?>


            </div>
            <form action = "process.php" method="post">
              <input type="text" name="Name" placeholder="Name" class="form-control mb-2">


              <input type="email" name="email" placeholder="Email" class="form-control mb-2">


              <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">


              <textarea name="msg" class="form-control" placeholder="Write the message"></textarea> 
              <button class="btn btn-success" name="btn-send"> Send </button>
            </form>            
          </div>
        </div>
      </div>
    </div>

</body>
</html>