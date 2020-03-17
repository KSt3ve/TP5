

<?php

setcookie("test","test");
setcookie("test1","test1",time()+3600*14*24);

echo "<h1> TP5 </h1>";
echo "<hr>";

echo "<h2> Exercice1 </h2>";

?>

<a href="tp5.php?F=-15">Cliquer pour avoir la valeur en degré</a><br>

<?php
    if(isset($_GET['F'])){
        $C = $_GET['F']*9/5+32;
        echo "La valeur en degré est : ".$C.'<br>';
    }
    echo '<br>';
?>
<h4> POST Version </h4>
<form action="tp5.php" method="post">
    Valeur en Fahrenheit : <input type="text" name="VFahrenheit">
    <input type="submit" value="Convertir">
</form>

<?php
    if(isset($_POST['VFahrenheit'])){
        $C1 = $_POST['VFahrenheit']*9/5+32;
        echo $_POST['VFahrenheit']." °F en degré est : ".$C1." °C"."<br>"."<br>";
    }
?>

<h4> GET Version </h4>

<form action="tp5.php" method="get">
    Valeur en Fahrenheit : <input type="text" name="VFahrenheit1">
    <input type="submit" value="Convertir">
</form>

<?php
if(isset($_GET['VFahrenheit1'])){
    $C2 = $_GET['VFahrenheit1']*9/5+32;
    echo $_GET['VFahrenheit1']." °F en degré est : ".$C2." °C"."<br>"."<br>";
}

echo "<hr>";
echo "<h2> Exercice2 </h2>";



?>

<form action="tp5.php" method="post">
    Nom : <input type="text" name="Nom" value="<?php if ($_POST['Nom'] != null) {echo $_POST['Nom'];}?>">
    Prénom : <input type="text" name="Prénom" value="<?php if ($_POST['Prénom'] != null) {echo $_POST['Prénom'];}?>"><br>
    Débutant : <input type="radio" name="ok" id="1" value="Débutant">
    Avance : <input type="radio" name="ok" id="2" value="Avancé"><br>
    <input type="submit" value="Effacer">
    <input type="submit" value="Envoyer">
</form>

<?php
if($_POST['Nom']!="" and $_POST['Prénom']!=""){
    echo "Bonjour ".$_POST['Prénom']." ".$_POST['Nom'].", Vous avez un niveau ".$_POST['ok'].'<br>';
}
echo "<hr>";
echo "<h2> Exercice3 </h2>";
?>


    Nom : <input type="text" name="NomEx3">
    Prénom : <input type="text" name="PrénomEx3">
    Age : <input type="text" name="AgeEx3"><br><br>

    <select name="languages[]" size="5" multiple="multiple">
        <option>Français</option>
        <option>Anglais</option>
        <option>Espagnol</option>
        <option>Allemand</option>
        <option>Coronavirus</option>
    </select><br><br>

    <input type="checkbox" name="languagesit[]" value="HTML"> HTML
    <input type="checkbox" name="languagesit[]" value="CSS"> CSS
    <input type="checkbox" name="languagesit[]" value="PHP"> PHP
    <input type="checkbox" name="languagesit[]" value="SQL"> SQL
    <input type="checkbox" name="languagesit[]" value="C"> C
    <input type="checkbox" name="languagesit[]" value="C++"> C++
    <input type="checkbox" name="languagesit[]" value="JS"> JS
    <input type="checkbox" name="languagesit[]" value="PYTHON"> PYTHON

    <br><br><input type="submit" value="Effacer">
    <input type="submit" value="Envoyer">
</form>

<?php
    if($_POST['NomEx3'] !="" and $_POST['PrénomEx3'] !="" and $_POST['AgeEx3'] !=""){
        echo "<h3><strong>Récapitulatif de votre fiche d'information personnelle</strong></h3><br>";
        echo "Vous êtes ".$_POST['PrénomEx3']." ".$_POST['NomEx3'].'<br>';
        echo "Vous avez ".$_POST['AgeEx3']." ans".'<br>';
        echo "Vous parlez : ".'<br>'.'<br>';
        $tableau = $_POST['languages'];
        $tableauit = $_POST['languagesit'];
        echo '<ul>';
        for($i=0;$i<count($tableau);$i++){
            echo '<li>'.$tableau[$i].'</li>';
        }
        echo '</ul>';
        echo "Vos compétences informatiques sont  : ".'<br>'.'<br>';
        echo '<ul>';
        for($i=0;$i<count($tableauit);$i++){
            echo '<li>'.$tableauit[$i].'</li>';
        }
        echo '</ul>';
    }

echo "<hr>";
echo "<h2> Exercice4 </h2>";

?>

