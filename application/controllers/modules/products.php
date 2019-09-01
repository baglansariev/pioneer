<?php
    namespace controllers\modules;
    use core\engine\Controller;
    use core\lib\Pagination;

    class Products extends Controller
    {
        public function getList($limit = false, $pagination = false)
        {
            $data = array();
            $products_model = $this->load->model('modules/products');
            $products = $products_model->getList($limit);

            if($pagination){
                $totalProducts = $products_model->getTotalProducts()['count'];
                $pagination = new Pagination($limit, $totalProducts, $this->request->getUriWithoutParams());
                $fromNote = $pagination->getFromNote();

                $data['total_pages'] = $pagination->getTotalPages();
                $products = $products_model->getList(['from' => $fromNote, 'notes' => $limit]);
            }

            $data['products'] = array();

            if($products){
                foreach($products as $key => $product){
                    $data['products'][$key]['id'] = $product['product_id'];
                    $data['products'][$key]['name'] = $product['product_name'];
                    $data['products'][$key]['image'] = $product['product_image'];
                    $data['products'][$key]['short_desc'] = $product['product_short_desc'];
                    $data['products'][$key]['type'] = $product['product_type'];
                }
            }

            return $this->load->view('modules/products/product-list', $data);
        }
    }