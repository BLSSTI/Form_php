<nav class="navbar navbar-light mb-5 bg-secondary">
  <div class="container-fluid">
    <span class="navbar-text">
      Consultores
    </span>
  </div>
</nav>
  <form id="form" name="form" class="row g-3" method="post">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">CPF</label>
    <input type="text" name="cpf" class="form-control" id="cpf" value="<?php
     echo isset($contato->cpf) ? $contato->cpf : null;
      ?>" />
  </div>

  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">RG</label>
    <input type="password" class="form-control" name="rg" id="rg"value="<?php
     echo isset($contato->rg) ? $contato->rg : null;
      ?>">
  </div>

  <div class="col-md-3">
    <label for="inputAddress" class="form-label">Órg.Exp</label>
    <input type="text" class="form-control" name= "orgexp" id="orgexp" 
    value="<?php echo isset($contato->orgexp) ? $contato->orgexp : null;
      ?> "placeholder="ex: ssp/ba">
  </div>

  <div class="col-md-2">
    <label for="inputState" class="form-label">UF</label>
    <select name= "uf" id="uf"
    value="<?php echo isset($contato->uf) ? $contato->uf : null;
      ?>"
     class="form-select" >
      <option selected disabled>Selecione...</option>
      <option>Amazonas</option>
      <option>Acre</option>
      <option>Bahia</option>
      <option>Pará</option>

    </select>
  </div>

  <div class="col-md-4">
    <label for="inputCity" class="form-label">Nome</label>
    <input type="text" class="form-control" name ="nome" id="nome"
    value="<?php echo isset($contato->nome) ? $contato->nome : null;?>">

  </div>

  <div class="col-md-3">
    <label for="inputCity" class="form-label">Data Nascimento</label>
    <input type="text" class="form-control" name="datanascimento" id="datanascimento"
    value="<?php echo isset($contato->datanascimento) ? $contato->datanascimento : null;?>">
  </div>

  <div class="col-md-3">
    <label for="inputCity" class="form-label">Sexo</label>
    <input type="text" class="form-control" name="sexo" id="sexo"
    value="<?php echo isset($contato->sexo) ? $contato->sexo : null;?>"
    >
  </div>

  <div class="col-md-12">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="email" id="email"
    value="<?php echo isset($contato->email) ? $contato->email : null;?>">
  </div>


  <div class="col-md-4">
    <label for="estadocivil" class="form-label">Estado civil</label>
    <select name ="estadocivil" id="estadocivil" class="form-select"
    value="<?php echo isset($contato->estadocivil) ? $contato->estadocivil : null;?>">
      <option selected>Selecione...</option>
      <option>Solteiro</option>
      <option>Casado(a)</option>
      <option>Divorciado</option>
      <option>Viúvo</option>



    </select>
  </div>

  <div class="col-md-6">
    <label for="curriculo" class="form-label">Link Currículo Latters</label>
    <input type="text" class="form-control" name="curriculo" id="curriculo"
    value="<?php echo isset($contato->curriculo) ? $contato->curriculo : null;?>"> 
  </div>

  <div class="col-md-4">
    <label for="titulacao" class="form-label">Titulação</label>
    <select name ="titulacao" id="titulacao" class="form-select"
    value="<?php echo isset($contato->titulacao) ? $contato->titulacao : null;?>">
      <option selected>Selecione...</option>
      <option>Graduação</option>
      <option>Especialização</option>
      <option>Mestrado</option>
      <option>Doutorado</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="instituicao" class="form-label">Instituição Titulação</label>
    <input type="text" class="form-control" name="instituicao" id="instituicao"
    value="<?php echo isset($contato->titulacao) ? $contato->titulacao : null;?>">
  </div>

  <div class="col-md-2">
    <label for="anotitulacao" class="form-label">Ano Titulação</label>
    <input type="text" class="form-control" name="anotitulacao" id="anotitulacao"
    value="<?php echo isset($contato->anotitulacao) ? $contato->anotitulacao : null;?>">
  </div>
  </form>

  <div class="col-4">
    <button type="submit" class="btn btn-primary" onclick="cadastrar()">Enviar</button>
  </div>

  <div class="col-4">
    <button type="submit" class="btn btn-primary">Apagar</button>
  </div>

  <div class="col-4">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>

  <div class="container mt-5">
  <table class="table table-dark table-hover">
  <thead>
    <tr>

      <th  scope="col">Consultores cadastrados: </th>
 
    </tr>
  </thead>
  <tbody>


    <tr>
      <th scope="row">Thales</th>

    </tr>
    <tr>
      <th scope="row">Bruno</th>

    </tr>
  </tbody>
</table>
</div>