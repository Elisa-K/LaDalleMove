<div class="container-fluid h-100 pt-4 bg-rouge">
    <div class="row h-100">
        <div class="col-12 h-100">
            <div class="text-center h-100" >
                <img src="web/Images/illistration_page_connexion.svg" alt="" class='animated fadeInLeft delay-0s mb-4 img-fluid img-connexion'>
                <h1 class="text-center mb-4" style="color: white"><strong>Connexion</strong></h1>
                <form action="index.php?p=signUp" method="POST">
		            <?php if(isset($retour) && !$retour){ ?>
                        <div class="alert alert-danger p-1" role="alert" style='font-size: 0.6rem;'>
                            Pseudo et/ou mot de passe invalide(s)
                        </div>
		            <?php } ?>
                    <div class="form-group text-center">
                        <label for="" style="color: white">Pseudo de Dalleux</label>
                        <input type="text" class="form-control mb-3 mx-auto form-control-sm" name="pseudo" style="max-width: 300px;" required>
                        <label for="" style="color: white">Mot de passe</label>
                        <input type="password" class="form-control mb-3 mx-auto form-control-sm" name="password" style="max-width: 300px;" required>
                    </div>
                    <div class="fixed-bottom">
                        <div class="oblique-connexion">
                        </div>
                            <div class="button-orange text-center">
                                <input type="submit" class="btn btl-lg btn-block btn-submit pt-0" value="Se connecter >" style="color: white; font-size: 2rem;">
                            </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!--			<p class="text-center">Avant de te lancer et en guise d’échauffement choisis un avatar et un super pseudo !</p>-->
<!--            			<form action="index.php?p=signUp" method="POST">-->
<!--            				--><?php //if(isset($retour) && !$retour){ ?>
<!--            					<p>Pseudo et/ou mot de passe invalide(s)</p>-->
<!--            				--><?php //} ?>
<!--            				<div class="form-group text-center">-->
<!--            					<label for="">Quel est votre pseudo ?</label>-->
<!--            					<input type="text" class="form-control mb-3" name="pseudo" required>-->
<!--            					<label for="">Quel est votre mot de passe?</label>-->
<!--            					<input type="password" class="form-control mb-3" name="password" required>-->
<!--            				</div>-->
<!--            				<input type="submit" class="btn btn-primary btl-lg btn-block" value="Valider">-->
<!--            			</form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
