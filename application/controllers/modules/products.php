<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class Products extends Controller
    {
        public function getList($limit = 4)
        {
            $data = array();
            $product_model = $this->load->model('modules/products');
            $products = $product_model->getList($limit);
            $data['products'] = array();

            if($products){
                foreach($products as $key => $product){
                    $data['products'][$key]['name'] = $product['product_name'];
                    $data['products'][$key]['image'] = $product['product_image'];
                    $data['products'][$key]['short_desc'] = $product['product_short_desc'];
                    $data['products'][$key]['type'] = $product['product_type'];
                }
            }

            return $this->load->view('modules/products/product-list', $data);
        }
    }