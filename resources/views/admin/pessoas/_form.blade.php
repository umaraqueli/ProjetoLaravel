<div class="input-field">
  <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
  <label>Nome</label></input></div>
  <div class="input-field">
  <input type="text" name="sobrenome" value="{{isset($registro->sobrenome) ? $registro->sobrenome : ''}}">
  <label>Sobrenome</label></input>
</div>
<div class="input-field">
  <input type="text" name="cpf" value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
  <label>CPF</label></input>
</div>
<div class="input-field">
  <input type="text" name="idade" value="{{isset($registro->idade) ? $registro->idade : ''}}">
  <label>Idade</label></input>
</div>
<div class="input-field">
  <input type="text" name="endereco" value="{{isset($registro->endereco) ? $registro->endereco : ''}}">
  <label>Endereço</label></input>
</div>
<div class="input-field">
  <input type="text" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
  <label>email</label></input>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="js/app.js">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
    </script>
 
