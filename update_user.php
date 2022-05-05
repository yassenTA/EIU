<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
   include_once './confg.php';

        $id=$_GET['id'];
        $query="SELECT * FROM `users` WHERE Id=$id";
        $result=mysqli_query($link, $query);
        $data= mysqli_fetch_assoc($result);
        
        if(isset($_POST['sub'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $Fname=$_POST['FName'];
            $Lname=$_POST['LName'];
            $Type=$_POST['user_Type_id'];
            $query="UPDATE `users` SET `FName`='$Fname',`LName`='$Lname',`username`='$username',`password`='$password',`user_Type_id`=$Type WHERE Id=$id";
            echo $query;
        }
       
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div class="row container-fluid">
            <div class="col-lg-4 col-sm-6 col-xl-4">
                  <form action="" method="POST">
                  <div class="form-group">
                          <label for="search">Search</label>
                          <input type="text" name="search" class="form-control" required>
                          <input type="submit" name="S1" class="btn btn-danger" value="Search">
                      </div>
                  </form>
            </div>
        </div>
        <br><br><br><br>
            <div class="row container-fluid">
            <div class="col-lg-4 col-sm-6 col-xl-4">
                  <form action="" method="post">
                      <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" required>
                      </div>
                       <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>" required>
                      </div>
                       <div class="form-group">
                          <label for="fname">First Name</label>
                          <input type="text" name="fname" class="form-control" value="<?php echo $data['FName']; ?>" required>
                      </div>
                       <div class="form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" name="lname" class="form-control"  value="<?php echo $data['LName']; ?>"required>
                      </div>
                       <div class="form-group">
                          <label for="type">Type</label>
                          <select name="user_type" class="form-control">
                <?php
              
                  $query="SELECT * FROM `users_type`";
                  $result=  mysqli_query($link, $query);
                  while($row=  mysqli_fetch_assoc($result)){
                      echo '<option value="'.$row['id'].'"';
                      if($data['user_Type_id']== $row['id']){
                          echo 'selected';
                      }
                      echo '>'.$row['title'].'<option>';
                  }
                ?>
                     </select>
                         
                       </div>
                       <div class="form-group">
                           <input type="submit" name="sub" class="btn btn-danger" value="Update">

                          </div>
      
           
        </form>
            </div>
        </div>
        <?php
        /**if(isset($_POST['S1'])){
     $search=$_POST['search'];
    $query="select * from users where username='$search'";
    $result=mysqli_query($link, $query);
    $row= mysqli_fetch_assoc($result);
    echo '544';
    echo '<br><br>';
    if(mysqli_num_rows($result)>0){
        $_SESSION['Id']=$row['Id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['password']= md5($row['password']);
        $_SESSION['user_Type_id']=$row['user_Type_id'];
        $_SESSION['LName']=$row['LName'];
        $_SESSION['FName']=$row['FName'];
        $_SESSION['user_Type_id']=$row['user_Type_id'];}}*/
        
        
    
        ?>
    </body>
</html>
