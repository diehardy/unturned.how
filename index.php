<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'php_error.log');
require_once('./php/connectDB.php');
require_once  ('./php/functions.php');
require_once ('./php/modules/header.php');
printHeader('Explore the Unturned ID list for all maps. Choose a specific map to discover unique item IDs, names, and icons. Navigate through the catalog of Unturned items and find the 
information you need for youself.', 'Unturned Items ID List',
 'Explore the comprehensive Unturned Items ID list. Choose
  a specific map to discover unique item IDs, names, and icons. 
  Navigate through the vast catalog of Unturned items and find the 
  information you need for your gaming experience.');

?>

<main class="main">

    <div class="maps__wrapper">

        <a href="./maps/allitems" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/pei.webp">
                    <img src="../img/maps/pei.png" alt="all items unturned id list">
                    </picture>
                    <div class="map_descr">All items</div>
                </div>
            </div>
        </a>
        <a href="./maps/official" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/pei.webp">
                    <img src="../img/maps/pei.png" alt="Official maps unturned id list">
                    </picture>

                    <div class="map_descr">Official</div>
                </div>
            </div>
        </a>
        <a href="./maps/buak" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/buak.webp">
                    <img src="../img/maps/buak.png" alt="Buak unturned id list">
                    </picture>
                    
                    <div class="map_descr">Buak</div>
                </div>
            </div>
        </a>

        <a href="./maps/arid" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/arid.webp">
                    <img src="../img/maps/arid.png" alt="Arid unturned id list">
                    </picture>
                    
                    <div class="map_descr">Arid</div>
                </div>
            </div>
        </a>

        <a href="./maps/a6polaris" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/a6polaris.webp">
                    <img src="../img/maps/a6polaris.png" alt="A6 polaris unturned id list">
                    </picture>
                    
                    <div class="map_descr">A6 Polaris</div>
                </div>
            </div>
        </a>
        <a href="./maps/kuwait" class="map__link">
            <div class="map__item">
                <div class="item_content">
                                    <picture>
                    <source type="image/webp" srcset="../img/maps/kuwait.webp">
                    <img src="../img/maps/kuwait.png" alt="Kuwait unturned id list">
                    </picture>
                    
                    <div class="map_descr">Kuwait</div>
                </div>
            </div>
        </a>

        <a href="./maps/elver" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/elver.webp">
                    <img src="../img/maps/elver.png" alt="Elver unturned id list">
                    </picture>
                    
                    <div class="map_descr">Elver</div>
                </div>
            </div>
        </a>

        <a href="./maps/easterisland" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/easterisland.webp">
                    <img src="../img/maps/easterisland.png" alt="Easter Island unturned id list">
                    </picture>
                    
                    <div class="map_descr">Easter Island</div>
                </div>
            </div>
        </a>

        
        <a href="./maps/france" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/france.webp">
                    <img src="../img/maps/france.png" alt="France unturned id list">
                    </picture>
                    
                    <div class="map_descr">France</div>
                </div>
            </div>
        </a>

        <a href="./maps/california" class="map__link">
            <div class="map__item">
                <div class="item_content">
                                    <picture>
                    <source type="image/webp" srcset="../img/maps/california.webp">
                    <img src="../img/maps/california.png" alt="California unturned id list">
                    </picture>
                    
                    <div class="map_descr">California</div>
                </div>
            </div>
        </a>


        <a href="./maps/rio" class="map__link">
            <div class="map__item">
                <div class="item_content">
                                                    <picture>
                    <source type="image/webp" srcset="../img/maps/rio.webp">
                    <img src="../img/maps/rio.png" alt="Rio de Janeiro unturned id list">
                    </picture>
                    
                    <div class="map_descr">Rio de Janeiro</div>
                </div>
            </div>
        </a>

        <a href="./maps/greece" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/greece.webp">
                    <img src="../img/maps/greece.png" alt="Greece unturned id list">
                    </picture>
                    
                    <div class="map_descr">Greece</div>
                </div>
            </div>
        </a>

        <a href="./maps/hawaii" class="map__link">
            <div class="map__item">
                <div class="item_content">
                    <picture>
                    <source type="image/webp" srcset="../img/maps/hawaii.webp">
                    <img src="../img/maps/hawaii.png" alt="Hawaii unturned id list">
                    </picture>
                    
                    <div class="map_descr">Hawaii</div>
                </div>
            </div>
        </a>
    </div>


</main>

<?php  require_once ('./php/modules/footer.php'); ?>

</div>
</body>
</html>