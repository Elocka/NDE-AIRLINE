<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

$select = $db->prepare("SELECT * FROM user,agence,type_user WHERE user.id_agence=agence.id_agence AND user.id_type_user=type_user.id_type_user AND id_user = ?");
$select->execute([$_SESSION['id_user']]);
$rs = $select->fetch();
$agences = $rs->id_agence;
//requete pour selectionner et afficher les colis
$colis=$db->prepare("SELECT  * FROM colis,transfert,agence WHERE colis.id_transfert=transfert.id_transfert AND agence.id_agence=colis.id_agence  AND transfert.id_agence_recoit=? ");
$colis->execute([$rs->id_agence]);
$prep=$colis->fetchall();
//requete pour selectionner et afficher les agences qui recoivent les colis
$colis=$db->query("SELECT  * FROM transfert,agence WHERE   transfert.id_agence_recoit=agence.id_agence");
$pres=$colis->fetchall();

  include("views/reception_colis_view.php");

?>