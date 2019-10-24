<?php
    namespace models\common;
    use core\engine\Model;

    class Header extends Model
    {
        public function getMenuList($language_id)
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "menu WHERE language_id = " . (int)$language_id . " ORDER BY sort";
            return $this->db->getAllRows($sql);
        }
    }