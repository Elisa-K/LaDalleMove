<div class="container p-0">
	<div class="row">
		<div class="col-12">

			<p class="text-center">Avant de te lancer et en guise d’échauffement choisis un avatar et un super pseudo !</p>
			<form action="index.php?p=signUp" method="POST">
				<?php if(isset($retour) && !$retour){ ?>
					<p>Pseudo et/ou mot de passe invalide(s)</p>
				<?php } ?>
				<div class="form-group text-center">
					<label for="">Quel est votre pseudo ?</label>
					<input type="text" class="form-control mb-3" name="pseudo" required>
					<label for="">Quel est votre mot de passe?</label>
					<input type="password" class="form-control mb-3" name="password" required>
				</div>
				<input type="submit" class="btn btn-primary btl-lg btn-block" value="Valider">
			</form>
		</div>
	</div>
</div>
