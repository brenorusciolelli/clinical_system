<?php
require_once '../auth.php';
require_once '../Models/empresa.class.php';


if(isset($_POST['upload']) == 'Cadastrar'){

$Nome_Empresa = $_POST['Nome_Empresa'];

//---Fabricante---//
$Nome_Empresa = $_POST['Nome_Empresa'];
$CNPJ = $_POST['CNPJ'];
$Endereco = $_POST['Endereco'];
$Email = $_POST['Email'];

//--Representante--//

$empresa = new Empresa;

if($Nome_Empresa != NULL && $CNPJ != NULL && $Endereco != NULL && $Email != NULL){

		if (!isset($_POST['idEmpresa'])){

			$result = $empresa->insertEmpresa($Nome_Empresa, $CNPJ, $Endereco, $Email, $idUsuario, $perm);
		

	}else{
			$idEmpresa = $_POST['idEmpresa'];
			$result = $empresa->UpdateEmpresa($Nome_Empresa, $CNPJ, $Endereco, $Email, $idUsuario, $idUsuario, $perm);		
			
		}
			$_SESSION['alert'] = $result;
			header('Location: ../../views/cliente/index.php');

	}else{
			header('Location: ../../views/cliente/index.php?alert=3');
		}
		
	
 }else{
	header('Location: ../../views/cliente/index.php');
}