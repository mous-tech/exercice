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

#substr() : retourne une partie de la chaine de caractères
$texte = "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat";
echo substr($texte, 0, 50) . '...<a href="#">Lire la suite</a>';

#trim : supprime les espaces en début et fin de chaine
$trimChaine = "   Bonjour tout le monde   ";
echo trim($trimChaine);

echo '<h3>Les boucles</h3>';
//boucle while
/*
condition / itération / affichage /intialisation
*/
$i = 0; //initialisation 
while ($i < 10) { //prédicat 
      echo $i . '<br>'; //affichage
      $i++; //itération => incrémentation
}

//boucle for 
for ($j = 100; $j >= 0; $j--) {
      echo $j . '<br>';
}
?>
<select>
      <?php
      //forme pratique
      $year = 1900;
      while ($year <= date('Y')) : ?>
            <option><?= $year; ?></option>
      <?php $year++;
      endwhile; ?>
</select>

<?php
// EXO : afficher avec une boucle. Résultat attendu :  0--1--2
$w = 0;
while ($w <= 2) {
      echo ($w < 2) ? $w . '--' : $w;
      /* if($w < 2) {
            echo  $w . '--' ;
      }else{
            $w;
      }*/
      $w++; //$w += 1; $w = $w + 1;
}

//EXO : afficher avec une boucle. Résultat attendu :  12 14 16 18 20
$n = 12;
while ($n <= 20) {
      echo $n . ' ';
      $n += 2;
}

for ($n = 12; $n <= 20; $n += 2) {
      echo $n . ' ';
}

//EXO : A l’aide d’une boucle, calculez la somme des nombres de 0 à 30
$sum = 0;
$o = 1;
while ($o <= 30) {
      $sum += $o;
      $o++;
}
echo '<p> le résultat est : ' . $sum . '</p>';
/*
EXO : 
💡 Un match de foot dure 90 minutes. A la mi-temps du match, on recense deux buts :

- Le premier à la 11e minute
- Le second à la 23e minute

Affichez le nombre total de buts marqués durant cette première partie du match et les moments pendant lesquels les buts ont été inscrits
*/
$miTemps = 45;
$nbButs = 0;
$affichage = "";
while ($miTemps >= 0) {
      if ($miTemps == 11 || $miTemps == 23) {
            $nbButs++;
            $affichage .= "<li>But à la $miTemps minute </li>";
      }
      $miTemps--;
}
echo "<p>Nombre de buts marqués : $nbButs</p><ul>$affichage</ul>";


//le break pour stopper les instructions en cas de boucle infinie
while (true) {
      echo 'coucou';
      break;
}

echo '<h3>Les tableaux</h3>';
//tableau indexé
//1re manière de créer les tableaux : 
$tab = ["Kévin", "Noah", "Aliou", "Mouss", "Aurélie"];
echo '<pre>';
print_r($tab);
echo '</pre>';
echo '<p>' . $tab[2] . ' et ' . $tab[3] . ' sont amis pour la vie</p>';

//2nde manière de créer les tableaux : 
$tab1 = array("Nassira", "Noah", "Lucas", "Gaël");
echo '<pre>';
print_r($tab1);
echo '</pre>';
echo $tab1[2]; //lucas

//3e manière de créer les tableaux :
$atb3[] = "Ruben";
$atb3[] = "Dydy";
$atb3[] = "Jason";
$atb3[] = "Erwan";
$atb3[] = "Heyyyy ohh !";
echo '<pre>';
print_r($atb3);
echo '</pre>';
echo $atb3[1]; //dydy

$exoTab = ['titi', true, 78, ['DC', 'php', ['html-css', 'javascript', ['sql']], 'Veljko']];
//Afficher : Veljko maitrise le html-css mais a du mal avec php et sql ! Hâte de voir ce que cela donnera avec javascript ! 
echo '<pre>';
print_r($exoTab);
echo '</pre>';
echo $exoTab[3][3] . ' maitrise le ' . $exoTab[3][2][0] . ' mais a du mal avec ' . $exoTab[3][1] . ' et ' . $exoTab[3][2][2][0] . ' ! Hâte de voir ce que cela donnera avec ' . $exoTab[3][2][1] . ' ! ';

//tableau associatif
$student = [
      'nom' => 'Noah',
      'age' => 23,
      'ville' => 'Paris'
];
echo '<pre>';
print_r($student);
echo '</pre>';
echo '<p>' . $student['nom'] . ' a ' . $student['age'] . ' ans et habite à ' . $student['ville'] . '</p>';

//boucle foreach() : parcourir un tableau
//récupération clé + valeurs 
foreach ($student as $key => $value) {
      echo $key . ' : ' . $value . '<br>';
}

//récupération des valeurs
foreach ($student as $value) {
      echo $value . '<br>';
}

$students = [
      ['nom' => 'Noah', 'age' => 23, 'ville' => 'Paris'],
      ['nom' => 'Aliou', 'age' => 25, 'ville' => 'Lyon'],
      ['nom' => 'Mouss', 'age' => 24, 'ville' => 'Marseille'],
      ['nom' => 'Erwan', 'age' => 24, 'ville' => 'Dijon'],
      ['nom' => 'Kévin', 'age' => 24, 'ville' => 'Nancy'],
      ['nom' => 'Jason', 'age' => 24, 'ville' => 'Bourg en Bresse']
];
echo '<pre>';
print_r($students);
echo '</pre>';

