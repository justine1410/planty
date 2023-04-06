<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}




/* SHORTCODES */

function afficherTexte(){
    $quantite ='
        <div class="quantite">
            <div class="quantite_choix">
                <input class="nombre" value="0" min="0">
                <div class="plus_moins">
                    <button class="plus"> + </button>
                    <button class="moins"> - </button>
                </div>
            </div>
            <div class="commande">
                <button> OK </button>
            </div>
        </div>

        <script type="text/javascript">
            
            let quantite = document.querySelector(".nombre");
            let ajout = document.querySelector(".plus");
            let suppr = document.querySelector(".moins");

            console.log(quantite.value);

            ajout.addEventListener("click", ()=>{
                    quantite.value++
            });

            suppr.addEventListener("click", ()=>{
                if(quantite.value > 0){
                    quantite.value--
                }else{
                    quantite.value = 0
                }
            });


        </script>
    ';
  

    return $quantite;
}

add_shortcode('preco', 'afficherTexte');



/* HOOK FILTER UTILISER POUR MODIFIER L'AFFICHAGE D4UN ELEMENT*/


function is_user_logged($items){
    if(is_user_logged_in()){
        
       $items .= '<li> <a href="#">Admin </a></li>';
    }
    return $items;
}



add_filter('wp_nav_menu_items','is_user_logged');


?>

