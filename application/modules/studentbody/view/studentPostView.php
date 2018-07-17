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

$stu->poststudentALL();
header('location:index.php?page=studentbody_view_studentReadView');
exit();

}

?>
<form action="" method="post"  class="sidebyside panel panel-warning" enctype="multipart-form-data">
    <div class="panel-heading">
    	<h1>Cadastro de Alunos</h1>
    </div>

<div class="form-group">
    <div id="matricula">
        <label for="stuenrolment">Matricula</label>
        <input type="text" name="stuenrolment" id="stuenrolment" value="<?php echo @$_POST['stuenrolment'];?>"  required autofocus>
    </div>
    <div id="cpf">
    	<label for="stuSSN">CPF</label>
    	<input type="text" name="stuSSN" id="stuSSN" value="<?php echo @$_POST['stuSSN'];?>" >
    </div>
    <div id="rg">
    	<label for="stuId">RG</label>
    	<input type="text" name="stuId" id="stuId" value="<?php echo @$_POST['stuId'];?>" >
    </div>
    <div id="foto3X4">
    <style>
  .thumb {
    height: 220px;
    border: 1px solid #000;
    margin: 0px 0px 0 100px;
  }
</style>
<output id="list"></output>
   		<input type="file" id="files" name="files[]"  value="<?php echo @$_POST['stuPicture'];?>">
   			

<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
			image1 = e.target.result;
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
   </div>
    <div class="divleft">
          <label for="stuname">Nome</label>
          <input type="text" name="stuname" id="stuname" value="<?php echo @$_POST['stuname'];?>" class="sideleft" >
    </div>
    <div  id="idade"   class="divleft">
     	<label for="stuage">idade</label>
     	<input type="text" name="stuage" id="stuage" value="<?php echo @$_POST['stuage']; ?>" >
     </div>
     <div class="divleft">
        <label for="stuaddress">Endereço</label>
     	<input type="text" name="stuaddress" id="stuaddress"  value="<?php echo @$_POST['stuaddress']; ?>"  class="sideleft">
     </div>
     <div id="nascimento"  class="divleft">
     	<label for="stuDateofBirth">data Nascimento</label>
     	<input type="text" name="stuDateofBirth" id="stuDateofBirth" value="<?php echo @$_POST['stuDateofBirth']; ?>">
     </div>
     <div class="divleft" id="bairro">
     	<label for="stuneighborhood">Bairro</label>
     	<input type="text" name="stuneighborhood" id="stuneighborhood"  value="<?php echo @$_POST['stuneighborhood']; ?>"  class="sideleft">
     </div>
     <div id="cidade" class="divleft">
       	<label for="stucity">Cidade</label>
     	<input type="text" name="stucity" id="stucity"   value="<?php echo @$_POST['stucity']; ?>"  class="sideleft">
     </div>
     <div class="divleft" id="estado">
       	<label for="stustate">Estado</label>
     	<input type="text" name="stustate" id="stustate"   value="<?php echo @$_POST['stustate']; ?>"   class="sideleft">
     </div>
     <div class="divleft" id="pais">
        <label for="stucountry">País</label>
     	<input type="text" name="stucountry" id="stucountry"   value="<?php echo @$_POST['stucountry']; ?>"  class="sideleft">
     </div>
     <div class="divright" id="cep">
        <label for="stuzipcode">CEP</label>
     	<input type="text" name="stuzipcode" id="stuzipcode"   value="<?php echo @$_POST['stuzipcode']; ?>"  class="sideright">
     </div>
	<div class="divleft" id="celular">
		<label for="stucellphone">Celular</label>
		<input  type="text" name="stucellphone" id="stucellphone"   value="<?php echo @$_POST['stucellphone']; ?>"  class="sideleft">
	</div>
		<div class="divright" id="casa">
		<label for="stuhomephone">Telefone Casa</label>
		<input  type="text" name="stuhomephone" id="stuhomephone"   value="<?php echo @$_POST['stuhomephone']; ?>"  class="sideright">
	</div>
	<div class="divleft" id="trabalho">
		<label for="stujobphone">Telefone Trabalho</label>
		<input  type="text" name="stujobphone" id="stujobphone"   value="<?php echo @$_POST['stujobphone']; ?>"  class="sideleft">
	</div>
	<div class="divleft">
		<label for="stuemail1">e-mail1</label>
		<input  type="text" name="stuemail1" id="stuemail1"   value="<?php echo @$_POST['stuemail1']; ?>" class="sideleft">
	</div>
	<div class="divleft">
		<label for="stuemail2">e-mail2</label>
		<input  type="text" name="stuemail2" id="stuemail2"   value="<?php echo @$_POST['stuemail2']; ?>" class="sideleft">
	</div>
	<div class="divleft">
		<label for="stutwitter">Twitter</label>
		<input  type="text" name="stutwitter" id="stutwitter"   value="<?php echo @$_POST['stutwitter']; ?>" class="sideleft">
	</div>
	<div class="divleft">
		<label for="stuwhatsapp">Whatsapp</label>
		<input  type="text" name="stuwhatsapp" id="stuwhatsapp"   value="<?php echo @$_POST['stuwhatsapp']; ?>" class="sideleft">
	</div>
	<div class="divleft">
		<label for="stufacebook">FaceBook</label>
		<input  type="text" name="stufacebook" id="stufacebook"   value="<?php echo @$_POST['stufacebook']; ?>" class="sideleft">
	</div>
	<div class="submitting">
		<input type="submit" class="left btn btn-success" value="Enviar" >
		<input type="reset" class="right btn btn-default" value="Limpar Campos">
	</div>
</div>
</form>
