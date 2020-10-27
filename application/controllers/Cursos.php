<?php
class Cursos extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cursos_model');
	}

	public function index(){
		$data['cursos'] = $this->Cursos_model->getList();
		$this->load->view('cursos/index',$data);
	}

	public function detalhes($id=''){
		if(empty($id)){
			show_404();
		}else {
			$data['curso'] = $this->Cursos_model->getWhere(array('id' => $id));
			$this->load->view('cursos/detalhes', $data);
		}
	}
}


