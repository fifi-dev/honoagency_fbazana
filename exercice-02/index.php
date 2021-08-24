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

add_shortcode('show_social_network','social_networks');

function social_networks(){
    echo(
        '<ul>
            <li>Facebook : https://facebook.com.</li>
            <li>Instagram.com : https://instagram.com</li>
            <li>Linkedin : https://www.linkedin.com</li>
            <li>GitHub : https://github.com/honoagency</li>
        </ul>
        ');
}

?>