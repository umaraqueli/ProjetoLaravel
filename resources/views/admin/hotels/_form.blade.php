<div class="input-field">
  <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
  <label>Nome Do Hotel</label></input></div>
  <div class="input-field">
  <input type="text" name="endereço" value="{{isset($registro->endereço) ? $registro->endereço : ''}}">
  <label>Endereço</label></input>
</div>
<div class="input-field">
  <input type="text" name="localidade" value="{{isset($registro->localidade) ? $registro->localidade : ''}}">
  <label>Lcalidade</label></input>
</div>
<div>
<label>Municipio</label>
<select name="municipio_id" class="browser-default">
      @foreach($municipios as $municipio)
      <option value="{{$municipio->id}}" {{ !isset($registro->muncipio_id) ? '' :
      ($registro->municipio_id == $municipio->id ? 'selected' : '') }}>{{$municipio->nome}}</option>
      @endforeach
    </select>
    
    <br><br><br>
    </div>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    
 
    </script>
 
