<?php /* Template Name: Page Accueil */ ?>

<?php
get_header('sgs');
?>

<main>
    
    <!-- <div class="scrollUp"></div> -->

    <?php 
        $first = get_field('groupe_introduction');
        $second = get_field('groupe_competition');
        $third = get_field('groupe_collection');
        $fourth = get_field('groupe_invites');
        $fifth = get_field('groupe_cosplay');
        $sixth = get_field('groupe_partenaires');
    ?>

    <div class="backgroundImage"><?= get_the_post_thumbnail(); ?></div>

    <div id="presentation" class="firstParagraph">
        <h1><?= get_the_title()?> <span class="titleColor"><?= $first['titre_partie_2_colore']?></span> </h1>

        <?= $first['premier_paragraphe'] ?>
    </div>

    <div id="competition" class="secondParagraph">
        <h2><?= $second['competition_titre']?> <span class="titleColor"><?= $second['competition_titre_partie_2_colore'] ?></span> <?= $second['competition_titre_partie_3'] ?> </h2>
        <div class="containerSecondParagraph">
            <img src="<?= $second["competition_description"]["image_jeux_video"]['url']?>" 
                alt="<?=$second["competition_description"]["image_jeux_video"]['alt']?>">

            <div class="textSecondParagraph">
                <h3><?= $second["competition_description"]['titre_jeux_video_partie_1']?> <span class="titleColor"><?= $second["competition_description"]['titre_jeux_video_partie_2_colore']?></span> <?= $second["competition_description"]['titre_jeux_video_partie_3']?></h3>
                <?=$second["competition_description"]['paragraphe_competition_première_partie'] ?>
            </div>
        </div>
    </div>

    <div id="celebrites" class="thirdParagraph">
        <div>
            <h3><?= $third['collection_titre'] ?> <span  class="titleColor"><?= $third['collection_titre_partie_2_colore'] ?></span> <?= $third['collection_titre_partie_3'] ?></h3>
            <?=$third['paragraphe_collection']?>
        </div>
        <img src="<?= $third['image_collection']['url'] ?>" alt="<?= $third['image_collection']['alt']?>">
    </div>

    <div class="guests">
        <h2> <?= $fourth['invites_titre'] ?> <span  class="titleColor"><?= $fourth['invites_titre_partie_2_colore'] ?></span> <?= $fourth['invites_titre_partie_3'] ?></h2>
        <div class="guestsContainer">
            <?php
                for ($i=1; $i <= 8 ; $i++) { 
                    ?>
                        <div class="singleContainer">
                            <?=  get_the_post_thumbnail($fourth['groupe_cadre_invites']["cadre_".$i]); ?>
                            <p class="singleTitle"><?=  get_post($fourth['groupe_cadre_invites']["cadre_".$i])->post_title; ?></p>
                            <p class="singleDescription"><?= get_post($fourth['groupe_cadre_invites']["cadre_".$i])->post_content; ?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>

    <div id="cosplay" class="fourthParagraph">
        <div>
            <h3><?= $fifth['titre_cosplay'] ?> <span  class="titleColor"><?= $fifth['titre_cosplay_partie_2_colore'] ?></span> <?= $fifth['titre_cosplay_partie_3'] ?> </h3>

            <?= $fifth['description_cosplay'] ?>

        </div>
        <img src="<?= $fifth['image_cosplay']['url'] ?>" alt="<?= $fifth['image_cosplay']['alt'] ?>">
    </div>

    <div class="partenaires">
        <h2><?= $sixth['titre_partenaires'] ?> <span  class="titleColor"><?= $sixth['titre_partenaires_partie_2_colore'] ?></span> <?= $sixth['titre_partenaires_partie_3'] ?></h2>

        <div class="partenairesContainer">

            <?php

                for ($i=1; $i <= 6; $i++) { 
                    ?>
                    <div class="singlePartenaire">
                        
                        <?= get_the_post_thumbnail($sixth['groupe_partenaires_cadres']['partenaire_cadre_single_'.$i]); ?>
                        <p class="partenaireName"><?= get_post($sixth['groupe_partenaires_cadres']['partenaire_cadre_single_'.$i])->post_title; ?></p>
                    </div>

                    <?php
                }
            ?>

        </div>
    </div>
</main>

<?php
get_footer('sgs');