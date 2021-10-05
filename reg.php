<h2>Registration</h2>
<form>
  <div class="form-group">
    <label for="uname">Username</label>
    <input type="text" class="form-control" id="uname" aria-describedby="usernameHelp" placeholder="Username">
    <small id="unameHelp" class="form-text text-muted">No Special characters</small>
  </div>
  <div class="form-group">
    <label for="pass1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="pass2">Password again!</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password again!">
  </div>
  <div class="form-group">
    <label for="uname">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Full Name">
    <small id="nameHelp" class="form-text text-muted">Full Name</small>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email address">
    <small id="emailHelp" class="form-text text-muted">Email address</small>
  </div>
  <div class="form-group">
  <label for="gender">Gender:</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  </div>
  <button type="submit" class="btn btn-primary">Registration</button>
</form>