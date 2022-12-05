<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
	public function index()
	{
		if ($this->session->userdata('aid')) {
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/index');
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');

		} else {
			setFlushData('alert-danger', 'Please login first', 'admin/login');
		}
	}
	public function register()
	{
		$this->load->view('admin/register');
	}
	public function registerAdmin(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.uEmail]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|xss_clean');
		if ($this->form_validation->run() == true) {
			$userData = array(
				'aName' => $this->input->post('name', true),
				'aEmail' => $this->input->post('email', true),
				'aPassword' => $this->ecncrypt->encode->input->post('password', true),
				'aDate' => date('y-m-d h:i:sa')
			);
			$id = $this->modAdmin->insert_user($userData);

			$this->session->set_userdata('aEmail', 'aEmail');
			$this->session->set_userdata('logged_in', TRUE);
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/index');
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		}
	else {
		$this->register();
	}
	}

	public function login()
{
	$this->load->view('admin/login');
}

	public function checkAdmin()
	{
		$data['aEmail'] = $this->input->post('email', true);
		$data['aPassword'] = $this->input->post('password', true);

		if (!empty($data['aEmail']) && !empty($data['aPassword'])) {
			$admindata = $this->modAdmin->checkAdmin($data);
			if (count($admindata) == 1) {
				$forSession = array(
					'aid' => $admindata[0]['aid'],
					'aName' => $admindata[0]['aName'],
					'aEmail' => $admindata[0]['aEmail'],
				);
				$this->session->set_userdata($forSession);
				if ($this->session->userdata('aid')) {
					redirect('admin');
				} else {
					echo 'session not created...';
				}
			} else {
				setFlushData('alert-warning', 'Email or password is incorrect', 'admin/login');
			}

		} else {
			setFlushData('alert-warning', 'Please check the required fields.', 'admin/login');
		}
	}

	public function logOut()
	{
		if ($this->session->userdata('aid')) {
			$this->session->set_userdata('aid', '');
			setFlushData('alert-warning', 'you have successfully logged out', 'admin/login');
		} else {
			setFlushData('alert-warning', 'please login now...', 'admin/login');
		}
	}

	public function newCategory()
	{
		if (adminLoggedIn()) {
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/newCategory');
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		} else {
			setFlushData('alert-danger', 'Please login first to add category', 'admin/login');
		}

	}

	public function addCategory()
	{
		if (adminLoggedIn()) {
			$data['cName'] = $this->input->post('categoryName',true);
			if (!empty($data['cName'])) {
				$path = realpath(APPPATH . '../assets/images/categories');
				$config['upload_path'] = $path;
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('catDp')) {
					$error = $this->upload->display_errors();
					setFlushData('alert-danger', $error, 'admin/newCategory');
				} else {
					$fileName = $this->upload->data();
					$data['cDp'] = $fileName['file_name'];
					$data['cDate'] = date('y-m-d h:i:sa');
					$data['adminId'] = getAdminId();
				}
				$addData = $this->modAdmin->checkCategory($data);
				if ($addData->num_rows() > 0) {
					setFlushData('alert-danger', 'The category name already exists', 'admin/newCategory');
				} else {
					$addData = $this->modAdmin->addCategory($data);
					if ($addData) {
						setFlushData('alert-success', 'You have successully added your category', 'admin/newCategory');
					} else {
						setFlushData('alert-danger', 'You cannot add your category right now', 'admin/newCategory');
					}
				}

			} else {
				setFlushData('alert-danger', 'Category name required', 'admin/newCategory');
			}
		} else {
			setFlushData('alert-warning', 'please login  to add a category', 'admin/login');
		}

	}

	public function allCategories()
	{
		if (adminLoggedIn()) {
			$config['base_url'] = site_url('admin/allCategories');
			$totalRows = $this->modAdmin->getAllCategories();
			$config['total_rows'] = $totalRows;
			$config['per_page'] = 10;
			$config['uri_segment'] = 3;
			$this->load->library('pagination');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['allCategories'] = $this->modAdmin->fetchAllCategories($config['per_page'], $page);
			$data['links'] = $this->pagination->create_links();

			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/allCategories', $data);
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		} else {
			setFlushData('alert-warning', 'please login  to add a category', 'admin/login');
		}
	}

	public function editCategory($cId)
	{
		if (adminLoggedIn()) {
			if (!empty($cId) && isset($cId)) {
				$data['category'] = $this->modAdmin->checkCategoryById($cId);
				if (count($data['category']) == 1) {
					$this->load->view('admin/header/header');
					$this->load->view('admin/header/css');
					$this->load->view('admin/header/navtop');
					$this->load->view('admin/header/navleft');
					$this->load->view('admin/home/editCategory', $data);
					$this->load->view('admin/header/footer');
					$this->load->view('admin/header/htmlclose');
				} else {
					setFlushData('alert-warning', 'Category not found', 'admin/allCategories');
				}
			} else {
				setFlushData('alert-warning', 'Something went wrong', 'admin/allCategories');
			}

		} else {
			setFlushData('alert-warning', 'please login  to eddit a category', 'admin/login');
		}

	}

	public function updateCategory()
	{
		if (adminLoggedIn()) {
			$data['cName'] = $this->input->post('categoryName', true);
			$cId = $this->input->post('xid', true);
			$oldImg = $this->input->post('oldImg', true);
			if (!empty($data['cName']) && isset($data['cName'])) {
				if (isset($_FILES['catDp']) && is_uploaded_file($_FILES['catDp']['tmp_name'])) {
					$path = realpath(APPPATH . '../assets/images/categories/');
					$config['upload_path'] = $path;
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('catDp')) {
						$error = $this->upload->display_errors();
						setFlushData('alert-danger', $error, 'admin/allCategories');
					} else {
						$fileName = $this->upload->data();
						$data['cDp'] = $fileName['file_name'];
					}
				}//image checking
				$reply = $this->modAdmin->updateCategory($data, $cId);
				if ($reply) {
					if (!empty($oldImg) && isset($oldImg)) {
						if (file_exists($path . '/' . $oldImg)) {
							unlink($path . '/' . $oldImg);
						}
					}
					setFlushData('alert-success', 'You have successfully updated your category', 'admin/allCategories');
				} else {
					setFlushData('alert-warning', 'you cannot update your categories now', 'admin/allCategories');
				}
			} else {
				setFlushData('alert-warning', 'Category name required', 'admin/allCategories');
			}

		} else {
			setFlushData('alert-warning', 'please login  to update a category', 'admin/login');
		}
	}

	public function deleteCategory()
	{
		if (adminLoggedIn()) {
			if ($this->input->is_ajax_request()) {
				$this->input->post('id', true);
				$cId = $this->input->post('text', true);
				if (!empty($cId) && isset($cId)) {
					$cId = $this->encryption->decrypt($cId);
					$oldImge = $this->modAdmin->getCategoryImage($cId);
					if (!empty($oldImge) && count($oldImge) == 1) {
						$realImage = $oldImge[0]['cDp'];
					}

					$checkMd = $this->modAdmin->deleteCategory($cId);
					if ($checkMd) {
						if (!empty($realImage) && isset($realImage)) {
							$path = realpath(APPPATH . '../assets/images/categories');
							if (file_exists($path . '/' . $realImage)) {
								unlink($path . '/' . $realImage);
							}
						} else {
							echo 'you cannot delete your category right now';

						}
						$data['return'] = true;
						$data['message'] = 'successfully deleted';
						echo json_encode($data);
					} else {
						$data['return'] = false;
						$data['message'] = 'not found';
						echo json_encode($data);
					}

				} else {
					setFlushData('alert-warning', 'something wnt wrong', 'admin/login');
				}

			} else {
				setFlushData('alert-warning', 'please login  to delete a category', 'admin/login');
			}
		}

	}

	public function newProduct()
	{
		if (adminLoggedIn()) {
			$data['categories'] = $this->modAdmin->getCategories();
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/newProduct', $data);
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		} else {
			setFlushData('alert-danger', 'Please login first to add category', 'admin/login');
		}

	}

	public function addProduct()
	{
		if (adminLoggedIn()) {
			$data['pName'] = $this->input->post('productName', true);
			$data['pCompany'] = $this->input->post('pCompany', true);
			$data['categoryId'] = $this->input->post('categoryId',true);
			$data['pDescription'] = $this->input->post('pDescription',true);
			$data['pPrice'] = $this->input->post('pPrice',true);
			$data['pQuantity'] = $this->input->post('pPrice',true);
			if (!empty($data['pName']) && !empty($data['pCompany']) && !empty($data['categoryId'])) {
				$path = realpath(APPPATH . '../assets/images/products/');
				$config['upload_path'] = $path;
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('prodDp')) {
					$error = $this->upload->display_errors();
					setFlushData('alert-danger', $error, 'admin/newProduct');
				} else {
					$fileName = $this->upload->data();
					$data['pDp'] = $fileName['file_name'];
					$data['pDate'] = date('y-m-d h:i:s');
					$data['adminId'] = getAdminId();
				}
				$addData = $this->modAdmin->checkProduct($data);
				if ($addData->num_rows() > 0) {
					setFlushData('alert-danger', 'The product name already exists', 'admin/newProduct');
				} else {
					$addData = $this->modAdmin->addProduct($data);
					if ($addData) {
						setFlushData('alert-success', 'You have successully added your product', 'admin/newProduct');
					} else {
						setFlushData('alert-danger', 'You cannot add your product right now', 'admin/newProduct');
					}
				}

			} else {
				setFlushData('alert-danger', 'Please check the required fields and try again', 'admin/newProduct');
			}
		} else {
			setFlushData('alert-warning', 'please login  to add a product', 'admin/login');
		}

	}

	public function allProducts()
	{
		if (adminLoggedIn()) {
			$config['base_url'] = site_url('admin/allProducts');
			$totalRows = $this->modAdmin->getAllProducts();
			$config['total_rows'] = $totalRows;
			$config['per_page'] = 10;
			$config['uri_segment'] = 3;
			$this->load->library('pagination');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['allProducts'] = $this->modAdmin->fetchAllProducts($config['per_page'], $page);
			$data['links'] = $this->pagination->create_links();
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/allProducts', $data);
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		} else {
			setFlushData('alert-warning', 'please login  to add a category', 'admin/login');
		}
	}

	public function deleteProduct()
	{
		if (adminLoggedIn()) {
			if ($this->input->is_ajax_request()) {
				$this->input->post('id', true);
				$pId = $this->input->post('text', true);
				if (!empty($pId) && isset($pId)) {
					$pId = $this->encryption->decrypt($pId);
					$oldImge = $this->modAdmin->getProductImage($pId);
					if (!empty($oldImge) && count($oldImge) == 1) {
						$realImage = $oldImge[0]['pDp'];
					}

					$checkMd = $this->modAdmin->deleteProduct($pId);
					if ($checkMd) {
						if (!empty($realImage) && isset($realImage)) {
							$path = realpath(APPPATH . '../assets/images/products/');
							if (file_exists($path . '/' . $realImage)) {
								unlink($path . '/' . $realImage);
							}
						} else {
							echo 'you cannot delete your product right now';

						}
						$data['return'] = true;
						$data['message'] = 'successfully deleted';
						echo json_encode($data);
					} else {
						$data['return'] = false;
						$data['message'] = 'not found';
						echo json_encode($data);
					}

				} else {
					setFlushData('alert-warning', 'something wnt wrong', 'admin/login');
				}

			} else {
				setFlushData('alert-warning', 'please login  to delete a category', 'admin/login');
			}
		}

	}

	public function editProduct($pId)
	{
		if (adminLoggedIn()) {
			if (!empty($pId) && isset($pId)) {
				$data['products'] = $this->modAdmin->checkProductById($pId);
				if (count($data['products']) == 1) {
					$data['categories'] = $this->modAdmin->getCategories();
					$this->load->view('admin/header/header');
					$this->load->view('admin/header/css');
					$this->load->view('admin/header/navtop');
					$this->load->view('admin/header/navleft');
					$this->load->view('admin/home/editProduct', $data);
					$this->load->view('admin/header/footer');
					$this->load->view('admin/header/htmlclose');
				} else {
					setFlushData('alert-warning', 'Product not found', 'admin/allProducts');
				}
			} else {
				setFlushData('alert-warning', 'Something went wrong', 'admin/allProducts');
			}

		} else {
			setFlushData('alert-warning', 'please login  to eddit a product', 'admin/login');
		}

	}

	public function updateProduct()
	{
		if (adminLoggedIn()) {
			$data['pName'] = $this->input->post('productName', true);
			$data['pCompany'] = $this->input->post('pCompany', true);
			$data['categoryId'] = $this->input->post('categoryId',true);
			$pId = $this->input->post('pDi',true);
			$oldImage = $this->input->post('oldimg',true);
			if (!empty($data['pName']) && !empty($data['pCompany']) && !empty($data['categoryId'])) {
				if (isset($_FILES['prodDp']) && is_uploaded_file($_FILES['prodDp']['tmp_name'])) {
					$path = realpath(APPPATH . '../assets/images/products/');
					$config['upload_path'] = $path;
					$config['max_size'] = 100;
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('prodDp')) {
						$error = $this->upload->display_errors();
						setFlushData('alert-danger', $error, 'admin/allProducts');
					} else {
						$fileName = $this->upload->data();
						$data['pDp'] = $fileName['file_name'];
					}
				}//image checking
				$addData = $this->modAdmin->checkProduct($data);
				if ($addData->num_rows() > 0) {
					setFlushData('alert-danger', 'The product name already exists', 'admin/allProducts');
				} else {
					$addData = $this->modAdmin->updateProduct($data, $pId);
					if ($addData) {
						if (!empty($data['pDp']) && isset($data['pDp'])) {
							if (file_exists($path . '/' . $oldImage)) {
								unlink($path . '/' . $oldImage);
							}
						}
						setFlushData('alert-success', 'You have successully updated your product', 'admin/allProducts');
					} else {
						setFlushData('alert-danger', 'You cannot update your product right now', 'admin/allProducts');
					}
				}

			} else {
				setFlushData('alert-danger', 'Please check the required fields and try again', 'admin/allProducts');
			}

		} else {
			setFlushData('alert-warning', 'please login  to add a product', 'admin/login');
		}

	}

	public function newModel()
	{
		if (adminLoggedIn()) {
			$data['products'] = $this->modAdmin->getProducts();
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/newModel', $data);
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		} else {
			setFlushData('alert-danger', 'Please login first to add category', 'admin/login');
		}

	}

	public function addModel()
	{
		if (adminLoggedIn()) {
			$data['mName'] = $this->input->post('modelName',true);
			$data['mDescription'] = $this->input->post('modelDesc',true);
			$data['productId'] = $this->input->post('productId',true);
			if (!empty($data['mName']) && !empty($data['mDescription']) && !empty($data['productId'])) {
				$path = realpath(APPPATH . '../assets/images/models/');
				$config['upload_path'] = $path;
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('modelDp')) {
					$error = $this->upload->display_errors();
					setFlushData('alert-danger', $error, 'admin/newModel');
				} else {
					$fileName = $this->upload->data();
					$data['mDp'] = $fileName['file_name'];
					$data['mDate'] = date('y-m-d h:i:s');
					$data['adminId'] = getAdminId();
				}
				$addData = $this->modAdmin->checkModel($data);
				if ($addData->num_rows() > 0) {
					setFlushData('alert-danger', 'The model name already exists', 'admin/newModel');
				} else {
					$addData = $this->modAdmin->addModel($data);
					if ($addData) {
						setFlushData('alert-success', 'You have successully added your model', 'admin/newModel');
					} else {
						setFlushData('alert-danger', 'You cannot add your model right now', 'admin/newModel');
					}
				}

			} else {
				setFlushData('alert-danger', 'Please check the required fields and try again', 'admin/newModel');
			}
		} else {
			setFlushData('alert-warning', 'please login  to add a model', 'admin/login');
		}

	}

	public function allModels()
	{
		if (adminLoggedIn()) {
			$config['base_url'] = site_url('admin/allModels');
			$totalRows = $this->modAdmin->getAllModels();
			$config['total_rows'] = $totalRows;
			$config['per_page'] = 10;
			$config['uri_segment'] = 3;
			$this->load->library('pagination');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['allModels'] = $this->modAdmin->fetchAllModels($config['per_page'], $page);
			$data['links'] = $this->pagination->create_links();
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/allModels', $data);
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		} else {
			setFlushData('alert-warning', 'please login  to add a category', 'admin/login');
		}
	}

	public function deleteModel()
	{
		if (adminLoggedIn()) {
			if ($this->input->is_ajax_request()) {
				$this->input->post('id', true);
				$mId = $this->input->post('text', true);
				if (!empty($mId) && isset($mId)) {
					$mId = $this->encryption->decrypt($mId);
					$oldImge = $this->modAdmin->getModelImage($mId);
					if (!empty($oldImge) && count($oldImge) == 1) {
						$realImage = $oldImge[0]['mDp'];
					}

					$checkMd = $this->modAdmin->deleteModel($mId);
					if ($checkMd) {
						if (!empty($realImage) && isset($realImage)) {
							$path = realpath(APPPATH . '../assets/images/models/');
							if (file_exists($path . '/' . $realImage)) {
								unlink($path . '/' . $realImage);
							}
						} else {
							echo 'you cannot delete your model right now';

						}
						$data['return'] = true;
						$data['message'] = 'successfully deleted';
						echo json_encode($data);
					} else {
						$data['return'] = false;
						$data['message'] = 'not found';
						echo json_encode($data);
					}

				} else {
					setFlushData('alert-warning', 'something wnt wrong', 'admin/login');
				}

			} else {
				setFlushData('alert-warning', 'please login  to delete a category', 'admin/login');
			}
		}

	}

	public function editModel($mId)
	{
		if (adminLoggedIn()) {
			if (!empty($mId) && isset($mId)) {
				$data['models'] = $this->modAdmin->checkModelById($mId);
				if (count($data['models']) == 1) {
					$data['products'] = $this->modAdmin->getProducts();
					$this->load->view('admin/header/header');
					$this->load->view('admin/header/css');
					$this->load->view('admin/header/navtop');
					$this->load->view('admin/header/navleft');
					$this->load->view('admin/home/editModel', $data);
					$this->load->view('admin/header/footer');
					$this->load->view('admin/header/htmlclose');
				} else {
					setFlushData('alert-warning', 'Model not found', 'admin/allModels');
				}
			} else {
				setFlushData('alert-warning', 'Something went wrong', 'admin/allModels');
			}

		} else {
			setFlushData('alert-warning', 'please login  to eddit a product', 'admin/login');
		}

	}

	public function updateModel()
	{
		if (adminLoggedIn()) {
			$data['mName'] = $this->input->post('modelName',true);
			$data['mDescription'] = $this->input->post('modelDesc', true);
			$data['productId'] = $this->input->post('productId', true);
			$modelId = $this->input->post('mDi',true);
			$oldImg = $this->input->post('oldimg', true);
			//var_dump($oldImg);
			//die();
			if (!empty($data['mName']) && !empty($data['mDescription']) && !empty($data['productId'])) {
				if (isset($_FILES['modelDp']) && is_uploaded_file($_FILES['modelDp']['tmp_name'])) {
					$path = realpath(APPPATH . '../assets/images/models/');
					$config['upload_path'] = $path;
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('modelDp')) {
						$error = $this->upload->display_errors();
						setFlushData('alert-danger', $error, 'admin/allModels');
					} else {
						$fileName = $this->upload->data();
						$data['mDp'] = $fileName['file_name'];
					}

				}//IMAGE CHECKING
				$addData = $this->modAdmin->checkModel($data);
				if ($addData->num_rows() > 0) {
					setFlushData('alert-danger', 'The model name already exists', 'admin/allModels');
				} else {
					$addData = $this->modAdmin->updateModel($data, $modelId);
					if ($addData) {
						if (!empty($data['mDp']) && isset($data['mDp'])) {
							if (file_exists($path . '/' . $oldImg)) {
								unlink($path . '/' . $oldImg);
							}
						}
						setFlushData('alert-success', 'You have successully update your model', 'admin/allModels');
					} else {
						setFlushData('alert-danger', 'You cannot update your model right now', 'admin/allModels');
					}
				}

			} else {
				setFlushData('alert-danger', 'Please check the required fields and try again', 'admin/allModels');
			}
		} else {
			setFlushData('alert-warning', 'please login  to update a model', 'admin/login');
		}

	}

	public function newSpec()
	{
		if (adminLoggedIn()) {
			$data['models'] = $this->modAdmin->getModels();
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/newSpec', $data);
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		} else {
			setFlushData('alert-danger', 'Please login first to add category', 'admin/login');
		}

	}

	public function addSpec()
	{
		if (adminLoggedIn()) {
			$data['spName'] = $this->input->post('sp_name', true);
			$specValues = $this->input->post('sp_value',  true);
			$specValues = array_filter($specValues);
			$data['modelId'] = $this->input->post('modelId', true);
			//var_dump($specValues);
			//die();
			if (!empty($data['spName']) && !empty($specValues) && !empty($data['modelId'])) {
				$data['spDate'] = date('y-m-d h:i:s');
				$data['adminId'] = getAdminId();
			}
			$addData = $this->modAdmin->checkSpec($data);
			if ($addData->num_rows() > 0) {
				setFlushData('alert-danger', 'The spec name already exists', 'admin/newSpec');
			} else {
				$specId = $this->modAdmin->checkSpecName($data);
				if (is_numeric($specId)) {
					$spec_values = array();
					foreach ($specValues as $specval) {
						$spec_values[] = array(
							'specId' => $specId,
							'adminId' => $data['adminId'],
							'spvDate' => date('y-m-d h:i:s'),
							'spvName' => $specval
						);
					}//foreach loop
					$specvalStatus = $this->modAdmin->checkSpecValues($spec_values);
					if ($specvalStatus) {
						setFlushData('alert-success', 'You have successully added your spec', 'admin/newSpec');
					} else {
						setFlushData('alert-danger', 'You cannot add your spec values right now', 'admin/newSpec');
					}

				} else {
					setFlushData('alert-danger', 'You cannot add your Spec name right now', 'admin/newSpec');

				}

			}


		} else {
			setFlushData('alert-warning', 'please login  to add a product', 'admin/login');
		}
	}

	public function allSpecs()
	{
		if (adminLoggedIn()) {
			$config['base_url'] = site_url('admin/allSpecs');
			$totalRows = $this->modAdmin->getAllSpecs();
			$config['total_rows'] = $totalRows;
			$config['per_page'] = 10;
			$config['uri_segment'] = 3;
			$this->load->library('pagination');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['allSpecs'] = $this->modAdmin->fetchAllSpecs($config['per_page'], $page);
			$data['links'] = $this->pagination->create_links();
			$this->load->view('admin/header/header');
			$this->load->view('admin/header/css');
			$this->load->view('admin/header/navtop');
			$this->load->view('admin/header/navleft');
			$this->load->view('admin/home/allSpecs', $data);
			$this->load->view('admin/header/footer');
			$this->load->view('admin/header/htmlclose');
		} else {
			setFlushData('alert-warning', 'please login  to add a category', 'admin/login');
		}
	}

	public function deleteSpec()
	{
		if (adminLoggedIn()) {
			if ($this->input->is_ajax_request()) {
				$this->input->post('id', true);
				$mId = $this->input->post('text', true);
				if (!empty($mId) && isset($mId)) {
					$mId = $this->encryption->decrypt($mId);
					$checkMd = $this->modAdmin->deleteSpec($mId);
					if ($checkMd) {
						$data['return'] = true;
						$data['message'] = 'successfully deleted';
						echo json_encode($data);
					} else {
						$data['return'] = false;
						$data['message'] = 'not found';
						echo json_encode($data);
					}

				} else {
					setFlushData('alert-warning', 'something wnt wrong', 'admin/login');
				}

			} else {
				setFlushData('alert-warning', 'please login  to delete a category', 'admin/login');
			}
		}

	}

	public function editSpec($pId)
	{
		if (adminLoggedIn()) {
			if (!empty($pId) && isset($pId)) {
				$data['spec'] = $this->modAdmin->checkSpeckById($pId);
				if (count($data['spec']) == 1) {
					$data['models'] = $this->modAdmin->getModels();
					$this->load->view('admin/header/header');
					$this->load->view('admin/header/css');
					$this->load->view('admin/header/navtop');
					$this->load->view('admin/header/navleft');
					$this->load->view('admin/home/editSpec', $data);
					$this->load->view('admin/header/footer');
					$this->load->view('admin/header/htmlclose');
				} else {
					setFlushData('alert-warning', 'Product not found', 'admin/allProducts');
				}
			} else {
				setFlushData('alert-warning', 'Something went wrong', 'admin/allProducts');
			}

		} else {
			setFlushData('alert-warning', 'please login  to eddit a product', 'admin/login');
		}

	}

	public function updateSpec()
	{
		if (adminLoggedIn()) {
			$data['spName'] = $this->input->post('sp_name', true);
			$data['modelId'] = $this->input->post('modelId', true);
			$SpecId = $this->input->post('specId', true);
			//var_dump($specValues);
			//die();
			if (!empty($data['spName']) && !empty($SpecId) && !empty($data['modelId'])) {
				$addData = $this->modAdmin->checkSpec($data);
				if ($addData->num_rows() > 0) {
					setFlushData('alert-danger', 'The spec name already exists', 'admin/allSpecs');
				} else {
					$updateSpec = $this->modAdmin->updateSpec($data, $SpecId);
					if ($updateSpec) {
						setFlushData('alert-success', 'You have successully added your spec', 'admin/allSpecs');
					} else {
						setFlushData('alert-danger', 'You cannot updated your spec values right now', 'admin/allSpecs');
					}


				}

			} else {
				setFlushData('alert-danger', 'You cannot update your Spec name right now', 'admin/allSpec');

			}

		}else {
			setFlushData('alert-warning', 'please login  to add a product', 'admin/login');
		}
	}
}


