<?php
$db = mysqli_connect('localhost','root','','rform');
if($db)
{
    //echo "connection ok";
}
else{
    echo"connection Failed";
}
if(isset($_POST))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $occupation = $_POST['occupation'];
    $qualification = $_POST['qualification'];
    $laddress = $_POST['laddress'];
    $paddress = $_POST['paddress'];
    $pincode = $_POST['pincode'];

$query = "INSERT INTO rs (fname,lname ,gender ,dob ,phone, occupation, qualification , laddress , paddress, pincode) VALUES ('$fname','$lname','$gender', '$dob', '$phone','$occupation','$qualification','$laddress', '$paddress','$pincode')" ;
$data = mysqli_query($db,$query);

if($data){
    ?>
    <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
 <?php 
}
else{
    ?>
     <div class="alert alert-danger">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
  <?php
}
}
?>