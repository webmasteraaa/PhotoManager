<?php

require_once("utils/DB.php");
/**
 * filesAjax.php
 *  Ajax file that contains functions called by UI ajax code
 * 
 * @author David Woodruff <mustang2009cobra@gmail.com>
 * 
 * @copyright (C) 2012, David Woodruff
 * 
 * You may use, copy, modifiy, and distribute this file as desired as long as you
 *  give credit to the original authors.
 * 
 */

//Get ajax function names to call (we require that all ajax calls be routed through a function)
if(isset($_POST["resource"])){ $resource = $_POST["resource"]; }
else{ throw new Exception("Must specify a resource"); }

//Get data sent to be passed to function call
if(isset($_POST["callData"])){ $callData = $_POST["callData"]; }
else{ $callData = ""; }

//Call ajax function specified
switch($resource){
    case "templates": //Gets all templates at once
        $dirPath = '../views/templates/';
        if(is_dir($dirPath)) {
            if($dh = opendir($dirPath)) {
            while($file = readdir($dh)) {
                if($file == '.' || $file == '..') { continue; }
                //echo "filename: " . $file . " : filetype: " . filetype($dirPath . $file) . "<br />";
                $templates[basename($dirPath . $file, ".html")] = file_get_contents($dirPath . $file);
            }
            closedir($dh);
            }
            echo json_encode($templates);
        }
        break;
    case "files":
        getFiles($callData);
        break;
    case "myFilesTemplate":
        $filePath = '../views/templates/MyFiles.html';
        $template = file_get_contents($filePath);
        echo $template;
        break;
    case "rateMediaTemplate":
        $filePath = '../views/templates/RateFiles.html';
        $template = file_get_contents($filePath);
        echo $template;
        break;
    case "fileTemplate":
        $filePath = '../views/templates/File.html';
        $template = file_get_contents($filePath);
        echo $template;
        break;
    case "alertTemplate":
        $filePath = '../views/templates/Alert.html';
        $template = file_get_contents($filePath);
        echo $template;
        break;
    default:
        throw new Exception("Invalid function specified");
        break;
}

/******************************************************************************/
/*****************************AJAX PHOTOMANAGER FUNCTIONS**********************/
/******************************************************************************/
/**
 * Gets all files from the DB and returns them
 * 
 * @param Array $data Any data required by this function
 */
function getFiles($data){
    $dbh = new DB();
    
    $files = $dbh->selectAllRows('files');
    
    echo json_encode($files);
}

?>
