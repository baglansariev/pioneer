<?php
    namespace models\modules;
    use core\engine\Model;

    class SimpleSlider extends Model
    {
        public function getSliderData($language_id)
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "simple_slider WHERE language_id = " . (int)$language_id . " ORDER BY sort";
            return $this->db->getAllRows($sql);
        }
    }