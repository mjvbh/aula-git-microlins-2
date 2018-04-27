<form id="demo-form2" action="CadastroDiretor.php" method="post">

    <div class="form-group">
        <label  for="nome">Nome <span class="required">*</span>
        </label>
        <div >
            <input type="text" id="nome"  name="nome" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="endereco">Endereço <span class="required">*</span>
        </label>
        <div >
            <input type="text" id="endereco" name="endereco" required="required" class="form-control 2">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="cargo">Cargo <span class="required">*</span>
        </label>
        <div >

            <select name="cargo" class="form-control">
                <option  disabled selected value> Escolha</option>
                <option value="DIRETOR"> Diretor</option>
                <option value="ALUNO"> Aluno</option>

            </select>
        </div>
    </div>          


    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6">
            <button class="btn btn-primary" type="button">Cancela</button>
            <button class="btn btn-primary" type="reset">Resetar</button>
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </div>

</form>