<h2>Registration</h2>
<form>
  <div class="form-group">
    <label for="uname">Felhasználónév</label>
    <input type="text" class="form-control" required aria-describedby="usernameHelp" placeholder="Felhasználónév">
    <small id="unameHelp" class="form-text text-muted">Ne használjon ékezetes betüket!</small>
  </div>
  
  <div class="form-group">
    <label for="pass1">Jelszó</label>
    <input id="Password" type="password" class="form-control" required placeholder="Jelszó">
  </div>
  <div class="form-group">
    <label for="pass2">Jelszó újra!</label>
    <input id="ConfirmPassword" type="password" class="form-control" required placeholder="Jelszó újra!">
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
    <label for="uname">Teljes név</label>
    <input type="text" class="form-control" required aria-describedby="nameHelp" placeholder="Teljes név">
    <small id="nameHelp" class="form-text text-muted">Teljes név</small>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" required aria-describedby="emailHelp" placeholder="Email cím">
    <small id="emailHelp" class="form-text text-muted">Email cím</small>
  </div>
  <div class="form-group">
  <label for="gender">Nem:</label>
  <input type="radio" name="gender" value="female">Nő
  <input type="radio" name="gender" value="male">Férfi
  <input type="radio" name="gender" value="other">Egyéb
  </div>
  <button type="submit" class="btn btn-primary">Registration</button>
</form>