<?php

namespace App\Controllers;

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
}