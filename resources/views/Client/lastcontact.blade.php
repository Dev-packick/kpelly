@extends('layouts.client')
@section('content')
<div class="container-fluid bg-primary py-5 "
        style="margin-bottom: 90px; background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../img/contact-baniere.png) center center no-repeat;
    	background-size: cover;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Contact</h1>
            </div>
        </div>
    </div>
</div>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h3 class="mb-0">Le service client de KPELLYINDUSTRIES est disponible 7j/7 sur les numéros et adresse
                suivantes de 7h à 21h.
                Vous pouvez aussi nous contacter par courriel en remplissant le formulaire ci-dessous:
			</h3>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Appelez-nous pour toutes questions</h5>
                        <h7 class="text-primary mb-0">(+228) 90491838</h7>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Notre adresse email</h5>
                        <h7 class="text-primary mb-0">contact@kpellyindustries.com</h7>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Localisation</h5>
                        <h7 class="text-primary mb-0">Lomé (TOGO)</h7>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="post" action="{{ route('SAVECONTACT') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control border-0 bg-light px-4" name="nom" id="nom" placeholder="Votre Nom" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Votre Email" name="email" id="email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" name="sujet" id="Sujet" placeholder="Sujet" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="number" class="form-control border-0 bg-light px-4" name="telephone" id="telephone" placeholder="Telephone" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message" name="message" id="message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Envoyez</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.61204454239!2d1.1829566999999999!3d6.182647999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159c4fccbbf7b%3A0xeaf57155908450b3!2sKINGCAF%C3%89%20AFRICA!5e0!3m2!1sfr!2stg!4v1676415071819!5m2!1sfr!2stg"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0">
				</iframe>
            </div>
        </div>
        <div class="results">
			@if(Session::get('success'))
				<div class="alert alert-success">
				{{ Session::get('success') }}
				</div>
				@endif
				@if(session::get('error'))
				<div class="alert alert-success">
				{{ session::get('error') }}
				</div>
				@endif
				</div>
			</div>
		</div>
		<!-- Contact End -->
		@endsection