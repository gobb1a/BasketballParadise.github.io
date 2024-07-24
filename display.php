<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Спасибо за обращение</title> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head> 
<body> 
    
    <section class="content"> 
        <div class="container"> 
            <h1>Спасибо за ваше обращение!</h1> 
            <p>Логин: <?php echo htmlspecialchars($_GET['Login']); ?></p> 
            <p>Пароль: <?php echo htmlspecialchars($_GET['Password']); ?></p> 
        </div> 
    </section> 
    
</body> 
</html>