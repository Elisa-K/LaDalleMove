<div class="container p-0 bg-bleu">
    <div class="row">
        <div class="col-12">

            <p class="text-center texte-blanc">Avant de te lancer et en guise d’échauffement,</p>
            <p class="text-center texte-blanc" style="font-size: 27px;"><strong>Choisis un avatar</strong></p>

            <input type="radio" name="idAvatar" value="1" id="Femme" required/>
            <label for="Femme"><img src="web/Images/avatar_femme.svg"  alt="" style="width: 150px;"></label>
            <input type="radio" name="idAvatar" value="2" id="Homme" required/>
            <label for="Homme"><img src="web/Images/avatar_homme.svg"  alt="" style="width: 150px;"></label>


            <form action="index.php?p=signIn" method="post">
                <div class="form-group text-center">
                    <?php if(isset($retour)){ ?>
                        <p>Pseudo déjà utilisé</p>
                    <?php }?>
                    <label for="">Pseudo de Dalleux :</label>
                    <input type="text" class="form-control mb-3" name="pseudo" required>
                    <label for="">Mot de passe :</label>
                    <input type="password" class="form-control mb-3" name="password" required>
                </div>
                <div class="fixed-bottom">
                    <div class="oblique-accueil">
                    </div>
                    <div class="button-orange text-center">
                        <input type="submit" class="btn btl-lg btn-block btn-submit" value="S'inscire >" style="color: white; font-size: 37px;">
                    </div>
                </div>
<!--                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Valider">-->

            </form>

        </div>
    </div>
</div>
