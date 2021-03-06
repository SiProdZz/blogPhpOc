<?php $css = "public/css/utilisateur/lecturesDesEpisodes.css" ?>
<?php $menu = "public/js/menuEpisode.js" ?>
<?php $description = "épisode intégral du livre 'un simple billet pour l'alaska'. numéro de l'épisode concercerné, titre, description, texte. Les internautes peuvent également lire mais écrire un commentaires et donnez leur avis sur l'épisode." ?>
<?php $keywords = "blog, alaska, episodes, voyage, lecture, commentaire, avis." ?>

<?php ob_start(); ?>

<div>

    <!-- En tête en position fixed -->
    <?php require('public/textFunctions/headerUtilisateur.php'); ?>

    <!-- Visuel de l'épisode -->
    <section id="corpsDeLaPage">

        <!-- Affiche un message d'erreur en cas de trafic d'url-->
        <div id="message">
            <?php echo $message ?>
        </div>

        <aside id="blockEpisode">
            <div class="headerEpisode">
                <div class="libeleEpisode">
                    <h2>Episode
                        <?= htmlspecialchars($post['numeroEpisode']) ?>
                    </h2>
                    <h3>
                        <?= htmlspecialchars($post['titre']) ?>
                    </h3>
                </div>
            </div>
            <br>
            <article class="textEpisode">
                <?= $post['texte'] ?>
            </article>
            <div id="conteneurEpisodeSuivPrec">

                <a href="episode-<?= $post['numeroEpisode']-1 ?>">
                <button class="episodePrec">Episode précédent</button>
            </a>
                <a href="episode-<?= $post['numeroEpisode']+1 ?>">
                <button class="episodeSuiv">Episode suivant</button>
            </a>
            </div>
        </aside>

        <!-- Ecriture du comentaire -->
        <aside id="blockEcrireCommentaire">
            <div id="miniBlockEcrireCommentaire">
                <div>
                    <h3>
                        Écrivez votre commentaire !
                    </h3>
                </div>
                <form action="episode-<?= $post['numeroEpisode']?>" method="post">
                    <div>
                        <label for="autheur">Choisissez votre Pseudo</label><br />
                        <input type="text" id="autheur" name="autheur" />
                    </div>
                    <div>
                        <label for="commentaire">Contenu du commentaire</label><br />
                        <textarea id="commentaire" name="commentaire"></textarea>
                    </div>
                    <div>
                        <input type="hidden" id="numeroEpisode" name="numeroEpisode" value="<?= $post['numeroEpisode']?>" />
                    </div>
                    <div>
                        <input name="publie" type="submit" value="publie" />
                    </div>
                </form>
            </div>
        </aside>

        <!-- Tous les commentaires de l'épisode -->
        <aside id="blockLireCommentaire">
            <h3 id="lesCommentaires">Les commentaires</h3>

            <?php  foreach ($commentaires as $commentaire): ?>

            <div class="miniBlockLireCommentaire">
                <div>
                    <p><strong class="pseudo"><?= htmlspecialchars($commentaire['autheur']) ?></strong> -
                        <?= $commentaire['comment_date_fr'] ?>
                    </p>
                    <p>
                        <?= nl2br(htmlspecialchars($commentaire['commentaire'])) ?>
                    </p>
                </div>

                <!-- permet de récupérer le commentaire signalé -->
                <form action="episode-<?= $post['numeroEpisode']?>" method="post">

                    <input type="hidden" name="numEpisode" value="<?= $post['numeroEpisode']?>" />

                    <input type="hidden" name="idCommentaire" value="<?= $commentaire['id']?>" />

                    <input name="signaler" type="submit" value="Signaler" />
                </form>
            </div>
            <?php endforeach; ?>
        </aside>

    </section>
    <br>
</div>

<div id="alerte">
    <span id="messageAlerte"><?= $messageAlerte ?></span>
</div>

<!-- Pied de page -->
<footer id="footer">
    © 2018 - Mentions Légales -
</footer>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
