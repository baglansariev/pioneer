<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class SimpleSlider extends Controller
    {
        public function index()
        {
            $language = $this->load->language();
            $slider_model = $this->load->model('modules/simpleSlider');
            $data = array();
            $data['slider_data'] = $slider_model->getSliderData($language->language_id);

            return $this->load->view('modules/simpleSlider', $data);
        }
    }