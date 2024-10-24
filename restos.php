<?php
$menu = array(
    "Entrées" => array("Pain", "Légumes", "Toast"),
    "Plats" => array("Agneau", "Kebab", "Pizza"),
    "Desserts" => array("Tiramisu", "Glace")
);
echo '<pre>';//Les balises <pre> formatent le texte affiché, ce qui rend la sortie plus claire (en préservant les espaces et les sauts de ligne).
print_r($menu);// affiches les details du tableau
echo '</pre>';//
foreach ($menu as $key => $ordre) { //Cette boucle parcourt chaque élément du tableau $menu.
    echo "<ul><li>$key :";
    foreach ($ordre as $plat) {
        echo "<ul><li>$plat</li></ul>";//Pour chaque plat, elle crée une nouvelle liste désordonnée avec un élément <li> pour afficher le plat.
    }
    echo "</li></ul>";// Après avoir affiché tous les plats de la catégorie, on ferme l'élément de liste de la catégorie avec </li> et la liste désordonnée principale avec </ul>.

}       
