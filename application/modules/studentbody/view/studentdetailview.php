<?php  
use modules\studentbody\Student;

include_once 'init.php';
include_once 'application/modules/studentbody/Student.php';
include_once 'application/modules/studentbody/Guardian.php';
include_once 'application/modules/Person.php';
  
    $stu = new Student();
    $id=$_GET['id'];
    $stu->readstudentALL($id);
    $ret = $stu->getDados();
    

   //  header('location:index.php?page=studentbody_view_studentReadView');
  
?>

<form action="" method="post"  class="panel panel-warning" enctype="multipart-form-data">
<div class="panel-heading">
	<h1>Detelhe sobre o Aluno</h1>
</div>
  <div class="panel-body">
    <div class="form-group">
    	<label for="stuenrolment">Matricula</label>
    	<input type="text" name="stuenrolment" id="stuenrolment" value="<?php echo @$ret[0]['stuenrolment'];?>" class="form-control">
    </div>
    <div class="form-group">
    	<label for="stuSSN">CPF</label>
    	<input type="text" name="stuSSN" id="stuSSN" value="<?php echo @$ret[0]['stuSSN'];?>" class="form-control" >
    </div>
    <div class="form-group">	
         <label for="stuId">RG</label>
         <input type="text" name="stuId" id="stuId" value="<?php echo @$ret[0]['stuId'];?>" class="form-control" >
    </div>
    <div class="form-group">
          <label for="stuname">Nome</label>
          <input type="text" name="stuname" id="stuname" value="<?php echo @$ret[0]['stuname'];?>" class="form-control" >
    </div>
    <div class="form-group">
          <label for="stuage">idade</label>
          <input type="text" name="stuage" id="stuage" value="<?php echo @$ret[0]['stuage']; ?>" class="form-control" >
    </div>
    <div class="form-group">
    	<label for="stuDateofBirth">data Nascimento</label>
    	<input type="text" name="stuDateofBirth" id="stuDateofBirth" value="<?php echo @$ret[0]['stuDateofBirth']; ?>" class="form-control" >
    </div>
    <div class="form-group">
        <label for="stuaddress">Endereço</label>
        <input type="text" name="stuaddress" id="stuaddress"  value="<?php echo @$ret[0]['stuaddress']; ?>" class="form-control" >
    </div>
    <div class="form-group">
        <label for="stuneighborhood">Bairro</label>
        <input type="text" name="stuneighborhood" id="stuneighborhood"  value="<?php echo @$ret[0]['stuneighborhood']; ?>" class="form-control" >
    </div>
    <div class="form-group">
        <label for="stucity">Cidade</label>
        <input type="text" name="stucity" id="stucity"   value="<?php echo @$ret[0]['stucity']; ?>" class="form-control" >
    </div>
    <div class="form-group">
    	<label for="stustate">Estado</label>
        <input type="text" name="stustate" id="stustate"   value="<?php echo @$ret[0]['stustate']; ?>" class="form-control" >
    </div>
    <div class="form-group">
        <label for="stucountry">País</label>
        <input type="text" name="stucountry" id="stucountry"   value="<?php echo @$ret[0]['stucountry']; ?>"class="form-control" >
    </div>
    <div class="form-group">
        <label for="stuzipcode">CEP</label>
        <input type="text" name="stuzipcode" id="stuzipcode"   value="<?php echo @$ret[0]['stuzipcode']; ?>" class="form-control" >
    </div>
    <div class="form-group">
        <label for="stucellphone">Celular</label>
        <input  type="text" name="stucellphone" id="stucellphone"   value="<?php echo @$ret[0]['stucellphone']; ?>" class="form-control">
    </div>
    <div class="form-group">
    	<label for="stuhomephone">Telefone Casa</label>
    	<input  type="text" name="stuhomephone" id="stuhomephone"   value="<?php echo @$ret[0]['stuhomephone']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="stujobphone">Telefone Trabalho</label>
        <input  type="text" name="stujobphone" id="stujobphone"   value="<?php echo @$ret[0]['stujobphone']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="stuemail1">e-mail1</label>
        <input  type="text" name="stuemail1" id="stuemail1"   value="<?php echo @$ret[0]['stuemail1']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="stuemail2">e-mail2</label>
        <input  type="text" name="stuemail2" id="stuemail2"   value="<?php echo @$ret[0]['stuemail2']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="stutwitter">Twitter</label>
        <input  type="text" name="stutwitter" id="stutwitter"   value="<?php echo @$ret[0]['stutwitter']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="stuwhatsapp">Whatsapp</label>
        <input  type="text" name="stuwhatsapp" id="stuwhatsapp"   value="<?php echo @$ret[0]['stuwhatsapp']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="stufacebook">FaceBook</label>
        <input  type="text" name="stufacebook" id="stufacebook"   value="<?php echo @$ret[0]['stufacebook']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Enviar" >
        <input type="reset" class="btn btn-default" value="Limpar Campos">
    </div>
 </div>
</form>
