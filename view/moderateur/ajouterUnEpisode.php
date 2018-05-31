<?php require('public/functions/ajouterUnEpisode.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/ajouterUnEpisode.css" rel="stylesheet" />
    <title>ajouter un épisode</title>
    <script src="public/js/menuModerateur.js"></script>
    <script src="public/js/editeurDeTexte.js"></script>
</head>


<body>
   <?php require('public/textFunctions/headerModerateur.php'); ?>
    
<section id="corpsDeLaPage">

    <h1>Ajouter un épisode</h1>
    
    <form action="index.php?action=ajouterUnEpisode" method="post" id="formAjouter">
        <p>Episode
            <?= htmlspecialchars($nombreduDernierEpisode['numeroEpisode'] +1) ?>
        </p>
        <input name="numeroEpisode" value="<?= htmlspecialchars($nombreduDernierEpisode['numeroEpisode'] +1) ?>" id="numeroEpisode" required="" type="hidden">
        <p>titre <input name="titre" id="titre" required="" type="text"></p>
        <!--<p>image <input name="image" required="" type="text"></p>-->
        <p>Description <input name="description" id="description" required="" type="text"></p>
 
        <?php require('public/textFunctions/editeurHTML.php'); ?>
<div id="editeur" contentEditable></div>
       
        <input name="texte" id="texte" required="" type="hidden" >
        <input onclick="ajoutEpisode();" type="submit" name="publie" value="Publié" />
    </form>
    
</section>

    <script>
        
</script>
    


</style>
</body>

</html>




