@extends('index')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div id="carouselSite" class="carousel slide" data-ride="carousel">
         {{-- <ol class="carousel-indicators">
            <li data-target="carouselSite" data-slide-to="0" class="active"></li>
          </ol>
          --}}

          <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/slide.jpg') }}" class="w-100 d-block">
                <div class="carousel-caption d-none d-md-block">
                      <h1>Denuncie Já</h1>
                      <p class="lead">Ajuda-nós a acabar com as irregularidades</p>
                </div>
              </div>
              
          </div>
              

        </div> <!--fim da carousel -->


<div class="container">
	<div class="row mt-4">
				<div class="col-sm-6 col-md-4">
	                <div class="card mb-5">
	                    <div class="card-body">
	                      <h4 class="card-title"> Norma 1000</h4>
	                      <h6 class="card-subtitle mb-2 text-muted"> Aprendizagem de normas</h6>
	                      <p class="card-text">Saiba mais sobre as normas referentes a poluição visual</p>
	                     </div>
	                     <div class="card-body">
	                      <a href="#" class="card-link">Ler Mais</a>
	                    </div>  
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-4">
	                <div class="card mb-5">
	                    <div class="card-body">
	                      <h4 class="card-title"> Norma 1000</h4>
	                      <h6 class="card-subtitle mb-2 text-muted"> Aprendizagem de normas</h6>
	                      <p class="card-text">Saiba mais sobre as normas referentes a poluição visual</p>
	                     </div>
	                     <div class="card-body">
	                      <a href="#" class="card-link">Ler Mais</a>
	                    </div>  
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-4">
	                <div class="card mb-5">
	                    <div class="card-body">
	                      <h4 class="card-title"> Norma 1000</h4>
	                      <h6 class="card-subtitle mb-2 text-muted"> Aprendizagem de normas</h6>
	                      <p class="card-text">Saiba mais sobre as normas referentes a poluição visual</p>
	                     </div>
	                     <div class="card-body">
	                      <a href="#" class="card-link">Ler Mais</a>
	                    </div>  
	                </div>
	            </div>
		

	</div>
</div>
@endsection