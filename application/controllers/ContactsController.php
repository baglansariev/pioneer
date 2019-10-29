<?php

    namespace controllers;
    use core\engine\Controller;

    class ContactsController extends Controller
    {
        public function indexAction()
        {
            $language = $this->load->language('pages/contacts');
            $this->view->asset->setTitle($language->get('local_page_title'));

            $data = array();

            $data['local_contacts_title'] = $language->get('local_contacts_title');
            $data['local_adress_title'] = $language->get('local_adress_title');
            $data['local_adress'] = $language->get('local_adress');
            $data['local_contact_form_title'] = $language->get('local_contact_form_title');
            $data['local_contact_form_name'] = $language->get('local_contact_form_name');
            $data['local_contact_form_phone'] = $language->get('local_contact_form_phone');
            $data['local_contact_form_email'] = $language->get('local_contact_form_email');
            $data['local_contact_form_captcha'] = $language->get('local_contact_form_captcha');
            $data['local_contact_form_msg'] = $language->get('local_contact_form_msg');
            $data['local_contact_form_send'] = $language->get('local_contact_form_send');
            $data['local_map_title'] = $language->get('local_map_title');

            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle($language->get('local_page_title'));
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('Contacts/index', $data);
        }
}