<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Basic Banking System</title>
  </head>
  <body>
  <?php
  include 'navbar.php';
  ?>
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #DDA0DD;">
            <div>
              <img src="img/welcome.webp" class="img-fluid pt-1">
            </div>
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1>Welcome to</h1>
                  <h1>M.K.G BANK</h1>
                </div>
                <div class= "text-center">
                  <h3>We at M.K.G BANK are thrilled to welcome you to our family of satisfied customers.
                    Your trust in us is deeply appreciated, and we are committed to providing you with the 
                    highest level of service and support.
                  </h3>
                  <h3>
                  We are proud to offer you the convenience of 24/7 access to your accounts through our banking services. 
                  Our friendly and knowledgeable staff is always available to assist you with any questions or concerns you may have.
                  </h3>
                  <h4>
                  Again, welcome to M.K.G BANK. 
                  We look forward to building a long-lasting relationship with you and helping you reach your financial aspirations.
                 </h4>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act" style="background-color : #DDA0DD;">
                    <br>
                    <a href="createuser.php"><button style="background-color : #C71585;">Create a User</button></a>
                  </div>
                  <div class="col-md act" style="background-color : #DDA0DD;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #C71585;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act" style="background-color : #DDA0DD;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #C71585;">Transaction History</button></a>
                  </div>
            </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2023. Made by <b>Karthik Gajjela</b> <br> M.K.G Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>