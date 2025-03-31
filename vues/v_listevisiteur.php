<?php
/**
 * Vue Liste des mois
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
<h2>Mes fiches de frais</h2>
<div class="row">
    <div class="col-md-6">
        <h3>Sélectionner un visiteur :</h3>
        <form action="index.php?uc=validerfichefrais&action=detailFicheFrais" method="post" role="form">
            <div class="form-group">
                <label for="lstVisiteurs" accesskey="n">Visiteur :</label>
                <select id="lstVisiteurs" name="lstVisiteurs" class="form-control">
                    <?php
                    foreach ($listeVisiteur as $unVisiteur) {
                        $idVisiteur = $unVisiteur['id'];
                        $nomVisiteur = $unVisiteur['nom'];
                        $prenomVisiteur = $unVisiteur['prenom'];

                        if (isset($visiteurASelectionner) && $idVisiteur == $visiteurASelectionner) {
                            echo "<option selected value=\"$idVisiteur\">$nomVisiteur $prenomVisiteur</option>";
                        } else {
                            echo "<option value=\"$idVisiteur\">$nomVisiteur $prenomVisiteur</option>";
                        }
                    }
                    ?>
                </select>
            </div>
    </div>
<div class="row">
    <div class="col-md-6">
        <h3>Sélectionner un mois :</h3>
            <div class="form-group">
                <label for="lstMois" accesskey="n">Mois :</label>
                <select id="lstMois" name="lstMois" class="form-control">
                    <?php
                      foreach ($listeMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        $numMois = $unMois['numMois'];
                    if ($mois == $moisASelectionner) {
                        ?>
                        <option selected value="<?php echo $mois ?>">
                            <?php echo $numMois . '/' . $numAnnee ?> </option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $mois ?>">
                            <?php echo $numMois . '/' . $numAnnee ?> </option>
                        <?php
                    }
                }
                
                ?>    
                </select>
            </div>
            </div> 
            <input id="ok" type="submit" value="Valider" class="btn btn-success" 
                   role="button">
        </form>