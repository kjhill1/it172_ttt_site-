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
$nav1['contact.php'] = "Contact US";
$nav1['cart.php'] = "<i class="fa fa-shopping-cart"></i>
<i class="fa fa-shopping-cart" style="font-size:24px"></i>
<i class="fa fa-shopping-cart" style="font-size:36px"></i>
<i class="fa fa-shopping-cart" style="font-size:48px;co"lor:red"></i>
<br>

<p>Used on a button:</p>
<button style="font-size:24px">Button <i class="fa fa-shopping-cart"></i></button>

<p>Unicode:</p>
<i style="font-size:24px" class="fa">&#xf07a;</i>";
$nav1['checkout.php'] = "Checkout";
$nav1['../172.html'] = "it172 Home Page";

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

    case 'checkout.php':
            $title = "Twenty Two Toes Soap Co.";
            $PageID = "Checkout";
            break;

    case 'cart.php':
        $title = "Twenty Two Toes Soap Co.";
        $PageID = "Shopping Cart";
            break;
    case 'about.php':
        $title = "Twenty Two Toes Soap Co.";
        $PageID = "About";
        break;

    case 'contact.php':
        $title = "Twenty Two Toes Soap Co.";
        $PageID = "Contact Us";
        break;

   

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
