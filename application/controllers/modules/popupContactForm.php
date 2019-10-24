<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class PopupContactForm extends Controller
    {
        public function index()
        {
            $language = $this->load->language('modules/popupContactForm');
            $data = array();

            $data['local_contact_form_name'] = $language->get('local_contact_form_name');
            $data['local_contact_form_phone'] = $language->get('local_contact_form_phone');
            $data['local_contact_form_msg'] = $language->get('local_contact_form_msg');
            $data['local_contact_form_send'] = $language->get('local_contact_form_send');

            return $this->load->view('modules/popup-contact-form', $data);
        }
    }