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
        <h1 class="display-3 text-uppercase text-white mb-3">Détail du véhicule</h1>
        <div class="d-inline-flex text-white">
            <!-- <h6 class="text-uppercase m-0"><a class="text-white" href="">Acceuil</a></h6> -->
            <!-- <h6 class="text-body m-0 px-3">/</h6> -->
            <!-- <h6 class="text-uppercase text-body m-0">Réservation de voiture</h6> -->
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->

    <div class="card-body">
        <div class="basic-form">

            <img src="{{$voitures->vehicle_image}}">
            <table style="color:black" class="table card-body">
                <thead>
                    <th>Marque</th>
                    <th>{{$voitures->mark}}</th>
                </thead>
                <thead>
                    <th>Model</th>
                    <th>{{$voitures->model}}</th>
                </thead>
                <thead>
                    <th>Couleur</th>
                    <th>{{$voitures->color}}</th>
                </thead>
                <thead>
                    <th>Transmission</th>
                    <th>{{$voitures->transmission}}</th>
                </thead>
                <thead>
                    <th>Prix Par Heure</th>
                    <th>{{$voitures->price_per_hour}}Fcfa</th>
                </thead>
            </table>
            <a href="{{url('voiture')}}">
                <button type="submit" class="btn btn-primary">
                    Retour
                </button>
            </a>
        </div>
    </div>
    </div>
    <!-- Detail End -->


    <!-- Car Booking Start -->

    <!-- Car Booking End -->
    <!-- fonction javascript pour generer le prix total de la location du client -->


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