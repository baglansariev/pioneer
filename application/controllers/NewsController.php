<?php

    namespace controllers;
    use core\engine\Controller;

    class NewsController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Новости');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('Новости');
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('News/index', $data);
        }
    }