<form action="tp5.php" method="post">
    <strong>
        Nombre 1 <input type="text" name="number1" value="<?php if ((($_POST['b1']=="Addition") or ($_POST['b2']=="Soustraction") or ($_POST['b3']=="Division") or ($_POST['b4']=="Puissance")) and ($_POST['number1'])!=null)
                {echo $_POST['number1']; } ?>"><br>
        Nombre 2 <input type="text" name="number2" value="<?php if ((($_POST['b1']=="Addition") or ($_POST['b2']=="Soustraction") or ($_POST['b3']=="Division") or ($_POST['b4']=="Puissance")) and ($_POST['number2'])!=null)
                {echo $_POST['number2']; } ?>"><br>
        Résultat <input type="text" name="number3" value="<?php if (($_POST['b1']=="Addition")&&($_POST['number1']!=null)&&($_POST['number2']!=null))
                {echo $_POST['number1'] + $_POST['number2'];}
            if (($_POST['b2']=="Soustraction")&&($_POST['number1']!=null)&&($_POST['number2']!=null))
                {echo $_POST['number1'] - $_POST['number2'];}
            if (($_POST['b3']=="Division")&&($_POST['number1']!=null)&&($_POST['number2']!=null))
                {echo $_POST['number1'] / $_POST['number2'];}
            if (($_POST['b4']=="Puissance")&&($_POST['number1']!=null)&&($_POST['number2']!=null))
                {echo $_POST['number1'] ** $_POST['number2'];}?>"><br>
        Cliquer sur un bouton !
    <input type="submit" name="b1" value="Addition">
    <input type="submit" name="b2" value="Soustraction">
    <input type="submit" name="b3" value="Division">
    <input type="submit" name="b4" value="Puissance">
    </strong>
</form>

<hr>;
<h2> Exercice 5  </h2>

<form action="tp5.php" method="post" enctype="multipart/form-data">
    <p>
        Fichier <input type="file" name="fichier"><br>
        Fichier <input type="file" name="fichier1"><br>
        Valider <input type="submit" value="Envoi">
    </p>
</form>

<table class="Etienne">
    <tr>
        <td class="Etienne"></td>
        <td class="Etienne">Image 1</td>
        <td class="Etienne">Image 2</td>
    </tr>
    <tr>
        <td class="Etienne">name</td>
        <td class="Etienne"><?php echo $_FILES['fichier']["name"]; ?></td>
        <td class="Etienne"><?php echo $_FILES['fichier1']["name"];?></td>
    </tr>
    <tr>
        <td class="Etienne">type</td>
        <td class="Etienne"><?php echo $_FILES['fichier']["type"]; ?></td>
        <td class="Etienne"><?php echo $_FILES['fichier1']["type"]; ?></td>
    </tr>
    <tr>
        <td class="Etienne">tmp_name</td>
        <td class="Etienne"><?php echo $_FILES['fichier']["tmp_name"]; ?></td>
        <td class="Etienne"><?php echo $_FILES['fichier1']["tmp_name"]; ?></td>
    </tr>
    <tr>
        <td class="Etienne">error</td>
        <td class="Etienne"><?php echo $_FILES['fichier']["error"]; ?></td>
        <td class="Etienne"><?php echo $_FILES['fichier1']["error"]; ?></td>
    </tr>
    <tr>
        <td class="Etienne">size</td>
        <td class="Etienne"><?php echo $_FILES['fichier']["size"]; ?></td>
        <td class="Etienne"><?php echo $_FILES['fichier1']["size"]; ?></td>
    </tr>
    <?php
        $image = move_uploaded_file($_FILES["fichier"]["tmp_name"],$_FILES["fichier"]['name']);
        $image1 = move_uploaded_file($_FILES["fichier1"]["tmp_name"],$_FILES["fichier1"]['name']);
    ?>
    <tr>
        <td class="Etienne">Image</td>
        <td class="Etienne"><img src="<?php echo $_FILES['fichier']["name"]; ?>"/></td>
        <td class="Etienne"><img src="<?php echo $_FILES['fichier1']["name"]; ?>"/></td>
    </tr>
</table>

<style>
    .Etienne{
        border: medium solid black;
    }

</style>

<?php
session_start();

echo "<hr>";
echo "<h2> Exercice7 </h2>";


echo "le contenue des cookies est ".'<br>';
print_r($_COOKIE);
echo '<br>'.'<br>'.'le contenue du cookie test est  '.$_COOKIE['test']. '<br>';
echo 'le contenue du cookie test1 est  '.$_COOKIE['test1']. '<br>'. '<br>';

setcookie("test");
setcookie("test1",time()-3600*14*24);

echo "On efface le contenue des cookies".'<br>';
echo '<br>'.'<br>'.'le contenue du cookie test est  '.$_COOKIE['test']. '<br>';
echo 'le contenue du cookie test1 est  '.$_COOKIE['test1']. '<br>'. '<br>';


echo "<hr>";
echo "<h2> Exercice8 </h2>";


echo "<hr>";
echo "<h2> Exercice9 </h2>";

echo 'ID : '.session_id().'<br>';
$_SESSION['Nom']='Dorian Rossini';
$_SESSION['Date']="l'an 0";
$_SESSION['Site']="https://pics.me.me/youve-been-gnomed-me-irl-66947327.png";

