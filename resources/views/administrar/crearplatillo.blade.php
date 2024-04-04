@include('administrar.header')      
<form action="{{url('admin/menu')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nombre">nombre</label>
    <br>
    <input type="text" name='nombre' id="nombre">
    <br>
    <label for="imagen">imagen</label>
    <br>
    <input type="file" name='imagen' id="imagen">
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
    <br>
    <select name="categoria" id="categoria">
        @foreach($lista as $categoria)
        <li></li>
        <option value="{{$categoria->nombre}}">{{$categoria->nombre}}</option>

        @endforeach
    </select>
    <br>
    <input type="submit">

</form>
@include('administrar.footer')      