<?php

class template{

    // Template Loading function
    function load_template($folder,$name){
        include $_SERVER['DOCUMENT_ROOT']."/$folder/$name.php";
    }

    // set title of all pages function
    function getPageTitle() {
        // Get the current page's filename
        $current_page = basename($_SERVER['PHP_SELF']);
        
        // Define titles for each page
        switch ($current_page) {
            case 'about.php':
                return "About Us";
            case 'call-for-paper.php':
                return "Call for Paper";
            default:
                return "IJPSA- INTERNATIONAL JOURNAL OF PHARMACEUTICAL SCIENCES AND APPLICATION"; // Default title for unspecified pages
        }
    }

}
?>