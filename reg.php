<?php
include('classes.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
  $con=new Connection();
  $reg=new RegCheck($_POST['uName'],$_POST['uPass'],$_POST['uFullName'],$_POST['uEmail']);
}
?>
<h2>Registration</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=reglap" method="POST">
  <div class="form-group">
    <label for="uName">Felhasználónév</label>
    <input type="text" class="form-control" required pattern="[a-zA-Z'-'\s]*" name="uName" placeholder="Felhasználónév">
    <small class="form-text text-muted">Ne használjon ékezetes betüket!</small>
  </div>
  
  <div class="form-group">
    <label for="pass1">Jelszó</label>
    <input id="Password" type="password" class="form-control" name="uPass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Jelszó">
  </div>
  <div class="form-group">
    <label for="pass2">Jelszó újra!</label>
    <input id="ConfirmPassword" type="password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Jelszó újra!">
  </div>
  <div id="msg"></div><!--Jeszó vizsgálat eredményének a megjelenítése-->
  <script>
    //A két jeszó mező összehasonlítása
    //Az első jelszó mező id="Password"
    //A A második jelszó mező id="ConfirmPassword"
    $(document).ready(function(){
        $("#ConfirmPassword").keyup(function(){
             if ($("#Password").val() != $("#ConfirmPassword").val()) {
                 $("#msg").html("Password do not match").css("color","red");
             }else{
                 $("#msg").html("Password matched").css("color","green");
            }
      });
      $("#Password").keyup(function(){
             if ($("#Password").val() != $("#ConfirmPassword").val()) {
                 $("#msg").html("Password do not match").css("color","red");
             }else{
                 $("#msg").html("Password matched").css("color","grey");
            }
      });
    });
  </script>
  <div class="form-group">
    <label for="fullname">Teljes név</label>
    <input type="text" class="form-control" name="uFullName" required aria-describedby="nameHelp" placeholder="Teljes név">
    <small id="nameHelp" class="form-text text-muted">Teljes név</small>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="uEmail" required aria-describedby="emailHelp" placeholder="Email cím">
    <small id="emailHelp" class="form-text text-muted">Email cím</small>
  </div>
  <button type="submit" class="btn btn-primary">Registration</button>
</form>