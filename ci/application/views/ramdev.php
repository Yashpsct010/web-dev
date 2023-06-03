<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

    <title>form</title>
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<style>
	body {
        
	background-color:azure;
    font-size: 20px;
}
form {
	height: 100px auto;
    width: 40%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 2px solid #bbbbbb; 
    border-radius: 5px;
	background-color:gray;
	box-shadow: 0px 0px 10px rgba(0,0,0, 0.2);
}
.input-group {
    margin: 30px 30px 30px 30px;
}
.input-group input {
    height: 40px;
    width: 93%;
    padding: 5px 10px;
    font-size: 23px;
    border-radius: 10px;
    border: 2px solid gray;
}
.input-group2 input {
    height: 30px;
    width: 53%;
    padding: 5px 15px;
    font-size: 20px;
    border-radius: 10px;
    border: 2px solid gray;
}
.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}
</style>
<body>
    
    <form action="http://localhost/ci/index.php/Welcome/signup/" method="POST">

    
     
	<div class="container">
	<table>
        <h1 align="center">Create account</h1>
	 <div class="input-group">
			<label>Full Name</label>
			<input type="text" name="fname" value="" required>
	
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="" required>
			</div>    
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value="" required>
	
	
			
		</div>
	
		<div class="input-group">
			<button class="btn btn-primary" type="submit" name="submit" >Signup</button>
		</div>
     </div>
 </form>
</table>
    
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>    
</body>
</html> -->
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="http://localhost/ci/index.php/Welcome/signup/" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full name" name="fname" required>

    <div class="input-container">
    <i class="fa fa-user icon"> <label><b>Username</b></label></i>
    <input class="input-field" type="text" placeholder="Username" name="username">
  </div>

  <i class="fa fa-key icon"></i><label for="password"><b>Password</b></label>
    <input type="password" placeholder="password" name="password" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
