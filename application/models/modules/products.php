<?php
    namespace models\modules;
    use core\engine\Model;

    class Products extends Model
    {
        public function getList($limit)
        {
            $sql = "SELECT "
                . DB_PREFIX . "product.name AS product_name, "
                . DB_PREFIX . "product.image AS product_image, "
                . DB_PREFIX . "product_description.short_desc AS product_short_desc, "
                . DB_PREFIX . "product_type.name AS product_type 
                FROM " . DB_PREFIX . "product 
                LEFT JOIN " . DB_PREFIX . "product_description 
                ON " . DB_PREFIX . "product.id = " . DB_PREFIX . "product_description.product_id 
                LEFT JOIN " . DB_PREFIX . "type_to_product 
                ON " . DB_PREFIX . "type_to_product.product_id = " . DB_PREFIX . "product.id 
                LEFT JOIN " . DB_PREFIX . "product_type 
                ON " . DB_PREFIX . "type_to_product.type_id = " . DB_PREFIX . "product_type.id 
                ";

            return $this->db->getAllRows($sql);
        }
    }