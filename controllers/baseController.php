<?php
/**
 * Created by PhpStorm.
 * User: Engl Karel
 * Date: 28.11.2017
 * Time: 11:39
 */
class baseController{
    private $twig;

    public function __construct($twig){
        $this->twig = $twig;
    }

    public function render($content){
        echo $this->twig->render('main.htm', array('content' => $content));
    }

    public function indexAction($params){
        extract($params);
        return "missing indexAction method";
    }

    public function makeURL(){
        return "tady bude URL";
    }
}