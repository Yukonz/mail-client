<h1>Отправка e-Mail</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('newmail/createmail') ?>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="e-Mail адрес">
</div>
<div class="form-group">
    <label for="header">Заголовок письма</label>
    <input type="text" class="form-control" name="title" placeholder="Заголовок">
</div>
<div class="form-group">
    <label for="comment">Сообщение</label>
    <textarea class="form-control" rows="5" name="message"></textarea>
</div>
<input type="submit" class="btn btn-success" placeholder="Отправить">

</form>