$lgTabStudents = count($students); //sizeof
for ($p = 0; $p < $lgTabStudents; $p++) {
      foreach ($students[$p] as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
      }
}
echo $students[2]['nom'];

//mise en forme dans un tableau 
echo '<table border="1" width="100%"><tr><th>Id</th><th>Nom</th><th>Age</th><th>Ville</th></tr>';
for ($p = 0; $p < $lgTabStudents; $p++) {
      echo '<tr>';
      echo '<td>' . $p + 1 . '</td>';
      echo '<td>' . $students[$p]['nom'] . '</td>';
      echo '<td>' . $students[$p]['age'] . '</td>';
      echo '<td>' . strtoupper($students[$p]['ville']) . '</td>';
      echo '</tr>';
}
echo '</table>';

echo '<h3>Les fonctions prédéfinies des Array</h3>';
//mutateurs : modification du tableau existant
//assesseurs : récupération d'informations sur le tableau
#implode() : rassemble les éléments d'un tableau en une chaine de caractères
$tab = ['Noah', 'Aliou', 'Mouss', 'Erwan', 'Kévin'];
$separation = implode(', ', $tab);
echo $separation . '<br>';


#explode() : sépare une chaine de caractères en tableau
$langage = "PHP, Javascript, HTML, CSS, SQL";
$recupTag = explode(', ', $langage);
echo '<pre>';
print_r($recupTag);
echo '</pre>';

#in_array() : recherche une valeur dans un tableau
$prenom = 'noah';
if (in_array($prenom, $tab)) {
      echo 'Le prénom ' . $prenom . ' est dans le tableau';
} else {
      echo 'Le prénom ' . $prenom . ' n\'est pas dans le tableau';
}

#array_unique : supprime les doublons
$tab = ['Noah', 'Aliou', 'Mouss', 'Erwan', 'Kévin', 'Noah', 'Aliou', 'Mouss', 'Erwan', 'Kévin'];
$tabUnique = array_unique($tab);
echo '<pre>';
print_r($tabUnique);
echo '</pre>';

#array_push() : ajoute un ou plusieurs éléments à la fin d'un tableau
$tab = ['Noah', 'Aliou', 'Mouss', 'Erwan', 'Kévin'];
array_push($tab, 'Jason', 'Ruben');
echo '<pre>';
print_r($tab);
echo '</pre>';

#array_pop() : supprime le dernier élément d'un tableau
$tab = ['Noah', 'Aliou', 'Mouss', 'Erwan', 'Kévin'];
array_pop($tab);
echo '<pre>';
print_r($tab);
echo '</pre>';

#sort() : trie un tableau
$tab = ['Noah', 'Aliou', 'Mouss', 'Okjlev', 'Kévin'];
sort($tab);
echo '<pre>';
print_r($tab);
echo '</pre>';

#extract() : importe les éléments d'un tableau (indices) et les traduire sous forme de variables
$student['nom'] = 'Noah';
$student['age'] = 23;
$student['ville'] = 'Paris';
extract($student);
echo $nom . ' a ' . $age . ' ans et habite à ' . $ville;

echo "<h3>Les fonctions 'utilisateurs'</h3>";
function displayHr()
{
      echo '<hr><hr><hr>';
}
displayHr();
displayHr();
displayHr();
displayHr();

function sayHello($name)
{
      echo "heyy salut $name !";
}

sayHello('Ruben'); //heyy salut Ruben !
sayHello('Noah'); //heyy salut Noah !

function sayHello_2(string $name): string
{
      return "heyy salut $name ! comment ça va ? weshhhhh !";
      //ne s'affichera jamais ! 
      echo 'Noah n\'écoute pas ! ';
}
echo sayHello_2('Mouss');

$couleur = ['red', 'blue', 'green', 'yellow', 'purple'];

function squareColor(string $color, int $height, int $width): string
{
      return "<div style='height:{$height}px; width:{$width}px; background:{$color}'></div>";
}
echo squareColor($couleur[0], 100, 100);
echo squareColor($couleur[4], 50, 150);

//particularité des fonctions : on peut l'exécuter avant sa déclaration
echo addition(10, 5.9);
function addition(int | float $a, int | float $b): int | float
{
      return $a + $b;
}

//exo : créer une fonction meteo() qui prend en paramètre une température et une saison et qui retourne la phrase suivante :
//il fait 25 degrés en été => meteo(25, 'été')
//il fait 1 degré en hiver => meteo(1, 'hiver')
//il fait 15 degrés au printemps => meteo(15, 'printemps')
//il fait 20 degrés en automne => meteo(20, 'automne')
function meteo(int $temperature, string $saison): string
{
      $article = ($saison == 'printemps') ? 'au' : 'en';
      $pluriel = ($temperature >= 2 || $temperature <= -2) ? 'degrés' : 'degré';

      return "<p>Il fait {$temperature} {$pluriel} {$article} $saison</p>";
}
echo meteo(25, 'été');
echo meteo(1, 'hiver');
echo meteo(15, 'printemps');
echo meteo(20, 'automne');
