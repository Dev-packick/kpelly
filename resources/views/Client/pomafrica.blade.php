<html lang="fr">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <title>KPELLY INDUSTRIES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="KPELLY INDUSTRIES" name="title">
    <meta
        content="KPELLY INDUSTRIES est une entreprises spécialisé dans la production de café et de chips.
    	Nous disposons également d'une boulangerie de production de pains et biscuits sans oublier
    	nos pressing KPELLY CENTER"
        name="description">
    <meta content="keywords" name="KPELLY INDUSTRIES from TOGO to the world">
    <meta name="language" content="French">
    <!-- Favicon -->
    <link href="{{ asset ('client/assets/img/KI_icon.png')}}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Times New Roman:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/bootstrap1.css')}}" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('client/assets/css/style1.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('client/assets/css/responsive1.css')}}" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('client/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('client/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('client/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('client/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
		<!-- Topbar Start -->
		<div class="container-fluid bg-dark px-5 d-none d-lg-block">
			<div class="row gx-0">
				<div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
					<div class="d-inline-flex align-items-center" style="height: 45px;">
						<font color="white">
							<small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Lomé (TOGO)</small>
							<small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><a
									href="tel:+22890491838">(+228) 90491838</a></small>
							<small class="text-light"><i class="fa fa-envelope-open me-2"></i><a
									href="mailto:contact@kpellyindustries.com" data-placement="top"
									title="gmail">contact@kpellyindustries.com
								</a></small>
						</font>
					</div>
				</div>
				<div class="col-lg-4 text-center text-lg-end">
					<div class="d-inline-flex align-items-center" style="height: 45px;">
						<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
							href="https://www.facebook.com/kpellyinvestgroup?mibextid=ZbWKwL"><i
								class="fab fa-facebook-f fw-normal"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top">
                <a href="{{route('ACCUEIL')}}" class="navbar-brand ms-4 ms-lg-0" style="text-decoration: none; font-size: 1.5rem;">
                    <h1 class="text-primary m-0" style="font-size: inherit;">KPELLY INDUSTRIES</h1>
                </a>
                <!--logoEnd-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('ACCUEIL')}}" class="nav-item nav-link" style="margin: 0 5px;">ACCUEIL</a>
                        <a href="{{route('ABOUT')}}" class="nav-item nav-link" style="margin: 0 5px;">A PROPOS</a>
                        <a href="{{route('MOROKINGCAFE')}}" class="nav-item nav-link" style="margin: 0 5px;">MOROKINGCAFE</a>
                        <a href="{{route('FORPELLYCHIPS')}}" class="nav-item nav-link" style="margin: 0 5px;">FORPELLY CHIPS</a>
                        <a href="{{route('POMAFRICA')}}" class="nav-item nav-link" style="margin: 0 5px;">TAVERNELLO</a>
                    </div>
                    <a href="{{route('FORMCONTACT')}}" class="btn btn-primary py-2 px-4 ms-3">CONTACT</a>
                </div>
                <style>
                    /* CSS intégré pour ajustements responsives */
                    @media (max-width: 576px) {
                        .navbar-brand h1 {
                            font-size: 1.2rem; /* Ajuster la taille selon les besoins */
                        }
                        .navbar-nav .nav-link {
                            margin: 5px 0; /* Ajuster l'espacement pour les petits écrans */
                        }
                    }
                </style>
            </nav>

        <!-- Navbar End -->
		{{-- <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
				<div class="row py-5">
					<div class="col-12 pt-lg-5 mt-lg-5 text-center">
						<h1 class="display-4 text-white animated zoomIn">TAVERNELLO</h1>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- Navbar End -->

<!-- Section Hero -->
<div class="container-fluid d-flex flex-column justify-content-center align-items-center text-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('client/assets/img/RAISINS.png')}}') center/cover no-repeat; height: 100vh; color: white;">
    <h1 class="fw-bold" style="font-size: 3.5rem;">Découvrez l’Excellence du Vin Italien</h1>
    <p style="font-size: 1.3rem; max-width: 800px;">Un savoir-faire transmis de génération en génération, offrant des saveurs riches et inoubliables.</p>
    <a href="#presentation" class="btn text-white mt-3" style="background-color: #CB0030; padding: 12px 24px; border-radius: 8px; font-size: 1.1rem;">Explorer</a>
</div>

<!-- Section Présentation -->
<section id="presentation" class="container my-5 py-5">
    <div class="row d-flex align-items-center">
        <div class="col-lg-6">
            <img src="{{ asset('client/assets/img/VINN.png')}}" alt="Tavernello" class="img-fluid rounded shadow-lg">
        </div>
        <div class="col-lg-6 text-lg-start text-center mt-4 mt-lg-0">
            <h2 class="text-danger fw-bold">L’Art du Vin Italien</h2>
            <p class="text-muted">Tavernello est bien plus qu'un simple vin, c'est une expérience sensorielle inégalée, issue de cépages soigneusement sélectionnés. Chaque gorgée révèle un équilibre subtil entre tradition et modernité, offrant des arômes riches et complexes qui séduisent les palais les plus exigeants. Que ce soit pour un moment de détente ou un repas raffiné, Tavernello sublime chaque instant.</p>
            <div class="d-flex flex-column gap-2">
                <p><strong class="text-danger">Tavernello Rouge :</strong> Arômes intenses de fruits rouges et d'épices.</p>
                <p><strong class="text-danger">Tavernello Blanc :</strong> Élégant, aux notes florales et fruitées.</p>
                <p><strong class="text-danger">Tavernello Rosé :</strong> Frais et léger, idéal pour les beaux jours.</p>
            </div>
            <a href="#" class="btn text-white mt-3" style="background-color: #CB0030; padding: 12px 24px; border-radius: 8px; font-size: 1.1rem;">Commander Maintenant</a>
        </div>
    </div>
</section>

<!-- Section Nos Valeurs -->
<section class="container text-center my-5 py-5">
    <h2 class="text-danger fw-bold">Nos Valeurs</h2>
    <p class="text-muted">Un engagement profond envers la qualité, la tradition et la durabilité.</p>
    <div class="row mt-4 g-4">
        <div class="col-md-4">
            <div class="p-4 border rounded shadow-lg">
                <h3 class="fw-bold text-danger">Tradition</h3>
                <p class="text-muted">Un savoir-faire vinicole transmis de génération en génération.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded shadow-lg">
                <h3 class="fw-bold text-danger">Écologie</h3>
                <p class="text-muted">Des pratiques durables pour respecter notre planète.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded shadow-lg">
                <h3 class="fw-bold text-danger">Qualité</h3>
                <p class="text-muted">Des standards élevés pour un vin d'exception.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Notre Processus -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container text-center">
        <h2 class="text-danger fw-bold">Notre Processus de Fabrication</h2>
        <p class="text-muted">Une alchimie parfaite entre tradition et innovation pour un vin d’exception.</p>
        <div class="row mt-4 d-flex align-items-center">
            <div class="col-lg-6 text-start">
                <h3 class="fw-bold">De la Vigne à la Bouteille</h3>
                <p class="text-muted">Chaque étape de la fabrication de Tavernello est réalisée avec précision et passion pour garantir un vin d’une qualité irréprochable.</p>
                <ul class="list-unstyled text-muted">
                    <li>✅ <strong>Sélection rigoureuse des cépages :</strong> Seuls les meilleurs raisins sont choisis pour assurer des saveurs authentiques et uniques.</li>
                    <li>✅ <strong>Vinification maîtrisée et respectueuse :</strong> Un savoir-faire traditionnel allié aux techniques modernes pour préserver l’intégrité du vin.</li>
                    <li>✅ <strong>Vieillissement et mise en bouteille méticuleuse :</strong> Un processus minutieux pour affiner les arômes et offrir une expérience gustative incomparable.</li>
                    <li>✅ <strong>Expédition et distribution avec soin :</strong> Une logistique maîtrisée pour que chaque bouteille arrive entre vos mains dans les meilleures conditions.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('client/assets/img/TV.png')}}" alt="Processus de vinification" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Section Contact -->
<section class="container text-center my-5 py-5">
    <h2 class="text-danger fw-bold">Nous Contacter</h2>
    <p class="text-muted">Pour toute question ou commande, nous sommes à votre écoute.</p>
    <a href="tel:+22890491838" class="btn text-white" style="background-color: #CB0030; padding: 12px 24px; border-radius: 8px; font-size: 1.1rem;">Appelez-nous : (+228) 90491838</a>
</section>


        <!-- Section Galerie -->
        {{-- <section class="bg-light py-5">
            <div class="container text-center">
                <h2 class="text-danger fw-bold">Galerie</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <img src="{{ asset('client/assets/img/VINO.png')}}" alt="Vignoble" class="img-fluid rounded shadow-lg">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('client/assets/img/VINO.png')}}" alt="Cave à vin" class="img-fluid rounded shadow-lg">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('client/assets/img/VINO.png')}}" alt="Bouteilles de vin" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </section> --}}



		<!-- Vendor Start -->
		<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 mb-5">
                <div class="bg-white">
                    <div class="owl-carousel vendor-carousel">
                        <img src="{{ asset('client/assets/img/Ramco.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/TotalSA.jpeg')}}" alt="">
                        <img src="{{ asset('client/assets/img/SogeaSatom.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/Msc.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/FAIEJ.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/logo-2FEVRIER-lome.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/Espaceviva.jpg')}}" alt="">
                        <img src="{{ asset('client/assets/img/OMCATOGO.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/logo-sarakawa-min.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/Presidence.svg')}}" alt="">
                        <img src="{{ asset('client/assets/img/epiceriedulevant.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/tonomi-logo.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
		<!-- Vendor End -->

		<!-- Start Footer Area -->
		<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container">
				<div class="row gx-5">
					<div class="col-lg-4 col-md-6 footer-about">
						<div
							class="d-flex flex-column align-items-center justify-content-center text-center h-30 bg-primary p-4">
							<a href="/" class="navbar-brand">
								<h3 class="m-0 text-white">Newsletter</h3>
							</a>
							<p class="mt-3 mb-4">
								<font color="white">Inscrivez-vous gratuitement à notre newsletter pour ne raté aucune
									de nos informations
								</font>
							</p>
							<form method="post" action="/">
								@csrf
								@method('post')
								<div class="input-group">
									<input type="text" class="form-control border-white p-3"
										placeholder="Votre Email" name="email">
									<button class="btn btn-dark">Inscription</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-8 col-md-6">
						<div class="row gx-5">
							<div class="col-lg-4 col-md-12 pt-5 mb-5">
								<div class="section-title section-title-sm position-relative pb-3 mb-4">
									<h3 class="text-light mb-0">
										<font color="white">Contacts</font>
									</h3>
								</div>
								<div class="d-flex mb-2">
									<p>
										<a href="mailto:contact@kpellyindustries.com" data-placement="top"
											title="gmail">
											<font color="white">contact@kpellyindustries.com</font>
										</a>
									</p>
								</div>
								<div class="d-flex mb-2">
									<p>
										<a href="tel:+22890491838">
											<font color="white">(+228) 90491838</font>
										</a>
									</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
								<div class="section-title section-title-sm position-relative pb-3 mb-4">
									<h3 class="text-light mb-0">
										<font color="white">Nos pages</font>
									</h3>
								</div>
								<div class="link-animated d-flex flex-column justify-content-start">
									<a class="text-light mb-2" href="{{route('ABOUT')}}"><i
											class="bi bi-arrow-right text-primary me-2"></i>A propos</a>
									<a class="text-light mb-2" href="/kingcafe"><i
											class="bi bi-arrow-right text-primary me-2"></i>Kingcafe</a>
									<a class="text-light mb-2" href="/chips"><i
											class="bi bi-arrow-right text-primary me-2"></i>Forpellychips</a>
									<a class="text-light" href="/contact"><i
											class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
								<div class="section-title section-title-sm position-relative pb-3 mb-4">
									<h3 class="text-light mb-0">
										<font color="white">Réseaux</font>
									</h3>
								</div>
								<div class="link-animated d-flex flex-column justify-content-start">
									<a class="text-light mb-2" href="https://www.facebook.com/kpellyinvestgroup?mibextid=ZbWKwL"><i class="fab fa-facebook-f fw-normal"></i>&ensp;kpelly industries</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid text-white" style="background: #000;">
			<div class="container text-center">
				<div class="row justify-content-end">
					<div class="col-lg-8 col-md-6">
						<div class="d-flex align-items-center justify-content-center" style="height: 75px;">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Area -->

		<!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset ('client/assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset ('client/assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset ('client/assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset ('client/assets/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset ('client/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <!-- Template Javascript -->
        <script src="{{ asset('client/assets/js/main.js')}}"></script>
</body>
</html>
