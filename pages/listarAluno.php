
<h3 style="margin:15px;">ALUNOS</h3>
<hr />
<div class="row" style="padding:15px;">
    <div class="col-5">
        <a class="btn btn-info" href="?page=alunoControle"> <i class="bi bi-file"></i><br /> NOVO</a>
    </div>
    <div class="col-7">
        <form class="d-flex" role="search" method="post" action="?page=alunoControle">            
            <input class="form-control me-2" type="search" placeholder="Pesquise pelo nome do aluno" aria-label="Search" name="filtro">
            <button value="buscar" name="acao" class="btn btn-info" type="submit"><i class="bi bi-search"></i> Buscar</button>
        </form>
    </div>
</div>


<table class="table">
    <tr>
        <th>NOME</th>
        <th>NASCIMENTO</th>
        <th>SEXO</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Excluir</th>
    </tr>

    <?php foreach ($alunos as $aluno) { ?>
        <tr>
            <td><?php echo $aluno->nome; ?></td>
            <td><?php echo date('d/m/Y', strtotime($aluno->nascimento)); ?></td>
            <td><?php if($aluno->sexo=="f") echo "Feminino"; else echo "Masculino"; ?></td>
            <td class="text-center">
                <a href="?page=alunoControle&acao=get&id=<?php echo $aluno->id; ?>" class="btn btn-warning">
                    <i class="bi bi-pencil"></i>
                </a>
            </td>
            <td class="text-center">
                <a href="?page=alunoControle&acao=excluir&id=<?php echo $aluno->id; ?>" class="btn btn-danger">
                    <i class="bi bi-trash"></i>
                </a>
            </td>
        </tr>
    <?php } ?>  
</table>