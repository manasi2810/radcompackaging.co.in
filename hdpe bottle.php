<?php include 'header.php';?>  

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">HDPE Bottle</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="product.php" class="h5 text-white">Product</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="hdpe bottle.php" class="h5 text-white">HDPE Bottle</a>
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
                    // Array of HDPE bottle images and descriptions
                   $products = [
                        ["hdpe slant bottle.jpg", "HDPE Slant Bottle", "Sleek slant-shaped HDPE bottle, perfect for various product applications."],
                        ["hdpe tulip bottle.jpg", "HDPE Tulip Bottle", "Elegant tulip-shaped HDPE bottle, ideal for premium packaging and aesthetics."],
                        ["hdpe boston bottle.jpg", "HDPE Boston Bottle", "Durable Boston-style HDPE bottle, widely used for liquid products and packaging."]
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
