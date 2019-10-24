<?php

    namespace controllers;
    use core\engine\Controller;

    class NewsController extends Controller
    {
        public $lang;

        public function __construct()
        {
            parent::__construct();
            $this->lang = $this->load->language('pages/news');
        }

        public function indexAction()
        {
            $this->view->asset->setTitle($this->lang->get('local_page_title'));
            $this->view->asset->setCss('/public/style/news/news.css');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle($this->lang->get('local_page_title'));
            $data['news_list'] = $this->load->controller('modules/news')->getList(6, true);
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('News/index', $data);
        }

        public function articleAction()
        {
            $this->view->asset->setTitle($this->lang->get('local_page_title'));
            $this->view->asset->setCss('/public/style/news/news.css');
            $this->view->asset->setCss('/public/style/owl-carousel/owl-gallery.css');
            $this->view->asset->setJs('/public/style/owl-carousel/owl-carousel-switcher.js');

            $data = array();

            $data['article'] = $this->load->controller('modules/news')->article();
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('News/one-news', $data);
        }
    }