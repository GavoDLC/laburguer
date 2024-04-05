@include('administrar.header')  





<h1>editar un platillo</h1>



<form action="{{url('/admin/menu/editar/'.$datosplatillo->id)}}" method="POST" enctype="multipart/form-data">

    {{method_field('PATCH')}}
    
    @include('administrar.formularioplatillo ')
</form>




@include('administrar.footer')      

