<?php
	namespace controllers\common;
	use core\engine\Controller;

	class Header extends Controller
	{
		public function index()
		{
		    $header_model = $this->load->model('common/header');
		    $data = array();
		    $data['menu_list'] = $header_model->getMenuList();

			return $this->load->view('common/header', $data);
		}
	}
