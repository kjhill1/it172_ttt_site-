<?php
//portal-config.php

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');


//Used to store all of our WEB120 configuration information
//prevents data from being sent early
ob_start();
$nav1['index.php'] = "Home";
$nav1['shop.php'] = "Shop";
$nav1['about.php'] = "About";;
$nav1['form2.php'] = "Contact US";
$nav1['cart.php'] = "Cart";
$nav1['../172.html'] = "it172 Home Page";
$nav1['../../spr_21.html'] = "Back to Spring";

// // makeLinks function will create our dynamic nav when called.
// // Call like this:

// // echo makeLinks($nav1); #in which $nav1 is an associative array of links
    
// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Twenty Two Toes Soap Co.";
        $PageID = 'Home';
        break;

    case 'shop.php':
        $title = "Twenty Two Toes Soap Co.";
        // $logo = "fa fa-compass-americas";
        // $logo_color = ' style= "color: #5d707f"';
        $PageID = "Shop";
        break;

    case 'about.php':
        $title = "Twenty Two Toes Soap Co.";
        $PageID = "About";
        break;

    case 'contact.php':
        $title = "Twenty Two Toes Soap Co.";
        $PageID = "Contact Us";

    case 'form2.php':
        $title = "Twenty Two Toes Soap Co.";
        $PageID = "Contact Us";


    case 'cart.php':
        $title = "Twenty Two Toes Soap Co.";
        $PageID = "Shopping Cart";

        // case '../spr_21.html':
        //     $title = "Twenty Two Toes Soap Co.";
        //     $PageID = "Back to Spring";
        // break;

        // case '../172.html':
        //     $title = "Twenty Two Toes Soap Co.";
        //     $PageID = "Back to 172 Home Page";
        // break;

    default:    
    $title = THIS_PAGE;    
    // $logo = '';//no icon by default 
}


function makeLinks($linkArray)
{
$myReturn = '';

foreach($linkArray as $url => $text)
{
    if($url == THIS_PAGE)
    {//selected page - add class reference
        $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    }else{
        $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    }    
}

return $myReturn;    
}

?>