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
                <img src="{{ asset('images/slide.png') }}" class="w-100 d-block img-fluid">
                <div class="carousel-caption d-none d-md-block">
                      <h1>Denuncie Já</h1>
                      <p class="lead">Ajuda-nós a acabar com as irregularidades</p>
                </div>
              </div>
              
          </div>
              

        </div> <!--fim da carousel -->


<div class="container">
	<div class="row mt-4">
		<div class="col-sm-4">
			<div class="card border-primary mb-3 cards" style="max-width: 18rem;">
					<div class="card-header text-center" style="background-color: #D27791">
							<span style="font-size: 20px;">
								<i class="fas fa-brain"></i>
							</span>
							 Missão 1
						</div>
			  <div class="card-body text-primary">
			    <h5 class="card-title">Poluição Visual</h5>
			    <p class="card-text">Quais são as principais causas da poluição visual e o que devemos fazer a respeito.</p>
			  </div>
			  <div class="card-footer border-primary"><button type="button" class="btn btn-primary">Iniciar Missão</button></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card border-primary mb-3" style="max-width: 18rem;">
					<div class="card-header text-center" style="background-color: #917ED4">
							<span style="font-size: 20px;">
								<i class="fas fa-brain"></i>
							</span>
							 Missão 2
						</div>
			  <div class="card-body text-primary">
			    <h5 class="card-title">Crime Ambiental</h5>
			    <p class="card-text">O que é crime ambiental e qual a ligação disso nas instalações irregulares.</p>
			  </div>
			  <div class="card-footer border-primary"><button type="button" class="btn btn-primary">Iniciar Missão</button></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card border-primary mb-3" style="max-width: 18rem;">
					<div class="card-header text-center" style="background-color: #2B816D">
							<span style="font-size: 20px;">
								<i class="fas fa-brain"></i>
							</span>
							 Missão 3
					</div>
			  <div class="card-body text-primary">
			    <h5 class="card-title">Risco de acidentes</h5>
			    <p class="card-text">Quais os principais acidentes que podem ocorrer por causa de irregularidades nas instalações.</p>
			  </div>
			  <div class="card-footer border-primary"><button type="button" class="btn btn-primary">Iniciar Missão</button></div>
			</div>
		</div>
	</div>
</div>
@endsection