<?php
include 'header.php'
?>

<div class="userform">

<form action="app/reg.php" method="post">
    <h1>Регистрация</h1>
    <span>Имя</span><input type="text" name="name" >
    <span>Логин</span><input type="text" name="login" >
    <span>Пароль</span><input type="password" name="password">
    <input type="submit" value="Регистрация">
</form>
</div>
<?php
include 'footer.php'
?>
