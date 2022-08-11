<?php namespace App\Models;
use CodeIgniter\Model;


class FileModel extends Model{

    public $builder;
    public $request;

    public function saveFile(){
        helper(['form', 'url']);
        $this->request = \Config\Services::request();
       
       $title = $this->request->getVar('title');
       $dec = $this->request->getVar('desc');
     
        $file = $_FILES["fileupload"]["name"];
					
		 if($file!=''){
			 $ext = @end((explode(".", $file)));		
			 $file_name = uniqid().'_file'.'.'.$ext;

			 $target_dir = WRITEPATH."uploads";
        
			 $target_file = $target_dir."/".$file_name;
			if (@move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
				 
			 }
		  }

          $filedata=array(
			'filename'=>$file_name,
          );
        $this->builder = $this->db->table('fileupload');
        $this->builder->insert($filedata);

        
        $currentdate = date('Y-m-d H:i:s');
        
        $data = array(
            'tittle' => $this->request->getVar('title'),
            'description' => $this->request->getVar('desc'),
            'date' => $currentdate
        );
       
        $this->builder = $this->db->table('file');
        $this->builder->insert($data);

        return TRUE;
    }
}