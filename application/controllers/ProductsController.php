<?php

    namespace controllers;
    use core\engine\Controller;

    class ProductsController extends Controller
    {
        public $lang;

        public function __construct()
        {
            parent::__construct();
            $this->lang = $this->load->language('pages/products');
        }

        public function indexAction()
        {
            $this->view->asset->setTitle($this->lang->get('local_page_title'));
            $this->view->asset->setCss('/public/style/products/products.css');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle($this->lang->get('local_page_title'));
            $data['products'] = $this->load->controller('modules/products')->getList();
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('Products/index', $data);
        }

        public function showOneProductAction()
        {
            $this->view->asset->setTitle($this->lang->get('local_page_title'));
            $this->view->asset->setMetaDesc('Продукция компании Pioneer Grain Products');
            $this->view->asset->setCss('/public/style/products/products.css');
            $data = array();

            $meta_info = $this->load->controller('modules/products')->getProductMetaInfo();
            if($meta_info){
               foreach($meta_info as$item){
                   $this->view->asset->setTitle($item['product_name']);
                   $this->view->asset->setMetaDesc($item['product_short_desc']);
               }
            }

            $data['product_info'] = $this->load->controller('modules/products')->showOneProduct();
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('Products/product-page', $data);
        }
    }