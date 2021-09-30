<?php
$showAlert=false;
// $showError="false";
$exists=false;
$servername="localhost";
$username="root";
$password="";
$dbname="project";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
else{
    if(isset($_POST["submit"])){
        if( !empty($_POST["username"])  && !empty($_POST["email"])  && !empty($_POST["password"]) && !empty($_POST["cpassword"])){
           
            $username=$_POST["username"];
            
            $email=$_POST["email"];
            
            $password=$_POST["password"];
            $cpassword=$_POST["cpassword"];
            
            if(($password==$cpassword) && ($exists==false)){
            $sql=" INSERT INTO `user` ( `username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
              $result=mysqli_query($conn,$sql) ;
            if($result){
               $showAlert=true;
            }
            else{
              // $showError="passwords do not match";
              $showAlert=false;
            }
          }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<?php    
$servername = "localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);
// if(!$conn){
//     die("sorry we failed to connect:".mysqli_connect_error());
// }
// else
// echo "connection was successful";

 require 'partials/_nav.php' ?>
 <?php
 if($showAlert==true){

  echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>  account is  created  successsfully
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>'
  ;}
 else if($showAlert==false){

    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>error!</strong> enter the data properly
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'
    ;}
  ?>

 


<div class="container">
    <h1 class="text-center">Sign up to our website</h1>
    <form action="/new project/signup.php" method="POST"
     style="display:flex; flex-direction:column; align-items:center">
    <div class="form-group col-md-6">
    <label for="username" class="form-label">USN</label>
    <input type="varchar" class="form-control" id="username" name="username"  aria-describedby="userHelp" require>
    <div id="userHelp" class="form-text">We'll never share your user name with anyone else.</div>
  </div>
  <div></div>
  <div class="form-group col-md-6">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" require>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div></div>
  <div class="form-group col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" require>
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" require>
    <div  class="form-text">Make sure to type the same password</div>
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <div></div>
  <button name="submit" class="btn btn-primary col-md-6">Submit</button>
</form>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>