<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Psb extends CI_Controller {
	public function index()
	{
		$this->load->model('modelpsb');
		$data['content']='psb';
		$data['row']=$this->modelpsb->count();
		$this->load->view('mainview',$data);
	}
	function simpan(){
		$config['upload_path'] = './asset/img/psb';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$gender=$this->input->post('gender');
			if ($gender==1)$gender='L';
			elseif($gender==2)$gender='P';
			else $gender='';
		$tempat_lahir=$this->input->post('tempat_lahir');
		$agama=$this->input->post('agama');
			if ($agama==1)$agama='Islam';
			elseif($agama==2)$agama='Kristen';
			elseif($agama==3)$agama='Katolik';
			elseif($agama==4)$agama='Hindu';
			else $agama='';
		$alamat=$this->input->post('alamat');
		$unsd=$this->input->post('unsd');
		$nama_ayah=$this->input->post('nama_ayah');
		$kerja_ayah=$this->input->post('kerja_ayah');
		$nama_ibu=$this->input->post('nama_ibu');
		$kerja_ibu=$this->input->post('kerja_ibu');
		$kelas=$this->input->post('kelas');
			if ($kelas==1)$kelas='7A';
			elseif($kelas==2)$kelas='7B';
			elseif($kelas==3)$kelas='7C';
			elseif($kelas==4)$kelas='7D';
			elseif($kelas==5)$kelas='7E';
			elseif($kelas==6)$kelas='7F';
			elseif($kelas==7)$kelas='7G';
			elseif($kelas==8)$kelas='7H';
			elseif($kelas==9)$kelas='8A';
			elseif($kelas==10)$kelas='8B';
			elseif($kelas==11)$kelas='8C';
			elseif($kelas==12)$kelas='8D';
			elseif($kelas==13)$kelas='8E';
			elseif($kelas==14)$kelas='8F';
			elseif($kelas==15)$kelas='8G';
			elseif($kelas==16)$kelas='8H';
			elseif($kelas==17)$kelas='9A';
			elseif($kelas==18)$kelas='9B';
			elseif($kelas==19)$kelas='9C';
			elseif($kelas==20)$kelas='9D';
			elseif($kelas==21)$kelas='9E';
			elseif($kelas==22)$kelas='9F';
			elseif($kelas==23)$kelas='9G';
			elseif($kelas==24)$kelas='9H';
			else $kelas='';
		$ket=$this->input->post('ket');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$tgl=$this->input->post('tgl');
		$tgl_lahir=$thn.'-'.$bln.'-'.$tgl;
		$nisn=$this->input->post('nisn');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');    
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|is_natural_no_zero'); 
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');          
		$this->form_validation->set_rules('thn', 'Tahun', 'required|is_natural_no_zero'); 
		$this->form_validation->set_rules('bln', 'Bulan', 'required|is_natural_no_zero'); 
		$this->form_validation->set_rules('tgl', 'Tanggal', 'required|is_natural_no_zero'); 
		$this->form_validation->set_rules('agama', 'Agama', 'required|is_natural_no_zero'); 
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');          
		$this->form_validation->set_rules('kerja_ayah', 'Pekerjaan Ayah', 'required');          
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');          
		$this->form_validation->set_rules('kerja_ibu', 'Pekerjaan Ibu', 'required');          
		$this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
		$this->form_validation->set_rules('unsd', 'Nilai UN SD', 'required|numeric'); 
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|is_natural_no_zero');          
		if (($this->form_validation->run() == FALSE)&&(!$this->upload->do_upload())){  
			$data['error']=$this->upload->display_errors();
			$this->load->model('modelpsb');
			$data['content']='psb';
			$data['row']=$this->modelpsb->count();
			$this->load->view('mainview',$data);
		}else if (($this->form_validation->run() == TRUE)&&($this->upload->do_upload())){
			$upload_data=$this->upload->data();
			foreach ($upload_data as $item=>$val){
				$dat[$item]=$val;
			}
			$foto=$dat['file_name'];
			$data=array('foto'=>$foto,'nis'=>$nis,'nama'=>$nama,'gender'=>$gender,'tempat_lahir'=>$tempat_lahir,'agama'=>$agama,'alamat'=>$alamat,'unsd'=>$unsd,'nama_ayah'=>$nama_ayah,'kerja_ayah'=>$kerja_ayah,'nama_ibu'=>$nama_ibu,'kerja_ibu'=>$kerja_ibu,'kelas'=>$kelas,'ket'=>$ket,'tgl_lahir'=>$tgl_lahir,'nisn'=>$nisn);
			$this->load->model('modelpsb');
			$this->modelpsb->simpan($data);
			redirect('/psb/pdf/'.$nis);	
        }else{  
			$data['error']=$this->upload->display_errors();
			$this->load->model('modelpsb');
			$data['content']='psb';
			$data['row']=$this->modelpsb->count();
			$this->load->view('mainview',$data);
		}
	}
	function pdf($ID,$download_pdf =''){
        $ret = '';
        $pdf_filename = $ID.'-SMPN1Ngawi.pdf';
        $link_download = ($download_pdf == TRUE)?'':anchor(base_url().'index.php/psb/pdf/'.$ID.'/index/true/', '<img src="'.base_url().'asset/img/download.gif" height="10%" width="10%" title="Unduh Formulir">');
        $query = $this->db->query("SELECT * FROM `siswa` WHERE `nis`= '{$ID}' LIMIT 1");
        if ($query->num_rows() > 0)
            $user_info = $query->row_array();
        $data_header = array(
            'title' => 'SMP N 1 Ngawi',
        );
        $data_userinfo = array(
             'user_info' => $user_info,
             'link_download' => $link_download
        );
        $header = $this->load->view('header', $data_header, true);
        $user_info = $this->load->view('user_table', $data_userinfo, true);
        $footer = $this->load->view('footer', '', true);
        $output = $header.$user_info.$footer;
        if($download_pdf == TRUE)
            generate_pdf($output, $pdf_filename);
        else
            echo $output;
    }
}
