<?php
    namespace controllers;
    use core\engine\Controller;

    class AboutController extends Controller
    {
        public function indexAction()
        {
            $language = $this->load->language('pages/about');

            $this->view->asset->setTitle($language->get('local_page_title'));

            $data = array();

            $data['local_welocme_title'] = $language->get('local_welocme_title');
            $data['local_welcome_text'] = $language->get('local_welcome_text');
            $data['local_about_title'] = $language->get('local_about_title');
            $data['local_about_text'] = $language->get('local_about_text');
            $data['local_mission_title'] = $language->get('local_mission_title');
            $data['local_mission_text'] = $language->get('local_mission_text');

            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle($language->get('local_page_title'));
            $data['advantages'] = $this->load->controller('modules/advantages');
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('About/index', $data);
        }
    }