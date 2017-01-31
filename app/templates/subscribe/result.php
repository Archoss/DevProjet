<?php $this->layout('layout', ['title' => 'Traitement']) ?>

<?php $this->start('main_content') ?>
	<h2>Vos information personnelles</h2>
	<p><?= 'Bonjour ' 					. $_POST['pseudo']; ?></p>
	<p><?= 'Votre mot de passe est ' 	. $_POST['password']; ?></p>
	<p><?= 'Votre adresse mail est ' 	. $_POST['email']; ?></p>
<?php $this->stop('main_content') ?>
