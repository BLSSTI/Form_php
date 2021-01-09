

<nav class="navbar navbar-light mb-5 bg-secondary">
  <div class="container-fluid">
    <span class="navbar-text">
      Consultores
    </span>
  </div>
</nav>
  <form onsubmit="sendRequest(e)" id="form" name="form" class="row g-3" method="post" >
    
    <input type="hidden" class="form-control" name="id" id="id">

    <div class="col-md-4">
      <label for="inputEmail4" class="form-label"><strong>CPF</strong></label>
      <input  required type="text" name="cpf" class="form-control" id="cpf" />
    </div>

    <div class="col-md-3">
      <label for="inputPassword4" class="form-label">RG</label>
      <input type="text" class="form-control" name="rg" id="rg">
    </div>

  <div class="col-md-3">
    <label for="inputAddress" class="form-label">Órg.Exp</label>
    <input type="text" class="form-control" name= "org_exp" id="org_exp" 
    placeholder="ex: ssp/ba">
  </div>

  <div class="col-md-2">
    <label for="inputState" class="form-label">UF</label>
    <select name="uf" id="uf" class="form-select" >
      <option>Amazonas</option>
      <option>Acre</option>
      <option>Bahia</option>
      <option>Pará</option>

    </select>
  </div>

  <div class="col-md-4">
    <label for="inputCity" class="form-label"><strong>Nome</strong></label>
    <input required type="text" class="form-control" name ="nome" id="nome"
   >

  </div>

  <div class="col-md-3">
    <label for="inputCity" class="form-label">Data Nascimento</label>
    <input type="text" class="form-control" name="data_nascimento" id="data_nascimento">
  </div>

  <div class="col-md-3">
    <label for="inputCity" class="form-label"><strong>Sexo</strong></label>
    <input required type="text" class="form-control" name="sexo" id="sexo">
  </div>

  <div class="col-md-12">
    <label for="email" class="form-label"><strong>E-mail</strong></label>
    <input required type="email" class="form-control" name="email" id="email">
  </div>


  <div class="col-md-4">
    <label for="estadocivil" class="form-label">Estado civil</label>
    <select name ="estado_civil" id="estado_civil" class="form-select">
      <option>Solteiro</option>
      <option>Casado(a)</option>
      <option>Divorciado</option>
      <option>Viúvo</option>



    </select>
  </div>

  <div class="col-md-6">
    <label for="curriculo" class="form-label">Link Currículo Latters</label>
    <input type="text" class="form-control" name="link_curriculo_lattes" id="link_curriculo_lattes"> 
  </div>

  <div class="col-md-4">
    <label for="titulacao" class="form-label">Titulação</label>
    <select name ="titulacao" id="titulacao" class="form-select">
      <option>Graduação</option>
      <option>Especialização</option>
      <option>Mestrado</option>
      <option>Doutorado</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="instituicao" class="form-label">Instituição Titulação</label>
    <input type="text" class="form-control" name="instituicao_titulacao" id="instituicao_titulacao">
  </div>

  <div class="col-md-2">
    <label for="anotitulacao" class="form-label">Ano Titulação</label>
    <input type="text" class="form-control" name="ano_titulacao" id="ano_titulacao">
  </div>



  <div class="btn-group" role="group" aria-label="Basic outlined example">

  <button type="reset"  class="btn btn-outline-primary">Novo</button>
  <button type="button" onclick="sendRequest()" class="btn btn-outline-primary">Salvar</button>
  <button type="button" onclick="deletar()" class="btn btn-outline-primary">Deletar</button>
</div>
    
  </div>

  </form>

  <div class="container mt-5">
    <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th  scope="col">Consultores cadastrados: </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($contatos as $contato){ ?>
        <tr>
          <th scope="row" onclick="selectContato(<?=$contato['id']?>)"><?=$contato['nome']?></th>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <script>
    function request(file){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          response = JSON.parse(this.responseText);
          setFilds(response);
        }
      };
      xmlhttp.open("GET", file, true);
      xmlhttp.send();
    }

    function selectContato(id){
      request('http://localhost/crud/?url=contato/show/'+id);
    }

    function serialize(form){if(!form||form.nodeName!=="FORM"){return }var i,j,q=[];for(i=form.elements.length-1;i>=0;i=i-1){if(form.elements[i].name===""){continue}switch(form.elements[i].nodeName){case"INPUT":switch(form.elements[i].type){case"text":case"hidden":case"email":case"password":case"button":case"reset":case"submit":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"checkbox":case"radio":if(form.elements[i].checked){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value))}break;case"file":break}break;case"TEXTAREA":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"SELECT":switch(form.elements[i].type){case"select-one":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"select-multiple":for(j=form.elements[i].options.length-1;j>=0;j=j-1){if(form.elements[i].options[j].selected){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].options[j].value))}}break}break;case"BUTTON":switch(form.elements[i].type){case"reset":case"submit":case"button":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break}break}}return q.join("&")};

    function sendRequest(e){
      var form = document.querySelector('form');
      var data = serialize(form);
      console.log(data);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", 'http://localhost/crud/Requests/ContatoRequest.php', true);
      // Envia a informação do cabeçalho junto com a requisição.
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() { // Chama a função quando o estado mudar.
          if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            console.log(this.responseText);
            location.reload();
          }
      }
      xhr.send(data);
    }

    function deletar(){
      if(confirm("Deseja realmente excluir?")){
        let id = document.getElementById('id').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", 'http://localhost/crud/?url=contato/destroy/'+id, true);
        xmlhttp.send();
        location.reload();
      }
    }

    function setFilds(response){
      document.getElementById('ano_titulacao').value = response['ano_titulacao'];
      document.getElementById('cpf').value = response['cpf'];
      document.getElementById('data_nascimento').value = response['data_nascimento'];
      document.getElementById('email').value = response['email'];
      document.getElementById('estado_civil').value = response['estado_civil'];
      document.getElementById('id').value = response['id'];
      document.getElementById('instituicao_titulacao').value = response['instituicao_titulacao'];
      document.getElementById('link_curriculo_lattes').value = response['link_curriculo_lattes'];
      document.getElementById('nome').value = response['nome'];
      document.getElementById('org_exp').value = response['org_exp'];
      document.getElementById('rg').value = response['rg'];
      document.getElementById('sexo').value = response['sexo'];
      document.getElementById('titulacao').value = response['titulacao'];
      document.getElementById('uf').value = response['uf'];
    }
  </script>
</div>
