@include('administrar.header')
<h3>categorias:</h3>
<ul>
    @foreach($lista as $categoria)
        <li>{{$categoria->nombre}}</li>
        <form action="{{route('categorias.eliminar',$categoria->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar" onclick="return confirm('¿Quieres borrar esta categoria?')">
        </form>
    @endforeach
</ul>
<form action="{{url('/admin/menu')}}" method="POST">
    @csrf
    <label for="nombre">categoria</label><br>
    <input type="text" name='nombre' id="nombre"><br>
    <input type="submit" value="Insertar categoria">
</form>
<h2>platillos:</h2>
@foreach($platillos as $platillo)
        <ul>
            <li>{{$platillo->nombre}}</li>
            {{-- php artisan storage:link --}}
            <img src="{{asset('storage').'/'.$platillo->imagen}}" alt="" width="100">
            <li>{{$platillo->imagen}}</li>
            <li>{{$platillo->descripcion}}</li>
            <li>{{$platillo->precio}}</li>
            <li>{{$platillo->categoria}}</li>
            <a href="{{url('/admin/menu/editar/'.$platillo->id)}}">Editar</a>
            <form action="{{url('/admin/menu/eliminar/'.$platillo->id)}}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" value="X" onclick="return confirm('¿Quieres borrar este platillo?')">
            </form>
        </ul>

    @endforeach

<a href="{{url('/admin/crearplatillo')}}">Nuevo platillo</a>
@include('administrar.footer')      