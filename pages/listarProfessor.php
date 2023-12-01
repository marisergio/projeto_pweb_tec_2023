
<h3 style="margin:15px;">PROFESSORES</h3>
<hr />
<div class="row" style="padding:15px;">
    <div class="col-5">
        <a class="btn btn-info" href="?page=professorControle"> <i class="bi bi-file"></i><br /> NOVO</a>
    </div>
    <div class="col-7">
        <form class="d-flex" role="search" method="post" action="?page=professorControle">            
            <input class="form-control me-2" type="search" placeholder="Pesquise pelo nome do professor" aria-label="Search" name="filtro">
            <button value="buscar" name="acao" class="btn btn-info" type="submit"><i class="bi bi-search"></i> Buscar</button>
        </form>
    </div>
</div>


<table class="table">
    <tr>
        <th>NOME</th>
        <th>NASCIMENTO</th>
        <th>SEXO</th>
        <th>FORMAÇÃO</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Excluir</th>
    </tr>

    <?php foreach ($professores as $professor) { ?>
        <tr>
            <td><?php echo $professor->nome; ?></td>
            <td><?php echo date('d/m/Y', strtotime($professor->nascimento)); ?></td>
            <td><?php if($professor->sexo=="f") echo "Feminino"; else echo "Masculino"; ?></td>
            <td><?php echo $professor->formacao; ?></td>
            <td class="text-center">
                <a href="?page=professorControle&acao=get&id=<?php echo $professor->id; ?>" class="btn btn-warning">
                    <i class="bi bi-pencil"></i>
                </a>
            </td>
            <td class="text-center">
                <a href="?page=professorControle&acao=excluir&id=<?php echo $professor->id; ?>" class="btn btn-danger">
                    <i class="bi bi-trash"></i>
                </a>
            </td>
        </tr>
    <?php } ?>  
</table>