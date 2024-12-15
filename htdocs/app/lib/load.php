<?php

class template{

    // Template Loading function
    function load_template($folder,$name){
        include $_SERVER['DOCUMENT_ROOT']."/app/$folder/$name.php";
    }

    // set title of all pages function
    function getPageTitle() {
        // Get the current page's filename
        $current_page = basename($_SERVER['PHP_SELF']);
        
        // Define titles for each page
        switch ($current_page) {
            case 'dashboard.php':
                return "GoWorkbase- Dashboard";
            case 'call-for-paper.php':
                return "Call for Paper";
            default:
                return "GoWorkbase - Foundation for Employee Operations."; // Default title for unspecified pages
        }
    }

    function changePageToActive(){
        // Get the current page's filename
         $current_page = basename($_SERVER['PHP_SELF']);
         return $current_page == $current_page ? 'active' : '';
    }

}
?>