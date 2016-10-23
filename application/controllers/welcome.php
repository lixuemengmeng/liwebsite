<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('blog_category');
		$this->load->model('blog_model');
		$cate_Id=$this->input->get('cateId');
		if(!$cate_Id){
			$blogs=$this->blog_model->get_all();
		}else{
			$blogs=$this->blog_model->get_blog_by_id($cate_Id);
		}

		$result=$this->blog_category->get_all();
		$this->load->view('index',array(
			'categories'=>$result,
			'blogs'=>$blogs
		));

	}
	public function view_blog(){
		$this->load->model('blog_category');
		$this->load->model('blog_model');
		$this->load->model('comment_model');
		$blog_id=$this->input->get('blogId');
		$blogs=$this->blog_model-> get_blog_by_blogId($blog_id);
		$blogs->comments=$this->comment_model->get_comment_by_blogId($blog_id);

		if($blogs){
			$this->load->view('view',array(
				'blogs'=>$blogs
			));
		}else{
			echo '未查到指定文章';

		}


	}
	public function get_allblog(){
		$this->load->model('blog_model');
		$blogs=$this->blog_model->get_all();
			echo json_encode($blogs);
	}
	public function get_blog(){

		 $cate_Id=$this->input->get('cataId');
		$this->load->model('blog_model');
		$blogs=$this->blog_model->get_blog_by_id($cate_Id);
		echo json_encode($blogs);
		
	}
	public function blog_list(){
		$this->load->model('blog_model');
		$blogs=$this->blog_model->get_blog_byPage( );
		$this->load->view('project.php',array(
			'blogs'=>$blogs
		));
	}
	public function get_moreblog(){
		$offset=$this->input->get('offset');
		$this->load->model('blog_model');
		$blogs=$this->blog_model->get_blog_byPage($offset);
		echo json_encode($blogs);
	}
	public function add_comment(){
		$username=$this->input->post('username');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$message=$this->input->post('message');
		$blogId=$this->input->post('blogId');
		$this->load->model('comment_model');
		$result=$this->comment_model->save_comment($username,$email,$phone,$message,$blogId);
		if($result>0){
			echo 'success';
		}else{
			echo 'fail';
		}


	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */