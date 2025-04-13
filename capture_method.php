<?php 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  echo "<h2>Captured Data:</h2>";
  echo "<p>Password: " . htmlspecialchars($_GET['password']) . "</p>";
  echo "<p> Method : " . $_SERVER["REQUEST_METHOD"] . "</p>";
}elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<h2>Captured Data:</h2>";
  echo "<p>Password: " . htmlspecialchars($_POST['password']) . "</p>";
  echo "<p> Method : " . $_SERVER["REQUEST_METHOD"] . "</p>";
}else{
  echo "<h2>No data captured.</h2>";
}