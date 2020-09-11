<div class="input-field">
  <input type="text" name="name" value="{{isset($registro->name) ? $registro->name : ''}}">
  <label>Nome</label></input></div>
  <div class="input-field">
  <input type="text" name="tipo" value="{{isset($registro->tipo) ? $registro->tipo : ''}}">
  <label>Tipo</label></input>
</div>
<div class="input-field">
  <input type="text" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
  <label>Email</label></input>
</div>
<div class="input-field">
  <input type="password" name="password" value="{{isset($registro->password) ? $registro->password : ''}}">
  <label>Senha</label></input>
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
 
