<?php  
use modules\studentbody\Student;

include_once 'init.php';
include_once 'application/modules/studentbody/Student.php';
include_once 'application/modules/studentbody/Guardian.php';
include_once 'application/modules/Person.php';

if (!empty($_POST)){
 $stu = new Student();
    $_SESSION['stuenrolment'] = $_POST['stuenrolment'];
    $_SESSION['stuSSN'] = $_POST['stuSSN'];
    $_SESSION['stuId'] = $_POST['stuId'];
    $_SESSION['stuname'] = $_POST['stuname'];
    $_SESSION['stuage'] = $_POST['stuage'];
    $_SESSION['stuDateofBirth'] = $_POST['stuDateofBirth'];
    $_SESSION['stuaddress'] = $_POST['stuaddress'];
    $_SESSION['stuneighborhood'] = $_POST['stuneighborhood'];
    $_SESSION['stucity'] =  $_POST['stucity'];
    $_SESSION['stustate'] = $_POST['stustate'];
    $_SESSION['stucountry'] = $_POST['stucountry'];
    $_SESSION['stuzipcode'] = $_POST['stuzipcode'];
    $_SESSION['stucellphone'] = $_POST['stucellphone'];
    $_SESSION['stuhomephone'] = $_POST['stuhomephone'];
    $_SESSION['stujobphone'] = $_POST['stujobphone']; 
    $_SESSION['stuemail1'] = $_POST['stuemail1']; 
    $_SESSION['stuemail2'] = $_POST['stuemail2']; 
    $_SESSION['stutwitter'] = $_POST['stutwitter'];
    $_SESSION['stuwhatsapp'] = $_POST['stuwhatsapp'];
    $_SESSION['stufacebook'] = $_POST['stufacebook'];
    $stu->setStuenrolment($_POST['stuenrolment']);
    $stu->setStuSSN($_POST['stuSSN']);
    $stu->setStuId($_POST['stuId']);
    $stu->setStuname($_POST['stuname']);
    $stu->setStuage($_POST['stuage']);
    $stu->setStuDateofBirth($_POST['stuDateofBirth']);
    $stu->setStuaddress($_POST['stuaddress']);
    $stu->setStuneighborhood($_POST['stuneighborhood']);
    $stu->setStucity($_POST['stucity']);
    $stu->setStustate($_POST['stustate']);
    $stu->setStucountry($_POST['stucountry']);
    $stu->setStuzipcode($_POST['stuzipcode']);
    $stu->setStucellphone($_POST['stucellphone']);
    $stu->setStuhomephone($_POST['stuhomephone']);
    $stu->setStujobphone($_POST['stujobphone']);
    $stu->setStuemail1($_POST['stuemail1']);
    $stu->setStuemail2($_POST['stuemail2']);
    $stu->setStutwitter($_POST['stutwitter']);
    $stu->setStuwhatsapp($_POST['stuwhatsapp']);
    $stu->setStufacebook($_POST['stufacebook']);
    $stu = new Student();
//$stu->post();
$stu->poststudentALL();
header('location:index.php?page=studentbody_view_studentReadView');
exit();

}

?>
<form action="" method="post"  class="panel panel-warning" enctype="multipart-form-data">
    <div class="panel-heading">
    	<h1>Cadastro de Alunos</h1>
    </div>
<div class="panel-body">
    <div class="form-group">
        <label for="stuenrolment">Matricula</label>
        <input type="text" name="stuenrolment" id="stuenrolment" value="<?php echo @$_POST['stuenrolment'];?>" class="form-control" placeholder="" required autofocus>
    </div>
    <div class="form-group">
    	<label for="stuSSN">CPF</label>
    	<input type="text" name="stuSSN" id="stuSSN" value="<?php echo @$_POST['stuSSN'];?>" class="form-control" >
    </div>
    <div class="form-group">
    	<label for="stuId">RG</label>
    	<input type="text" name="stuId" id="stuId" value="<?php echo @$_POST['stuId'];?>" class="form-control" >
    </div>
     <div class="form-group">
     	<label for="stuname">Nome</label>
     	<input type="text" name="stuname" id="stuname" value="<?php echo @$_POST['stuname'];?>" class="form-control" >
     </div>
     <div class="form-group">
     	<label for="stuage">idade</label>
     	<input type="text" name="stuage" id="stuage" value="<?php echo @$_POST['stuage']; ?>" class="form-control" >
     </div>
     <div class="form-group">
     	<label for="stuDateofBirth">data Nascimento</label>
     	<input type="text" name="stuDateofBirth" id="stuDateofBirth" value="<?php echo @$_POST['stuDateofBirth']; ?>" class="form-control" >
     </div>
     <div class="form-group">
        <label for="stuaddress">Endereço</label>
     	<input type="text" name="stuaddress" id="stuaddress"  value="<?php echo @$_POST['stuaddress']; ?>" class="form-control" >
     </div>
     <div class="form-group">
     	<label for="stuneighborhood">Bairro</label>
     	<input type="text" name="stuneighborhood" id="stuneighborhood"  value="<?php echo @$_POST['stuneighborhood']; ?>" class="form-control" >
     </div>
     <div class="form-group">
       	<label for="stucity">Cidade</label>
     	<input type="text" name="stucity" id="stucity"   value="<?php echo @$_POST['stucity']; ?>" class="form-control" >
     </div>
     <div class="form-group">
       	<label for="stustate">Estado</label>
     	<input type="text" name="stustate" id="stustate"   value="<?php echo @$_POST['stustate']; ?>" class="form-control" >
     </div>
     <div class="form-group">
        <label for="stucountry">País</label>
     	<input type="text" name="stucountry" id="stucountry"   value="<?php echo @$_POST['stucountry']; ?>"class="form-control" >
     </div>
     <div class="form-group">
        <label for="stuzipcode">CEP</label>
     	<input type="text" name="stuzipcode" id="stuzipcode"   value="<?php echo @$_POST['stuzipcode']; ?>" class="form-control" >
     </div>
	<div class="form-group">
		<label for="stucellphone">Celular</label>
		<input  type="text" name="stucellphone" id="stucellphone"   value="<?php echo @$_POST['stucellphone']; ?>" class="form-control">
	</div>
		<div class="form-group">
		<label for="stuhomephone">Telefone Casa</label>
		<input  type="text" name="stuhomephone" id="stuhomephone"   value="<?php echo @$_POST['stuhomephone']; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="stujobphone">Telefone Trabalho</label>
		<input  type="text" name="stujobphone" id="stujobphone"   value="<?php echo @$_POST['stujobphone']; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="stuemail1">e-mail1</label>
		<input  type="text" name="stuemail1" id="stuemail1"   value="<?php echo @$_POST['stuemail1']; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="stuemail2">e-mail2</label>
		<input  type="text" name="stuemail2" id="stuemail2"   value="<?php echo @$_POST['stuemail2']; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="stutwitter">Twitter</label>
		<input  type="text" name="stutwitter" id="stutwitter"   value="<?php echo @$_POST['stutwitter']; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="stuwhatsapp">Whatsapp</label>
		<input  type="text" name="stuwhatsapp" id="stuwhatsapp"   value="<?php echo @$_POST['stuwhatsapp']; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="stufacebook">FaceBook</label>
		<input  type="text" name="stufacebook" id="stufacebook"   value="<?php echo @$_POST['stufacebook']; ?>" class="form-control">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Enviar" >
		<input type="reset" class="btn btn-default" value="Limpar Campos">
	</div>
</div>
</form>
