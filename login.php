<?php
include('classes.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
$log=new LoginCheck($_POST['userName1'], $_POST['userPass1']);
}
else{
    $log=new LoginCheck("","");

}
?>

<form action=<?php echo $_SERVER['PHP_SELF'];?> method="POST">
<div class="form-group">
            <label>Username:</label><br>
            <input type="text" class="form-control" name="userName1" value="<?php echo $log->getuName();?>" placeholder="Username">
            <small class="form-text text-muted" name="userInfo1"><?php echo $log->getuNameErr();?></small><br>
            </div>
<div class="form-group">
            <label>Password:</label><br>
            <input type="password" class="form-control" name="userPass1" value="<?php echo $log->getuPass();?>" placeholder="Password"><br><br>
            <small class="form-text text-muted" name="userInfo2"><?php echo $log->getuPassErr();?></small>
        </div>
<div class="form-group"><a href="ikt.php?id=reglap" style="color:black">Registration</a>
</div>
            <button type="submit" class="btn btn-primary">Send</button>
            
</form>