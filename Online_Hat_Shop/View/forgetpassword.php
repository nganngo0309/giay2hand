<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="Content/CSS/login.css">
  <style>
    #body {

      background-color: pink;
    }
  </style>
</head>

<body>

  <section id="examples2">
    <div class="container" style="margin-bottom:-300px;margin-left:-200px">
      <div class="row">
        <div class="col-lg-6">
          <bR><img src="Content/Img/mail.jpg" class="w-100" style="margin-left:00px;margin-top:-40px;margin-bottom:250px">

        </div>
        <div class="col-lg-6">
          <h3 class="text-left"><b>ENTER EMAIL</b></h3><br>
          <form action="index.php?action=forgetps&act=forgetps_action" class="login-form" method="post">

            <div class="form-group">

              <input type="text" class="form-control" name="email" placeholder="">

            </div>



            <div class="form-check">
              <input style="margin-left:-10px" class="btn btn-danger" type="submit" name="submit_email">

            </div>

          </form>

        </div>




      </div>
  </section>
  <div style="position:fixed;margin-left:570px;margin-top:-80px">
    <a class="" href="index.php?action=giohang" style="  
  margin-bottom: 0px;margin-left: 650px;margin-bottom:px"><img src="Content/img/c1.png" style="border-radius:50%;
                -moz-border-radius:40%;-webkit-border-radius:40%;width:10%"></a>
    <?php
    if (isset($_SESSION['cart'])) {
      $dem = count($_SESSION['cart']);
    } else {
      $dem = 0;
    }
    ?>
    <h1 style="color: red; margin-top: -100px; margin-left: 725px;"><b><?php echo "" . $dem . ""; ?></b></h1>
  </div>

  <div>
    <a class="" style="  position: fixed;
  bottom: 30px;right:-250px" href="index.php?action=login"><img src="Content/img/login.jpg" style="border-radius:50%;
                -moz-border-radius:50%;-webkit-border-radius:50%;width:25%"></a>
  </div>
</body>

</html>