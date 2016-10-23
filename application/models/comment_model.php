<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {



    public function get_comment_by_blogId($blog_id)
    {
        $this->db->order_by('post_date','desc');
        return $this->db->get_where('comment',array('blog_id'=>$blog_id))->result();
    }
    public function  save_comment($username,$email,$phone,$message,$blogId){
        $this->db->insert('comment',array(
            'username'=>$username,
            'email'=>$email,
            'phone'=>$phone,
            'message'=>$message,
            'post_date'=>date('Y-m-d H:i:s',time()),
            'blog_id'=>$blogId
        ));
        return $this->db->affected_rows();
    }

}