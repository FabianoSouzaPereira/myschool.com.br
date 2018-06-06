<ul id="menu" class="nav nav-pills nav-justified navbar-fixed-top"> 
	<li role="presentation" class="active"><a href="index.php?page=begin.php">Inicio</a></li> 
	<li role="presentation" class="dropdown">
	   <a href="#" data-toggle="dropdown">Alunos <span class="caret"></span></a>
		<ul class="dropdown-menu"> 
			<li><a href="index.php?page=studentbody_view_studentReadView">Listar Alunos</a></li> 
			<li><a href="index.php?page=studentbody_view_studentPostView">Cadastrar Alunos</a></li> 
			<li><a href="index.php?page=studentbody_view_studentEditView">Editar Alunos</a></li> 
			<li role="separator" class="divider"></li> 
			<li><a href="index.php?pagina=page=publics_students-listar"></a></li> 
			<li><a href="index.php?pagina=studentbody_view_studentDeleteView">Excluir Alunos</a></li> 
		</ul> 
	</li> 
	<li role="presentation" class="dropdown">
	   <a href="#" data-toggle="dropdown">Responsáveis <span class="caret"></span></a>
		<ul class="dropdown-menu"> 
			<li><a href="index.php?page=studentbody_view_guardianReadView">Listar Responsáveis</a></li> 
			<li><a href="index.php?page=studentbody_view_guardianPostView">Cadastrar Responsável</a></li> 
			<li><a href="index.php?page=studentbody_view_guardianEditView">Editar Responsável</a></li> 
			<li role="separator" class="divider"></li> 
			<li><a href="index.php?pagina=studentbody_view_guardianDeleteView">Excluir Responsável</a></li> 
		</ul> 
	</li> 
	<li role="presentation"><a href="index.php?page=clientes_listar">Clientes</a></li>  
	<li role="presentation"><a href="index.php?page=funcionarios_listar">Funcionários</a></li> 
	<li role="presentation"><a href="index.php?page=vendas_listar">Vendas</a></li>
	<li role="presentation" class="dropdown">
		<a href="#" data-toggle="dropdown">Localidades <span class="caret"></span></a>
		<ul class="dropdown-menu"> 
			<li><a href="index.php?pagina=estados_cadastrar">Novo Estado</a></li> 
			<li><a href="index.php?pagina=cidades_cadastrar">Nova Cidade</a></li> 
			<li role="separator" class="divider"></li> 
			<li><a href="index.php?pagina=estados_listar">Listar Estados</a></li> 
			<li><a href="index.php?pagina=cidades_listar">Listar Cidades</a></li> 
		</ul> 
	</li> 
	<li role="presentation" class="dropdown"> 
		<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Relatórios <span class="caret"> </span> </a> 
		<ul class="dropdown-menu"> 
			<li><a target="new" href="relatorios/vendasPDF.php">Vendas</a></li> 
			<li><a target="new" href="relatorios/clientesPDF.php">Clientes</a></li> 
			<li><a target="new" href="relatorios/funcionariosPDF.php">Funcionários</a></li> 
		</ul> 
	</li> 
	<li role="presentation"><a href="logout.php">Logout</a></li>
</ul>
