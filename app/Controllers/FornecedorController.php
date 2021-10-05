<?php

namespace App\Controllers;

use Config\App;

Class FornecedorController extends BaseController{

    public function index(){
        echo view('header');
		echo view('cadFornecedor');
		echo view('footer');
    }

    public function inserirFornecedor(){
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){
            $FornecedorModelo = new \App\Models\FornecedorModel();

            $FornecedorModelo->set('nomeforn', $request->getPost('nomeforn'));
            $FornecedorModelo->set('emailforn', $request->getPost('emailforn'));
            $FornecedorModelo->set('foneforn', $request->getPost('foneforn'));

            if($FornecedorModelo->insert()){
                $data['msg'] = 'Informações cadastradas com sucesso!';
            }
            else{
                $data['msg'] = 'Informações não cadastradas.';
            }
        }
        
        echo view('header');
        echo view('cadFornecedor', $data);
        echo view('footer');
    }

    public function todosFornecedores(){
        $FornecedorModel = new \App\Models\FornecedorModel();
        $registros = $FornecedorModel->find();
        $data ['fornecedores'] = $registros;

        $request = service('request');
        $codfornecedor = $request->getPost('codForn');
        $codFornAlterar = $request->getPost('codFornAlterar');
        
        if($codfornecedor){
            $this->deletarFornecedor($codfornecedor);
            return redirect()->to(base_url('FornecedorController/todosFornecedores'));
        }

        if($codFornAlterar){
            return $this->alterarFornecedor($codFornAlterar);
        }
                
        echo view('header');
        echo view('listaFornecedor', $data);
        echo view('footer');
    }

    public function listaCodFornecedor(){
        $request = service('request');
        $codforn = $request->getPost('codForn');
        $FornecedorModel = new \App\Models\FornecedorModel();
        $registros = $FornecedorModel->find($codforn);

        $data['fornecedor'] = $registros;

        $codFornDel = $request->getPost('codFornDel');
		$codFornAlterar = $request->getPost('codFornAlterar');

        if($codFornDel) {
			$this->deletarFornecedor($codFornDel, 1);
			//return redirect()->to(base_url('UsuarioController/listaCodUsuario'));
		}
        else if($codFornAlterar) {
			$this->alterarFornecedor($codFornAlterar, 1);
			//return redirect()->to(base_url('UsuarioController/listaCodUsuario'));
		}

        echo view('header');
        echo view('listaCodForn', $data);
        echo view('footer');
    }

    public function alterarFornecedor(){

        $request = service('request');
        $codFornAlterar = $request->getPost('codFornAlterar'); 
        $nomeForn = $request->getPost('nomeForn'); 
        $emailForn = $request->getPost('emailForn');
        $foneForn = $request->getPost('foneForn');

        $FornecedorModel = new \App\Models\FornecedorModel();
        $registros = $FornecedorModel->find($codFornAlterar);
        
        if($codFornAlterar){
            $registros->nomeforn = $nomeForn;
            $registros->emailforn = $emailForn;
            $registros->foneforn = $foneForn;
            $FornecedorModel->update($codFornAlterar,$registros);
            
            return redirect()->to(base_url('FornecedorController/todosFornecedores/'));            
        }

        $data['fornecedor'] = $registros;

        echo view('header');
        echo view('alterarFormFornecedor', $data);
        echo view('footer');
    }

    public function deletarFornecedor($codfornecedor=null){

        if(is_null($codfornecedor)){
            return redirect()->to(base_url('FornecedorController/todosFornecedores'));
        }

        $FornecedorModel = new \App\Models\FornecedorModel();

        if($FornecedorModel->delete($codfornecedor)){
            return redirect()->to(base_url('FornecedorController/todosFornecedores'));
        }
        
        else{
            return redirect()->to(base_url('FornecedorController/todosFornecedores'));
        }
}
}