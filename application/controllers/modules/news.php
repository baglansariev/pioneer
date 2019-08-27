<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class News extends Controller
    {
        public function getList($limit = false)
        {
            return $this->load->view('modules/news/news-list');
        }
    }