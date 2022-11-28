<?php /* Template Name: Page Accueil */ ?>

<?php
get_header('sgs');
?>

<main>

    <h1> <?php $test = get_field('groupe_introduction') ?> </h1>

    

    <?php 
    var_dump(get_field($test)); 
    
    foreach ($test as $value) {
        var_dump($value);
        var_dump(get_field("premier_paragraphe")); 
    }
    ?>



</main>


<?php
get_footer('sgs');