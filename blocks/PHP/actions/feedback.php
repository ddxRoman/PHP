<?php 
session_start();
?>
<h2>Обратная связь</h2>
<h3>Эта бадяга не работает, тут траблы видать из-за сервака</h3>
<form action="Forms/check_cont.php" method="POST">
<input type="text" name="username" value="<?$_SESSION['user_name']?>" placeholder="Введите имя">
<div>не не не не пойдет так<?=$_SESSION['err_name']?></div>
<input type="text" name="email" value="<?$_SESSION['email']?>" placeholder="Введите почту" class="Feedback"><br>
<input type="text" name="subject" value="<?$_SESSION['subject']?>" placeholder="Введите тему" class="Feedback"><br>
<textarea name="message"  placeholder="Введите сообщение" class="Feedback"><?$_SESSION['message']?></textarea><br>
<div>аааан нет, неправильно<?=$_SESSION['err_sms']?></div><br>
<button type="submit" class="Obtn">Оtправить</button>
</form>

