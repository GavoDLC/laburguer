    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ isset($datosplatillo->nombre) ? $datosplatillo->nombre : '' }}">
    </div>
    <div class="form-group">
        <label for="imagen">Imagen</label>
        <br>
        @if(isset($datosplatillo->imagen))
            <img src="{{ asset('storage/' . $datosplatillo->imagen) }}" alt="" width="100">
        @endif
        <input type="file" class="form-control-file" id="imagen" name="imagen">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ isset($datosplatillo->descripcion) ? $datosplatillo->descripcion : '' }}">
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" value="{{ isset($datosplatillo->precio) ? $datosplatillo->precio : '' }}">
    </div>
    <div class="form-group">
        <label for="categoria">Categoría</label>
        <select class="form-control" id="categoria" name="categoria">
            @if(isset($datosplatillo->categoria))
                <option value="{{ $datosplatillo->categoria }}">{{ $datosplatillo->categoria }}</option>
            @endif
            @foreach($lista as $categoria)
                <option value="{{ $categoria->nombre }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
