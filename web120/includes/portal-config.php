<?php
/*
Used to store all of WEB120 configuration information
*/
define("THIS_PAGE", basename($_SERVER['PHP_SELF']));
       
switch(THIS_PAGE) {
    case "index.php":
        $title= "Here is my index page.";
        $logo= 'fa-home';
        $pageID= 'Welcome';
        break;
    case "contactme.php":
        $title= "Here is contact page.";
        $logo= 'fa-pencil-square-o';
        $pageID= 'Contact Jin';
        break;
    default:
        $title= THIS_PAGE;
        $logo= "";
        $pageID= "";
}

//Here we create a function to generate links and keep the highlight on the current page.
$nav1['index.php']= 'Welcome';
$nav1['big/index.php']= 'Big';
$nav1['aia.php']= 'AIA';
$nav1['flowchart.php']= 'Flowchart';
$nav1['fp/index.php']= 'Final Project';
$nav1['contactme.php']= 'Contact Jin';

function makeLinks($nav) {
    $myReturn= '';
    foreach($nav as $url => $text) {
        if(THIS_PAGE == $url) {
            $myReturn .= '<li><a href="' .$url .'" class="selected">' .$text .'</a></li>';
        } else {
            $myReturn .= '<li><a href="' .$url .'">' .$text .'</a></li>';
        }
        
    }
    return $myReturn;
}
?>