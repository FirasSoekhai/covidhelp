<?php $this->layout('website'); ?>
<h1>Inloggen</h1>
<?php if ( isset($errors) ): ?>
<?php foreach($errors as $key=>$value): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $value ?>
        </div>
<?php endforeach; ?>
<?php endif ?>
<form method="POST" action="<?php echo url('login.handle') ?>">
    <p>E-mail:</p><input type="email" name="email" required>
    <br><br>
    <p>Wachtwoord:</p><input type="password" name="password" required>
    <br><br>
    <input type="submit" value="Inloggen" name="submit">
</form>