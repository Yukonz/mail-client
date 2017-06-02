<h1>Список писем</h1>
<?php echo form_open('outbox/delete') ?>
    <table class="table">
        <tr>
            <td>№ письма</td>
            <td>Кому</td>
            <td>Тема</td>
            <td>Сообщение</td>
            <td>Дата</td>
            <td><input type="submit" class="btn btn-danger" value="Удалить"></td>
        </tr>


<?php //foreach ($mails as $mail_item){
//    $id=$mail_item['id'];
//    echo "<tr>";
//    echo "<td>{$mail_item['id']}</td>";
//    echo "<td>{$mail_item['email']}</td>";
//    echo "<td>{$mail_item['title']}</td>";
//    echo "<td>{$mail_item['message']}</td>";
//    echo "<td>{$mail_item['date']}</td>";
//    echo "<td><input type=\"checkbox\" name=mail_id></td>";
//    echo "</tr>";
//}

?>
        <?php foreach ($mails as $mail_item): ?>
            <tr>
                <td><?php echo $mail_item['id']; ?></td>
                <td><?php echo $mail_item['email']; ?></td>
                <td><?php echo $mail_item['title']; ?></td>
                <td><?php echo $mail_item['message']; ?></td>
                <td><?php echo $mail_item['date']; ?></td>
                <td><input type="checkbox" name="mail_id[]" value="<?php echo $mail_item['id']; ?>"></td>
            </tr>
        <?php endforeach; ?>



    </table>
</form>

<?php echo form_open('outbox', ['method' => 'get']); ?>
<div class="form-group">
    <label for="date_filter">Дата:</label>
    <input type="date" name="date_filter">
    <label for="email_filter">e-Mail:</label>
    <input type="email" name="email_filter">
    <input type="submit" class="btn btn-success" value="Фильтр">
</div>
</form>