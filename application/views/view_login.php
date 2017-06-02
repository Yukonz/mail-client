<!DOCTYPE html>
<html xmlns=”http://www.w3.org/1999/xhtml” xml:lang=”en” lang=”en”>
    <head >
        <meta http-equiv="content-type" content="text/html charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title> Welcome! </title>
    </head>
    <body>
        <div style="height: 100%; width: 100%; display: flex; align-items: center; justify-content: center">


            <?php echo validation_errors(); ?>

            <?php echo form_open('login/process') ?>

            <div style="width: 500px; display: inline-block">
                <h3>Введите данные вашей учетной записи</h3>
                <?php if(! is_null($msg)) echo $msg;?>
                <div class="form-group">
                    <label for="username">Логин</label>
                    <input type="text" class="form-control" name="username" placeholder="имя">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" name="password" placeholder="пароль">
                </div>
                <input type="submit" value="Вход" class="btn btn-success" placeholder="Отправить" name="login_button">
                </form>
                <a href=/register><button type="button" class="btn btn-warning">Регистрация</button></a>
            </div>
        </div>
    </body>
</html>