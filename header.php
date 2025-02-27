<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    $currentPage = basename($_SERVER['PHP_SELF'], ".php"); 
    $defaultTitle = ucwords(str_replace("-", " ", $currentPage)); 
    $pageTitle = isset($pageTitle) ? $pageTitle : "$defaultTitle - Radcom Packaging Pvt Ltd - Vasai - Mumbai - India"; 
    $metaDescription = isset($metaDescription) ? $metaDescription : "Radcom Packaging is Indias Leading Manufacturer, Suppliers and Exporters of Glass and Plastic Packaging Products Viz. Glass Bottles, PET Bottles, Plastic Bottles, Jars and Containers and Allied Accessories";
    $metaKeywords = isset($metaKeywords) ? $metaKeywords : "radcom packaging private limited,radcom packaging,cosmetics bottles, cosmetics bottles manufacturer, cosmetic packaging india, glass bottle manufacturer, glass bottles exporter, glass bottles supplier, glass bottles, bottle manufacturer, glass & plastic packaging solutions india, perfume bottles,
    perfume bottle manufacturer, attar bottles, essential oil bottles, amber glass bottles, amber dropper bottles, 10 ml amber dropper bottle, 30 ml amber dropper bottles, 100 ml amber dropper bottles, roll on bottle, roll on bottle manufacturers, roll on bottle suppliers, roll on bottle exporters, roll on bottle traders, roll on bottle wholesalers, roll on bottle producers, blue glass bottles, green glass bottles, medicine bottle manufacturer, tablet bottle container manufacturer, antibiotic vial manufacture, pharmaceutical packaging, pharmaceutical bottles, pharma packaging india, plastic caps, aluminium caps, pet bottles, pet pharma bottles, syrup bottles, bottles for ayurvedic medicines, bottles for homeopathic medicines, german dropper bottle manufacturer, aluminium dropper manufacturer, german dropper, european dropper bottles, stopper and vials, cosmetics packaging, toiletries bottles, cream jar, tottles, lotion bottles, cream tube,pet roll on, nasal spray manufacturer, oral spray manufacturer, glass nasal spray, handwash bottles, shampoo bottles, lotion bottles, hair oil bottles, conditioner bottles ampoules, vials tube roll on"; ?>

    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <meta name="keywords" content="<?php echo $metaKeywords; ?>"> 
    <!-- Favicon -->
    <link href="partner logo/Radcom-Logo.ico" rel="icon"> 
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> 
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">  
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet"> 
</head> 
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End --> 
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Unit No. 1,2 & 6 Saraswati Building, Sativali, Vasai- 401208</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91-9579133238</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@radcompackaging.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.twitter.com/RadcomPackaging" target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/radcompackagingpvtltd/" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/company/radcom-packaging-pvt-ltd---india" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/radcompackaging/"><i class="fab fa-instagram fw-normal" target="_blank"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/results?search_query=radcompackaging.com" target="_blank"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End --> 

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                 <img  src="img/Radcom Logo.png" style="height:90 px;  width:264px" alt="logo">
                <!--<h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>-->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a> 
                    <a href="product.php" class="nav-item nav-link">Products</a> 
                     <a href="blog.php" class="nav-item nav-link">Blogs</a> 
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <!--<butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>-->
                <!--<a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>-->
            </div>
        </nav>