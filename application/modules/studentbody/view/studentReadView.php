<?php
use modules\studentbody\Student;
use modules\studentbody\Guardian;
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
		<a href="index.php?page" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span> Novo Aluno</a>
<table class="listagem table table-bordered table-striped table-responsive">
	<thead>
	<tr>
		<th>Matr&iacute;cola</th>
		<th>Nome</th>
		<th>Idade</th>
		<th>Casa</th>
		<th>Celular</th>
	</tr>
</thead>
	<tbody>
	<?php $stu = new Student(); 
	      $gua = new Guardian();
	try{
	    $stu->read();
// 	   $raw=null;
    ?>
		<tr>
		<td><?php echo $stu->getStuenrolment(); ?></td>
		<td><?php echo $stu->getStuname(); ?></td>
		<td><?php echo $stu->getStuage(); ?></td>
		<td><?php echo $stu->getStuhomephone(); ?></td>
		<td><?php echo $stu->getStucellphone(); ?></td>
		</tr>
		<?php  
	}catch (PDOException $error) {
	    echo "Error ".$error->getMessage();
	}
		?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="5" class="text-center"><?php echo date('d/m/Y h:i:s'); ?></th>
		</tr>
	</tfoot>
 </table>
 </div>
</div>