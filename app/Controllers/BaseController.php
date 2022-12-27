<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $this->parser = \Config\Services::parser();
        $this->config = config('BlogmeConfig');
        $this->themesName = $this->config->themesName;

    }

    public function pageBuilder($params){
        $data=[];
        $themesName = $this->config->themesName;
        $data ['PAGE_TITLE'] = $this->config->pageTitle;
        $data ['siteName'] = $this->config->siteName;

        $data ['SITE_URL'] = site_url();
        $data ['THEMES_PAGE'] = base_url('themes/' .$themesName . '/');
        $data['HEADER_SECTION'] = $this->parser->setData($data)->render('themes/' .$themesName . '/layout/header/header');
        $data['HEADER_SECTION'] .= $this->parser->setData($data)->render('themes/' .$themesName . '/layout/header/slide');
        $data['BODY_SECTION'] = $params['body'];
        $data['FOOTER_SECTION'] = $this->parser->setData($data)->render('themes/' .$themesName . '/layout/footer/footer');

        return $this->parser->setData($data)->render('themes/' .$themesName . '/layout/main_layout');
    }
}