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
            $this->view->asset->setCss('/public/style/products//products.css');
            $this->view->asset->setJs('/public/style/simple-slider/js/simple-slider.js');


	    	$data['simple_slider'] = $this->load->controller('modules/simpleSlider');
	    	$data['products'] = $this->load->controller('modules/products')->getList();
	    	$data['header'] = $this->load->controller('common/header');
	    	$data['footer'] = $this->load->controller('common/footer');

	    	$this->view->response('Main/index', $data);
	    }
	}
