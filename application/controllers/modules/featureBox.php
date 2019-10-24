<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class FeatureBox extends Controller
    {
        public function index()
        {
            $data = array();
            $language = $this->load->language('modules/featureBox');
            $featurebox_model = $this->load->model('modules/featureBox');
            $featureboxes = $featurebox_model->getList($language->language_id);

            $data['featureboxes'] = array();

            if($featureboxes){
                foreach($featureboxes as $key => $featurebox){
                    $data['featureboxes'][$key]['id'] = $featurebox['id'];
                    $data['featureboxes'][$key]['image'] = $featurebox['image'];
                    $data['featureboxes'][$key]['title'] = $featurebox['title'];
                    $data['featureboxes'][$key]['text'] = $featurebox['text'];
                }
            }

            $data['local_module_title'] = $language->get('local_module_title');

            return $this->load->view('modules/feature-box', $data);
        }
    }