<?php


class studentstest {
    
public $stuenrolment;
public $stuname;
public $stuage;
public $stuaddress;
public $stuneighborhood;
public $stucity;
public $stustate;
public $stucountry;
public $stuzipcode;
public $stusponsor;



/** Function does a post into studant. */
public function post()
{
    $stuenrolment = 10001;
    $stuname = "Fabiano";
    $stuage = 34;
    $stuaddress = "rua quadrangular, 38";
    $stuneighborhood = "centro";
    $stucity = "Toronto";
    $stustate = "Tocantins";
    $stucountry = "Brasil";
    $stuzipcode = 88032134;
    $stusponsor = 304950;
    
    $sql ="INSERT INTO `studant`(`stuenrolment`,
                 `stuname`,
                 `stuage`,
                 `stuaddress`,
                 `stuneighborhood`,
                 `stucity`,
                 `stustate`,
                 `stucountry`,
                 `stuzipcode`,
                 `stusponsor`)
                VALUES (:stuenrolment,
                  :stuname,
                  :stuage,
                  :stuaddress,
                  :stuneighborhood,
                  :stucity,
                  :stustate,
                  :stucountry,
                  :stuzipcode,
                  :stusponsor)";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':stuname', $stuenrolment, PDO::PARAM_STR);
    $stmt->bindParam(':stuage', $stuname, PDO::PARAM_STR);
    $stmt->bindParam(':stuaddress', $stuage, PDO::PARAM_STR);
    $stmt->bindParam(':stuneighborhood', $stuneighborhood, PDO::PARAM_STR);
    $stmt->bindParam(':stucity', $stucity, PDO::PARAM_STR);
    $stmt->bindParam(':stustate', $stustate, PDO::PARAM_STR);
    $stmt->bindParam(':stucountry', $stucountry, PDO::PARAM_STR);
    $stmt->bindParam(':stuzipcode', $stuzipcode, PDO::PARAM_STR);
    $stmt->bindParam(':stusponsor', $stusponsor, PDO::PARAM_STR);
    
    $stmt->execute();
}

/** Function does a update into studant. */
public function update()
{
    $stuenrolment = 20002;
    $stuname = "André";
    $stuage = 56;
    $stuaddress = "rua da Orta, 68";
    $stuneighborhood = "Tubarão";
    $stucity = "Rosa";
    $stustate = "Para";
    $stucountry = "Canada";
    $stuzipcode = 88060234;
    $stusponsor = 695049;
    
    $sql ="UPDATE school SET `studant`(`stuenrolment`= :stuenrolment,
                 `stuname`= :stuname,
                 `stuage`= :stuage,
                 `stuaddress`= :stuaddress,
                 `stuneighborhood`= :stuneighborhood,
                 `stucity`= :stucity,
                 `stustate`= :stustate,
                 `stucountry`= :stucountry,
                 `stuzipcode`= :stuzipcode,
                 `stusponsor`= :stusponsor)
                WHERE stuenrolment = :stuenrolment)";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':stuname', $stuname, PDO::PARAM_STR);
    $stmt->bindParam(':stuage', $stuage , PDO::PARAM_STR);
    $stmt->bindParam(':stuaddress', $stuaddress, PDO::PARAM_STR);
    $stmt->bindParam(':stuneighborhood', $stuneighborhood, PDO::PARAM_STR);
    $stmt->bindParam(':stucity', $stucity, PDO::PARAM_STR);
    $stmt->bindParam(':stustate', $stustate, PDO::PARAM_STR);
    $stmt->bindParam(':stucountry', $stucountry, PDO::PARAM_STR);
    $stmt->bindParam(':stuzipcode', $stuzipcode, PDO::PARAM_STR);
    $stmt->bindParam(':stusponsor', $stusponsor, PDO::PARAM_STR);
    
    $stmt->execute();
}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Página de teste Estudante</title>

</head>
<body>
<form action="" method="post" class="formulario" enctype="multipart-form-data">
    <div class="panel-heading">
    	<h1>Cadastro de Alunos</h1>
    </div>
<div class="panel-body">
    <div class="form-group">
        <label for="stuenrolment">Matricula</label>
        <input type="text" name="stuenrolment" id="stuenrolment" placeholder="Digite seu nome completo" required autofocus>
    </div>
     <div class="form-group">
     	<label for="name">Nome</label>
     	<input type="text" name="name" id="name">
     
     </div>
     <div class="form-group">
     	<label for="age">idade</label>
     	<input type="text" name="age" id="age">
     </div>
     <div class="form-group">
        <label for="address">Endereço</label>
     	<input type="text" name="address" id="address">
     </div>
     <div class="form-group">
     	<label for="neighborhood">Bairro</label>
     	<input type="text" name="neighborhood" id="neighborhood">
     </div>
     <div class="form-group">
       	<label for="state">Estado</label>
     	<input type="text" name="state" id="state">
     </div>
     <div class="form-group">
        <label for="country">País</label>
     	<input type="text" name="country" id="country">
     </div>
     <div class="form-group">
        <label for="zipcode">CEP</label>
     	<input type="text" name="zipcode" id="zipcode">
     </div>
     <div class="form-group">
        <label></label>
     	<input type="text" name="" id="">
     </div>
     <div class="form-group">
        <label></label>
     	<input type="text" name="" id="">
     </div>
     <div class="form-group">
       	<label></label>
     	<input type="text" name="" id="">
     </div>
     <div class="form-group">
        <label></label>
     	<input type="text" name="" id="">
     </div>
    	<div class="form-group">
			<input type="submit" class="btn btn-success" value="Enviar" >
			<input type="reset" class="btn btn-default" value="Limpar Campos">
		</div>
</div>
</form>
</body>
</html>
