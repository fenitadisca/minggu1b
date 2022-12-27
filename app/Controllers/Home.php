<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[];
        $params ['body'] = $this->parser->setData($data)->render('themes/' .$this->themesName . '/layout/contents/body');
       echo $this->pageBuilder($params);
    }

    public function aboutUs() {
        $data=[];
        $params ['body'] = 'About Us';
        echo $this->pageBuilder($params);
    }

    public function contactUs() {
        $data=[];
        $params ['body'] = 'Contact Us';
        echo $this->pageBuilder($params);
    }
}