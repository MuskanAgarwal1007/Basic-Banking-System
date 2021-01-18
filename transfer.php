
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>payment transfer</title> 
  <style>
    h1{
      text-align: center;
      color:  #003459;
    }
    img{
      float: right;
      width: 300;
      height: 300;
    }
    #trans
        {
         color:white;
         background-color: #1768ac;
         margin-left: 150px;
         font-size: 20px;
         cursor: pointer;
        }
        table{
          margin-left: 60px; 
            margin-top: auto;
            margin-bottom: auto;
            font-size: 21px;
            height:100;
        }
        input{
          width: 320px;
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
    
        <h1>Transfer Details</h1> 
        <img src="transfer.jpg" alt="transfer">
        <form action="customer.php">
          <table>
            <tr>
              <td> <?php echo "To:"?></td>
              <td> <input type="text" name="name" id="name" placeholder="Enter receivers Name"> </td>
            </tr>
            <tr>
              <td><?php echo " Amount:"?></td>
              <td> <input type="text" name="amount" id="amount" placeholder="Enter Amount to be transfered.">  </td>
            </tr>
            </tr>
          </table><br><br>
          <button id="trans" onclick="Alert()" > Transfer</button>
          <script>
  function Alert() {
    alert("Money has been transfered!!.");
}
</script>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body> 
  
</html> 