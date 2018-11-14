<div class="container-fluid h-100 bg-orange">
    <div class="row">
        <div class="col-12 p-0 text-center text-white">
            <img src="web/Images/classement.svg" class='pt-3' alt="" style="height: 85px;">
            <h2 class='font-weight-bold' style='margin-top: -10px;'>Classement</h2>
            <div style='overflow-y: auto !important;display:block; max-height:70vh;'>
            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th scope="col" class='bg-red'><img src="web/Images/classement.svg" alt="" style='height: 25px;'></th>
                        <th scope="col" class='bg-bleu-2'>Pseudo</th>
                        <th scope="col" class='bg-dark'><img src="web/Images/coupe.svg" alt="" style='height: 25px;'></th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                        foreach($classement as $key=>$userClass){
                            $number = $key + 1;

                            if($number == 1) $textNumber = $number . " er";
                            else $textNumber = $number . " ème";

                            $infoUser = getUserById($userClass->getIdUser());
                            $avatar = getAvatarById($infoUser->getIdAvatar());
                            ?>
                            <tr class='font-weight-bold'>
                                <td><?php echo $textNumber; ?></td>
                                <td class='text-left'><img src="<?php echo $avatar->getUrl(); ?>" alt="" style='height:25px; margin-right:10px;transform:scale(1.5)'> <?php echo $infoUser->getPseudo();?></td>
                                <td><?php echo $userClass->getScore(); ?></td>
                            </tr>

                        <?php

                        } ?>
                </tbody>
            </table>
            </div>
            <div class="fixed-bottom">
                <div class="oblique-classement-resultat">
                </div>
                <a href="index.php?p=resultat" class="">
                    <div class="button-bleu-resultat text-center">
                        <p class="text-button-resultat" style="font-size: 18px;"><strong>Revoir mon résultat</strong> &nbsp;
                            <img src="web/Images/coupe.svg" alt="" style="width: 35px;"></p>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
