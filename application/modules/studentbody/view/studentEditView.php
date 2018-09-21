<?php 
use modules\studentbody\Student;

include_once 'init.php';
include_once 'application/modules/studentbody/Student.php';
include_once 'application/modules/Person.php';


if (!empty($_POST)){
    $stu = new Student();
    $stu->setIdstudent($_GET['id']);
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
    $stu->updatestudentALL();
    header('location:index.php?page=studentbody_view_studentReadView');
    exit();
   
}else{
        try {
            $stu = new Student();
            $id=$_GET['id'];
            $stu->readstudentALL($id);
            $ret = $stu->getDados();
            
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
}
?>
<form action="" method="post"  class="sidebyside panel panel-warning" enctype="multipart-form-data">
<div class="panel-heading">
	<h1>Detalhes sobre o Aluno</h1>
</div>
  <div class="form-group">
    <div id="rg">
    	<label for="stuenrolment">Matricula</label>
    	<input type="text" name="stuenrolment" id="stuenrolment" value="<?php echo @$ret[0]['stuenrolment'];?>" class="form-control">
    </div>
    <div id="cpf">
    	<label for="stuSSN">CPF</label>
    	<input type="text" name="stuSSN" id="stuSSN" value="<?php echo @$ret[0]['stuSSN'];?>" class="form-control" >
    </div>
    <div id="rg">	
         <label for="stuId">RG</label>
         <input type="text" name="stuId" id="stuId" value="<?php echo @$ret[0]['stuId'];?>"  class="sideleft">
    </div>
    <div class="divleft">
          <label for="stuname">Nome</label>
          <input type="text" name="stuname" id="stuname" value="<?php echo @$ret[0]['stuname'];?>" class="sideleft">
    </div>
    <div class="divleft">
          <label for="stuage">idade</label>
          <input type="text" name="stuage" id="stuage" value="<?php echo @$ret[0]['stuage']; ?>"  class="sideleft">
    </div>
    <div class="divleft">
    	<label for="stuDateofBirth">data Nascimento</label>
    	<input type="text" name="stuDateofBirth" id="stuDateofBirth" value="<?php echo @$ret[0]['stuDateofBirth']; ?>"  class="sideleft" >
    </div>
    <div class="divleft">
        <label for="stuaddress">Endereço</label>
        <input type="text" name="stuaddress" id="stuaddress"  value="<?php echo @$ret[0]['stuaddress']; ?>"  class="sideleft" >
    </div>
    <div class="divleft">
        <label for="stuneighborhood">Bairro</label>
        <input type="text" name="stuneighborhood" id="stuneighborhood"  value="<?php echo @$ret[0]['stuneighborhood']; ?>"  class="sideleft" >
    </div>
    <div class="divleft">
        <label for="stucity">Cidade</label>
        <input type="text" name="stucity" id="stucity"   value="<?php echo @$ret[0]['stucity']; ?>"  class="sideleft" >
    </div>
    <div class="divleft">
    	<label for="stustate">Estado</label>
        <input type="text" name="stustate" id="stustate"   value="<?php echo @$ret[0]['stustate']; ?>"  class="sideleft" >
    </div>
    <div class="divleft">
        <label for="stucountry">País</label>
        <input type="text" name="stucountry" id="stucountry"   value="<?php echo @$ret[0]['stucountry']; ?>" class="sideleft" >
    </div>
    <div class="divleft">
        <label for="stuzipcode">CEP</label>
        <input type="text" name="stuzipcode" id="stuzipcode"   value="<?php echo @$ret[0]['stuzipcode']; ?>" class="sideleft">
    </div>
    <div class="divleft">
        <label for="stucellphone">Celular</label>
        <input  type="text" name="stucellphone" id="stucellphone"   value="<?php echo @$ret[0]['stucellphone']; ?>" class="sideright">
    </div>
    <div class="divleft">
    	<label for="stuhomephone">Telefone Casa</label>
    	<input  type="text" name="stuhomephone" id="stuhomephone"   value="<?php echo @$ret[0]['stuhomephone']; ?>" class="sideleft">
    </div>
    <div class="divleft">
        <label for="stujobphone">Telefone Trabalho</label>
        <input  type="text" name="stujobphone" id="stujobphone"   value="<?php echo @$ret[0]['stujobphone']; ?>" class="sideleft">
    </div>
    <div class="divleft">
        <label for="stuemail1">e-mail1</label>
        <input  type="text" name="stuemail1" id="stuemail1"   value="<?php echo @$ret[0]['stuemail1']; ?>" class="sideleft">
    </div>
    <div class="divleft">
        <label for="stuemail2">e-mail2</label>
        <input  type="text" name="stuemail2" id="stuemail2"   value="<?php echo @$ret[0]['stuemail2']; ?>" class="sideleft">
    </div>
    <div class="divleft">
        <label for="stutwitter">Twitter</label>
        <input  type="text" name="stutwitter" id="stutwitter"   value="<?php echo @$ret[0]['stutwitter']; ?>" class="sideleft">
    </div>
    <div class="divleft">
        <label for="stuwhatsapp">Whatsapp</label>
        <input  type="text" name="stuwhatsapp" id="stuwhatsapp"   value="<?php echo @$ret[0]['stuwhatsapp']; ?>" class="sideleft">
    </div>
    <div class="divleft">
        <label for="stufacebook">FaceBook</label>
        <input  type="text" name="stufacebook" id="stufacebook"   value="<?php echo @$ret[0]['stufacebook']; ?>" class="sideleft">
    </div>
	<div class="submitting">
		<input type="submit" class="left btn btn-success" value="Enviar" >
		<input type="reset" class="right btn btn-default" value="Limpar Campos">
	</div>
 </div>
</form>
