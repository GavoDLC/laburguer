@include('administrar.header')      
<h1>crear un platillo</h1>
<form action="{{route('platillo.crear')}}" method="POST" enctype="multipart/form-data">
@include('administrar.formularioplatillo ')
</form>
@include('administrar.footer')      