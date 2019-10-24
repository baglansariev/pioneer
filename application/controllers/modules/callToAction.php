<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class CallToAction extends Controller
    {
        public function index()
        {
            $data = array();
            $language = $this->load->language('modules/callToAction');

            $data['local_module_title'] = $language->get('local_module_title');
            $data['local_module_subtitle'] = $language->get('local_module_subtitle');
            $data['local_btn_text'] = $language->get('local_btn_text');

            return $this->load->view('modules/callToAction', $data);
        }
    }