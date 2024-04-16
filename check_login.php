<?php 
    include 'config/configURL.php';
    include 'config/configDB.php';
   

    if(isset($_POST) && $_POST['login']){
        
       
        $sql = "SELECT * FROM admin_user WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
        $result=$conn->query($sql);
        $row=mysqli_fetch_object($result);
        if($row) {
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $row->id;
            $_SESSION["username"] = $row->username; 
            header('location:dashboard/view_index.php');
        }else{
          $_SESSION['password']=$_POST['password'];
          
          header('location:http://localhost/car-service/index.php');
          echo "alert('user name and password are wrong')";
        }
    }
?>

