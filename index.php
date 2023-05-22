<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<style>
    body{
        font-size : 20px;
        background-color:lightgreen;
    }
    form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 5px solid #bbbbbb; 
    border-radius: 5px;
    background-color:lightblue;
}
    .input-group {
    margin: 20px 0px 20px 0px;
}
   
    .input-group input {
    height: 40px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;}

    </style>
<body>
<form method="POST" action="connection.php" >
	<div class= "container">
    <h1 align="center"> Registeration Form</h1>
    <div class="input-group">
			<label>First name</label>
			<input type="text" name="fname" value="" required>
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="input-group">
			<label>Last name</label>
			<input type="text" name="lname" value="" required>
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
		</div>
        <div class="input-group">
			<label>Gender</label>
			<select name="gender">
				<option value="not select">select</option>
				<option value="female">female</option>
				<option value="male">male</option>
			</select>
            
		</div>
        <div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="dob" required>
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="input-group">
			<label>Mobile no.</label>
			<input type="text" name="mobileno" value="" required>
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="" required>
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
		</div>
        <div class="input-group">
			<label>College Name</label>
			<input type="text" name="college" value="" required>
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
		</div>
        
		<div class="input-group">
        <div class="col px-md-5"><button class="btn btn-primary" type="submit" name="submit" >submit</button></div>
        <div class="col px-md-5">   <button class="btn btn-secondary" type="reset" name="reset" >reset</button></div>

        </div>
	</form>



<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</body>
</html>