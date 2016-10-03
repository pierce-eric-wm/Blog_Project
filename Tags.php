<?php
//require_once('database.php');
//class Tags extends Database
//{
//    public function resultset()
//    {
//        $posts = parent::resultset();
//        if (is_array($posts) && count($posts)) {
//            foreach ($posts as &$post) {
//                $tags = [];
//                $sql = 'SELECT blog_post_id FROM blog_post_tags  LEFT JOIN tags  ON blog.tag_id = tags.id WHERE blog.blog_post_tags = :blog_post_id';
//                parent::query($sql);
//                parent::bind(':blog_post_id', $post['id']);
//                $blogTags = parent::resultset();
//                foreach ($blogTags as $btag) {
//                    array_push($tags, $btag['name']);
//                }
//                $post['tags'] = implode(', ', $tags);
//            }
//            return $posts;
//        }
//        else {
//            return [];
//        }
//    }
//}
//?>
