<?php

    namespace controllers;
    use core\engine\Controller;

    class ProductsController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Наша продукция');
            $this->view->asset->setCss('/public/style/products/products.css');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('Наша продукция');
            $data['products'] = $this->load->controller('modules/products')->getList();
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('Products/index', $data);
        }
    }