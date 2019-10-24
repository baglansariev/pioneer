<?php
	namespace controllers\common;
	use core\engine\Controller;

	class Footer extends Controller
	{
		public function index()
		{
		    $language = $this->load->language('common/footer');
            $data = array();

            $data['local_contacts_col_title'] = $language->get('local_contacts_col_title');
            $data['local_footer_contacts_title'] = $language->get('local_footer_contacts_title');
            $data['local_footer_contacts'] = $language->get('local_footer_contacts');
            $data['local_about_col_title'] = $language->get('local_about_col_title');
            $data['local_about_col_text'] = $language->get('local_about_col_text');
            $data['local_instagram_col_title'] = $language->get('local_instagram_col_title');
            $data['local_copyright'] = $language->get('local_copyright');
            $data['local_dev_sign'] = $language->get('local_dev_sign');

			return $this->load->view('common/footer', $data);
		}
	}
