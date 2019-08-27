<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class OwlGallery extends Controller
    {
        public function index()
        {
            return $this->load->view('modules/owl-gallery');
        }
    }