session_destroy();
?>

<a href="pageEx9.php">Cliquer sur ce lien !</a>

<hr>
<h2> Exercice10 </h2>

<?php
    $id_file = fopen('test-fic.txt','a+');
    fwrite($id_file, "Monsieur ROYER");
    fseek($id_file,0);
    if($id_file){
        while($i = fgets($id_file)){
            echo "$i".'<br>';
        }
    }
echo "<hr>";
echo "<h2> Exercice11 </h2>";
    $id_file = fopen('contact.txt','a+');
if($id_file){
    while($i = fgets($id_file)){
        echo "$i".'<br>';
    }
    fseek($id_file, 0);
    echo "<table class='Etienne'>";
    while ($ligne=fgets($id_file)){
        echo '<tr><td class="Etienne">'.str_replace(';', '</td><td class="Etienne">', $ligne)."</td></tr>";
    }
    echo "</table>";
    fseek($id_file, 0);

    fclose($id_file);
}

echo "<hr>";
echo "<h2> Exercice12 </h2>";
?>

<h4> Enregistrer vos données personnelles</h4><br>
<form action="tp5.php" method="post">
    Votre Nom : <input name="Nom" type="text"><br>
    Votre Prénom : <input name="Prénom" type="text"><br>
    <input value="Enregistrer" type="submit">
    <input value="Effacer" type="submit">
</form>
<?php
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prénom'];
    $nbVisite = 0;

    if($Nom!="" and $Prenom!=""){
        $nowDate = new DateTime("now");
        $id_file1= fopen('visite.txt','a+');
        while ($ligne=fgets($id_file1)){
            $nbVisite++;
        }
        fwrite($id_file1,$nbVisite.";".$Prenom.";".$Nom.";".date('Y/m/d H:i:s')."\n");
        echo "<h2><strong>Merci $Prenom $Nom pour votre visite</strong></h2>";
        if($id_file1){
            fseek($id_file1, 0);
            echo "<table class='Etienne'>";
            while ($ligne=fgets($id_file1)){
                echo '<tr><td class="Etienne">'.str_replace(';', '</td><td class="Etienne">', $ligne)."</td></tr>";
            }
            echo "</table>";
            fseek($id_file1,0,SEEK_END);

            fclose($id_file1);
        }
    }
?>

<hr>
<h2> Exercice13 </h2>
Choisir votre délégué<br>
<form action="tp5.php" method="post">
    Benoît LARDEUX : <input type="radio" name="délégué" value="Benoît LARDEUX"><br>
    Etienne LEMONNIER : <input type="radio" name="délégué" value="Etienne LEMONNIER"><br>
    Hugo BOURREAU : <input type="radio" name="délégué" value="Hugo BOURREAU"><br>

    <input value="Voter" type="submit">
    <input value="Afficher les Votes" name="RVotes" type="submit">
</form>

<?php

$id_file2= fopen('vote.txt','a+');
fwrite($id_file2, $_POST['délégué']."\n");

if($_POST['RVotes']){
    $id_file2= fopen('vote.txt','a+');
    $find1 = "Benoît LARDEUX\n";
    $find2 = "Etienne LEMONNIER\n";
    $find3 = "Hugo BOURREAU\n";
    $Rvote1 =0;$Rvote2 =0;$Rvote3 =0;
    while ($ligne=fgets($id_file2)){
        if(strcmp($find1,$ligne)==0){
            $Rvote1++;
        }
        if(strcmp($find2,$ligne)==0){
            $Rvote2++;
        }
        if(strcmp($find3,$ligne)==0){
            $Rvote3++;
        }
    }
    $Rtot = $Rvote1 + $Rvote2 + $Rvote3;
    echo "<h2>Résultat des votes</h2><br>";
    echo "Benoît LARDEUX a ".$Rvote1." voix, soit ".($Rvote1/$Rtot)*100 .'%'.'<br>';
    echo "Etienne LEMONNIER a ".$Rvote2." voix, soit ".($Rvote2/$Rtot)*100 .'%'.'<br>';
    echo "Hugo BOURREAU a ".$Rvote3." voix, soit ".($Rvote3/$Rtot)*100 .'%'.'<br>';
    if($Rvote1 > $Rvote2 and $Rvote1 > $Rvote3){
        echo "<strong>"."===Le nouveau délégué de la classe est Benoît LARDEUX==="."</strong>";
    }
    if($Rvote2 > $Rvote1 and $Rvote2 > $Rvote3){
        echo "<strong>"."===Le nouveau délégué de la classe est Etienne LEMONNIER==="."</strong>";
    }
    if($Rvote3 > $Rvote2 and $Rvote3 > $Rvote1){
        echo "<strong>"."===Le nouveau délégué de la classe est Hugo BOURREAU==="."</strong>";
    }
    ftruncate($id_file2,0);
    fseek($id_file2,0,SEEK_END);
}
?>





