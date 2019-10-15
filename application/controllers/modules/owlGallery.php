<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class OwlGallery extends Controller
    {
        public function getImages($images = array())
        {
            $owl_model = $this->load->model('modules/owlGallery');
            $data = array();
            $data['images'] = array();

            if(!$images){
                $images = $owl_model->getImages();
            }

            foreach($images as $key => $image){
                if(isset($image['src'])){
                    $data['images'][$key]['src'] = $image['src'];
                    $data['images'][$key]['thumbnail'] = $image['thumbnail'];
                }
                else if(isset($image['url'])){
                    $data['images'][$key]['src'] = $image['url'];
                    $data['images'][$key]['thumbnail'] = $image['thumbnail'];
                }
            }

            return $this->load->view('modules/owl-gallery', $data);
        }
    }