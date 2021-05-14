<?php
//portal-config.php

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');


//Used to store all of our WEB120 configuration information
//prevents data from being sent early
ob_start();
$nav1['index_fp.php'] = "Home";
$nav1['search.php'] = "Search Listings";
$nav1['about.php'] = "About";
$nav1['resources.php'] = "Resources"; 
$nav1['contact.php'] = "Contact Me";
$nav1['../index.php'] = "Designer's Portal Page";

// // makeLinks function will create our dynamic nav when called.
// // Call like this:

// // echo makeLinks($nav1); #in which $nav1 is an associative array of links
    
// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index_fp.php':
        $title = "Real Estate Joe - Keller Williams Joe Eastside, United Home Group";
        // $logo = "fa fa-globe";
        // $logo_color = ' style= "color: #3e375f"';
        $PageID = 'Home';
        break;

    case 'search.php':
        $title = "Search Listings";
        // $logo = "fa fa-compass-americas";
        // $logo_color = ' style= "color: #5d707f"';
        $PageID = "Search";
        break;

    case 'resources.php':
        $title = "Resources";
        // $logo = "fa fa-compass-americas";
        // $logo_color = ' style= "color: #5d707f"';
        $PageID = "Resources";
        break;

    case 'about.php':
        $title = "About";
        // $logo = "fa fa-compass";
        //  $logo_color = ' style="color: #84828f';
        $PageID = "About";

        break;

    case 'contact.php':
        $title = "Contact";
        // $logo = "fa fa-compass";
        //  $logo_color = ' style="color: #84828f';
        $PageID = "Contact";

        break;

        case '':
            $title = "Designer's Portal Page";
            // $logo = "fa fa-compass";
            //  $logo_color = ' style="color: #84828f';
            $PageID = "Designer's Portal Page";

        break;

    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default 
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
