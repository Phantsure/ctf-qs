<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron">
<?php 
if(!empty($_POST))
{
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 'On');
  $con = new SQLite3('test.db');

  $username = $_POST["username"];
  $password = $_POST["password"];
  $debug = $_POST["debug"];
  $query = "SELECT 1 FROM users WHERE name='$username' AND password='$password'";

  if (intval($debug)) {
    echo "<pre>";
    echo "username: ", htmlspecialchars($username), "\n";
    echo "password: ", htmlspecialchars($password), "\n";
    echo "SQL query: ", htmlspecialchars($query), "\n";
    echo "</pre>";
  }
  $pattern ="/.*['\"].*OR.*/i";
  $user_match = preg_match($pattern, $username);
  $password_match = preg_match($pattern, $username);
  if($user_match + $password_match > 0)  {
    echo "<h1>SQLi detected.</h1>";
  }
  else {
    $result = $con->query($query);
    $row = $result->fetchArray();
    $FLAG = 'GLUG{youre_a_ good_doc}';
    if ($row) {
      echo "<h1>Logged in!</h1>";
      echo "<p>Your flag is: ".$FLAG"</p>";
    } else {
      echo "<h1>Login failed.</h1>";
    }
  }
}
?>
<form method="post">
<input name="username" placeholder="Username"/>
<input name="password" placeholder="Password"/>
<input name="debug" value="0" hidden/>
<input class="btn btn-success" type="submit"/>
</form>
</div>
</body>
</html>
