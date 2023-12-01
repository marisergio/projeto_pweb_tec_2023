<h1 class="h3 mb-3 fw-normal">CADASTRO DE TURMA</h1>
<form method="post" action="?page=turmaControle">
<?php if(isset($professor)){
       ?>
       <input type="hidden" name="id" value="<?php echo $turma->id; ?>"/>
       <?php
      
       $acao = "alterar";
     //  $formacao = $professor->formacao; 
    }else{
       // $nome='';
        $acao = "salvar";
       
    }
    ?>    

    
    <div class="row mb-3">
        <label for="inicio" class="col-sm-2 col-form-label">Data de Início</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inicio" name="inicio" value="<?php echo $inicio; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="fim" class="col-sm-2 col-form-label">Data de Fim</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="fim" name="fim" value="<?php echo $fim; ?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="sexo" class="col-sm-2 col-form-label">Curso</label>
        <div class="col-sm-10">
            <select class="form-control" name="curso_id">
                <option value="">selecione</option>
                <option value="f" <?php if($sexo=="f"){ ?>selected<?php } ?>>Feminino</option>
                <option value="m" <?php if($sexo=="m"){ ?>selected<?php } ?>>Masculino</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="sexo" class="col-sm-2 col-form-label">Professor</label>
        <div class="col-sm-10">
            <select class="form-control" name="professor_id">
                <option value="">selecione</option>
                <?php foreach ($professores as $professor) { ?> 
                    <option value="<?php echo $professor->id; ?>">
                        <?php echo $professor->nome; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="sexo" class="col-sm-2 col-form-label">Filial</label>
        <div class="col-sm-10">
            <select class="form-control" name="filial_id">
                <option value="">selecione</option>
                <option value="f" <?php if($sexo=="f"){ ?>selected<?php } ?>>Feminino</option>
                <option value="m" <?php if($sexo=="m"){ ?>selected<?php } ?>>Masculino</option>
            </select>
        </div>
    </div>

    
    
    <button value="<?php echo $acao; ?>" name="acao" type="submit" class="btn btn-primary">Salvar</button>
</form>