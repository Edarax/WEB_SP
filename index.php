<?php

/**
 * Created by PhpStorm.
 * User: Engl Karel
 * Date: 14.11.2017
 * Time: 13:28
 */

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array());

if (isset($_REQUEST["page"]))
    $page = $_REQUEST["page"];
else
    $page = "home";


$pages = array();
$pages["home"] = "Homepage";
if (array_key_exists($page, $pages)) {
    include_once("controllers/baseController.php");
    $object = $page."Controller";
    include("controllers/$object.php");
    $$object = new $object($twig);
    $content = $$object->indexAction($params);
}