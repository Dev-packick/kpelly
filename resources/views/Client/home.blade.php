@extends('layouts.client')
@section('content')
		<!-- CAROUSEL START -->
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" style="position: relative; overflow: hidden; background-color: #000;">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('client/assets/img/CAFBANN.png') }}" alt="Image" style="height: 100vh; object-fit: cover; filter: brightness(70%); transition: transform 1.5s ease-in-out, opacity 1s ease-in-out;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <h1 style="color: #fff; font-size: 4rem; font-weight: bold; text-shadow: 0 4px 10px rgba(0, 0, 0, 0.9); animation: fadeInUp 2s ease-out;">Bienvenue</h1>
                        <p style="color: #ccc; font-size: 1.5rem; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7); margin-top: 20px; animation: fadeInUp 2s ease-out;">Découvrez nos services et notre expertise.</p>
                        <a href="#services" class="btn btn-primary" style="margin-top: 30px; padding: 10px 30px; font-size: 1.2rem; color: #fff; background: linear-gradient(45deg, #3a3347, #000); border: none; border-radius: 50px; transition: transform 0.3s, background 0.3s; text-transform: uppercase; text-decoration: none;">En savoir plus</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <!--<div class="carousel-item">-->
                <!--    <img class="w-100" src="{{ asset('client/assets/img/SLID6.jpg') }}" alt="Image" style="height: 100vh; object-fit: cover; filter: brightness(70%); transition: transform 1.5s ease-in-out, opacity 1s ease-in-out;">-->
                <!--    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">-->
                <!--        <h1 style="color: #fff; font-size: 4rem; font-weight: bold; text-shadow: 0 4px 10px rgba(0, 0, 0, 0.9); animation: fadeInUp 2s ease-out;">Nos Solutions</h1>-->
                <!--        <p style="color: #ccc; font-size: 1.5rem; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7); margin-top: 20px; animation: fadeInUp 2s ease-out;">Innovantes et adaptées à vos besoins.</p>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('client/assets/img/CARSL.png') }}" alt="Image" style="height: 100vh; object-fit: cover; filter: brightness(70%); transition: transform 1.5s ease-in-out, opacity 1s ease-in-out;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <h1 style="color: #fff; font-size: 4rem; font-weight: bold; text-shadow: 0 4px 10px rgba(0, 0, 0, 0.9); animation: fadeInUp 2s ease-out;">Notre Équipe</h1>
                        <p style="color: #ccc; font-size: 1.5rem; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7); margin-top: 20px; animation: fadeInUp 2s ease-out;">Professionnelle et passionnée.</p>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('client/assets/img/VINO.png') }}" alt="Image" style="height: 100vh; object-fit: cover; filter: brightness(70%); transition: transform 1.5s ease-in-out, opacity 1s ease-in-out;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <h1 style="color: #fff; font-size: 4rem; font-weight: bold; text-shadow: 0 4px 10px rgba(0, 0, 0, 0.9); animation: fadeInUp 2s ease-out;">Rejoignez-Nous</h1>
                        <p style="color: #ccc; font-size: 1.5rem; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7); margin-top: 20px; animation: fadeInUp 2s ease-out;">Ensemble, construisons l'avenir.</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" style="z-index: 5; position: absolute; top: 50%; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); border: none; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" style="z-index: 5; position: absolute; top: 50%; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); border: none; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
        <!-- CAROUSEL END -->
    </div>
    <!-- HEADER END -->


        <!-- UNDER CAROUSEL START -->
        <div class="container-fluid facts py-5 pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                        <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/mgmiqlge.json" trigger="hover"
                                    colors="primary:#3a3347,secondary:#f24c00,tertiary:#000,quaternary:#ebe6ef"
                                    style="width:40px;height:40px">
                                </lord-icon>
                            </div>
                            <div class="ps-4">
                                <h4 class="text-white mb-0">Horaires</h4>
                                <h7 class="text-white mb-0">Ouvert de Lundi à vendredi<br>de 8h à 20h</h7>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                        <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/oaflahpk.json" trigger="hover"
                                    colors="primary:#fff" style="width:40px;height:40px">
                                </lord-icon>
                            </div>
                            <div class="ps-4">
                                <h4 class="text-black mb-0">Localisation</h4>
                                <h7 class="text-black mb-0">Nous sommes à Lomé au Togo, en face de l’église winner chapel</h7>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/flvisirw.json" trigger="hover"
                                    colors="primary:#3a3347,secondary:#3a3347,tertiary:#3a3347"
                                    style="width:50px;height:50px">
                                </lord-icon>
                            </div>
                            <div class="ps-4">
                                <h4 class="text-white mb-0">Contacts</h4>
                                <h7 class="text-white mb-0">contact@kpellyindustries.com<br> (+228) 90491838</h7>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- UNDER CAROUSEL END -->


        <!-- ABOUT START -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">A propos de nous</h5>
                            <h1 class="mb-0">QUI SOMMES-NOUS?</h1>
                        </div>
                        <p class="mb-4" style="font-size: 1.1rem; line-height: 1.6; color: #555;">
                            <entier class="Lorem">KPELLY INDUSTRIES est une entreprise togolaise spécialisée dans la production, la distribution
                                et la commercialisation de produits alimentaires et de boissons de qualité. Son portefeuille varié inclut
                                des chips de maïs, des biscuits, des vins italiens, ainsi que des solutions innovantes autour du café,
                                positionnant l’entreprise comme un acteur clé du secteur agroalimentaire au Togo<br>
                                Il est dirigé par Elom Paul Kpelly.<br>
                            </entier>
                            Kpelly Industries a en son sein 4 filiales qui sont :<br>
                        </p>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3" style="background: linear-gradient(to right, #40271e, #d4af37);
                                    -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    KINGCAFE
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-3" style="background: linear-gradient(to right, #fffb00, #9acd32);
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    FORPELLY CHIPS
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3" style="background: linear-gradient(to right, #ff0000, #800080, #0000ff);
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    ABLEVI
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-3" style="background: linear-gradient(to right, #7b001c, #a40028, #d1003c);
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    TAVERNELLO
                                </h5>
                            </div>
                        </div>
                        <a href="/about" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">En savoir plus</a>
                    </div>
                    <div class="col-lg-5" style="min-height: 100px;">
                        <div class="position-relative h-100">
							<img class="img-fluid" src="{{ asset('client/assets/img/LK.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT END -->


        <!-- FORPELLY CHIPS START -->
        <div class="container-xxl py-5 wow fadeInUp" style="margin-top: 50px; position: relative; overflow: hidden;">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <!-- Section d'images avec effet 3D et ajustement responsive -->
                    <div class="col-12 col-lg-6 zoomOut" data-wow-delay="0.3s" style="position: relative; perspective: 1500px; display: flex; justify-content: center; flex-wrap: wrap;">
                        <!-- Image 1 -->
                        <div class="image-wrapper" style="width: 48%; margin: 5px; transform-style: preserve-3d; transform: rotateY(-15deg) translateZ(50px); transition: transform 0.5s ease;">
                            <img src="{{ asset('client/assets/img/FP1.png') }}"
                                style="width: 100%; border-radius: 15px; box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.3);">
                        </div>
                        <!-- Image 2 -->
                        <div class="image-wrapper" style="width: 48%; margin: 5px; transform-style: preserve-3d; transform: rotateY(15deg) translateZ(40px); transition: transform 0.5s ease;">
                            <img src="{{ asset('client/assets/img/ABV.png') }}"
                                style="width: 100%; border-radius: 15px; box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.3);">
                        </div>
                        <!-- Image 3 -->
                        <div class="image-wrapper" style="width: 48%; margin: 5px; transform-style: preserve-3d; transform: rotateY(-10deg) translateZ(60px); transition: transform 0.5s ease;">
                            <img src="{{ asset('client/assets/img/FP3.png') }}"
                                style="width: 100%; border-radius: 15px; box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.3);">
                        </div>
                        <!-- Image 4 -->
                        <div class="image-wrapper" style="width: 48%; margin: 5px; transform-style: preserve-3d; transform: rotateY(10deg) translateZ(30px); transition: transform 0.5s ease;">
                            <img src="{{ asset('client/assets/img/FP2.png') }}"
                                style="width: 100%; border-radius: 15px; box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.3);">
                        </div>
                    </div>

                    <!-- Section texte -->
                    <div class="col-12 col-lg-6" style="opacity: 0; transform: translateY(20px); animation: fadeIn 1s ease-in-out 0.5s forwards;">
                        <h1 class="mb-4" style="font-size: 2.5rem; font-weight: bold; line-height: 1.3; color: #333;">
                            Des Classiques Aux Saveurs Audacieuses, Chaque Bouchée Vous Emportera Dans Un Voyage Gustatif Unique
                        </h1>
                        <p class="mb-4 wow zoomInRight" data-wow-delay="0.4s" style="font-size: 1.1rem; line-height: 1.6; color: #555;">
                            Plongez dans l'univers croustillant de nos chips de maïs artisanales, créées
                            pour ravir vos papilles avec des saveurs authentiques et une texture irrésistible.
                        </p>
                        <p class="mb-4 wow zoomInLeft" data-wow-delay="0.3s" style="font-size: 1.1rem; line-height: 1.6; color: #555;">
                            Nos chips sont fabriquées à partir de maïs de première qualité, soigneusement sélectionné
                            pour garantir une expérience savoureuse et croquante.
                        </p>
                        <a class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"data-wow-delay="0.5s"
                        style="border: none; color: white; font-size: 1rem; display: inline-block;">
                            FORPELLY CHIPS SARL
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FORPELLY CHIPS END -->


		<!-- TITRE COFFEE START -->
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto wow fadeInUp" style="max-width: 600px; margin-top: 80px;">
            <h5 class="fw-bold text-primary text-uppercase">NOTRE CAFE</h5>
            <h6 class="mb-0">
                Chaque grain de café provient de régions renommées pour leur culture de café, et nous nous
                engageons à vous offrir une traçabilité complète depuis la plantation jusqu'à la tasse.
            </h6>
        </div>
		<!-- TITRE COFFEE END -->


        {{-- <div class="container-fluid my-5 p-0">
            <div class="row g-0">
                <div class="col-12">
                    <marquee behavior="scroll" direction="left" scrollamount="10" style="width: 100%;">
                        <div class="col-xl-3 col-sm-6" style="display: inline-block; padding-right: 10px;">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('client/assets/img/MOROKINGCAFE9.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6" style="display: inline-block; padding-right: 10px;">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('client/assets/img/MOROKINGCAFE5.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6" style="display: inline-block; padding-right: 10px;">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('client/assets/img/MOROKINGCAFE3.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6" style="display: inline-block; padding-right: 10px;">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('client/assets/img/MOROKINGCAFE4.jpg') }}" alt="" />
                            </div>
                        </div>
                        <!-- Répéter les images pour un défilement continu -->
                        <div class="col-xl-3 col-sm-6" style="display: inline-block; padding-right: 10px;">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('client/assets/img/MOROKINGCAFE9.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6" style="display: inline-block; padding-right: 10px;">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('client/assets/img/MOROKINGCAFE5.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6" style="display: inline-block; padding-right: 10px;">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('client/assets/img/MOROKINGCAFE3.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6" style="display: inline-block; padding-right: 10px;">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('client/assets/img/MOROKINGCAFE4.jpg') }}" alt="" />
                            </div>
                        </div>
                    </marquee>
                </div>

                <center><a class="btn btn-primary py-3 px-5 mt-3">KINGCAFE</a></center>
            </div>
        </div> --}}


        <!-- NOTRE CAFE START -->
        <div class="container-fluid my-5 p-0" style="display: flex; justify-content: center;">
            <div style="max-width: 1200px; width: 100%; padding: 2rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                <!-- Image 1 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/kc1.png') }}" alt="Image 1" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 2 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/kc2.png') }}" alt="Image 2" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 3 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/kc3.png') }}" alt="Image 3" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 4 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/kc4.png') }}" alt="Image 4" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 5 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/kc5.png') }}" alt="Image 5" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 1 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/coffee2.png') }}" alt="Image 1" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 2 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/coffee3.png') }}" alt="Image 2" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 3 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/coffee4.png') }}" alt="Image 3" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 4 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/coffee5.png') }}" alt="Image 4" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Image 5 -->
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img src="{{ asset('client/assets/img/coffee1.png') }}" alt="Image 5" style="width: 100%; height: 15rem; object-fit: cover; display: block;">
                    <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.6); color: white; border: none; border-radius: 50%; padding: 1rem; cursor: pointer; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- Bouton -->
                <a href="/about" style="background-color: #000000; color: white; text-align: center; padding: 1rem 2rem; font-size: 1.2rem; border-radius: 5px; text-decoration: none; margin-top: 1rem; display: inline-block; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    KINGCAFE
                </a>
            </div>
        </div>
        <!-- NOTRE CAFE END -->


        <!-- EQUIPE START -->
        <!--<div class="container-xxl py-5">-->
        <!--    <div class="container">-->
        <!--        <div class="row g-5 align-items-center">-->
        <!--            <div class="col-lg-6">-->
        <!--                <h1 class="mb-4">Kpelly Team</h1>-->
        <!--                <p class="mb-4">Rencontrez notre équipe de talents exceptionnels : des parcours divers, des compétences pointues et un dévouement envers l'excellence.</p>-->
        <!--                <p class="mb-4">Chaque membre partage une passion pour nos valeurs, travaillant de manière collaborative pour vous offrir une expérience exceptionnelle.</p>-->
        <!--                <p class="mb-4">Ensemble, nous avons réalisé des projets qui ont eu un impact significatif, démontrant notre capacité à relever des défis complexes.</p>-->
        <!--                <div class="row g-4 mb-4">-->
        <!--                    <div class="col-sm-6">-->
        <!--                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">-->
        <!--                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">8</h1>-->
        <!--                            <div class="ps-4">-->
        <!--                                <p class="mb-0">Années d'</p>-->
        <!--                                <h6 class="text-uppercase mb-0">Experience</h6>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-sm-6">-->
        <!--                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">-->
        <!--                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">8</h1>-->
        <!--                            <div class="ps-4">-->
        <!--                                <p class="mb-0">années de</p>-->
        <!--                                <h6 class="text-uppercase mb-0"> défis & réalisation</h6>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <a class="btn btn-primary py-3 px-5 mt-2">KPELLY INDUSTRIES</a>-->
        <!--            </div>-->
        <!--            <div class="col-lg-6 d-flex justify-content-center">-->
        <!--                <img class="img-fluid rounded-circle w-85 wow zoomIn" data-wow-delay="0.1s" src="{{ asset ('client/assets/img/DRG.jpg')}}">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- EQUIPE END -->
        
        <section style="max-width:1100px;margin:60px auto;padding:20px 30px;font-family:Arial,Helvetica,sans-serif;color:#333;">
          <div style="display:flex;flex-wrap:wrap;align-items:center;gap:40px;">
            
            <!-- Texte -->
            <div style="flex:1 1 500px;min-width:280px;">
              <h1 style="font-size:28px;color:#1e7a2e;margin:0 0 20px 0;font-weight:700;">Biographie</h1>
              <p style="margin:0 0 14px 0;font-size:16px;line-height:1.6;">
                <b>KPELLY Koami Elom Paul</b> est un entrepreneur togolais engagé, passionné par
                l’industrie agroalimentaire et profondément investi dans la valorisation des ressources
                locales. Visionnaire et bâtisseur, il est le <b>Fondateur et Directeur Général de
                KPELLY INDUSTRIES</b>, une entreprise innovante spécialisée dans la transformation de
                produits alimentaires et le développement de marques accessibles, compétitives et
                porteuses de valeur pour les consommateurs africains.
              </p>
              <p style="margin:0 0 14px 0;font-size:16px;line-height:1.6;">
                Son parcours académique débute en Italie, où il obtient en <b>2012</b> un diplôme à
                <b>l’ISS Gadda de Fornovo di Taro</b>, une école professionnelle d’économie industrielle.
                Il poursuit ensuite des études en <b>Droit International</b> à l’<b>Université de Milan (UNIMI)</b>,
                renforçant ainsi une double expertise technique et juridique.
              </p>
              <p style="margin:0 0 14px 0;font-size:16px;line-height:1.6;">
                Avant de se consacrer pleinement à l’entrepreneuriat, M. KPELLY a travaillé au sein de
                <b>INDITEX Italie</b>, <b>Apple Inc. Italie</b> et <b>Ferrari S.p.A.</b>, ce qui lui a
                permis d’acquérir une vision globale des standards internationaux. En <b>2016</b>, il crée
                à Milan une entreprise dans le secteur du textile.
              </p>
              <p style="margin:0 0 14px 0;font-size:16px;line-height:1.6;">
                Animé par la conviction que l’Afrique peut bâtir une industrie forte et compétitive, il
                décide en <b>2017</b> de revenir au Togo et fonde <b>KPELLY INDUSTRIES</b>.
              </p>
              <p style="margin:0 0 20px 0;font-size:16px;line-height:1.6;">
                Sous son leadership, l’entreprise a lancé plusieurs gammes de produits devenus emblématiques
                sur le marché togolais, alliant <b>qualité</b>, <b>accessibilité</b> et <b>innovation</b>.
              </p>
              
              <!-- Logos -->
              <div style="display:flex;gap:16px;flex-wrap:wrap;align-items:center;">
                <img src="{{ asset('client/assets/img/C2.png') }}" alt="Logo 1" style="height:36px;">
                <img src="{{ asset('client/assets/img/C3.png') }}" alt="Logo 2" style="height:36px;">
                <img src="{{ asset('client/assets/img/C1.png') }}" alt="Logo 3" style="height:36px;">
              </div>
            </div>
            
            <!-- Photo -->
            <div style="flex:1 1 500px;min-width:280px;display:flex;justify-content:center;">
              <img src="{{ asset('client/assets/img/DG.jpg')}}" alt="Portrait"
                   style="width:100%;max-width:500px;box-shadow:0 6px 20px rgba(0,0,0,.15);">
            </div>
          </div>
        </section>




        <!-- POURQUOI NOUS CHOISIR START -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Pourquoi nous choisir</h5>
                    <h4 class="mb-0">Le groupe Kpelly Industries dispose de la première unité de transformation de maïs en chips de maïs soufflé, ainsi de la plus importante unité de transformation du café sur le plan local.</h4>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.2s">
                        <div class="position-relative d-flex flex-column align-items-center text-center">
                            <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h3>Meilleure en industrialisation</h3>
                            <p class="mb-0">Première usine de transformation de maïs et de café, offrant produits et services de qualité</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.4s">
                        <div class="position-relative d-flex flex-column align-items-center text-center">
                            <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h3>Personnel professionnel</h3>
                            <p class="mb-0">Nous disposons d'une jeune équipe, dynamique et experte dans chaque département.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.6s">
                        <div class="position-relative d-flex flex-column align-items-center text-center">
                            <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h3>Primé pour notre expertise</h3>
                            <p class="mb-0">Nous sommes la première marque de café en capsules fabriquées au Togo</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.8s">
                        <div class="position-relative d-flex flex-column align-items-center text-center">
                            <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h3>Accessible 24h/24 <br>et 7j/7</h3>
                            <p class="mb-0">Nous sommes prêts à vous servir en priorité avec diligence sans tarder.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- POURQUOI NOUS CHOISIR END -->


        <!-- VIDEOS START -->
        <section style="background: linear-gradient(135deg, #a09e9d, #4c4743); padding: 50px 0;">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-uppercase" style="color: #ffffff; font-size: 28px; text-transform: uppercase; letter-spacing: 3px; font-family: 'Arial', sans-serif;">Vidéos</h5>
            </div>

            <div style="display: flex; justify-content: center; align-items: center; padding: 20px; flex-wrap: wrap;">
                <div style="box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); border-radius: 12px; overflow: hidden; max-width: 100%; width: 800px;">
                    <video controls style="width: 100%; height: auto; border-radius: 12px;">
                        <source src="{{asset('client/assets/video/VID_KI.mp4')}}" type="video/mp4">
                        <source src="{{asset('client/assets/video/VID_KI.mp4')}}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>
        <!-- VIDEOS END -->


        <!-- POURQUOI INVESTIR START -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #f9f9f9;">
            <div class="container py-5">
                <!-- Section Title -->
                <div class="section-title text-center position-relative pb-4 mb-5 mx-auto" style="max-width: 700px;">
                    <h5 class="fw-bold text-primary text-uppercase">Exploration</h5>
                    <h1 class="mb-0" style="text-shadow: 2px 2px 5px rgba(0,0,0,0.2);">Pourquoi investir à <br> KPELLY INDUSTRIES</h1>
                </div>
                <!-- Dynamic Content Carousel -->
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Slide 1 -->
                    <div class="testimonial-item bg-white p-4 my-3" style="border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); overflow: hidden;">
                        <div class="testimonial-img-container mb-4" style="height: 250px; overflow: hidden; border-radius: 10px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('client/assets/img/C2.png') }}" alt="Production de café" style="object-fit: cover;">
                        </div>
                        <h5 class="fw-bold text-primary">Café KINGCAFE</h5>
                        <p class="text-muted" style="font-size: 1rem; line-height: 1.6;">
                            Le Togo offre un climat idéal pour le café. Avec des récoltes pérennes et une demande croissante, cet investissement garantit des revenus stables sur le long terme.
                        </p>
                    </div>
                    <!-- Slide 2 -->
                    <div class="testimonial-item bg-white p-4 my-3" style="border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); overflow: hidden;">
                        <div class="testimonial-img-container mb-4" style="height: 250px; overflow: hidden; border-radius: 10px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('client/assets/img/C3.png') }}" alt="Biscuits Artisanaux" style="object-fit: cover;">
                        </div>
                        <h5 class="fw-bold text-primary">Biscuits ABLEVI</h5>
                        <p class="text-muted" style="font-size: 1rem; line-height: 1.6;">
                            Nos biscuits <strong>Ablevi</strong>, faits avec soin au Togo, sont l’alliance parfaite de tradition et de modernité. Une opportunité unique pour valoriser les produits locaux.
                        </p>
                    </div>
                    <!-- Slide 3 -->
                    <div class="testimonial-item bg-white p-4 my-3" style="border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); overflow: hidden;">
                        <div class="testimonial-img-container mb-4" style="height: 250px; overflow: hidden; border-radius: 10px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('client/assets/img/C1.png') }}" alt="Culture du Maïs" style="object-fit: cover;">
                        </div>
                        <h5 class="fw-bold text-primary">Chips FORPELLYCHIPS</h5>
                        <p class="text-muted" style="font-size: 1rem; line-height: 1.6;">
                            Aliment de base au Togo, le maïs est toujours en forte demande. Avec des rendements élevés, il représente une opportunité d’investissement sûre et rentable.
                        </p>
                    </div>
                    <!-- Slide 4 -->
                    <div class="testimonial-item bg-white p-4 my-3" style="border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); overflow: hidden;">
                        <div class="testimonial-img-container mb-4" style="height: 250px; overflow: hidden; border-radius: 10px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('client/assets/img/C4.png') }}" alt="Biscuits Artisanaux" style="object-fit: cover;">
                        </div>
                        <h5 class="fw-bold text-primary">Vin TAVERNELLO</h5>
                        <p class="text-muted" style="font-size: 1rem; line-height: 1.6;">
                            {{-- Nos biscuits <strong>Ablevi</strong>, faits avec soin au Togo, sont l’alliance parfaite de tradition et de modernité. Une opportunité unique pour valoriser les produits locaux. --}}
                            Réputé pour sa qualité et son authenticité, c'est l’un des vins italiens les plus appréciés. Importé avec soin, il offre aux amateurs de bons crus une expérience gustative raffinée.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- POURQUOI INVESTIR END -->


        <!-- TEAM START -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Notre équipe</h5>
                </div>
                <div class="row g-5" style="display: flex; justify-content: center; align-items: center;">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset ('client/assets/img/DGE.png')}}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">KPELLY Koami Elom Paul</h4>
                                <p class="text-uppercase m-0">Directeur Général</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset ('client/assets/img/DAE.png')}}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">CISSE Mohamed Korech</h4>
                                <p class="text-uppercase m-0">Directeur des opérations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TEAM END -->


        <!-- BLOG START -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #f8f9fa;">
            <div class="container py-5">
                <!-- Section Title -->
                <div class="section-title text-center position-relative pb-4 mb-5 mx-auto" style="max-width: 700px;">
                    <h5 class="fw-bold text-uppercase">Actualités Récentes</h5>
                    <h3 class="mb-0" style="line-height: 1.6; color: #343a40;">
                        Lisez les derniers articles de notre blog
                    </h3>
                </div>
                <!-- Blog Posts Row -->
                <div class="row g-4">
                    @foreach ($commerce->take(3) as $commerce)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-white rounded shadow-sm overflow-hidden" style="transition: transform 0.3s; border: 1px solid #ddd;">
                            <div class="blog-img position-relative overflow-hidden" style="height: 250px; width: 100%; aspect-ratio: 1 / 1;">
                                <img class="img-fluid w-100 h-100" src="{{ asset('/articlesImages/' . $commerce->image)}}" alt="" style="object-fit: cover; border-radius: 0;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-25" style="opacity: 0; transition: opacity 0.3s;"></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <small class="text-muted"><i class="far fa-calendar-alt text-primary me-2"></i>{{ $commerce->created_at->translatedFormat('d F Y')}}</small>
                                </div>
                                <h5 class="fw-bold mb-2" style="color: #007bff;">{{ $commerce->nom_produit }}</h5>
                                <p class="text-muted mb-4" style="line-height: 1.5; font-size: 14px;">{{ \Illuminate\Support\Str::limit($commerce->descript_produit, 120) }}</p>
                                <a class="btn btn-primary w-100" href="#" style="font-size: 14px;">Lire plus <i class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- BLOG END -->

        <!-- Vendor Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 mb-5">
                <div class="bg-white">
                    <div class="owl-carousel vendor-carousel">
                        <img src="{{ asset('client/assets/img/Ramco.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/TotalSA.jpeg')}}" alt="">
                        <img src="{{ asset('client/assets/img/SogeaSatom.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/Msc.png')}}" alt="">
                        <img src="{{ asset('client/assets/img/FAIEJ.png') }}" alt="">
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

        <!-- Quote Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">Prendre rendez-vous</h5>
                            <h1 class="mb-0">Vous voulez en savoir plus? N'hésitez pas à écrire</h1>
                        </div>
                        <div class="row gx-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Réponse avant 24h</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Assistance
                                    téléphonique 24h/24</h5>
                            </div>
                        </div>
                        <p class="mb-4">Vous avez un projet? souhaitez avoir plus de renseignements, devenir notre
                            partenaire ou investisseur?
                            N'hésitez pas a nous écrire à travers ce formulaire. Nous nous ferons le plaisir de vous
                            répondre instantanément.</p>
                        <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Contact</h5>
                                <h4 class="text-primary mb-0">(+228) 90491838</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                            data-wow-delay="0.9s">
                            <form action="/contact" method="post">
                                @csrf
                                @method('post')
                                <div class="row g-3">
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control bg-light border-0"
                                            placeholder="Votre Nom" style="height: 55px;" name="name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control bg-light border-0"
                                            placeholder="Votre Email" style="height: 55px;" name="email">
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control bg-light border-0"
                                            placeholder="Sujet" style="height: 55px;" name="subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control bg-light border-0" rows="3" placeholder="Message" name="content"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" type="submit">Envoyez</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->
@endsection
