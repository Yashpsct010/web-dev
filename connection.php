<?php
$conn = mysqli_connect('localhost','root','','form');
if($conn)
    {
    //  echo"connection ok";
    }
else
    {
        echo"connection failed";
    }
?>
<?php

// print_r($_POST);
// die();
if(isset($_POST))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mobileno = $_POST['mobileno'];
    $address = $_POST['address'];
    $college = $_POST['college'];


 $query = "INSERT INTO sp (fname,lname,gender,dob,mobileno,address,college) VALUES ('$fname','$lname','$gender','$dob','$mobileno','$address','$college')";
 
 
 $data= mysqli_query($conn,$query);
 
 if($data)
 {?>
 <div class="alert alert-success">
    <strong>Success!</strong> data is recored.
  </div>
  <?php
}
else{
    ?>
     <div class="alert alert-danger">
    <strong>Danger!</strong> failed in recording data.
  </div>
  <?php
}


}


?>