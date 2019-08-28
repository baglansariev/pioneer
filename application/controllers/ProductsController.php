<?php

    namespace controllers;
    use core\engine\Controller;

    class ProductsController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Наша продукция');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('Наша продукция');
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('Products/index', $data);
        }
    }