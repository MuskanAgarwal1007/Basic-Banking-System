<?php
if(isset($_POST['name'])){
$user = 'root'; 
$password = '';  
$database = 'customer';   
$servername='localhost'; 
$con = mysqli_connect($servername, $user,$password);  
if (!$con) { 
    die("connection to this database failed due to".mysqli_connect_error()); 
} 
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$Query=$_POST['Query'] ;
$sql="INSERT INTO `customer`.`contact` ( `name`, `email`, `contact`, `Query`) VALUES ('$name', '$email', '$contact',  '$Query');";
if($con->query($sql) == true){
    echo'<script>alert("Query has been successfully submitted.Query will be resolved within 48hrs.")</script>';
}else{
    echo"ERROR: $sql <br> $con->error";
}
$con->close();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Contact Us</title>
    <style>
        h1,h5{
            margin-top: 20px;
            margin-left: 60px;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    color: #001242;
        }
        h1{
            color: #003459;
        } 
        table { 
            margin-left: 60px; 
            margin-top: auto;
            margin-bottom: auto;
            font-size: 21px;  
        }
        img{
          margin-right: 70px;
            width: 900px;
            height: 500px;
            float:right; 
        }
        input{
          width: 100%;
        }
        .bt1
        {
         color:white;
         background-color: #1768ac;
         margin-left: 150px;
         font-size: 20px;
         cursor: pointer;
        }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Maitri Bank </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Customer.php">Customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <h1>Reach Us </h1>
    <h5>By filling the given below form </h5><br>
    <img src="contact.jpg" alt="picture">
    <form method="post" action="contact.php">  
      <table>
        <tr>
        <td>Name:</td>
        <td><input type="text" name="name" id="name" placeholder="Enter your Name"></td>
        </tr>
        <tr>
        <td>E-mail:</td>
        <td><input type="email" name="email" id="email" placeholder="Enter Your Email"></td>
        </tr>
        <tr>
        <td>Contact:</td>
        <td><input type="phone" name="contact" id="contact" placeholder="Enter your Contact Number"></td>
        </tr>
        <tr>
        <td> Query:</td>
        <td><textarea name="Query" id="Query" rows="10" cols="30" placeholder="enter your query here"></textarea></td>
        </tr>
        </table>
          
     <button class="bt1" >Submit</button>
      </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>