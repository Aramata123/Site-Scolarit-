<h3> Liste d' Enseignement</h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td> Id enseignement </td>
        <td> Matière</td>
        <td> Nb Heures </td>
        <td>Coefficient</td>
        <td> Id Professeur </td>
        <td> Id Classe </td>
    </tr>
    <?php
    if(isset($lesEnseignements)){
        foreach ($lesEnseignements as $unEnseignement){
        echo "<tr>";
        echo "<td>".$unEnseignement['idenseignement']."</td>";
        echo "<td>".$unEnseignement['matiere']."</td>";
        echo "<td>".$unEnseignement['nbheures']."</td>";
        echo "<td>".$unEnseignement['coeff']."</td>";
        echo "<td>".$unEnseignement['idprofesseur']."</td>";
        echo "<td>".$unEnseignement['idclasse']."</td>";
        echo "</tr>";
    }
    }
    ?>

</table>