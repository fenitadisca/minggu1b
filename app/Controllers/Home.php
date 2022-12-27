<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[];
        $themesName = $this->config->themesName;
        $data ['THEMES_PAGE'] = base_url('themes/' .$themesName . '/');
        $data['HEADER_SECTION'] = $this->parser->setData($data)->render('themes/' .$themesName . '/layout/header/header');
        $data['HEADER_SECTION'] .= $this->parser->setData($data)->render('themes/' .$themesName . '/layout/header/slide');
        $data['BODY_SECTION'] = $this->parser->setData($data)->render('themes/' .$themesName . '/layout/contents/body');
        $data['FOOTER_SECTION'] = $this->parser->setData($data)->render('themes/' .$themesName . '/layout/footer/footer');

        return $this->parser->setData($data)->render('themes/' .$themesName . '/layout/main_layout');
    }
}