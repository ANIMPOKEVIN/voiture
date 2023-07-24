<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cars Rental</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../acceuil/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../acceuil/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../acceuil/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../acceuil/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+237 654494500</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>Rental@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <!-- <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Cars Rental</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="../index" class="nav-item nav-link">Home</a>
                        <a href="../about" class="nav-item nav-link">A propos de nous</a>
                        <a href="../service" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">véhicules</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="../car" class="dropdown-item">Liste des véhicules</a>
                                <a href="../detail" class="dropdown-item">Detail sur le véhicule</a>
                                <a href="booking.html" class="dropdown-item active">Réservation de voiture</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                           
                        </div>
                        <a href="../contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div> -->
    <!-- Navbar End -->




    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Réservation de voiture</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Réservation de voiture</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5">{{ $vehicules->mark }}</h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="{{ $vehicules->vehicle_image }}" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2">{{ $vehicules->price_per_hour }}$/hour</h4>
                    <div class="d-flex mb-3">
                        <h6 class="mr-2">Description du vehicule:</h6>
                        <table>
                        <tr>
                            <td>
                            {{ $type_vehicule->description }}  
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: {{ $vehicules->model }}</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>{{ $vehicules->transmission }}</span>
                </div>
                <!-- <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>20km/liter</span>
                </div> -->
            </div>
        </div>
    </div>
   
    <!-- Detail End -->


    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Detail de la reservation</h2>
                    <div class="mb-5">
                    <form method="post" action="/add/booking">
                        @csrf
                        <div class="row">
                        
                        <input type="text" name="id_vehile" value="{{ $vehicules->id }}" style="display: none;">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control p-4" name="first_name" placeholder="first Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="last_name" placeholder="Last Name" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="number" class="form-control p-4" name="phone_number" placeholder="Phone Number" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="row">
                        <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="place_of_care" placeholder="Lieu de prise en charge" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="place_of_deposit" placeholder="Lieu de depot" required="required">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-6 form-group">
                            <label>Date de début</label>
                                <input type="date" class="form-control p-4" name="start_date" placeholder="date de debut" required="required">
                            </div>
                        <div class="col-6 form-group">
                        <label>Date de fin</label>
                                <input type="date" class="form-control p-4" name="end_date" placeholder="date de fin" required="required">
                            </div>    
                                       
                        </div>
                        <!-- <div class="row">
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" style="height: 50px;">
                                    <option selected>Select Adult</option>
                                    <option value="1">Adult 1</option>
                                    <option value="2">Adult 2</option>
                                    <option value="3">Adult 3</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" style="height: 50px;">
                                    <option selected>Select Child</option>
                                    <option value="1">Child 1</option>
                                    <option value="2">Child 2</option>
                                    <option value="3">Child 3</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                            <textarea class="form-control py-3 px-4" rows="3" placeholder="Special Request" required="required"></textarea>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-secondary p-5 mb-5">
                        <h2 class="text-primary mb-4">Methode de Paiement</h2>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="Orange Money" id="Orange Money">
                                <label class="custom-control-label" for="Orange Money">Orange Money</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="MTN Mobile Money" id="MTN Mobile Money">
                                <label class="custom-control-label" for="MTN Mobile Money">MTN Mobile Money</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary py-3">Reservez Maintenant</button>
                    </div>
                </div>
                </form>  
            </div>
        </div>
    </div>
    <!-- Car Booking End -->

<!-- 
     Vendor Start -->

    <!-- Vendor End -->


    <!-- Footer Start -->
    
    <!-- <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
        <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div> -->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../acceuil/lib/easing/easing.min.js"></script>
    <script src="../acceuil/lib/waypoints/waypoints.min.js"></script>
    <script src="../acceuil/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../acceuil/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../acceuil/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../acceuil/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../acceuil/js/main.js"></script>
</body>

</html>