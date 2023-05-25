<div class="nav_form">
    <h1>Регистрация</h1>
    <form action="#" method="post" class="input">
        <input type="text" tabindex="1" required name="name2" class="info_input" placeholder="Фамилия" value="<?php echo $_POST['name2'] ?>"> 
        <input type="text" tabindex="2" required name="name" class="info_input" placeholder="Имя" value="<?php echo $_POST['name'] ?>"> 
        <input type="text" tabindex="3" required name="name3" class="info_input" placeholder="Отчество" value="<?php echo $_POST['name3'] ?>"> 
        <input type="text" tabindex="4" required name="login" class="info_input" placeholder="Логин" value="<?php echo $_POST['login'] ?>">
        <input type="email" tabindex="5" required name="email" class="info_input" placeholder="Почта" value="<?php echo $_POST['email'] ?>"> 
        <div class="password">
	        <input type="password" tabindex="6" id="password-input" required placeholder="Пароль" name="pass" class="info_input" value="<?php echo $_POST['pass'] ?>">
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input');"></a>
        </div>
        <div class="password">
	        <input type="password" tabindex="7" id="password-input2" required placeholder="Повтор пароль" name="pass2" class="info_input" value="<?php echo $_POST['pass2'] ?>">
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input2');"></a>
        </div>
        <div class="confirmation info_input">
            <input type="checkbox" required name="check" class="check" tabindex="8">
            <p>Я соглашаюсь с <a href="https://yandex.ru/legal/rules/" id="user_agreement">пользовательскими условиями</a></p>
        </div>
        <?php 
            if(!empty($_POST['name2']) && !empty($_POST['name']) && !empty($_POST['name3']) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && !empty($_POST['check'])){
                $push = 'SELECT login FROM user WHERE login="'.$_POST['login'].'"';
                $input = mysqli_query($copystar, $push);
                $row = mysqli_fetch_array($input);
                if($row['login']==$_POST['login']){
                    echo "<p class='error'>Этот логин уже занят.</p>";
                }
                else{
                    if($_POST['pass'] == $_POST['pass2']){
                        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                        $pushdb = 'INSERT INTO `user` ( `name`, `sname`, `tname`, `login`, `pass`, `email`, `role`) VALUES ( "'.$_POST['name'].'", "'.$_POST['name2'].'", "'.$_POST['name3'].'", "'.$_POST['login'].'", "'.$pass.'", "'.$_POST['email'].'", "client");';
                        $inpu = mysqli_query($copystar, $pushdb);






                    }
                    else{
                        echo "<p class='error'>Пароли не совпадают.</p>";
                    }
                }
            }    
        ?>
        <button type="submit" class="info_input info_input_button">Зарегистрироваться</button>
    </form>
    <p>У вас уже есть аккаунт?<a href="entrance.php">Войти</a></p>
</div>
<script src="js/pass.js"></script>