<?php
/*
 * Formulaire evenement 
 */
echo "<body style='background-color: black;color: lime;'>";
?>

<h1>Ajouter un évenement</h1>

<!--enctype est un type d'encodage de donéée la valeur multipart/form-data spécifie qu'il envoit des données binaire et du text champ du formulaire.-->
<form method="POST" action="../controler/event.php" enctype="multipart/form-data">
    <fieldset>
        <p>
        <label for='nameEvent'>Nom de l'événnement</label>
        <input type='text' id='nameEvent' name='nameEvent' placeholder="Soirée Moule Frites">
        </p>
        <p>
        <label for='nameType'>Type d'événement</label>
        <select id="nameType" name="nameType">
            <option value="option1" name="optionJapponnais">Japonnais</option>
            <option value="Pizza" name="optionPizza">Pizza</option>
            <option value="Burger" name="optionBurger">Burger</option>
            <option value="Indien-Pakistanais" name="optionIndienPakistannais">Indien-Pakistanais</option>
            <option value="Chinois" name="optionChinois">Chinois</option>
            <option value="Touche personnel" name="optionTouchePersonnel">Touche personnel</option>
            <option value="Spécialité" name="optionSpecialiter">Spécialité</option>
            <option value="Oriental" name="optionOriental">Oriental</option>
        </select>
        </p>
        <textarea name="nameDescrition" cols="40" rows="10" placeholder="Salut chère inconnue! je fais ma première party bouff! ... j'ai prévus cette soirée dans un coin tranquille..."></textarea>
        <p>
        <label for='namelieu'>Ajoutez un lieu</label>
        <input type='text' id='namelieu' name='namelieu' placeholder="Vénissieux">
        </p>
        <p>
        <label for='nameDateTime'>Ajoutez une date et une heure</label>
        <input type='date' id='nameDateTime' name='nameDateTime'>
        <input type='time' id='nameDateTime' name='nameDateTime'>
        </p>
        <p>
        <label for='numberPersonne'>Nombre de personne inviter</label>
        <input type='number' id='numberPersonne' name='numberPersonne' placeholder="5">
        </p>
        <p>
        <label for='addPrice'>Estimation €</label>
        <input type='number' id='addPrice' name='addPrice' placeholder="15€">
        </p>
        <p>
        <input type="hidden" name="MAX_FILE_SIZE" value="12345" />
        <label for='nameImage'>Ajouter une image</label>
        <input type='file' id='nameImage' name='nameImage'>
        </p>
        <input type="submit" name="event" value="inscription">
    </fieldset>
</form>

<form method="post" enctype="multipart/form-data" action="../controler/event.php">
<p>
<input type="file" name="fichier" size="30">
<input type="submit" name="upload" value="Uploader">
</p>
</form>

