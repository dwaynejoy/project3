<?php
    // Start the session
    session_start();
?>
<?php
    include 'header.php';
?>
<?php
    include 'connection.php';
?>
<?php
    $_SESSION["usertype"] = "Guest";
    $_SESSION["adminid"] = -1;
?>
<?php
    include 'navigation.php';
?>
<?php
$allowed = array('mainContent', 'book', 'about', 'thank-you', 'all-adventures', 'admin-add', 'admin-confirm', 'admin-menu'); // add the pagenames you need
$page = ( isset($_GET['page']) ) ? $_GET['page'] : 'mainContent';
if ( in_array($page, $allowed) ){
    include("$page.php");
} else {
    include("404.php");
}
?>
<?php
    include 'footer.php';
?>