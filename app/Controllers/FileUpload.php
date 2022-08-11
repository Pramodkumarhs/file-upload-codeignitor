<?php
namespace App\Controllers;
//error_reporting(0);
use CodeIgniter\Controller;
use App\Models\FileModel;

class FileUpload extends Controller
{
	public $request;
    public $FileModel;

    public function __construct() {
	$this->request = \Config\Services::request();
	$this->FileModel = new FileModel();
	

	}
    public function index()
    {
        return view('files_upload');
    }

    public function addFile() {
		
		 if($this->request->getVar('upload')){
			//print_r($_POST);die;
			$id=$this->FileModel->saveFile();
			if($id == TRUE){
			  return view('/success');  
		
			 }
			}	
			$data['request'] = $this->request;	
             return view('files_upload',$data);	
		}
    
}
