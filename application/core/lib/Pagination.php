<?php
    namespace core\lib;

    class Pagination
    {
        public $totalNotes;
        public $notesOnPage;
        public $currentPage;
        public $totalPages;
        public $from;

        public function __construct($notesOnPage, $totalNotes, $uri)
        {
            $this->notesOnPage = $notesOnPage;
            $this->totalNotes = $totalNotes;
            $this->currentPage = $this->getCurrentPage($uri);
            $this->totalPages = ceil($this->totalNotes / $this->notesOnPage);
            $this->from = ($this->currentPage - 1) * $this->notesOnPage;
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

        private function pageValidate($page)
        {
            if((int)$page && (int)$page > 0){
               return $page;
            }
            $page = 1;
            return $page;
        }

    }