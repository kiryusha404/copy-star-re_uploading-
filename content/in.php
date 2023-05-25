
<div class="nav_form">
    <h1>Вход</h1>
    <form action="#" method="post" class="input">
        <input type="text" tabindex="1" required name="login" class="info_input" placeholder="Логин" value="<?php echo $_POST['login'] ?>"> 
        <div class="password">
	        <input type="password" tabindex="2" id="password-input3" required placeholder="Повтор пароль" name="pass" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input3');"></a>
        </div>
        <?php 
        if(!empty($_POST['login']) && !empty($_POST['pass'])){
            $push = 'SELECT id_us, pass FROM user WHERE login="'.$_POST["login"].'"';
            $input = mysqli_query($copystar, $push);
            $row = mysqli_fetch_array($input);
                if(password_verify($_POST['pass'], $row['pass'])){
                    









                }
                else{
                    echo "<p class='error'>Неверный логин или пароль.</p>";
                }
        }
        ?>

        <button type="submit" class="info_input info_input_button">Войти</button>
    </form>
    <p>У вас нет аккаунта?<a href="nentrance.php">Зарегистрироваться</a></p>
</div>
<script src="js/pass.js"></script>