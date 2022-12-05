<?php

class Home extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('home_model','home_model');
	}
    public function index()
    {
        $data                          = array();
        $data['all_featured_products'] = $this->home_model->get_all_featured_product();
        $data['all_new_products']      = $this->home_model->get_all_new_product();
        $this->load->view('header/header');
        $this->load->view('header/css');
        $this->load->view('header/navbar');
        $this->load->view('home/mainhome',$data);
        $this->load->view('header/footer');
    }
    public function aboutus()
    {
        $this->load->view('header/header');
        $this->load->view('header/css');
        $this->load->view('header/navbar');
        $this->load->view('about/mainhome');
        $this->load->view('header/footer');
    }
    public function login()
    {
        $this->load->view('header/header');
        $this->load->view('header/css');
        $this->load->view('header/navbar');
        $this->load->view('login/index');
        $this->load->view('header/footer');
    }
	public function register()
	{
		$this->load->view('header/header');
		$this->load->view('header/css');
		$this->load->view('header/navbar');
		$this->load->view('register/index');
		$this->load->view('header/footer');
	}
    public function search()
    {
        $search = $this->input->get('search');
        if (!empty($search)) {
            $data                    = array();
            $data['get_all_product'] = $this->home_model->get_all_search_product($search);
            $data['search']          = $search;
            if ($data['get_all_product']) {
                $this->load->view('header/header');
                $this->load->view('header/css');
                $this->load->view('header/navbar');
                $this->load->view('home/search', $data);
                $this->load->view('header/footer');
        } else {
            redirect('error');
        }
    } else {
        redirect('error');
    }
}
public function product()
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url('home/product');
        $config['total_rows'] = $this->db->get('products')->num_rows();
        $config['per_page'] = 8;
        $config['num_links'] = 2;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['prev_link'] = '&lt; Previous';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['last_link'] = false;
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);

        $data                    = array();
        $data['get_all_product'] = $this->home_model->get_all_product_pagi($config['per_page'], $this->uri->segment('3'));
                $this->load->view('header/header');
                $this->load->view('header/css');
                $this->load->view('header/navbar');
                $this->load->view('home/products', $data);
                $this->load->view('header/footer');
    }
}
