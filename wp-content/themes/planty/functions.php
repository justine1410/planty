
<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}




/* SHORTCODES */

function afficherFraise(){
    $quantite ='
        <div class="quantite">
            <div class="quantite_choix">
                <input class="nombre" id="nombreFraise" value="0" min="0">
                <div class="plus_moins">
                    <button class="plus" id="plusFraise" > + </button>
                    <button class="moins" id="moinsFraise"> - </button>
                </div>
            </div>
            <div class="commande">
                <button> OK </button>
            </div>
        </div>

        <script type="text/javascript">
            let quantiteFraise = document.querySelector("#nombreFraise");
            let ajoutFraise = document.querySelector("#plusFraise");
            let supprFraise = document.querySelector("#moinsFraise");

            ajoutFraise.addEventListener("click", ()=>{
                    quantiteFraise.value++
                });
                supprFraise.addEventListener("click", ()=>{
                    if(quantiteFraise.value > 0){
                        quantiteFraise.value--
                    }else{
                        quantiteFraise.value = 0
                    }
                });
        
 
          
        </script>
    ';
    return $quantite;
}

function afficherPamplemousse(){
    $quantite ='
        <div class="quantite">
            <div class="quantite_choix">
                <input clas="nombre" id="nombrePamplemousse" value="0" min="0">
                <div class="plus_moins">
                    <button class="plus" id="plusPamplemousse"> + </button>
                    <button class="moins" id="moinsPamplemousse"> - </button>
                </div>
            </div>
            <div class="commande">
                <button> OK </button>
            </div>
        </div>

        <script type="text/javascript">
            let quantitePamplemousse = document.querySelector("#nombrePamplemousse");
            let ajoutPamplemousse = document.querySelector("#plusPamplemousse");
            let supprPamplemousse = document.querySelector("#moinsPamplemousse");

            ajoutPamplemousse.addEventListener("click", ()=>{
                    quantitePamplemousse.value++
                });
                supprPamplemousse.addEventListener("click", ()=>{
                    if(quantitePamplemousse.value > 0){
                        quantitePamplemousse.value--
                    }else{
                        quantitePamplemousse.value = 0
                    }
                });
        
 
          
        </script>
    ';
    return $quantite;
}

function afficherFramboise(){
    $quantite ='
        <div class="quantite">
            <div class="quantite_choix">
                <input clas="nombre" id="nombreFramboise" value="0" min="0">
                <div class="plus_moins">
                    <button class="plus" id="plusFramboise"> + </button>
                    <button class="moins" id="moinsFramboise"> - </button>
                </div>
            </div>
            <div class="commande">
                <button> OK </button>
            </div>
        </div>

        <script type="text/javascript">
            let quantiteFramboise = document.querySelector("#nombreFramboise");
            let ajoutFramboise= document.querySelector("#plusFramboise");
            let supprFramboise = document.querySelector("#moinsFramboise");

            ajoutFramboise.addEventListener("click", ()=>{
                    quantiteFramboise.value++
                });
                supprFramboise.addEventListener("click", ()=>{
                    if(quantiteFramboise.value > 0){
                        quantiteFramboise.value--
                    }else{
                        quantiteFramboise.value = 0
                    }
                });
        
 
          
        </script>
    ';
    return $quantite;
}

function afficherCitron(){
    $quantite ='
        <div class="quantite">
            <div class="quantite_choix">
                <input clas="nombre" id="nombreCitron" value="0" min="0">
                <div class="plus_moins">
                    <button class="plus" id="plusCitron"> + </button>
                    <button class="moins" id="moinsCitron"> - </button>
                </div>
            </div>
            <div class="commande">
                <button> OK </button>
            </div>
        </div>

        <script type="text/javascript">
       
        let quantiteCitron = document.querySelector("#nombreCitron");
        let ajoutCitron= document.querySelector("#plusCitron");
        let supprCitron = document.querySelector("#moinsCitron");


        ajoutCitron.addEventListener("click", ()=>{
                quantiteCitron.value++
            });
            supprCitron.addEventListener("click", ()=>{
                if(quantiteCitron.value > 0){
                    quantiteCitron.value--
                }else{
                    quantiteCitron.value = 0
                }
            });
        ;
        </script>
    ';
    return $quantite;
}



add_shortcode('quantiteFraise', 'afficherFraise');
add_shortcode('quantitePamplemousse', 'afficherPamplemousse');
add_shortcode('quantiteFramboise', 'afficherFramboise');
add_shortcode('quantiteCitron', 'afficherCitron');




/* HOOK FILTER UTILISER POUR MODIFIER L'AFFICHAGE D4UN ELEMENT*/


function is_user_logged($items){
    if(is_user_logged_in()){
        
       $items .= '<li> <a href="http://localhost/planty/wp-admin/">Admin </a></li>';
    }
    return $items;
}



add_filter('wp_nav_menu_items','is_user_logged');


?>

   