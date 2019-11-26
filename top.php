<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
$path_parts = pathinfo($phpSelf);

//$databaseName = 'YXUE_final';
//$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
//$dbUserName = "yxue_admin"; 
//$dbPassword = "gvEr3b9CIBcUjvFN";
//print '<!-- Database Conect! -->';
//$pdo = new PDO($dsn, $dbUserName, $dbPassword);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Kamiku Xue,Haoyuan Pang,Mark Zuo">
        <meta name="description" content="The homepage of our Japanese culture site.">
        <link rel="stylesheet" href="css/main.css?version=1.0" type="text/css">
        <link rel="icon" href="favicon.png">
        <?php
        //$current = $path_parts['filename']
        //$current = strtoupper($current)
        print '<title>Japanese Culture</title>'
        ?>
    </head>
<?php
    // giving each body tag an id really helps with css later on
    print '<body id="' . $path_parts['filename'] . '">'.PHP_EOL;

    include 'header.php';
    print PHP_EOL;

    include 'nav.php';
    print PHP_EOL;
    
    print "<!-- End of top.php -->";
 ?>
 