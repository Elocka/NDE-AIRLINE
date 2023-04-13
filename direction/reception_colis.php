<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

//requete pour selectionner et afficher les colis
$colis=$db->query("SELECT  * FROM colis,transfert,agence WHERE colis.id_transfert=transfert.id_transfert AND agence.id_agence=colis.id_agence  ");
$prep=$colis->fetchall();
//requete pour selectionner et afficher les agences qui recoivent les colis
$colis=$db->query("SELECT  * FROM transfert,agence WHERE   transfert.id_agence_recoit=agence.id_agence");
$pres=$colis->fetchall();

  include("views/reception_colis_view.php");

?>