<?php

namespace App\Controllers;

use Config\App;

Class UsuarioController extends BaseController{

    public function index(){
        echo view('header');
		echo view('cadUsuario');
		echo view('footer');
    }

    public function inserirUsuario(){
        $data['msg'] = '';
        $request = service('request');
        
        if($request->getMethod() === 'post'){
            $UsuarioModelo = new \App\Models\UsuarioModel();
            
            $opcao = ['cost' => 8];

            $senhaCrip = password_hash($request->getPost('senhausu'),PASSWORD_BCRYPT,$opcao);
            
            $UsuarioModelo->set('emailusu', $request->getPost('emailusu'));
            $UsuarioModelo->set('senhausu', $senhaCrip);
            
            if($UsuarioModelo->insert()){
                $data['msg'] = "Informações cadastradas com sucesso!";

            }else{
                $data['msg'] = "Informações não cadastradas.";
            }
        }

        echo view('header');
        echo view('cadUsuario', $data);
        echo view('footer');
    }

    public function todosUsuarios(){
        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros = $UsuarioModel->find();
        $data['usuarios'] = $registros;

        $request = service('request');
        $codusuario = $request->getPost('codUsu');
        $codUsuAlterar = $request->getPost('codUsuAlterar');

        if($codusuario){
            $this->deletarUsuario($codusuario);
            return redirect()->to(base_url('UsuarioController/todosUsuarios'));
        }

        if($codUsuAlterar){
            return $this->alterarUsuario();
        }

        echo view('header');
        echo view('listaUsuario', $data);
        echo view('footer');
    }

    public function listaCodUsuario(){
        $request = service('request');
        $codusuario = $request->getPost('codUsu');
        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros = $UsuarioModel->find($codusuario);

        $data['usuario'] = $registros;

        $codUsuDel = $request->getPost('codUsuDel');
		$codUsuAlterar = $request->getPost('codUsuAlterar');

        if($codUsuDel) {
			$this->deletarUsuario($codUsuDel, 1);
			//return redirect()->to(base_url('UsuarioController/listaCodUsuario'));
		}
        else if($codUsuAlterar) {
			$this->alterarUsuario($codUsuAlterar, 1);
			//return redirect()->to(base_url('UsuarioController/listaCodUsuario'));
		}

        echo view('header');
        echo view('listaCodUsu', $data);
        echo view('footer');
    }

    public function alterarUsuario(){

        $request = service('request');
        $codUsuAlterar = $request->getPost('codUsuAlterar'); 
        $emailUsu = $request->getPost('emailUsu'); 

        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros = $UsuarioModel->find($codUsuAlterar);
        
        if($request->getPost('emailUsu')){
            $registros->emailusu = $emailUsu;
            $UsuarioModel->update($codUsuAlterar,$registros);
            
            return redirect()->to(base_url('UsuarioController/todosUsuarios/'));            
        }

        $data['usuario'] = $registros;

        echo view('header');
        echo view('alterarFormUsuario', $data);
        echo view('footer');
    }

    public function deletarUsuario($codusuario=null){

            if(is_null($codusuario)){
                return redirect()->to(base_url('UsuarioController/todosUsuarios'));
            }

            $UsuarioModel = new \App\Models\UsuarioModel();
            if($UsuarioModel->delete($codusuario)){
                return redirect()->to(base_url('UsuarioController/todosUsuarios'));
            }
            
            else{
                return redirect()->to(base_url('UsuarioController/todosUsuarios'));
            }
    }
}