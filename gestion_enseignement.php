<H2> Gestion des enseignements </H2>
<?php
$lesClasses = $unControleur->selectAllClasses();
$lesProfesseurs = $unControleur ->selectALLProfesseurs();

   require_once ("vue/vue_insert_enseignement.php");

   if (isset($_POST['Valider']))
   {
     $unControleur->insertEnseignement ($_POST);
   }
   $lesEnseignements = $unControleur->selectAllEnseignements();

   require_once ("vue/vue_select_enseignements.php");
?>