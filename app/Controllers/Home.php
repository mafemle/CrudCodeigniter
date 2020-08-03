<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct(){
		helper('form');
	}
	//////////////////////////
	//FUNCION QUE VA A NUEVO//
	/////////////////////////
	public function formulario(){
		$estructura=view('estructura/header').view('estructura/formulario');
		return $estructura;
	}
	/////////////////////////
	//FUNCION PARA GUARDAR//
	///////////////////////
	public function guarda(){
		$userModel=new UserModel($db);
	
			if ($this->request->getMethod() === 'post'){
			$data=[ 'name' => $this->request->getPost('name'),
					'email' => $this->request->getPost('email'),
						
					];
					$users=$userModel ->findAll();
					$users=array('users'=>$users);
					if($userModel->save($data)){
						$estructura=view('estructura/header').view('estructura/footer');
						return $estructura;
						// return redirect()->to('home/index');
					}
						else{
							$estructura=view('estructura/header').view('estructura/formulario');
							return $estructura;
						}
			}
	}
	/////////////////////////
	//FUNCION PARA EDITAR///
	/////////////////////////
	public function editar(){
		
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		if($request->getPostGet('id')){
			$id=$request->getPostGet('id');
		}else{
			$id=$request->uri->getSegment(3);
		}
		$users=$userModel->find([$id]);
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/formulario');
		return $estructura;
	}
	/////////////////////////
	//FUNCION PARA BORRAR////
	/////////////////////////
	public function borrar(){
		$userModel=new UserModel($db);

		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		if($request->getPostGet('id')){
			$id=$request->getPostGet('id');
		}else{
			$id=$request->uri->getSegment(3);
		}
		$userModel->delete($id);
		$users=$userModel->findAll();
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/footer',$users);
		return $estructura;

	}
		

	public function index()
	{
		$userModel = new UserModel($db);
		
		$users=$userModel ->findAll();
		$users=array('users'=>$users);

		$estructura=view('estructura/header').view('estructura/footer',$users);
		return $estructura;
		/*$data=[
			'name'=>"lola",
			'email'=>'lola@gmail.com'
		];
		$userModel->insert($data);

		$data=[
			'name'=>"lili",
			'email'=>'lola@gmail.com'
		];
		$userModel->update(6,$data);

		$data=[
				'name'=>"drako",
				'email'=>'drako@gmail.com'
			];
			$userModel->save($data);	
			
			$data=[
				'name'=>"Martina",
				'email'=>'drako@gmail.com'
			];
			if($userModel->save($data)==false){
				var_dump($userModel->errors());
			}
			*/
	}

	//--------------------------------------------------------------------

}
