<?php $this->layout('layouts::website1');?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@300&display=swap');
    input {
        border: 1px powderblue;
        padding: 1px;
        margin: 30px;
        font-size: xx-large;
        margin-top: 60px;
        flex-direction: column;
    }
</style>



   






<form action="<?php echo url("register.handle")?>" method="POST">
    <div class="form-group">
        <label for ="email">Email</label>
        <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedy="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We delen uw e-mail adres met niemand, uw gegevens zijn veilig!</small>
        <?php if ( isset( $errors['email'] ) ): ?>
            <?php echo $errors ['email'] ?>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">
        <?php if ( isset( $errors['wachtwoord'] ) ): ?>
            <?php echo $errors ['wachtwoord'] ?>
        <?php endif;?>
    </div>
    <button type="submit" class="btn btn-primary">Registreren</button>
</form>



