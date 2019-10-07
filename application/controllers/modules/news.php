<?php
    namespace controllers\modules;
    use core\engine\Controller;
    use controllers\modules\OwlGallery;
    use core\lib\Pagination;

    class News extends Controller
    {
        public function getList($limit = false, $pagination = false)
        {
            $news_model = $this->load->model('modules/news');
            $data = array();
            $news = $news_model->getList($limit);

            if($pagination){
                $totalNews = $news_model->getTotalNews()['count'];
                $pagination = new Pagination($limit, $totalNews, $this->request->getUriWithoutParams());
                $data['pages_viewport'] = $pagination->pagesViewPort(5);
                $news = $news_model->getList(['from' => $pagination->from, 'notes' => $limit]);
            }


            $data['news']  = array();
            if($news){
                foreach ($news as $key => $item) {
                    $data['news'][$key]['id'] = $item['id'];
                    $data['news'][$key]['title'] = $item['title'];
                    $data['news'][$key]['short_text'] = $item['short_text'];
                    $data['news'][$key]['main_img'] = $item['main_img'];
                    $data['news'][$key]['date_insert'] = $item['date_insert'];
                }
            }

            return $this->load->view('modules/news/news-list', $data);
        }

        public function article()
        {
            $article_id = $this->getArticleId();
            $owl_gallery = new owlGallery;
            $data = array();
            $data['article'] = array();

            if((int)$article_id > 0){
                $news_model = $this->load->model('modules/news');
                $article_data = $news_model->getOneArticle($article_id);

                if($article_data){
                    foreach($article_data as $key => $article) {
                        $data['article'][$key]['id'] = $article['id'];
                        $data['article'][$key]['title'] = $article['title'];
                        $data['article'][$key]['full_text'] = $article['full_text'];
                        $data['article'][$key]['main_img'] = $article['main_img'];
                        $data['article'][$key]['date_insert'] = $article['date_insert'];

                        if($news_model->getImagesOfArticle($article_id)){
                            $data['article'][$key]['news_images'] = $owl_gallery->getImages($news_model->getImagesOfArticle($article_id));
                        }

                        $data['article'][$key]['news_videos'] = $news_model->getVideosOfArticle($article_id);
                    }
                }
            }

            return $this->load->view('modules/news/news-page', $data);
        }

        private function getArticleId()
        {
            $arr = explode('/', $this->request->getUriWithoutParams());
            $needle = array_search('show', $arr);

            if($needle){
                return $arr[$needle + 1];
            }
            return false;
        }
    }