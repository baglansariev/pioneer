<?php
    namespace core\lib;

    class Pagination
    {
        public $totalNotes;
        public $notesOnPage;
        public $isUri;
        public $currentPage;

        public function __construct($notesOnPage, $totalNotes, $uri)
        {
            $this->isUri = false;
            $this->notesOnPage = $notesOnPage;
            $this->totalNotes = $totalNotes;
            $this->currentPage = $this->getCurrentPage($uri);
        }

        public function getCurrentPage($param)
        {
            $arr = explode('/', $param);
            $needle = array_search('page', $arr);

            if($needle){
                return $this->pageValidate($arr[$needle + 1]);
            }
            return $this->pageValidate($param);
        }

        public function getTotalPages()
        {
            return ceil($this->totalNotes / $this->notesOnPage);
        }

        public function getFromNote()
        {
            return ($this->currentPage - 1) * $this->notesOnPage;
        }

        private function pageValidate($page)
        {
            if((int)$page && (int)$page > 0){
               return $page;
            }
            $page = 1;
            return $page;
        }

    }