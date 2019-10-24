<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class PopupContactForm extends Controller
    {
        public function index()
        {
            $language = $this->load->language('modules/popupContactForm');
            $data = array();

            $data['local_feedback_name'] = $language->get('local_feedback_name');
            $data['local_feedback_phone'] = $language->get('local_feedback_phone');
            $data['local_feedback_msg'] = $language->get('local_feedback_msg');
            $data['local_feedback_send'] = $language->get('local_feedback_send');

            return $this->load->view('modules/popup-contact-form', $data);
        }
    }