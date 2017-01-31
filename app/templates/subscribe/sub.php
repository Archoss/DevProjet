<?php $this->layout('layout', ['title' => 'Formulaire d\'inscription']) ?>

<?php $this->start('main_content') ?>
<form>
	<label for="pseudo">Votre pseudo : </label>
	<input type="text" name="pseudo" id="pseudo">

	<label for="motdepasse">Votre mot de passe : </label>
	<input type="password" name="motdepasse" id="motdepasse">

	<label for="email">Votre email : </label>
	<input type="email" name="email" id="email">
	<input type="submit" value="S'inscrire">
</form>

	<a href="<?= $this->url('home') ?>"> -- Retourner à l'accueil -- </a>

<?php $this->stop('main_content') ?>