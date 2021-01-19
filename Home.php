<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Home page</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
  <!-- Custom styles for this template -->
  <link href="css/home.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body class=" text-white bg-dark page-holder bg-cover " style="background: url(img/bg.png) ">
  <?php
  include 'navbar.php';
?>
<br><br><br><br>
  <main class="container">
    <!-- Introduction section -->
    <div class="row intro py-1">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h1>Welcome to Banknotes & Bonds</h1>
          <h3>Cash if you die. Cash if you don't.</h3>
        </div>
      </div>
      
    </div>


    <!-- Activity section -->
    <div class="row activity text-center">
      <div class="col-md act">
        <img src="img/people.png" class="img-fluid">
        <br>
        <a href="createuser.php"><button type="button" class="btn btn-warning">Create a User</button></a>
      </div>
      <div class="col-md act">
        <img src="img/trans.png" class="img-fluid">
        <br>
        <a href="transfermoney.php"><button type="button" class="btn btn-warning">Make a Transaction</button></a>
      </div>
      <div class="col-md act">
        <img src="img/clk.png" class="img-fluid">
        <br>
        <a href="transactionhistory.php"><button type="button" class="btn btn-warning">Transaction History</button></a>
      </div>
    </div>
  </main><!-- /.container -->
</body>

</html>