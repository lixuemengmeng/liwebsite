<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {



    public function get_comment_by_blogId($blog_id)
    {
        $this->db->order_by('post_date','desc');
        return $this->db->get_where('comment',array('blog_id'=>$blog_id))->result();
    }

}