<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <title>KPELLY INDUSTRIES - ADMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="KPELLY INDUSTRIES" name="title">
    <meta content="KPELLY INDUSTRIES est une entreprises spécialisé dans la production de café et de chips. 
		Nous disposons également d'une boulangerie de production de pains et biscuits sans oublier
		nos pressing KPELLY CENTER" name="description">
    <meta content="keywords" name="KPELLY INDUSTRIES from TOGO to the world">
    <meta name="language" content="French">
	<!-- FAVICONS ICON -->
	<link href="{{ asset ('client/assets/img/KI_icon.png')}}" rel="icon" type="image/png">
	<link href="admin/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="admin/assets/vendor/dotted-map/css/contrib/jquery.smallipop-0.3.0.min.css" type="text/css" media="all" rel="stylesheet"/>
	<link href="admin/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="admin/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="admin/assets/vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
	<link href="admin/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<!-- Style css -->
	<link href="admin/assets/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="admin/assets/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="admin/assets/css/style.css" rel="stylesheet">
	<!-- Sweet alert -->
	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
			<a href="{{route('TABLEAU')}}" class="brand-logo">
				<img class="brand-title" src="{{ asset ('client/assets/img/KI_icon.png')}}" width="50" height="50" viewBox="0 0 110 33" fill="none" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<!--<div class="chatbox">-->
		<!--	<div class="chatbox-close"></div>-->
		<!--	<div class="custom-tab-1">-->
		<!--		<ul class="nav nav-tabs">-->
		<!--			<li class="nav-item">-->
		<!--				<a class="nav-link active" data-bs-toggle="tab" href="#chat">Messagerie</a>-->
		<!--			</li>-->
		<!--		</ul>-->
		<!--		<div class="tab-content">-->
		<!--			<div class="tab-pane fade active show" id="chat" role="tabpanel">-->
		<!--				<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">-->
		<!--					<div class="card-header chat-list-header text-center">-->
		<!--						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>-->
		<!--						<div>-->
		<!--							<h6 class="mb-1">Liste Messages</h6>-->
		<!--							<p class="mb-0">Tout voir</p>-->
		<!--						</div>-->
		<!--						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>-->
		<!--					</div>-->
		<!--					<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">-->
		<!--						<ul class="contacts">-->
		<!--							<li class="name-first-letter">A</li>-->
		<!--							<li class="active dz-chat-user">-->
		<!--								<div class="d-flex bd-highlight">-->
		<!--									<div class="img_cont">-->
		<!--										<img src="admin/assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>-->
		<!--										<span class="online_icon"></span>-->
		<!--									</div>-->
		<!--									<div class="user_info">-->
		<!--										<span>Archie Parker</span>-->
		<!--										<p>Kalid est en ligne</p>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</li>-->
		<!--							<li class="dz-chat-user">-->
		<!--								<div class="d-flex bd-highlight">-->
		<!--									<div class="img_cont">-->
		<!--										<img src="admin/assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>-->
		<!--										<span class="online_icon offline"></span>-->
		<!--									</div>-->
		<!--									<div class="user_info">-->
		<!--										<span>Alfie Mason</span>-->
		<!--										<p>Taherah left 7 mins ago</p>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</li>-->
		<!--							<li class="dz-chat-user">-->
		<!--								<div class="d-flex bd-highlight">-->
		<!--									<div class="img_cont">-->
		<!--										<img src="admin/assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>-->
		<!--										<span class="online_icon"></span>-->
		<!--									</div>-->
		<!--									<div class="user_info">-->
		<!--										<span>AharlieKane</span>-->
		<!--										<p>Sami est en ligne</p>-->
		<!--									</div>-->
		<!--								</div>-->
		<!--							</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="card chat dz-chat-history-box d-none">-->
		<!--					<div class="card-header chat-list-header text-center">-->
		<!--						<a href="javascript:void(0);" class="dz-chat-history-back">-->
		<!--							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>-->
		<!--						</a>-->
		<!--						<div>-->
		<!--							<h6 class="mb-1">Discussion avec Dona</h6>-->
		<!--							<p class="mb-0 text-success">En ligne</p>-->
		<!--						</div>							-->
		<!--						<div class="dropdown">-->
		<!--							<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>-->
		<!--							<ul class="dropdown-menu dropdown-menu-start">-->
		<!--								<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> Voir profil</li>-->
		<!--								<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Ajouter un amis</li>-->
		<!--							</ul>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--					<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">-->
		<!--						<div class="d-flex justify-content-start mb-4">-->
		<!--							<div class="img_cont_msg">-->
		<!--								<img src="admin/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>-->
		<!--							</div>-->
		<!--							<div class="msg_cotainer">-->
		<!--								Hi, how are you samim?-->
		<!--								<span class="msg_time">8:40 AM, Today</span>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--						<div class="d-flex justify-content-end mb-4">-->
		<!--							<div class="msg_cotainer_send">-->
		<!--								Hi Khalid i am good tnx how about you?-->
		<!--								<span class="msg_time_send">8:55 AM, Today</span>-->
		<!--							</div>-->
		<!--							<div class="img_cont_msg">-->
		<!--						<img src="admin/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--					<div class="card-footer type_msg">-->
		<!--						<div class="input-group">-->
		<!--							<textarea class="form-control overflow-hidden" placeholder="Ecrivez votre message..."></textarea>-->
		<!--							<div class="input-group-append">-->
		<!--								<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="headaer-title">
								<h1 class="font-w600 mb-0">Tableau de bord</h1>
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link nav-action" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                   <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.4524 25.6682C11.0605 27.0357 12.409 28 14.0005 28C15.592 28 16.9405 27.0357 17.5487 25.6682C16.4265 25.7231 15.2594 25.76 14.0005 25.76C12.7417 25.76 11.5746 25.723 10.4524 25.6682Z" fill="#737B8B"/>
										<path d="M26.3532 19.74C24.877 17.8785 22.3996 14.2195 22.3996 10.64C22.3996 7.09073 20.1193 3.89758 16.7996 2.72382C16.7593 1.21406 15.5183 0 14.0007 0C12.482 0 11.2422 1.21406 11.2018 2.72382C7.88101 3.89758 5.6007 7.09073 5.6007 10.64C5.6007 14.2207 3.1244 17.8785 1.64712 19.74C1.15433 20.3616 1.00197 21.1825 1.24058 21.9363C1.47354 22.6721 2.05367 23.2422 2.79288 23.4595C4.08761 23.8415 6.20997 24.2715 9.44682 24.491C10.8479 24.5851 12.3543 24.64 14.0008 24.64C15.646 24.64 17.1525 24.5851 18.5535 24.491C21.7915 24.2715 23.9128 23.8415 25.2086 23.4595C25.9478 23.2422 26.5268 22.6722 26.7598 21.9363C26.9983 21.1825 26.8449 20.3616 26.3532 19.74Z" fill="#737B8B"/>
									</svg>
                                    <span class="badge light text-white bg-primary rounded-circle"></span>
                                </a>
         <!--                       <div class="dropdown-menu dropdown-menu-end">-->
         <!--                           <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">-->
									<!--	<ul class="timeline">-->
									<!--		<li>-->
									<!--			<div class="timeline-panel">-->
									<!--				<div class="media me-2 media-info">-->
									<!--					CT-->
									<!--				</div>-->
									<!--				<div class="media-body">-->
									<!--					<h6 class="mb-1">un client à commander</h6>-->
									<!--					<small class="d-block">01 janvier 2024</small>-->
									<!--				</div>-->
									<!--			</div>-->
									<!--		</li>-->
									<!--		<li>-->
									<!--			<div class="timeline-panel">-->
									<!--				<div class="media me-2 media-info">-->
									<!--					CT-->
									<!--				</div>-->
									<!--				<div class="media-body">-->
									<!--					<h6 class="mb-1">un client à commander</h6>-->
									<!--					<small class="d-block">01 janvier 2024</small>-->
									<!--				</div>-->
									<!--			</div>-->
									<!--		</li>-->
									<!--		<li>-->
									<!--			<div class="timeline-panel">-->
									<!--				<div class="media me-2 media-info">-->
									<!--					CT-->
									<!--				</div>-->
									<!--				<div class="media-body">-->
									<!--					<h6 class="mb-1">un client à commander</h6>-->
									<!--					<small class="d-block">01 janvier 2024</small>-->
									<!--				</div>-->
									<!--			</div>-->
									<!--		</li>-->
									<!--	</ul>-->
									<!--</div>-->
         <!--                           <a class="all-notification" href="javascript:void(0);">voir toutes les notification<i class="ti-arrow-end"></i></a>-->
         <!--                       </div>-->
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell-link nav-action " href="javascript:void(0);">
                                	<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.8257 17.5282C14.563 17.6783 14.2627 17.7534 14 17.7534C13.7373 17.7534 13.437 17.6783 13.1743 17.5282L0 9.49598V20.193C0 22.4826 1.83914 24.3217 4.12869 24.3217H23.8713C26.1609 24.3217 28 22.4826 28 20.193V9.49598L14.8257 17.5282Z" fill="#737B8B"/>
										<path d="M23.8713 3.67829H4.12863C2.17689 3.67829 0.525417 5.06703 0.112549 6.90617L13.9999 15.3887L27.8873 6.90617C27.4745 5.06703 25.823 3.67829 23.8713 3.67829Z" fill="#737B8B"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle"></span>
                                </a>
							</li>
                        </ul>                    
					</div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<div class=" dropdown header-bx">
					<a class="nav-link header-profile2 position-relative" href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
						<div class="header-content">
							<h2 class="font-w500">Bienvenue {{Session::get('UserName')}}</h2>
							<span class="font-w400">Ensemble, réalisons des projets pour un impact significatif.
								From Togo to the World!</span>
						</div>
					</a>
				</div>
				<ul class="metismenu" id="menu">
					@if(Session::get('UserRole') == "ADMIN")
                    <li>
						<a href="{{route('TABLEAU')}}" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Tableau de bord</span>
						</a>
                    </li>
					<li>
						<a href="{{route('VOIR-MESSAGE')}}" aria-expanded="false">
							<i class="fas fa-comments"></i>
							<span class="nav-text">Messages</span>
						</a>
                    </li>
					<li>
						<a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Gestion de blogs</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('AJOUTER-PRODUIT')}}">partager un blog</a></li>
							<li><a href="{{route('VOIR-PRODUITS')}}">voir nos blogs</a></li>
						</ul>
                    </li>
					<!--<li>-->
					<!--	<a href="{{route('VOIR-VENDEURS')}}" aria-expanded="false">-->
					<!--		<i class="flaticon-381-user-7"></i>-->
					<!--		<span class="nav-text">Utilisateurs</span>-->
					<!--	</a>-->
     <!--               </li>-->
					<li>
						<a href="{{route('SHOWNEWSLETTER')}}" aria-expanded="false">
							<i class="fas fa-mail-bulk"></i>
							<span class="nav-text">Newsletters</span>
						</a>
                    </li>
					<li>
						<a href="{{route('VOIR-CATEGORIE')}}" aria-expanded="false">
							<i class="flaticon-381-tab"></i>
							<span class="nav-text">Catégories de projets</span>
						</a>
                    </li>
					<li>
						<a href="{{route('VOIR-PUBLICITES')}}" aria-expanded="false">
							<i class="flaticon-381-picture"></i>
							<span class="nav-text">Publicités</span>
						</a>
                    </li>
					<li>
						<a href="{{route('PROFIL')}}" aria-expanded="false">
							<i class="flaticon-381-user-9"></i>
							<span class="nav-text">Profil</span>
						</a>
                    </li>
					<li>
						<a href="{{route('LOGOUT')}}" aria-expanded="false">
							<i class="ti-power-off"></i>
							<span class="nav-text">Déconnecter</span>
						</a>
                    </li>
					@else
					<li>
						<a href="{{route('TABLEAU')}}" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Tableau de bord</span>
						</a>
                    </li>
					<li>
						<a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Gestion des projets</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('AJOUTER-PRODUIT')}}">partager un projet</a></li>
							<li><a href="{{route('VOIR-PRODUITS')}}">voir nos projets</a></li>
						</ul>
                    </li>
					<li>
						<a href="{{route('PROFIL')}}" aria-expanded="false">
							<i class="flaticon-381-user-7"></i>
							<span class="nav-text">Profil</span>
						</a>
                    </li>
					<li>
						<a href="{{route('LOGOUT')}}" aria-expanded="false">
							<i class="ti-power-off"></i>
							<span class="nav-text">Déconnecter</span>
						</a>
                    </li>
					@endif
                </ul>
				<div class="copyright">
					<h6>Eka-digital<span class="fs-14 font-w400">© 2024 All Rights Reserved</span></h6>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        @yield('content')

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a target="_blank">Eka-digital</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		</div>
		<!--**********************************
			Main wrapper end
		***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="admin/assets/vendor/global/global.min.js"></script>
	<script src="admin/assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="admin/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="admin/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="admin/assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="admin/assets/vendor/owl-carousel/owl.carousel.js"></script>
	<script src="admin/assets/vendor/lightgallery/js/lightgallery-all.min.js"></script>
	<!-- Swiper-js -->
	<script src="admin/assets/vendor/swiper/js/swiper-bundle.min.js"></script>
	<!-- Apex Chart -->
	<script src="admin/assets/vendor/apexchart/apexchart.js"></script>
	<!-- Chart piety plugin files -->
    <script src="admin/assets/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="admin/assets/js/dashboard/dashboard-1.js"></script>
	<script src="admin/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="admin/assets/js/plugins-init/datatables.init.js"></script>
    <script src="admin/assets/js/custom.min.js"></script>
	<script src="admin/assets/js/deznav-init.js"></script>
	<script src="admin/assets/js/demo.js"></script>
    <script src="admin/assets/js/styleSwitcher.js"></script>
	<!-- sweet alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
	<!-- Toastr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- input choix multiple -->
	<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
	<!-- JS for dotted map -->
	<script src="admin/assets/vendor/dotted-map/js/contrib/jquery.smallipop-0.3.0.min.js"></script>
    <script src="admin/assets/vendor/dotted-map/js/contrib/suntimes.js"></script>
    <script src="admin/assets/vendor/dotted-map/js/contrib/color-0.4.1.js"></script>
	<script>
    	new MultiSelectTag('taille')  // id
	</script>
	<script>
    	new MultiSelectTag('couleur')  // id
	</script>
	<!-- input choix multiple End-->
	<script>
		$(function () {
			  $("#datepicker").datepicker({ 
					autoclose: true, 
					todayHighlight: true
			  }).datepicker('update', new Date());
		});
	</script>
	<script>
	 var swiper = new Swiper(".front-view-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
		centeredSlides: true,
		loop:true,
        pagination: {
          el: ".room-swiper-pagination",
          clickable: true,
        },
		breakpoints: {
		  360: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
		  575: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
          },
		  1400: {
            slidesPerView: 5,
            spaceBetween: 20,
          },
		  1600: {
            slidesPerView: 5,
            spaceBetween: 30,
          },
		}
      });
	</script>
	@yield('scripts')
</body>

</html>