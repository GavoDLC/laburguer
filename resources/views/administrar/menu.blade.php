@include('administrar.header')
<h3>categorias:</h3>
<ul>
    @foreach($lista as $categoria)
        <li>{{$categoria->nombre}}</li>
        <form action="{{route('categorias.eliminar',$categoria->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar">
        </form>
    @endforeach
</ul>
<form action="{{url('/admin/menu')}}" method="POST">
    @csrf
    <label for="nombre">categoria</label><br>
    <input type="text" name='nombre' id="nombre"><br>
    <input type="submit" value="Insertar categoria">
</form>

<a href="{{url('/admin/crearplatillo')}}">Nuevo platillo</a>
@include('administrar.footer')      