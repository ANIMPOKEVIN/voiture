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




    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Réservation de voiture</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Acceuil</a></h6>
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
                </div>
            </div>
            <h4 class="mb-2">{{ $vehicules->price_per_hour }}fcfa/hour</h4>
            <div class="row mt-n3 mt-lg-0 pb-4">
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: {{ $vehicules->model }}</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>{{ $vehicules->transmission }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail End -->


    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <ul>
            @foreach ($errors->all() as $error )
            <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <h2 class="mb-4">Detail de la reservation</h2>
                    <div class="mb-5">
                        <form method="post" name="heure" action="/add/booking">
                            @csrf
                            <div class="row">

                                <input type="text" name="status" value="En attente" style="display: none;">
                                <input type="text" name="id_vehile" value="{{ $vehicules->id }}" style="display: none;">
                                <input type="text" name="price_per_hour" id="prix" value="{{ $vehicules->price_per_hour }}" style="display: none;">
                                <input type="text" name="User" id="" value="{{ Auth::user()->id }}" style="display: none;">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control p-4" name="first_name" placeholder="Nom" value="{{Auth::User()->name}}" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" name="last_name" placeholder="Prenom" value="{{Auth::User()->last_name}}" required="required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" name="email" placeholder="Votre Email" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="number" class="form-control p-4" name="phone_number" placeholder="Numéro de téléphone" required="required">
                                </div>
                            </div>
                   
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="place_of_care" placeholder="Lieu de prise en charge" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="place_of_deposit" placeholder="Lieu de depot" required="required">
                            </div>
                           
                       
                            <div class="col-6 form-group">
                                <label>Date de début</label>
                                <input type="datetime-local" min="{{now()->format('Y-m-d\TH:i')}}" class="form-control p-4" name="start_date" id="date1" onchange="calculer('heure')" placeholder="date de debut" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <label>Date de fin</label>
                                <input type="datetime-local"  min="{{now()->format('Y-m-d\TH:i')}}" class="form-control p-4" name="end_date" id="date2" onchange="calculer('heure')" placeholder="date de fin" required="required">
                            </div>
                        
                            <div class="col-6 form-group">
                                <label>Nombre d'heure</label>
                                <input type="text" class="form-control p-4" id="heur" name="heur" placeholder="Nombre d'eure" required="required" readonly>
                            </div>
                            <div class="col-6 form-group">
                                <label>Prix total</label>
                                <input type="text" class="form-control p-4" id="total" name="prix" placeholder="Prix total" required="required" readonly>
                            </div>
                        </div>
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
            <!-- fonction javascript pour generer le prix total de la location du client -->
    <script language="javascript">
        function calculer(heure)
        {
            var date1 = document.getElementById('date1').value ;
            var date2 = document.getElementById('date2').value ;

            var d1 = new Date(date1);
            var d2 = new Date(date2);
            var prix = parseInt(document.getElementById('prix').value) ;
            if(d2>=d1)
         {
        var difftime =Math.abs(d2 - d1);
        var differchehours= (difftime / (1000 * 60 * 60));
        document.getElementById('heur').value = differchehours;
        document.getElementById('total').value = differchehours * prix;
        }
        if(d1>=d2)
        {
            alert("verifier les dates entrer")
        }
        }

    </script>

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