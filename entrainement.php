<h3>Entrainement PHP</h3>
<?php
echo "<h3>Entrainement PHP</h3>";

print 'fonctionne également';
echo "<h3>Les commentaires</h3>";
// Ceci est un commentaire sur une ligne
# Ceci est aussi un commentaire sur une ligne
/* Ceci est un commentaire
sur plusieurs lignes */
/**
 * Ceci est un commentaire de documentation
 */

echo "<h3>Les variables</h3>";
$a = 10; //j'affecte la valeur 10 dans la variable $a
$b = 5;
$c = $a + $b;
echo $c;

$dataClientName = "John";
$dataClientAge = 25;
$dataClientCity = "Paris";
echo $dataClientCity;
$dataClientCity = "New york";
echo $dataClientCity;

echo "<h3>Affectation par copie et références</h3>";
//par défaut : 
$firstVar = 1;
$secondVar = $firstVar + 9;
echo $secondVar; //10
echo $firstVar; //1

//par référence : 
$newVar = 8;
$otherVar = &$newVar;
$otherVar = 10;
echo $otherVar;
echo $newVar;

echo "<h3>Variables dynamiques</h3>";
$personnage = 'link';
echo $personnage; //link
${$personnage} = 'Zelda';
echo $link;

${$personnage . 'Mechant'} = 'Ganon';
echo $linkMechant;

echo "<h3>La concaténation</h3>";
//...est suivi de... 
$x = "bonjour";
$y = "tout le monde";
echo 'Hey! ' . $x . ' ' . $y;

echo '$x $y <br>';
echo "$x $y <br>";
echo "<p>Hey! $x $y</p>";
echo '<p>Hey!' . $x . ' ' . $y . '</p>';

$etudiant = "Noah";
$etudiant .= " est un étudiant";
echo $etudiant;

$message = "aujourd'hui";
$message = 'aujourd\'hui';

echo "<p>Hey! {$x} {$y}</p>";

echo "<h3>Le typage</h3>";
/*
types scalaires
- entier => integer
- flottants => float
- chaînes de caractères => string
- booléens => boolean

les types composés
- tableaux => array
- objets => object
- ressources
- iterrables
*/
$a = 127;
$b = 1.5;
$c = "Bonjour";
$d = true;

echo gettype($a) . '<br>';
echo gettype($b) . '<br>';
echo gettype($c) . '<br>';
echo gettype($d) . '<br>';

$tab = [1, 2];
$obj = new DateTime();
echo gettype($tab) . '<br>';
echo gettype($obj) . '<br>';

echo '<h3>Les constantes</h3>';
define("CAPITALE", "Paris");
echo CAPITALE;

const LIEN_GOOGLE = "<a href=''https://www.google.com''>Google</a>";
echo LIEN_GOOGLE;
echo constant("LIEN_GOOGLE");

//exemple : 
const PI = 3.1415926;
$rayon  = 12;
echo "<p> L'aire du cercle est : " . PI * $rayon * $rayon . "</p>";

echo "<h3>Les constantes magiques</h3>";
echo __LINE__ . '<br>';
echo __FILE__ . '<br>';
echo __DIR__ . '<br>';
echo PHP_VERSION;

echo "<h3>Les opérateurs arithmétiques</h3>";
$a = 10;
$b = 2;
#addition : 
echo $a + $b . '<br>'; //12
#soustraction :
echo $a - $b . '<br>'; //8
#multiplication :
echo $a * $b . '<br>'; //20
#division :
echo $a / $b . '<br>'; //5

#modulo : le reste de la division
$a = 7;
$b = 3;
echo $a % $b . '<br>'; //1

//affectation par addition et par soustraction ! 
$panierMouss = 0;
$panierMouss += 10; //$panierMouss = $panierMouss + 10
$panierMouss += 5;
$panierMouss -= 2;
echo $panierMouss;

echo '<h3>Les structures conditionnelles</h3>';
?>
<style>
      .carre {
            height: 100px;
            width: 100px;
      }

      .carreRouge {
            background-color: red;
      }

      .carreVert {
            background-color: green;
      }

      .carreBleu {
            background-color: blue;
      }

      .simpleCarre {
            border: 2px solid black;
      }
</style>
<?php
#isset() : teste si une variable existe
#empty() : teste si une variable est vide ou égal à 0 ou false
$var0 = 3;
$var1 = 1;
$rouge = "<div class='carre carreRouge'></div>";
$bleu = "<div class='carre carreBleu'></div>";
$vert = "<div class='carre carreVert'></div>";
$simpleCarre = "<div class='carre simpleCarre'></div>";

if (isset($rouge)) {
      echo $rouge; //si le prédicat est true
} else {
      echo $simpleCarre; //si le prédicat est false
}

if (empty($var0)) {
      echo $rouge;
} else {
      echo $simpleCarre;
}

