<?php
    namespace controllers;
    use core\engine\Controller;

    class AboutController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('О компании');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('О компании');
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');
            $a = strval(pow(strval(127000), 10));
            $b = strval(pow(strval(148000), 10));
            $c = strval($a + $b);
//            $asIntStr = strval($c);
            echo $c;
            exit;

            $this->view->response('About/index', $data);
        }
    }