<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
    </head>
     <body>
<?php
include_once './confg.php';
include_once './user_menu.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'New user';
if(isset($_POST['add'])){
    $username=$_POST['username'];
    $password=  md5($_POST['password']);
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $type=$_POST['user_type'];
    $query="INSERT INTO "
            . "`users(FName, `LName`, `username`, `password`, `user_Type_id`) "
            . "VALUES ('$fname','$lname','$username','$password',$type)";
    $result=  mysqli_query($link, $query);
    if($result){
        echo '<div class="alert-success">
            Inserted Successfully!
        </div>';
        exit();
    }
    
    
}

?>

   
        <div class="row container-fluid">
            <div class="col-lg-4 col-sm-6 col-xl-4">
                  <form action="" method="post">
                      <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" name="username" class="form-control" required>
                      </div>
                       <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" name="password" class="form-control" required>
                      </div>
                       <div class="form-group">
                          <label for="fname">First Name</label>
                          <input type="text" name="fname" class="form-control" required>
                      </div>
                       <div class="form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" name="lname" class="form-control" required>
                      </div>
                       <div class="form-group">
                          <label for="type">Type</label>
                          <select name="user_type" class="form-control">
                <?php
                  $query="SELECT * FROM `users_type`";
                  $result=  mysqli_query($link, $query);
                  while($row=  mysqli_fetch_assoc($result)){
                      echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
                  }
                ?>
                     </select>
                         
                       </div>
                       <div class="form-group">
                           <input type="submit" name="add" class="btn btn-danger" value="ADD">

                          </div>
      
           
        </form>
            </div>
        </div>
        
        
      
    </body>
</html>
<table width="90%" height="100%">
                        <tr>
                        
                         <td colspan="20"><div class="bounceInLeft"><i><h3>First name*</h3></i></div></td><td><h3><div class="bounceInRight"><input type="text" name="fname" class="form-control" required></div></h3></td>
                        </tr>
                        <tr>
                         <td colspan="20"><i><h3><div class="bounceInLeft">Last name*</div></h3></i></td><td><div class="bounceInRight"><input type="text" name="lname" class="form-control" required></div></td>
                        </tr>
                        <tr>
                         <td colspan="20"><i><h3><div class="bounceInLeft">Username*</div></h3></i></td><td><div class="bounceInRight"><input type="text" name="username" class="form-control" required></div></td>
                        </tr>
                        <tr>
                         <td colspan="20"><i><h3><div class="bounceInLeft">Password*</div></h3></i></td><td><div class="bounceInRight"><input type="password" name="password" class="form-control" required></div></td>
                        </tr>
                        <tr>
                         <td colspan="20"><i><h3><div class="bounceInLeft">User Type*</div></h3></i></td>
                         <td colspan="20">
                                <div class="form-group">
                                <div class="bounceInRight">
                                <select name="user_type" class="form-control">
                                <?php
                                include_once 'User_menu.php';
                                $query="SELECT * FROM `user_type`";
                                $result=mysqli_query($link, $query);
                                while($row=mysqli_fetch_assoc($result)){
                                echo '<option value="'.$row['UID'].'">'.$row['Title'].'</option>';
                                }
                                ?>
                                </select>
                                </div>
                                </div>
                         </td>
                        </tr>
                    
                         <td>
                         <div class="form-group">
                         <input type="submit" name="add" class="btn btn-default" value="Finish">
                         </div></table>