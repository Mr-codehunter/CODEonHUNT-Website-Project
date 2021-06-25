<!DOCTYPE html>
<html lang="en-us">

<head>
  <link rel="stylesheet" href="d2.css">
  <title>COH|Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


</head>

<body>

 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.html">
        <img src="images/Deepakkumar.jpeg1.jpeg" alt="" width="39" height="36" class="d-inline-block align-text-top">
        <b><i>CODEonHUNT</i></b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/courses.html">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/payment.html">Payment</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/contact.php">Contact Us</a>
          </li>
        </ul>
         <div class="text-end">
          <button type="button" class="btn btn-outline-success me-2">Login</button>
          <button type="button" class="btn btn-danger">Sign-up</button>
        </div>
      </div>
    </div>
  </nav><br><br><br><br>

<?php

$insert = false;
if(isset($_POST['email']))
{
    $server = "localhost";
    $username = "lhcngpai_codeonhunt";
    $password = "Deepak%100";
    $database = "lhcngpai_codeonhunt";
    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$database);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     //echo "Success connecting to the db";

  
    $email = $_POST['email'];
    $name = $_POST['name']; 
    $query = $_POST['query'];  
    $brief = $_POST['brief'];

   

 
   $sql = "INSERT INTO `contact` (`email`, `name`, `query`, `brief`) VALUES ('$email', '$name', '$query','$brief')";
   






    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully submitted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

}

?>






    <?php
        if($insert == true){


        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Well Done!</strong><br>You response has been successfully submitted.
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"> 
        </button>
      </div>';
        }
    ?>


  <h2 align="center" style="color:red;"><i>Contact Us</i></h2>

    
  <h5 align="center" class="head2" style="color:blue;"><i>Feel Free to ask any query</i></h5>
   
  <h5 align="center" class="head2" style="color:orange;"><i>Fill Valid Details</i></h5>


    <script>
      function validateForm() {
        var x = document.forms["projectdetails"]["email"].value;
        var y = document.forms["projectdetails"]["name"].value;
        var xy = document.forms["projectdetails"]["query"].value;
        var z = document.forms["projectdetails"]["brief"].value;

        if (x == "" || x == null) {
          alert("Email must be filled out");
          return false;
        }

        if (y == "" || y == null) {
          alert("Name must be filled out");
          return false;
        }


        if (xy == "" || xy == null) {
          alert("Topic of Query must be filled out");
          return false;
        }

        if (z == "" || z == null) {
          alert("Please Explain in brief about your query");
          return false;
        }
      }
    </script>



    <form action="/contact.php" method="post" class="form-group" name="projectdetails" onsubmit="return validateForm()">


      <div class="form-group">
        <label for="email"><i>Email Address</i></label>
        <input name="email" id="email" type="email" class="form-control" id="email">
        <ul class="form-text text-muted list-unstyled">
          <li> <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else</small>
          </li>
          <li><small id="emailHelp" class="form-text text-muted">Enter correct email otherwise form will not submit
              correctly</small>
        </ul>
      </div>

      <div class="form-group">
        <label for="entername"><i>Enter Your Name</i></label>
        <input name="name" type="text" class="form-control" id="name" aria-describedby="entername"
          placeholder="Enter Your Name"><br>
      </div>


      <div class="form-group">
        <label for="YourQueryTopic"><i>Enter Your Plan Name</i></label>
        <input name="query" type="text" class="form-control" id="query"
          aria-describedby="enterquery" placeholder="Enter Your Query Topic"><br>
      </div>



      <div class="form-group">
        <label for="ExplainBriefly"><i>Explain Briefly</i></label>
        <textarea name="brief" class="form-control" id="brief" aria-describedby="entertopic"
          placeholder="Explain Briefly" rows="3"></textarea><br>
      </div>


      <div class="form-group d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-success"><i><b>Submit</b></i></b></button>
      </div>
    </form>
  </div><br><br><br>

  <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
            viewBox="0 0 24 24">
            <title>Product</title>
            <img src="https://avatars.githubusercontent.com/u/54367640?v=4" class="card-img-top" width="100"
              height="200">
            <path
              d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
            </path>
          </svg>
          <small class="d-block mb-3 text-muted"><b>
              <center><i>Mr-Codehunter.All Rights Reserved</i>
            </b></small><b><i>©2021</i></b></center></small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="https://enterprise.comodo.com/what-are-malware-threats.php">Malware
                Threats</a></li>
            <li><a class="link-secondary" href="https://www.pentestgeek.com/hacking-tools">Phishing Attacks</a></li>
            <li><a class="link-secondary"
                href="https://www.w3schools.in/ethical-hacking/system-hacking/#:~:text=System%20hacking%20is%20defined%20as,data%20or%20take%20illegal%20advantage.">System
                Hacking</a></li>
            <li><a class="link-secondary"
                href="https://economictimes.indiatimes.com/definition/cryptography">Cryptography</a></li>
            <li><a class="link-secondary" href="https://en.wikipedia.org/wiki/Cloud_computing">Cloud Computing</a></li>
            <li><a class="link-secondary"
                href="https://www.tutorialspoint.com/ethical_hacking/ethical_hacking_sql_injection.htm">SQL
                Injection</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="https://www.youtube.com/watch?v=1MpRxisxM_8">Kali Linux</a></li>
            <li><a class="link-secondary" href="https://www.youtube.com/watch?v=7mhPLpHx2xM">Termux</a></li>
            <li><a class="link-secondary" href="https://github.com/">Github</a></li>
            <li><a class="link-secondary" href="https://www.youtube.com/watch?v=lmeDvSgN6zY">Ubuntu</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Tools</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">***</a></li>
            <li><a class="link-secondary" href="#">***</a></li>
            <li><a class="link-secondary" href="#">***</a></li>
            <li><a class="link-secondary" href="#">***</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5><i>Contents</i></h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="/about.html">About Us</a></li>
            <li><a class="link-secondary" href="/contact.php">Contact Us</a></li>
            <li><a class="link-secondary" href="/courses.html">Courses</a></li>
            <li><a class="link-secondary" href="/payment.html">Payment</a></li>
          </ul>
        </div>
      </div>
    <br><br><br>
      <form class="d-flex" action="https://www.google.com/">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
<br><br><br><br>
      <div class="fixed-bottom">
      <p align="center">
        <a href="https://www.linkedin.com/in/deepak-kumar-b3abab1a0/"><img
            src="https://media.giphy.com/media/db32HzmDbjp8xWEcO0/giphy.gif" width="40"></a>
        <a href="mailto:deepak9988570526@gmail.com"><img
            src="https://media.giphy.com/media/KyHsvh3wJFLUXwlxuR/giphy.gif" width="40"></a>
        <a href="https://www.instagram.com/deepak_0911/"><img
            src="https://media.giphy.com/media/QWpK88H1g9PtmtQly1/giphy.gif" width="35"></a>
        <a href="https://www.twitter.com/its_deepak0911/"><img
            src="https://media.giphy.com/media/H508mck9ufO9q6z76O/giphy.gif" width="35"></a>
        <a href="https://wa.me/+918847547031?text=Hi%20Codehunter"><img
            src="https://media.giphy.com/media/jU9PVpqUvR0aNc3nvX/giphy.gif" width="40"></a>
        <a href="https://github.com/Mr-codehunter"><img
            src="https://media3.giphy.com/media/KzJkzjggfGN5Py6nkT/giphy.webp" width="35"></a>
      </p>
</div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>


</body>

</html>
