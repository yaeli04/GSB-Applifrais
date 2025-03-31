<?php
/**
 * Vue Accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
?>
<div id="accueil">
    <h2>
        Gestion des frais<small> - Comptable : 
            <?php 
            echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']
            ?></small>
    </h2>
</div>
    <div class="row">
    <div class="col-md-12" style="color:white">
        <div class="panel panel-primary"style="border-color:pink">
            <div class="panel-heading" style="background-color: pink ; border-color: pink">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span>
                    Navigation
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=validerfichefrais&action=selectionnerVisiteur"
                           class="btn btn-success btn-lg" role="button"style="background-color:lightblue;color: white ; border-color: lightblue">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <br>Valider la fiche de frais</a>
                        <a href="index.php?uc=payerFrais&action="
                           class="btn btn-primary btn-lg" role="button"style="background-color:lightblue;color: white ; border-color: lightblue">
                            <span class="glyphicon glyphicon-list-alt"style="color:white"></span>
                            <br>Suivre le paiment des fiches de frais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>