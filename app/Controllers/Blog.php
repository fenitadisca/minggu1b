<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        $data=[];
        $themesName = $this->config->themesName;
        $data ['PAGE_TITLE'] = $this->config->pageTitle;
        $data ['siteName'] = $this->config->siteName;

        $data ['SITE_URL'] = site_url();
        $data ['THEMES_PAGE'] = base_url('themes/' .$themesName . '/');
        $data['HEADER_SECTION'] = $this->parser->setData($data)->render('themes/' .$themesName . '/layout/header/header');
        $data['HEADER_SECTION'] .= $this->parser->setData($data)->render('themes/' .$themesName . '/layout/header/slide');

        $data['BODY_SECTION'] = 'Blog';
        $data['FOOTER_SECTION'] = $this->parser->setData($data)->render('themes/' .$themesName . '/layout/footer/footer');

        return $this->parser->setData($data)->render('themes/' .$themesName . '/layout/main_layout');
    }
}