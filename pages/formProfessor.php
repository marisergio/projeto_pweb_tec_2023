<h1 class="h3 mb-3 fw-normal">CADASTRO DE PROFESSOR</h1>
<form method="post" action="?page=professorControle">
<?php if(isset($professor)){
       ?>
       <input type="hidden" name="id" value="<?php echo $professor->id; ?>"/>
       <?php
       $nome=$professor->nome;
       $nascimento=$professor->nascimento;
       $sexo=$professor->sexo;
       $acao = "alterar";
       $formacao = $professor->formacao; 
    }else{
        $nome='';
        $acao = "salvar";
        $sexo = '';
        $nascimento = '';
        $formacao = '';
    }
    ?>    

    <div class="row mb-3">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="nascimento" class="col-sm-2 col-form-label">Data de Nascimento</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?php echo $nascimento; ?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
        <div class="col-sm-10">
            <select class="form-control" name="sexo">
                <option value="">selecione</option>
                <option value="f" <?php if($sexo=="f"){ ?>selected<?php } ?>>Feminino</option>
                <option value="m" <?php if($sexo=="m"){ ?>selected<?php } ?>>Masculino</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="formacao" class="col-sm-2 col-form-label">Formação</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="formacao" name="formacao" value="<?php echo $formacao; ?>">
        </div>
    </div>
    
    <button value="<?php echo $acao; ?>" name="acao" type="submit" class="btn btn-primary">Salvar</button>
</form>