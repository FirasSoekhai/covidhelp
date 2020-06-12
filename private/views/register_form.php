<?php $this->layout('website') ?>

<h1>Registreren</h1>

<p>Maak een account aan om gebruik te maken van de </p>

<form action="<?php echo url("register.handle")?>" method="POST">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="" class="form-control" id="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We delen uw E-mail adres met niemand, uw gegevens zijn veilig.</small>
    </div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">
    </div>
    <button type="submit" class="btn btn-primary">Registreren</button>
</form>