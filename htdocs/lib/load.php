<?php
// set all template
function load_template($folder,$name){
    include $_SERVER['DOCUMENT_ROOT']."/$folder/$name.php";
}

// set all css
function load_css($folder,$name){
    return "/$folder/css/$name.css";
}

// set all javascripts
function load_js($folder,$name){
    return "$folder/js/$name.js";
}

// set title of all pages
function getPageTitle() {
    // Get the current page's filename
    $current_page = basename($_SERVER['PHP_SELF']);
    
    // Define titles for each page
    switch ($current_page) {
        case 'about.php':
            return "About Us";
        case 'call-for-paper.php':
            return "Call for Paper";
        case 'author-guidelines.php':
            return "Author Guidelines";
        case 'services.php':
            return "Our Services";
        case 'contact.php':
            return "Contact Us";
        case 'privacy-policy.php':
            return "Privacy Policy";
        case 'copyright-form.php':
            return "Copyright Form";
        case 'track-article.php':
            return "Track Article";
        case 'submit-form.php':
            return "Submit Article";
        case 'peer-review-process.php';
            return "Peer Review Process";
        case 'issued-journals.php';
            return "Issued Journals";
        case 'editorial-board.php';
            return "Editorial Board";
        case 'processing-fees.php';
            return "Processing Fees";
        case 'issues.php';
            return "Issues page";
        case 'articles.php';
            return "Article Download page";
        case 'editor-form.php';
            return "Career In IJPSA Editor";
        default:
            return "IJPSA- INTERNATIONAL JOURNAL OF PHARMACEUTICAL SCIENCES AND APPLICATION"; // Default title for unspecified pages
    }
}

?>