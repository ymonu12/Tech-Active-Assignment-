<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

class Import extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Home";
		$this->load->view('loginview',$data);
	}

	public function viewData()
	{
		$data['title'] = "Users";
		$data['users'] = $this->db->order_by('id','desc')->get('users')->result();;
		$this->load->view('users',$data);
	}

	public function importData()
	{
		if($this->input->post())
		{

			// upload file and insert into database
			if (!empty($_FILES['upload_file']['name'])) 
			{
				
				$uploadPath = './uploads/';
				$allowedExtensions = array('csv');
				$fileExtension = pathinfo($_FILES['upload_file']['name'], PATHINFO_EXTENSION);

				if (in_array($fileExtension, $allowedExtensions)) 
				{	
					$csv = $_FILES['upload_file']['tmp_name'];

					$handle = fopen($csv,"r");

					$failed = 0;
					$success = 0;
					while (($r = fgetcsv($handle, 10000, ",")) != FALSE) //get row vales
					{
						$ins = ['name'=>$r[0], 'email'=>$r[1], 'city'=>$r['2']];
						
						$where = ['email'=>$r[1]];
						$check = $this->db->get_where('users',$where)->num_rows();

						if($check == 0)
						{
							++$success;
							$this->db->insert('users',$ins);
						}
						else
						{
							++$failed;
						}
					}

					$msg = "Success : $success, Already exist : $failed";

					$this->session->set_flashdata('success', $msg);
					redirect(base_url('Import'));
				} 
				else 
				{
					$this->session->set_flashdata('error', 'You Must Select File');
					redirect(base_url('Import'));
				}
			}
			else
			{
				$this->session->set_flashdata('error', 'You Must Select File');
				redirect(base_url('Import'));
			}
		}
		else
		{
			$data['title'] = "Import Excel";
			$data['file'] = "sample-data.csv";
			$data['allowed'] = ".csv";
			$data['type'] = "CSV";
			$this->load->view('import_excel',$data);
		}
	}

	public function importDataExcel()
	{
		if($this->input->post())
		{

			// upload file and insert into database
			if (!empty($_FILES['upload_file']['name'])) 
			{
				
				$uploadPath = './uploads/';
				$allowedExtensions = array('xlsx', 'xls');
				$fileExtension = pathinfo($_FILES['upload_file']['name'], PATHINFO_EXTENSION);

				if (in_array($fileExtension, $allowedExtensions)) 
				{
					$fileName = uniqid() . '.' . $fileExtension;
	
					if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $uploadPath . $fileName)) 
					{

						$reader = ReaderFactory::create(Type::XLSX);
        				$reader->open(FCPATH . $uploadPath . $fileName);

						$failed = 0;
						$success = 0;
						foreach ($reader->getSheetIterator() as $sheet) {
							foreach ($sheet->getRowIterator() as $r) {
								$ins = ['name'=>$r[0], 'email'=>$r[1], 'city'=>$r['2']];
								
								$where = ['email'=>$r[1]];
								$check = $this->db->get_where('users',$where)->num_rows();

								if($check == 0)
								{
									++$success;
									$this->db->insert('users',$ins);
								}
								else
								{
									++$failed;
								}
							}
						}

						$msg = "Success : $success, Already exist : $failed";
	
						$this->session->set_flashdata('success', $msg);
						redirect(base_url('Import'));
					} 
					else 
					{
						$this->session->set_flashdata('error', 'Failed to upload file.');
						redirect(base_url('Import'));
					}
				} 
				else 
				{
					$this->session->set_flashdata('error', 'You Must Select File');
					redirect(base_url('Import'));
				}
			}
			else
			{
				
			}
		}
		else
		{
			$data['title'] = "Import Excel";
			$data['type'] = "Excel";
			$data['file'] = "sample-data.xlsx";
			$data['allowed'] = ".xlsx, .xls";
			$this->load->view('import_excel',$data);
		}
	}
}