//opérateurs logiques 
#&& ou AND => ET
if (isset($rouge) && isset($jaune)) {
      echo $rouge;
} else {
      echo $simpleCarre;
}

#|| ou OR => OU
if (isset($bleu) || isset($jaune)) {
      echo $bleu;
} else {
      echo $simpleCarre;
}

#opérateurs de comparaison
#== : égalité
#=== : égalité stricte
#!= : différent de
#< : inférieur à
#> : supérieur à
#<= : inférieur ou égal à
#>= : supérieur ou égal à
$a = mt_rand(1, 50);
$b = mt_rand(1, 50);
$c = 2;
if ($a > $b) {
      echo $a . ' est supérieur à ' . $b;
} else {
      echo $a . ' est inférieur à ' . $b;
}

//elseif
$salaire = mt_rand(1, 5000);
if ($salaire < 1000) {
      echo "Vous gagnez {$salaire}€. Vous êtes pauvre comme Noah";
} else if ($salaire < 2000) {
      echo "Vous gagnez {$salaire}€. Vous êtes moyen";
} else {
      echo "Vous gagnez {$salaire}€. Vous êtes riche";
}


//ternaire 
$var0 = 0;
$var1 = 1;
$truc = ($var0 === 0) ? true : (($var1 === 0) ? true : false);

//forme pratique : 
$display = true;
if ($display != true) : ?>
      <h3>Aucun formulaire à afficher</h3>
<?php else : ?>
      <form action="" method="post">
            <input type="text" name="nom" id="nom">
            <input type="submit" value="Envoyer">
      </form>
<?php endif;

echo "<h3>Le Switch</h3>";
$couleur = 'rouge';
switch ($couleur) {
      case 'rouge':
            echo 'Vous avez choisi la couleur rouge';
            break;
      case 'bleu':
            echo 'Vous avez choisi la couleur bleu';
            break;
      case 'vert':
            echo 'Vous avez choisi la couleur vert';
            break;
      default:
            echo 'La couleur choisie n\'est ni rouge, ni bleu, ni vert';
}
//exercice : traduisez le switch en if/else
$couleur = "jaune";
if ($couleur === "rouge") {
      echo 'Vous avez choisi la couleur rouge';
} else if ($couleur === "bleu") {
      echo 'Vous avez choisi la couleur bleu';
} else if ($couleur === "vert") {
      echo 'Vous avez choisi la couleur vert';
} else {
      echo 'La couleur choisie n\'est ni rouge, ni bleu, ni vert';
}


echo '<h3>Les fonctions prédéfinies</h3>';
//phpinfo(); //affiche les informations sur la configuration PHP

//débug : 
$tab = [1, 2, 3];
echo '<pre>';
print_r($tab); //affiche le contenu d'un tableau
echo '</pre>';

echo '<pre>';
var_dump($tab); //affiche le contenu d'une variable
echo '</pre>';

//dates : 
echo date('L') . '<br>';
//exercice : affichez la date du jour : Nous sommes le 21 octobre 2024 et il est 19h30
date_default_timezone_set('Europe/Paris');
echo '<p>Nous sommes le ' . date('d F Y') . ' et il est ' . date('H') . 'h' . date('i') . '</p>';


#time() : nombre de secondes écoulées depuis le 1er janvier 1970
echo time() . '<br>';

//fonctions mathématiques
$valueToTest = 105.898;
echo ceil($valueToTest) . '<br>'; //arrondi au supérieur
echo floor($valueToTest) . '<br>'; //arrondi à l'inférieur
echo round($valueToTest, 2) . '<br>'; //arrondi au plus proche

echo '<p>La valeur maximale est : ' . max(1, 2, 3, 4, 5) . '</p>';
echo '<p>La valeur minimale est : ' . min(1, 2, 3, 4, 5) . '</p>';

//fonctions texte : 
$firstName = "john";
echo ucfirst($firstName) . '<br>'; //met la première lettre en majuscule

#strtolower() : met tout en minuscule
#strtoupper() : met tout en majuscule
$chaine = "voici Une ChAine DE caracTeRes en LettRes MaJuscULEs";
echo strtolower($chaine) . '<br>';
echo strtoupper($chaine) . '<br>';

#strpos() : retourne la position de la première chaine trouvée 
$email = "aliou@gmail.com";
echo strpos($email, '@') . '<br>';
if (strpos($email, '@') === false) {
      echo 'L\'email n\'est pas valide <br>';
} else {
      echo 'L\'email est valide <br>';
}

#strstr() : retourne la chaine de caractères à partir de la première occurence
echo strstr($email, '@') . '<br>';

#iconv_strlen() : retourne la longueur d'une chaine de caractères
$texte = "Bonjour tout le monde";
echo iconv_strlen($texte) . '<br>';

