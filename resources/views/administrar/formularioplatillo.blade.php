@csrf
<label for="nombre">nombre</label>
<br>
<input type="text" name='nombre' id="nombre" value={{isset($datosplatillo->nombre)?$datosplatillo->nombre:''}}>
<br>
<label for="imagen">imagen</label>
<br>
@if(isset(($datosplatillo->imagen)))
    <img src="{{asset('storage').'/'.$datosplatillo->imagen}}" alt="" width="100">
@endif
<br>
<input type="file" name='imagen' id="imagen">
<br>
<label for="descripcion">descripcion</label>
<br>
<input type="text" name='descripcion' id="descripcion" value="{{isset($datosplatillo->descripcion)?$datosplatillo->descripcion:''}}">
<br>
<label for="precio">precio</label>
<br>
<input type="text" name='precio' id="precio" value="{{isset($datosplatillo->precio)?$datosplatillo->precio:''}}">
<br>
<label for="categoria">categoria</label>
<br>
<select name="categoria" id="categoria">
    @if(isset($datosplatillo->categoria))
        <option value="{{$datosplatillo->categoria}}">{{isset($datosplatillo->categoria)?$datosplatillo->categoria:''}}</option>
    @endif
    @foreach($lista as $categoria)
    <option value="{{$categoria->nombre}}">{{$categoria->nombre}}</option>
    @endforeach
</select>
<br>
<input type="submit">
