<!-- Formulaire qui permet à l'écrivain d'ajouter un épisode à son blog-->
<?php $css = "public/css/moderateur/ajouterUnEpisode.css" ?>
<?php $menu = "public/js/menuModerateur.js" ?>
<?php $description = "espace moderateur de JeanForteroche" ?>
<?php $keywords = "CRUD, episode, commentaire" ?>

<?php ob_start(); ?>

<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/ajouterUnEpisode.css" rel="stylesheet" />
    <title>ajouter un épisode</title>
    <link rel="icon" type="image/png" href="public/images/faviconAlaska.png" />
    <script src="public/js/menuModerateur.js"></script>

</head>


<body>
    <?php require('public/textFunctions/headerModerateur.php'); ?>

    <section id="corpsDeLaPage">

        <h1>Ajouter un épisode</h1>

        <form action="ajouterUnEpisode" method="post" id="formAjouter">
            <p>Episode
                <input name="numeroEpisode" value="<?= htmlspecialchars($nombreduDernierEpisode['numeroEpisode'] +1) ?>" id="numeroEpisode" required="" type="text">
            </p>
            <p>titre <input name="titre" id="titre" required="" type="text"></p>
            <!--<p>image <input name="image" required="" type="text"></p>-->
            <p>Description <input name="description" id="description" required="" type="text"></p>

            <p>Url de l'image d'aperçu <input name="imageApercu" id="imageApercu" required="" type="text"></p>

            <?php require('public/textFunctions/editeurHTML.php'); ?>
            <div id="editeur" contentEditable></div>

            <input name="texte" id="texte" required="" type="hidden">
            <input onclick="ajoutEpisode()" type="submit" name="publie" value="Publié" />
        </form>

    </section>
    <div id="alerte">
        <span id="messageAlerte"><?= $messageAlerte ?></span>
    </div>
    
    

    <script src="public/js/editeurDeTexte.js"></script>

    <?php $content = ob_get_clean(); ?>

    <?php require('view/template.php'); ?>
