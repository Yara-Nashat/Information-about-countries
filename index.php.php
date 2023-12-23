<?php  
  
  $fristname=$_REQUEST['Frist name'];
  $secondname=$_REQUEST['last name'];
  $email=$_REQUEST['Email'];
  $password=$_REQUEST['password'];
  $Birthday=$_REQUEST['Birthday'];

  if(isset($_POST['test']))
  {
    $host="localhost";
    $user = "root";
    $password="";
    $db="project-log in";



    $conn=mysqli_connect($host,$user,$password,$db);
    $insert="insert into information login values('$fristname','$secondname','$email',' $password',' $Birthday') ";
    mysqli_query($conn,$insert);
    if($conn){
      echo("<h1 style='color:green';>yor registration is done! <h1>");
    }
    else{
      echo ("<h1 style='color:red';>yor registration is failed! <h1>");
    }
    

  }

  ?>
