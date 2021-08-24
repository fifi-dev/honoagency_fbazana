<?php
/**
 * @package Socialnetwork
 * @version 1.7.2
 */
/*
Plugin Name: Show your Social Network !
Plugin URI: https://www.google.fr/
Description: Un plugin pour afficher ses réseaux sociaux 
Author: Fideline BAZANA NTOMO
Version: 1.7.2
Author URI: https://www.google.fr/
*/

/*methode1:
add_shortcode('show_social_network','reseaux_sociaux');

function reseaux_sociaux(){
    echo(
        '<ul>
            <li>Facebook : https://facebook.com.</li>
            <li>Instagram.com : https://instagram.com</li>
            <li>Linkedin : https://www.linkedin.com</li>
            <li>GitHub : https://github.com/honoagency</li>
        </ul>
        ');
} */

//methode 2:
function show_networks($parametres) {
    extract(
        shortcode_atts(
            array(
                'lien1' => 'https://facebook.com',
                'lien2' => 'https://instagram.com',
                'lien3' => 'https://www.linkedin.com',
                'lien4' => 'https://github.com/honoagency',
            ), $parametres)
);
    return '<div id="internalPageMenu">
      <ul>
          <li><a href="' . $lien1 . '">Facebook</a></li>
          <li><a href="' . $lien2 . '">Instagram</a></li>
          <li><a href="' . $lien3 . '">Linkedin</a></li>
          <li><a href="' . $lien4 . '">GitHub</a></li>
      </ul>
      </div>';
  }
  add_shortcode('show_social_network', 'show_networks');
  