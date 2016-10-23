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

    /**
     * @param $offset
     * @return mixed
     */
    public function get_blog_byPage($offset=0){
        $this->db->order_by('post_date','desc');
        $this->db->limit(6,$offset);
        return $this->db->get('blog')->result();
    }
    public function get_blog_by_blogId($blogId)
    {

//        return $this->db->get_where('blog',array('blog_id'=>$blogId))->result();
        $this->db->select('blog1.*,cate1.cate_name');
        $this->db->from('blog blog1');
        $this->db->join('cate cate1','blog1.cate_id=cate1.cate_id');
        $this->db->where('blog1.blog_id',$blogId);
        return $this->db->get()->row();
    }
}