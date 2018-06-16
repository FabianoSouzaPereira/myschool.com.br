<?php
use modules\studentbody\Student;

include_once 'init.php';
include_once 'application/modules/studentbody/Student.php';
include_once 'application/modules/studentbody/Guardian.php';
include_once 'application/modules/Person.php';

?>
<div class="panel panel-warning">
	<div class="panel-heading">
		<h3>Lista de Estudantes</h3>
	</div>
<div class="panel-body">	
		<a href="index.php?page=studentbody_view_studentPostView" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span> Novo Aluno</a>
		<input>
<br><br>
<table class="listagem table table-bordered table-striped table-responsive">
	<thead>
	<tr>
		<th>ID</th>
		<th>Matr&iacute;cola</th>
		<th>Nome</th>
		<th>Idade</th>
		<th>Data nascimento</th>
		<th>Celular</th>
		<th>Telefone Casa</th>
		<th>Telefone Trabalho</th>
		<th>E-mail1</th>
		<th>E-mail2</th>
	</tr>
</thead>
	<tbody>
	<?php $stu = new Student(); 

    try{
        if(isset($id) && $id > 0){
            $stu->readstudent($id);
        }else{
            $id=0;
            $stu->readstudent($id);
        }
 	   // $stu->readpartial();
    	    $ret = $stu->getDados();
    	    $data=null;
    	   
        if(is_array($ret)){
            Foreach($ret as $raw) {
                echo "<tr>";
                if(is_array($raw)){
                    foreach ($raw as $data=>$item){
                         $id= $raw['idstudent'];
                        echo "<td>",$item,"</td>";
                    }
                    echo "<td><a href='index.php?page=studentbody_view_studentdetailview&id=$id' class='btn btn-primary'><span class='glyphicon glyphicon-plus'></span></a></td></tr>";
                    echo "<td><a href='index.php?page=studentbody_view_studentEditview&id=$id' class='btn btn-primary'><span class='glyphicon glyphicon-change'></span></a></td></tr>";
                }else {
                    echo $data,"</br>";
                }
            }
        }
    	     //   echo '<td><a href="index.php?page=studentbody_view_studentdetailview" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a></td>';
    
    	}catch (PDOException $error) {
    	    echo "Error ".$error->getMessage();
    	}
	?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="10" class="text-center"><?php echo date('d/m/Y h:i:s'); ?></th>
		</tr>
	</tfoot>
 </table>
 </div>
</div>
