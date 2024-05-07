<H2> Gestion des etudiants</H2>
<?php
   $lesClasses = $unControleur->selectAllClasses ();
   require_once ("vue/vue_insert_etudiant.php");

   if (isset($_POST['Valider']))
   {
     $unControleur->insertEtudiant ($_POST);
   }
   $lesEtudiants = $unControleur->selectAllEtudiants ();

   require_once ("vue/vue_select_etudiants.php");
?> 