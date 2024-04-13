<?php

function load_template($name)
{

    include __DIR__. "/../_templates/$name.php";
}

function validate_credentials($user, $pass)
{
    if ($user == "gokul@gmail.com" and $pass == "2004") 
    {
        return true;
    } 
    else 
    {
        return false;
    }
}


function signup($user, $pass, $mail, $num)
{
$servername = "mysql.selfmade.ninja:3306";
$username = "Gokulaprasad";
$password = "Pras#30082004";
$dbname = "Gokulaprasad_newdb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
  VALUES ('$user', '$pass', '$mail', '$num', '0', '0');";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "success";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


}
