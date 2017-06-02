<h1>Регистрация пользователя</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('register/register') ?>

<div class="form-group">
    <label for="name">Имя</label>
    <input type="name" class="form-control" name="name" placeholder="Имя пользователя">
</div>
<div class="form-group">
    <label for="header">Пароль</label>
    <input type="password" class="form-control" name="password" placeholder="Пароль">
</div>
    <input type="submit" class="btn btn-success" placeholder="Создать">
</form>