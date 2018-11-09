<div class="container p-0">
    <div class="row">
        <div class="col-12">

            <p class="text-center">Avant de te lancer et en guise d’échauffement choisis un avatar et un super pseudo !</p>
            <form action="index.php?p=signIn" method="post">
                <div class="form-group text-center">
                    <?php if(isset($retour)){ ?>
                        <p>Pseudo déjà utilisé</p>
                    <?php }?>
                    <label for="">Quel est votre pseudo ?</label>
                    <input type="text" class="form-control mb-3" name="pseudo" required>
                    <label for="">Quel est votre mot de passe?</label>
                    <input type="password" class="form-control mb-3" name="password" required>
                    <input type="radio" name="idAvatar" value="1" id="Femme" required/>
                    <label for="Femme"><img src="web/Images/Dalle-Angevine.jpg"  alt="" style="width: 150px;"></label>
                    <input type="radio" name="idAvatar" value="2" id="Homme" required/>
                    <label for="Homme"><img src="web/Images/Dalle-Angevine.jpg"  alt="" style="width: 150px;"></label>
                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Valider">

            </form>

        </div>
    </div>
</div>
