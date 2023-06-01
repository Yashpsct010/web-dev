<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">


    <title>Header</title>
</head>
<style>
  .footer{
    font-size:10px;
    position: fixed;
    left:0;
    bottom:0;
    width: 100%;
    background-color: lightblue;
    color:black;
    text-align:center;
    
  }
  
.icon-bar a:hover {
  background-color: #000;
}
.icon-bar a{
    font-size:10px;

}

.facebook {
  background: #3B5998;
  color: white;
}
.instagram{
    background: #125688;
  color: white;  
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
.nav-item1 a{
   color:white;
}
.container-fluid{
  margin: -10px;
}

</style>


<body>
<nav  class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    
   
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> <a class="navbar-brand" href="#">Dashboard</a>
    </button>
    <form1 class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form1>
        <li class="user">
       
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">D</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
           
            </ul>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dashboard</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item"> 
         <a class="nav-link active fa fa-home" aria-current="page" href="<?php echo base_url('Welcome/dashboard')?>">Home</a></button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Welcome/entry_form')?>">Entry Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Welcome/fatch_form')?>">Data</a>
          </li>
          
</li>
            <li class="nav-item">
           <a class="nav-link " href="<?php echo base_url('Welcome/logout')?>">Logout</a>
          </li>
          
        </ul>
       
      </div>
    </div>
  </div>
</nav>
    
</body>
</html>
