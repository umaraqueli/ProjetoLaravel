<div class="input-field">
  <input type="text" name="capacidade" value="{{isset($registro->capacidade) ? $registro->capacidade : ''}}">
  <label>Capacidade Lotação</label></input></div>
  <div class="input-field">
  <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
  <label>Valor</label></input>
</div>
<div class="input-field">
  <input type="text" name="disponivel" value="{{isset($registro->disponivel) ? $registro->disponivel : ''}}">
  <label>Disponivel</label></input>
</div>
<div>
<label>Hotel</label>
<select name="hotel_id" class="browser-default">
      @foreach($hotels as $hotel)
      <option value="{{$hotel->id}}" {{ !isset($registro->hotel_id) ? '' :
      ($registro->hotel_id == $hotel->id ? 'selected' : '') }}>{{$hotel->nome}}</option>
      @endforeach
    </select>
    
    <br><br><br>
    </div>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    
 
    </script>
 
