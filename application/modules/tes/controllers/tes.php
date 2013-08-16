<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tes extends CI_Controller {
	public function index(){
		$data['content']='tes';
		$this->load->view('mainview',$data);
	}
	function simpan(){
		$nama=$this->input->post('nama');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		
		$config['upload_path'] = './asset/img';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		
		if (($this->form_validation->run() == FALSE)&&(!$this->upload->do_upload())){  
			$data['error']=$this->upload->display_errors();
			$data['content']='tes';
			$this->load->view('mainview',$data);
		}else if (($this->form_validation->run() == TRUE)&&($this->upload->do_upload())){
			$upload_data=$this->upload->data();
			foreach ($upload_data as $item=>$val){
				$dat[$item]=$val;
			}
			$foto=$dat['file_name'];
			$data=array('nama'=>$nama,'foto'=>$foto);
			$this->load->model('modeltes');
			$this->modeltes->simpan($data);   
			$data['content']='sukses';
			$this->load->view('mainview',$data); 
        }else{  
			$data['error']=$this->upload->display_errors();
			$data['content']='tes';
			$this->load->view('mainview',$data);
		}
	}
}
