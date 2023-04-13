<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

function mois_actuels(){
  $mois = date('m');
  
  return " $mois ";

}
function annee_actuels(){
  
  $annee = date('Y');
  return " $annee ";

}
function jour_actuels(){
  
  $annee = date('d');
  return " $annee ";

}

$mois = mois_actuels();
											$annees = annee_actuels();
												$jour = jour_actuels();
                        $total=100;
                        //conte le nombre de colis non envoye
												$stmt = $db->prepare("SELECT COUNT(id_colis) AS total FROM colis WHERE MONTH(date_creation) =$mois and YEAR(date_creation)=$annees and DAY(date_creation)=$jour and statut_colis='1'");
													$stmt->execute();
													$row = $stmt->fetch();
                         //nombre de colis en cours d'envoi
                          $stmts = $db->prepare("SELECT COUNT(id_colis) AS total1 FROM colis WHERE MONTH(date_creation) =$mois and YEAR(date_creation)=$annees and DAY(date_creation)=$jour and statut_colis='2'");
													$stmts->execute();
													$rows = $stmts->fetch();
                          
                          //nombre de colis envoye
                          $stm = $db->prepare("SELECT COUNT(id_colis) AS total2 FROM colis WHERE MONTH(date_creation) =$mois and YEAR(date_creation)=$annees and DAY(date_creation)=$jour and statut_colis='3'");
													$stm->execute();
													$rot = $stm->fetch();	
                         //nombre d'utilisateur
                          $stm = $db->prepare("SELECT COUNT(id_user) AS total3 FROM user WHERE id_type_user!='3'");
													$stm->execute();
													$rots = $stm->fetch();	

                          // $stm = $db->prepare("SELECT id_agence SUM(id_colis) AS total, DATE_FORMAT(date_creation, '%m/%Y') AS mois FROM colis, agence WHERE colis.id_agence = agence.id_agence GROUP BY id_agence, mois ORDER BY id_agence, date_creation");
													// $stm->execute();
													// $rom = $stm->fetchAll();		
                          // var_dump($rom);
                          // die;

  include("views/index_view.php");

?>