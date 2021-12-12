<?php

/**
 * Description of Html
 *
 * @author ramiarj
 */
class Html {

    // Affiche un texte entre des balises <p></p> 
    static function e($chaine) {
        echo '<p><b>' . $chaine . '</b></p>';
    }

    // Affiche le contenu d'un tableau PHP dans une liste à puces
    static function ul(array $tableau) {
        echo '<ul>';
        foreach ($tableau as $valeur) {
            echo "<li>" . $valeur . "</li>";
        }
        echo '</ul>';
    }

}

// classe Html
