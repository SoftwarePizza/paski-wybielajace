<?php 


class Ets_blogBlogModuleFrontControllerOverride extends Ets_blogBlogModuleFrontController
{
    public function _initContent()
    {
        if($this->context->cookie->_success)
        {
            $this->_success = $this->context->cookie->_success;
            $this->context->cookie->_success = '';
        }
        $this->module->assignConfig();
        $id_post = (int)Tools::getValue('id_post');
        if($id_post && ($postObj = new Ets_blog_post($id_post)) && Validate::isLoadedObject($postObj))
        {
            $post = $postObj->getPost((int)$id_post); 
            if($post)
            {
                $urlAlias = Tools::strtolower(trim(Tools::getValue('url_alias')));
                $edit_comment = (int)Tools::getValue('edit_comment');
                if($urlAlias && !$edit_comment &&  $urlAlias != Tools::strtolower(trim($post['url_alias'])))
                   Tools::redirect($this->module->getLink('blog',array('id_post' => $post['id_post'])));               
                if((int)Tools::getValue('all_comment'))
                    $climit=false;
                else
                    $climit = 5;  
                $cstart = $climit ? 0 : false;
                $countComment= Ets_blog_comment::countCommentsWithFilter(' AND bc.approved = 1 AND bc.id_post='.(int)$postObj->id);
                if($climit && $countComment > (int)$climit )
                {
                    $this->context->smarty->assign('link_view_all_comment', $this->module->getLink('blog',array('id_post' => $postObj->id,'all_comment'=>1)).'#blog-comments-list');
                }
                $comments= Ets_blog_comment::getCommentsWithFilter(' AND bc.approved = 1 AND bc.id_post='.(int)$postObj->id,' bc.id_comment desc, ',$cstart,$climit);
                if($comments)
                    foreach($comments as &$comment)
                        $comment['reply'] = false;
                $this->context->smarty->assign(
                    array(
                        'hasLoggedIn' => $this->context->customer->logged,
                        'allowGuestsComments' => true,
                        'blog_post' => $post,
                        'show_tags' => false,
                        'show_date' => true,
                        'show_categories' => true,
                        'show_author' => true,
                        'blog_errors' => $this->errors,
                        'blog_success' => $this->_success,
                        'display_desc' => true,
                        'date_format' =>$this->context->language->date_format_lite,
                        'blog_layout' => Tools::strtolower(Configuration::get('ETS_BLOG_LAYOUT')), 
                        'breadcrumb' => $this->module->is17 ? $this->module->getBreadCrumb() : false,
                        'image_folder' => _PS_ETS_BLOG_IMG_,
                        'allow_rating' => true,
                        'report_url' => $this->module->getLink('report'),
                        'default_rating' => 5,
                        'everage_rating' => $postObj->getAvgRating(),
                        'total_review' => $postObj->getTotalReviews(),
                        'allowComments' => true,
                        'comments' => $comments,
                        'reportedComments' =>$this->context->cookie->ets_blog_reported_comments ? @unserialize($this->context->cookie->ets_blog_reported_comments) : false,
                        'id_lang'=> $this->context->language->id,
                        'blog_related_posts_type'=>'carousel',
                        'text_gdpr' => $this->module->l('I agree with the use of cookie and personal data according to EU GDPR','blog'),
                    )
                );
                //check if template s override
                if(file_exists(_PS_THEME_DIR_.'modules/'.$this->module->name.'/views/templates/hook/single_post.tpl'))
                {
                    return $this->context->smarty->fetch(_PS_THEME_DIR_.'modules/'.$this->module->name.'/views/templates/hook/single_post.tpl');
                }else{
                    return $this->context->smarty->fetch(_PS_MODULE_DIR_.$this->module->name.'/views/templates/hook/single_post.tpl');
                }
            }
            else
            {
                header("HTTP/1.0 404 Not Found");
                $this->context->smarty->assign(
                    array(
                        'blog_post' => false
                ));
            }
        }
        else
            return $this->displayListPosts();
    }

