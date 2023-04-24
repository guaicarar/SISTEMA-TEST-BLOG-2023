@extends('layouts.app')

@section('content')
  @if (Auth::check())
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="{{route('blog.create')}}" class="btn btn-info"><span class="navbar-brand mb-0 h1">{{ __('Crear Blog') }}</span></a>
            <br>
            <br>
          <div class="card  border-primary mb-3">
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <center><p>{{ $message }}</p></center>
              </div>
            @endif
            @foreach ($dataBlog as $blog)
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                        
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{$blog->title}}
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>{{$blog->title}}</strong> {{$blog->description}} <br><br>
                    <strong>Publicacion: {{$blog->date}}</strong>
                    <!-- Botón de editar el blog -->
                      @if(Auth::user()->type == 1)
                        <a class="btn btn-sm btn-success" href="{{route('blog.edit', $blog->id)}}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                      @endif
                   
                    <!-- Botón de Eliminar el blog-->
                      @if(Auth::user()->type == 1)
                        <form action="{{route('blog.destroy', $blog)}}" method="POST" class="d-inline">                           
                          @csrf
                        {{ method_field('DELETE')}} 
                          <input type="submit" onclick="return confirm('¿Quieres Borrar el Blog?')"                
                          value="Eliminar" class="btn btn-danger" >
                        </form>
                      @endif
                  </div>
                </div>      
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="card border-primary mb-3" style="max-width: 80rem;" > 
            <form class="form-inline" action="{{route('search-date')}}" method="post">
              @csrf
              <br>
              <label for="form-control" >Seleccione la fecha</label>
              
              <div class="row mb-3">
                <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Fecha') }}</label>
                <div class="col-md-6">
                    <input id="date" type="date" class="form-control" name="date" required autocomplete="date" autofocus>
                </div>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Buscar</button>
            </form>
          </div>
        </div> 
      </div>
    </div>
  @else
  <div class="container">
    <div class="row">
        <div class="col-md-6">
          <div class="card  border-primary mb-3">
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <center><p>{{ $message }}</p></center>
              </div>
            @endif
            @foreach ($dataBlog as $blog)
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                        
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{$blog->title}}
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>{{$blog->title}}</strong> {{$blog->description}} <br><br>
                    <strong>Publicacion: {{$blog->date}}</strong>
                  </div>
                </div>      
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="card border-primary mb-3" style="max-width: 80rem;" > 
            <form class="form-inline" action="{{route('search-date')}}" method="post">
              @csrf
              <br>
              <label for="form-control" >Seleccione la fecha</label>
              
              <div class="row mb-3">
                <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Fecha') }}</label>
                <div class="col-md-6">
                    <input id="date" type="date" class="form-control" name="date" required autocomplete="date" autofocus>
                </div>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Buscar</button>
            </form>
          </div>
        </div> 
      </div>
    </div>
  @endif
@endsection