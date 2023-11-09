
<h3>ALUNOS</h3>
<a class="btn btn-primary" href="?page=alunoControle">NOVO</a>

<table class="table">
    <tr>
        <td>NOME</td><td>NASCIMENTO</td><td>Editar</td><td>Excluir</td>
    </tr>

    <?php for($i=0; $i<count($alunos); $i++) { ?>
        <tr>
            <td><?php echo $alunos[$i]->nome; ?></td>
            <td><?php echo $alunos[$i]->nascimento; ?></td>
            <td>
                Editar
            </td>
            <td>Excluir</td>
        </tr>
    <?php } ?>  
</table>