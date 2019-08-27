<?php
	namespace controllers;

	use core\engine\Controller;

	class MainController extends Controller
	{

	    public function indexAction()
	    {
	    	$this->view->asset->setMetaDesc('Тестовое описание');
	    	$this->view->asset->setMetaKeys('ключ1, ключ2');
	    	$this->view->asset->setTitle('Главная');
            $this->view->asset->setCss('/public/style/simple-slider/css/simple-slider.css');
            $this->view->asset->setCss('/public/style/products/products.css');
            $this->view->asset->setCss('/public/style/news/news.css');
            $this->view->asset->setCss('/public/style/owl-carousel/owl-gallery.css');
            $this->view->asset->setJs('/public/style/simple-slider/js/simple-slider.js');
            $this->view->asset->setJs('/public/style/owl-carousel/owl-carousel-switcher.js');


	    	$data['simple_slider'] = $this->load->controller('modules/simpleSlider');
	    	$data['products'] = $this->load->controller('modules/products')->getList(4);
	    	$data['call_to_action'] = $this->load->controller('modules/callToAction');
	    	$data['latest_news'] = $this->load->controller('modules/news')->getList();
	    	$data['owl_gallery'] = $this->load->controller('modules/owlGallery');
	    	$data['header'] = $this->load->controller('common/header');
	    	$data['footer'] = $this->load->controller('common/footer');

	    	$this->view->response('Main/index', $data);
	    }
	}
