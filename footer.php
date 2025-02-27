    
     <style>
        /* Tooltip (hidden initially) */
        .address-tooltip {
            display: none;
            position: absolute;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            white-space: nowrap;
            z-index: 1000;
            top: 100%;
            left: 0;
        }

        /* Full Address Box (hidden initially) */
        .full-address {
            display: none;
            background: white;
            color: black;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            position: absolute;
            width: 300px;
            text-align: left;
            z-index: 999;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            top: 0; /* Align with the header */
            /*left: 60%;   Position to the right of the header */
            /*margin-left: 50px; Space between the header and address box */
        }

        /* Close Button */
        .close-btn {
            position: absolute;
            top: 5px;
            right: 8px;
            cursor: pointer;
            color: red;
            font-weight: bold;
            font-size: 18px;
        }

        /* Positioning for Container */
        .address-container {
            position: relative;
            display: inline-block;
            cursor: pointer;
            margin: 10px 20px;
        }
    </style>
    
    
    <!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5 mb-5">
    <div class="bg-white">
       <div class="row">
            <!-- First Column: Trusted By with Rowspan -->
          
                     <div class="section-title text-center position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Trusted By</h5>
                        <h3 class="mb-0">Trusted by industry leaders, delivering excellence together!</h3>
                    </div>  
                    
            <!-- Second Column -->
            <div class="col-md-12">
                <!-- First Row: Scrolling Logos -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel vendor-carousel">
                    <img src="partner logo/jpeg-optimizer_1.jpg" alt="jpeg-optimizer_1" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_2.jpg" alt="jpeg-optimizer_2" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_3.jpg" alt="jpeg-optimizer_3" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_4.jpg" alt="jpeg-optimizer_4" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_5.jpg" alt="jpeg-optimizer_5" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_6.jpg" alt="jpeg-optimizer_6" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_7.jpg" alt="jpeg-optimizer_7" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_8.jpg" alt="jpeg-optimizer_8" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_9.jpg" alt="jpeg-optimizer_9" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_10.jpg" alt="jpeg-optimizer_10" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_11.jpg" alt="jpeg-optimizer_11" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_12.jpg" alt="jpeg-optimizer_12" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_13.jpg" alt="jpeg-optimizer_13" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_14.jpg" alt="jpeg-optimizer_14" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_15.jpg" alt="jpeg-optimizer_15" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_16.jpg" alt="jpeg-optimizer_16" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_17.jpg" alt="jpeg-optimizer_17" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_18.jpg" alt="jpeg-optimizer_18" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_19.jpg" alt="jpeg-optimizer_19" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_20.jpg" alt="jpeg-optimizer_20" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_21.jpg" alt="jpeg-optimizer_21" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_22.jpg" alt="jpeg-optimizer_22" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_23.jpg" alt="jpeg-optimizer_23" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_24.jpg" alt="jpeg-optimizer_24" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_25.jpg" alt="jpeg-optimizer_25" style="width: 123px; height: 66px;"> 
                    <img src="partner logo/jpeg-optimizer_26.jpg" alt="jpeg-optimizer_26" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_27.jpg" alt="jpeg-optimizer_27" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_28.jpg" alt="jpeg-optimizer_28" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_29.jpg" alt="jpeg-optimizer_29" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_30.jpg" alt="jpeg-optimizer_30" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_31.jpg" alt="jpeg-optimizer_31" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_32.jpg" alt="jpeg-optimizer_32" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_33.jpg" alt="jpeg-optimizer_33" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_34.jpg" alt="jpeg-optimizer_34" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_35.jpg" alt="jpeg-optimizer_35" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_36.jpg" alt="jpeg-optimizer_36" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_37.jpg" alt="jpeg-optimizer_37" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_38.jpg" alt="jpeg-optimizer_38" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_39.jpg" alt="jpeg-optimizer_39" style="width: 123px; height: 66px;">
                    <img src="partner logo/jpeg-optimizer_40.jpg" alt="jpeg-optimizer_40" style="width: 123px; height: 66px;">
                        </div>
                    </div>
                </div>

                <!-- Second Row: Disclaimer -->
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted text-center bg-light" style="font-size: 11px;">
                            <br>Disclaimer: All brand logos displayed above are the property of their respective owners and are used for informational purposes only. Their inclusion does not imply endorsement or affiliation.<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Vendor End --> 
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5">
    <div class="container">
        <div class="row gx-5">
            <!--sitemap-->
               <div class="col-lg-2 col-md-12 pt-5 mb-5">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0">
                        <a href="sitemap.xml" class="text-light" target="_blank">Sitemap</a>
                    </h4>
                </div>
            </div>  
           <!-- Head Office -->
            <div class="col-lg-2 col-md-12 pt-5 mb-5 address-container">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0 address-click">Head Office</h4>
                </div>
                <div class="full-address">
                    <h5>Head Office</h5>
                    Unit No. 1,2 & 6 Saraswati Building,<br>
                    Tungareshwar Industrial Complex, Sativali,<br>
                    Vasai Road East, Mumbai (India) - 401 208
                    <span class="close-btn">&times;</span>
                </div>
            </div> 
            <!-- Sales Office -->
            <div class="col-lg-2 col-md-12 pt-5 mb-5 address-container">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0 address-click">Sales Office</h4>
                </div>
                <div class="full-address">
                    <h5>Sales Office</h5>
                    Delhi - NCR 1094 Hudo Colony, Sector -46, Gurugram<br>
                    Haryana - 122 018 (India)
                    <span class="close-btn">&times;</span>
                </div>
            </div> 
            <!-- Plant 1 -->
            <div class="col-lg-2 col-md-12 pt-5 mb-5 address-container">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0 address-click">Plant 1</h4>
                </div>
                <div class="full-address">
                    <h5>Plant 1</h5>
                    Plot No. 41, Survey No. 122/4, Paily Govt. Est., Khadoli Village Dadra & Nagar Haveli,<br>
                    Silvassa - INDIA - 396230
                    <span class="close-btn">&times;</span>
                </div>
            </div> 
            <!-- Plant 2 -->
            <div class="col-lg-2 col-md-12 pt-5 mb-5 address-container">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0 address-click">Plant 2</h4>
                </div>
                <div class="full-address">
                    <h5>Plant 2</h5>
                    Plot No 28, Old Survey No 259/1/1, New Survey No.1077, Dadra Demni, Dadra,<br>
                    Silvassa - INDIA - 396 193
                    <span class="close-btn">&times;</span>
                </div>
            </div>
        <!-- Footer Copyright -->
        <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="index.php">Copyright 2025</a>. All Rights Reserved</p> 
        </div>
    </div>
</div>     
            <!--<h3 class="text-light">Sitemap</h3>-->
            </div>
        </div>
    </div>  
 <!-- JavaScript -->
 <script>
document.addEventListener("DOMContentLoaded", function() {
    // Select all address containers
    const addressContainers = document.querySelectorAll('.address-container');

    addressContainers.forEach(container => {
        const title = container.querySelector('.address-click');
        const fullAddress = container.querySelector('.full-address');
        const closeButton = container.querySelector('.close-btn');

        // Initially hide full address
        fullAddress.style.display = "none";

        // Toggle visibility when title is clicked
        title.addEventListener("click", function() {
            if (fullAddress.style.display === "none") {
                fullAddress.style.display = "block";
            } else {
                fullAddress.style.display = "none";
            }
        });

        // Hide address when close button is clicked
        closeButton.addEventListener("click", function() {
            fullAddress.style.display = "none";
        });
    });
}); 
</script>  
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a> 

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>