<?php
	namespace controllers\common;
	use core\engine\Controller;

	class Header extends Controller
	{
		public function index()
		{
		    $header_model = $this->load->model('common/header');
            $language = $this->load->language('common/header');

		    $data = array();

		    // Localisation
            $data['local_feedback'] = $language->get('local_feedback');


		    $data['menu_list'] = $header_model->getMenuList($language->language_id);
		    $data['popup_form'] = $this->load->controller('modules/popupContactForm');
            $data['languages'] = $this->load->controller('common/language')->getLanguageList();
		    $data['page'] = '/' . explode('/', $this->request->getUriWithoutParams())[0];

			return $this->load->view('common/header', $data);
		}
	}
