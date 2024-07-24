<?php 
/* Принимаем данные из формы */ 
  $login = $_POST["Login"];  
  $password = $_POST["Password"]; 
 
/* Подключаемся к базе данных */ 
  $link = mysqli_connect("localhost", "root", ""); 
  mysqli_select_db($link, "registration"); 
 
/* Записывает данные */  
$sql = "INSERT INTO reg(Login, Password) VALUES ('$login', '$password')"; 
$result=mysqli_query($link, $sql); 
 
/* Делаем редирект на страницу отображения данных */ 
  header("Location: display.php?Login=$login&login=$Login&Password=$password");     
  exit;    
?>