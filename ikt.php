<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Ikt</title>
    <style>
        header{
            background-color: #700;
  padding: 10px;
  text-align: center;
  color: white;
}
        footer {
  background-color: #700;
  padding: 10px;
  text-align: center;
  color: white;
}
    </style>
</head>
<body>
    <header>this is the header</header>
    <div class='jumbotron text-center' style='margin-bottom:0'>
        <h1>Projekt</h1>
        </div>     
  
        <div class='container' style='margin-top:30px'> 
        <div class='row flex-column-reverse flex-sm-row'>        
        <div class='col-sm-8'>
        <h2>content</h2>
        </div>
  
        <div class='col-sm-4'>
        <h2>Login</h2>
        <p>

        <form action="/action_page.php">
            <label for="uname">Username</label><br>
            <input type="text" id="uname" name="uname"><br>
            <label for="pword">Password</label><br>
            <input type="text" id="pword" name="pword"><br><br>
            <input type="submit" value="Login">
          </form> <br>
          <a href="" target="_blank">Regisztáció</a>
        </p>      
        </div>
        </div>
        </div>


    <footer>This is the footer</footer>
</body>
</html>