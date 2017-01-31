<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h2>Let's code.</h2>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>

	<a class="lien" href="<?= $this->url('sub') ?>">Formulaire d'inscription</a>

	<a class="lien" href="<?= $this->url('log') ?>">Se connecter</a>

<?php $this->stop('main_content') ?>
