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
        <input type='submit' name='update' value='UPDATE'>
        <input type='submit' name='delete' value='DELETE'>
        <?php
        session_start();
        include './confg.php';
        if(isset($_POST['S1'])){
     $search=$_POST['search'];
    $query="select * from users where username='$search'";
    $result=mysqli_query($link, $query);
    $row= mysqli_fetch_assoc($result);
    
    echo '<br><br>';
    if(mysqli_num_rows($result)>0){
        $_SESSION['Id']=$row['Id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['password']= md5($row['password']);
        $_SESSION['user_Type_id']=$row['user_Type_id'];
        $_SESSION['LName']=$row['LName'];
        $_SESSION['FName']=$row['FName'];
        $_SESSION['user_Type_id']=$row['user_Type_id'];
        echo '<label for="user_Type_id">user_Type_id</label>';
        echo "<input type='text' id='1' name='user_Type_id' value='".$_SESSION['user_Type_id']."' />";
        echo '<br><br>';
        echo '<label for="username">Username</label>';
        echo "<input type='text' id='1' name='username' value='".$_SESSION['username']."' />";
        echo '<br><br>';
        echo '<label for="FName">First Name</label>';
        echo "<input type='text' id='3' name='FName' value='".$_SESSION['FName']."' />";
        echo '<br><br>';
        echo '<label for="LName">Last Name</label>';
        echo "<input type='text' id='4' name='LName' value='".$_SESSION['LName']."' />";
        echo '<br><br>';
        echo '<label for="password">Password</label>';
        echo "<input type='text' id='1' name='password' value='".$_SESSION['password']."' />";
        echo '<br><br><br><br>';
       
        
        
    }
    else{
        header("Location:login.php?Error=1");
    }
    
}
if(isset($_POST['update'])){
            $us=$_SESSION['username'];
            $ustd=$_SESSION['user_Type_id'];
            $pw=$_SESSION['password'];
            $FN=$_SESSION['FName'];
            $LN=$_SESSION['LName'];
            $query="update users"
                   ."set FName='".$FN."'.LName='".$LN."',username='".$us."',password='".$pw."',user_Type_id='".$ustd."'";
            $result=  mysqli_query($link, $query);       
            if($result){
        echo '<div class="alert-success">
            Updated Successfully!
        </div>';
        exit();
    }      
                  
        }
        ?>
    </body>
</html>