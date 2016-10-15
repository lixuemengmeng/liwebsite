<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    
    public function get_all()
    {
        $this->db->order_by('post_date','desc');
        return $this->db->get('blog')->result();
    }
    public function get_blog_by_id($cateId)
    {
        $this->db->order_by('post_date','desc');
        return $this->db->get_where('blog',array('cate_id'=>$cateId))->result();
    }
    public function get_blog_by_blogId($blogId)
    {
        $this->db->order_by('post_date','desc');
        return $this->db->get_where('blog',array('blog_id'=>$blogId))->result();
    }
}