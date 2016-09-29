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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */