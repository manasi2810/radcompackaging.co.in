<?php include 'header.php';?>  

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Pumps</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="product.php" class="h5 text-white">Product</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="jar.php" class="h5 text-white">Pumps</a>
        </div>
    </div>
</div>

<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="row g-5">
                    <?php
                    // Array of jar images and descriptions
                   $products = [
                        ["A17-pump.jpg", "A17-pump", "High-quality pump for versatile applications and precise dispensing."],
                        ["A21-pump.jpg", "A21-pump", "Durable pump with advanced features for various uses."],
                        ["A70-pump.jpg", "A70-pump", "Compact, efficient pump design for easy dispensing."],
                        ['A91-pump.jpg', "A91-pump", "Premium pump offering enhanced performance and reliability."],
                        ["ABT-pump.jpg", "ABT-pump", "Versatile pump suitable for a wide range of applications."],
                        ["BL Lotion-pump.jpg", "BL Lotion-pump", "Lotion pump designed for smooth dispensing of personal care products."],
                        ["Nova-pump.jpg", "Nova-pump", "Precision pump for high-accuracy applications and dispensing."],
                        ["Plum Mist-pump.jpg", "Plum Mist-pump", "Elegant mist pump for fine sprays and controlled dispensing."],
                        ["Press-pump.jpg", "Press-pump", "Efficient press pump designed for various product dispensing needs."],
                        ["Foam Pump.jpg", "Foam Pump", "Foam pump ideal for soap and cleaning products, delivering rich foam."],
                        ["T Pump-min.jpg", "T Pump", "Compact foam pump perfect for soaps and cleaning products."],
                        ["LR mist-min.jpg", "LR mist", "Mist pump for precise and even spray distribution."],
                        ["Serum Pump-min.jpg", "Serum Pump", "Precision serum pump for accurate, small quantity dispensing."],
                        ["Oral Pump-min.jpg", "Oral Pump-min", "Pump designed for controlled dispensing of oral liquids."],
                        ["Mist Pump-1.jpg", "Mist Pump", "Fine mist pump for creating light, even sprays."],
                        ["Lotion Pum.jpg", "Lotion Pum", "Smooth dispensing lotion pump for easy application."],
                        ["Dispenser Pump - LR.jpg", "Dispenser Pump - LR", "Durable dispenser pump for various fluid dispensing needs."],
                        ["Dispenser Pump.jpg", "Dispenser Pump", "Reliable dispenser pump for accurate fluid dispensing."],
                        ["Serum Pump - 1.jpg", "Serum Pump - 1", "Serum pump designed for precise dispensing of small quantities."]
                        ];

                    // Loop through images and descriptions
                    foreach ($products as $index => $product) {
                        echo '
                        <div class="col-md-4 wow slideInUp" data-wow-delay="'.(0.1 * ($index % 3)).'s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid product-img" src="product/'.$product[0].'" alt="'.$product[1].'" onclick="openModal('.$index.')">
                                    <div class="description">'.$product[2].'</div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Full Screen Image Modal -->
<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <button class="modal-btn left" onclick="changeImage(-1)">&#10094;</button>
    <div class="modal-content-container">
        <img class="modal-content" id="modalImage">
        <div class="modal-description" id="modalDescription"></div>
    </div>
    <button class="modal-btn right" onclick="changeImage(1)">&#10095;</button>
</div>

<!-- JavaScript for Modal & Image Navigation -->
<script>
    // Array to store image paths and descriptions
    const images = [
        <?php foreach ($products as $product) { echo "'product/".$product[0]."',"; } ?>
    ];
    const descriptions = [
        <?php foreach ($products as $product) { echo "'".$product[2]."',"; } ?>
    ];
    let currentIndex = 0;

    function openModal(index) {
        currentIndex = index;
        document.getElementById("modalImage").src = images[currentIndex];
        document.getElementById("modalDescription").textContent = descriptions[currentIndex];
        document.getElementById("imageModal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("imageModal").style.display = "none";
    }

    function changeImage(direction) {
        currentIndex += direction;
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }
        document.getElementById("modalImage").src = images[currentIndex];
        document.getElementById("modalDescription").textContent = descriptions[currentIndex];
    }

    document.addEventListener("keydown", function(event) {
        if (document.getElementById("imageModal").style.display === "flex") {
            if (event.key === "ArrowRight") {
                changeImage(1);
            } else if (event.key === "ArrowLeft") {
                changeImage(-1);
            } else if (event.key === "Escape") {
                closeModal();
            }
        }
    });
</script>

<!-- CSS Styling -->
<style>
    .product-img {
        width: 100%;
        height: auto;
        cursor: pointer;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .product-img:hover {
        transform: scale(1.1);
    }

    .description {
        text-align: center;
        padding: 10px;
        font-size: 14px;
        color: #333;
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Modal Styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
    }

    .modal-content-container {
        position: relative;
        text-align: center;
    }

   .modal-content {
        max-width: 700px;
        max-height: 700px;
        border-radius: 10px; 
        transition: transform 0.3s ease-in-out;  
        transform: scale(1);  
    }

    .modal-description {
         max-width: 600px;
        margin-top: 10px;
        color: white;
        /*max-height: 40px;*/
        overflow: auto;
        padding: 5px;
        font-size: 14px;
        text-align: center;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 25px;
        color: white;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
    }

    .modal-btn {
        background: rgba(255, 255, 255, 0.5);
        color: black;
        border: none;
        cursor: pointer;
        font-size: 24px;
        padding: 10px 15px;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
    }

    .left {
        left: 20px;
    }

    .right {
        right: 20px;
    }

    .modal-btn:hover {
        background: white;
    }
</style>

<?php include 'footer.php';?>
