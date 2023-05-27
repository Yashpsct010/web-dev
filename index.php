<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
</head>
<body style="background-color: aqua;">
    <h2 style="text-align:center; color:orange "  >Personal Details</h2>
    <center>

<div style="  width: 320px;
  padding: 10px;
  border: 5px solid orange;
  margin: 10;" class="container">
    <form action="dataconnect.php" method="post">
    <div class="input-group">
        <label for="name">Name: </label>
        <input type="text", name ="name", placeholder = "Enter your full name", required><br>  <br>
    </div>
    <div>
        <label for="phone">Phone: </label>
        <input type="number", placeholder = "Enter your Phone name" , name ="phone", required>  <br><br>
    </div>
    <div>
        <label for="address">Address: </label>
        <input type="address", placeholder = "Enter your Address" , name = "address" ,required><br>  <br>
    </div>
    <div>
        <label for="email">Email id.: </label>
        <input type="email", placeholder = "Enter your Email id.", name="email" , required><br>  <br>
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password", placeholder = "Enter The Password", name = "password", required>   <br><br>
    </div>
    <div>
        <label for="date of birth">Date Of Birth: </label>
        <input type="date", name = "birthdate", placeholder = "Enter your Birth Date" , required>  <br><br>
    </div>
    <div>
        <p>Select Gender: </p>
        <!-- <select name="gender">
            <option value="none" selected>Gender</option>
            <option value="Male" ></option>
            <option value="Female"></option>
        </select> -->
        <div name ="gender">

        <input type="radio" id ="Male" name="gender">  
        <label for="Male">Male</label>

        <input type="radio" id ="Female" name="gender" >  
        <label for="Female">Female</label>
    </div>
    </div><br><br>
    <div>
        <input type="submit" value="Submit">
    </div>
</div>
</form>
</center>
</body>
</html>