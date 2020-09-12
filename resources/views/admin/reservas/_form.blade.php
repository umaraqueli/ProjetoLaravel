<div class="input-field">
  <input type="date" name="data_reserva" value="{{isset($registro->data_reserva) ? $registro->data_reserva : ''}}">
  <label>Data da Reserva</label></input></div>
 </div>
<div>
<label>Nome</label>
<select name="pessoa_id" class="browser-default">
      @foreach($pessoas as $pessoa)
      <option value="{{$pessoa->id}}" {{ !isset($registro->pessoa_id) ? '' :
      ($registro->pessoa_id == $pessoa->id ? 'selected' : '') }}>{{$pessoa->nome}}</option>
      @endforeach
    </select>
    <div>
<label>Quarto Número</label>
<select name="quarto_id" class="browser-default">
      @foreach($quartos as $quarto)
      <option value="{{$quarto->id}}" {{ !isset($registro->quarto_id) ? '' :
      ($registro->quarto_id == $quarto->id ? 'selected' : '') }}>{{$quarto->id}}</option>
      @endforeach
    </select>
    
    <br><br><br>
    </div>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    
 
    </script>
 