    public function displayListPosts(){
        $params = array('page'=>"_page_");
        $filter = ' AND p.enabled =1';
        $sort ='';
        $id_category = (int)trim(Tools::getValue('id_category'));
        $year = (int)Tools::getValue('year');
        $month = (int)Tools::getValue('month');
        $latest = Tools::getValue('latest');
        if($id_category && $this->module->friendly && (Tools::strpos($_SERVER['REQUEST_URI'],'category_url_alias') !==false || Tools::strpos($_SERVER['REQUEST_URI'],'url_alias')!==false))
        {
             Tools::redirect($this->module->getLink('blog',array('id_category'=>$id_category)));
        }                  
        if($id_category)
        {
            if(($category = new Ets_blog_category($id_category,$this->context->language->id)) && Validate::isLoadedObject($category) && $category->enabled)
            {
                $urlAlias = Tools::strtolower(trim(Tools::getValue('url_alias',Tools::getValue('category_url_alias'))));
                if($urlAlias && $urlAlias != Tools::strtolower(trim($category->url_alias)))
                    Tools::redirect($this->module->getLink('blog',array('id_category' => $id_category)));
            }
            $filter .= " AND pc.id_category='".(int)$id_category."'";
            $params['id_category'] = (int)trim($id_category);
        }
        elseif($latest=='true')
        {
            $params['latest'] = 'true';
            $sort = 'p.id_post DESC, ';
        }
        if(($id_author = (int)Tools::getValue('id_author')))
        {
            $params['id_author'] = $id_author;
            $filter .= " AND p.added_by = ".$id_author;
            $employee = $this->getAuthorById($id_author);
        }
        if($month && $year)
        {
            $filter .=' AND MONTH(p.date_add) ="'.pSQL($month).'" AND YEAR(p.date_add)="'.pSQL($year).'"';
            $params['year']=$year;
            $params['month']=$month;
        }
        if($year)
        {
            $filter .=' AND YEAR(p.date_add)="'.pSQL($year).'"';
            $params['year']=$year;
        }
        elseif(($search = urldecode(trim(Tools::getValue('search'))))!='' && Validate::isCleanHtml($search))
        {
            $filter .= " AND (pl.title like '%".pSQL($search)."%' OR pl.description like '%".pSQL($search)."%' OR pl.short_description LIKE '%".pSQL($search)."%')";
            $params['search'] = $search;
        }
        $page = (int)Tools::getValue('page');
        if($page <1)
            $page=1;
        $totalRecords = (int)Ets_blog_post::countPostsWithFilter($filter);
        $paggination = new Ets_blog_paggination_class();            
        $paggination->total = $totalRecords;
        $paggination->url = $this->module->getLink('blog', $params);
        $paggination->limit = 12;
        $totalPages = ceil($totalRecords / $paggination->limit);
        if($page > $totalPages)
            $page = $totalPages;
        $paggination->page = $page;
        $start = $paggination->limit * ($page - 1);
        if($start < 0)
            $start = 0;
        $posts = Ets_blog_post::getPostsWithFilter($filter, $sort, $start, $paggination->limit);  
        if($posts)
        {
            foreach($posts as &$post)
            {
                $post['id_category'] = Ets_blog_post::getCategoriesStrByIdPost($post['id_post']);
                if($post['thumb'])
                    $post['thumb'] = $this->context->link->getMediaLink(_PS_ETS_BLOG_IMG_.'post/'.$post['thumb']);
                if($post['image'])
                    $post['image'] = $this->context->link->getMediaLink(_PS_ETS_BLOG_IMG_.'post/'.$post['image']);
                $post['link'] = $this->module->getLink('blog',array('id_post'=>$post['id_post']));
                $post['categories'] = Ets_blog_post::getCategoriesByIdPost($post['id_post'],false,true);
                $post['everage_rating'] = Ets_blog_post::getAvgRatingById($post['id_post']);
                $post['total_review'] =  Ets_blog_post::getTotalReviewsById($post['id_post']);
            }                
        }
        $category = (int)$id_category ? (($cat = Ets_blog_category::getCategoryById((int)$id_category)) ? $cat : array('enabled' => false)) : false;
        if($category && !$category['enabled'])
            header("HTTP/1.0 404 Not Found");
        $search = Tools::getValue('search');
        $this->context->smarty->assign(
            array(
                'blog_posts' => $posts, 
                'blog_paggination' => $paggination->render(),
                'blog_category' => $category,
                'blog_search' => trim($search)!='' && Validate::isCleanHtml($search) ? urldecode(trim($search)) : false,
                'blog_latest' => trim($latest)=='true' ? true : false,
                'author' => isset($employee) && $employee ? $employee:false,
                'month' => $month && $year ? $year.' - '.$this->module->getMonthName($month) :false,
                'year' => $year ? $year :false,
                'allow_rating'=> true,
                'show_date' => true,
                'show_views' => true,
                'is_main_page' => !$month && !$year && !$category && !$latest && !$search ? true : false,
                'breadcrumb' => $this->module->getBreadCrumb(),
                'date_format' => $this->context->language->date_format_lite,
                'show_categories' => true ,
                'blog_layout' => Tools::strtolower(Configuration::get('ETS_BLOG_LAYOUT')),  
            )
        );
        //check if template s override
        if(file_exists(_PS_THEME_DIR_.'modules/'.$this->module->name.'/views/templates/hook/blog_list.tpl'))
        {
            return $this->context->smarty->fetch(_PS_THEME_DIR_.'modules/'.$this->module->name.'/views/templates/hook/blog_list.tpl');
        }else{
            return $this->context->smarty->fetch(_PS_MODULE_DIR_.$this->module->name.'/views/templates/hook/blog_list.tpl');
        }
    }
}