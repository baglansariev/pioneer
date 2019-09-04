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
                $data['total_pages'] = $pagination->totalPages;
                $products = $products_model->getList(['from' => $$pagination->from, 'notes' => $limit]);
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

        public function ShowOneProduct()
        {
            $data = array();
            $products_model = $this->load->model('modules/products');
            $product_id = $this->getProductId();

            if((int)$product_id >0 && $products_model->hasProduct($product_id)){
                $product_info = $products_model->getProductInfo($product_id);

            }
            else{
                $data['message'] = 'Такого продукта нет в наличии!';
            }
        }

        private function getProductId()
        {
            $arr = explode('/', $this->request->getUriWithoutParams());
            $needle = array_search('flour', $arr);

            if($needle){
                return $arr[$needle + 1];
            }
            return false;
        }
    }