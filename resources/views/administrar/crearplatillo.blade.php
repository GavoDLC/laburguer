<form action="{{url('admin/menu')}}">
    <label for="nombre">nombre</label>
    <br>
    <input type="text" name='nombre' id="nombre">
    <br>
    <label for="imagen">imagen</label>
    <br>
    <input type="text" name='imagen' id="imagen">
    <br>
    <label for="descripcion">descripcion</label>
    <br>
    <input type="text" name='descripcion' id="descripcion">
    <br>
    <label for="precio">precio</label>
    <br>
    <input type="text" name='precio' id="precio">
    <br>
    <label for="categoria">categoria</label>
    <select name="categoria" id="categoria">
        <option value="1">opcion 1</option>
        <option value="2">opcion 2</option>
        <option value="3">opcion 3</option>

    </select>
    <input type="submit">

</form>