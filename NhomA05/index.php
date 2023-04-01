<?php
    include "A5/header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];

    switch ($act) {
        case 'gucciProduct':
            include "A5/product/gucciProduct.php";
            break;
        case 'chanelProduct':
            include "A5/product/chanelProduct.php";
            break;
        case 'bossProduct':
            include "A5/product/bossProduct.php";
            break;        
        case 'diorProduct':
            include "A5/product/diorProduct.php";
            break;        
        case 'rojaProduct':
            include "A5/product/rojaProduct.php";
            break;


        case 'no51':
            include "A5/each_product/no51.php";
            break;
        case 'gucci':
            include "A5/each_product/gucci.php";
            break;
        case 'hugoBoss':
            include "A5/each_product/hugoBoss.php";
            break;
        case 'dior':
            include "A5/each_product/dior.php";
            break;
        case 'elysium':
            include "A5/each_product/elysium.php";
            break;
        case 'chanel1':
            include "A5/each_product/chanel1.php";
            break;
        case 'elysium1':
            include "A5/each_product/elysium1.php";
            break;
        case 'hugoInfinite':
            include "A5/each_product/hugoInfinite.php";
            break;
        case 'elysium2':
            include "A5/each_product/elysium2.php";
            break;
        case 'diorHomme':
            include "A5/each_product/diorHomme.php";
            break;
        case 'gucci1':
            include "A5/each_product/gucci1.php";
            break;
        case 'chanel4':
            include "A5/each_product/chanel4.php";
            break;
        case 'chanel3':
            include "A5/each_product/chanel3.php";
            break;        
        case 'chanel5':
            include "A5/each_product/chanel5.php";
            break;        
        case 'roja4':
            include "A5/each_product/roja4.php";
            break;        
        case 'dior4':
            include "A5/each_product/dior4.php";
            break;
        case 'chanel6':
            include "A5/each_product/chanel6.php";
            break;
        case 'chanel7':
            include "A5/each_product/chanel7.php";
            break;

        default:
            include "A5/content.php";
            break;
    }

    }else{
        include "A5/content.php";
    }

    include "A5/footer.php";
?>