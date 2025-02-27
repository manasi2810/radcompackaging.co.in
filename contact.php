<style>
    .custom-checkbox {
        width: 20px;
        height: 20px;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        margin-right: 10px;
    }

    .checkbox-group .form-check-label {
        margin-top: 5px;
    }
</style>
  <?php include 'header.php';?> 
  
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Contact</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navbar End --> 
    
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End --> 
    
    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="mb-2">Call to ask any question</h6>
                            <h5 class="text-primary mb-0">+91-9579133238</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="mb-2">Email to get free quote</h6>
                            <h5 class="text-primary mb-0">info@radcompackaging.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="mb-2">Visit our office</h6>
                            <h5 class="text-primary mb-0">Unit No. 1,2 & 6 Saraswati Building, Sativali, Vasai- 401208</h5>
                        </div>
                    </div>
                </div>
            </div> 
              
            
            <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
               
                 <form method="POST" action="">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control border-0 bg-light px-4" name="name" placeholder="Your Name" style="height: 55px;" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control border-0 bg-light px-4" name="contact" placeholder="Contact No" style="height: 55px;" required>
                    </div>
                    <div class="col-md-12">
                        <input type="email" class="form-control border-0 bg-light px-4" name="email" placeholder="Your Email" style="height: 55px;" required>
                    </div>
                    <select class="form-select bg-light border-0 px-4" name="department" id="department" style="height: 55px;" required>
                            <option value="" disabled selected>Select a Concerned Department</option>
                            <option value="1">Sales - West</option>
                            <option value="2">Sales - South</option>
                            <option value="3">Sales - North</option>
                            <option value="4">Sales - East</option>
                            <option value="5">Sales - International</option>
                            <option value="6">Purchase</option>
                            <option value="7">HR</option>
                        </select>

                         <div class="col-12" id="checkbox-container">
                            <input type="text" class="form-control border-0 bg-light px-4" name="interested_to_buy" placeholder="Interested to Buy" style="height: 55px;" >  
                            <div id="sales-options" style="display: none;">
                                <div class="row g-3">
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Glass Bottle"> Glass Bottle</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="PET Bottle"> PET Bottle</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="HDPE Bottle"> HDPE Bottle</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Jar"> Jar</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Caps & Closure"> Caps & Closure</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Pumps"> Pumps</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Dropper Bottles"> Dropper Bottles</div>
                                </div>
                            </div>
                            
                            <!-- Purchase Options (2 columns, 4 items per row) -->
                            <div id="purchase-options" style="display: none;">
                                <div class="row g-3">
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Raw Material"> Raw Material</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Packaging Material"> Packaging Material</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Others"> Others</div>
                                </div>
                            </div>
                            
                            <!-- HR Options (1 column) -->
                            <div id="hr-options" style="display: none;">
                                <div class="row g-3">
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Job Inquiry"> Job Inquiry</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Internship Inquiry"> Internship Inquiry</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Employee Benefits"> Employee Benefits</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Work Culture Inquiry"> Work Culture Inquiry</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="Vacancy Request"> Vacancy Request</div>
                                    <div class="col-md-4"><input type="checkbox" name="interested[]" value="HR Policies"> HR Policies</div>
                                </div>
                            </div>
                        </div> 
                    
                    <div class="col-12">
                        <input type="text" class="form-control border-0 bg-light px-4" name="subject" placeholder="Subject" style="height: 55px;" required>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="2" placeholder="Message" required></textarea>
                    </div>
                     
                      <!-- Google reCAPTCHA v2 Checkbox -->
                             <div class="g-recaptcha" data-sitekey="6Lctd84qAAAAAD9vxY1ho9v__v38x3vTE7I__5bw"></div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit" name="send">Send Message</button>
                    </div>
                     </form>
                </div>
            </div>
    
    <!-- Google Maps -->
    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
        <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15052.507569137466!2d72.8747032!3d19.4069226!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x49c132b126545145!2sRadcom%20Packaging%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1616401616983!5m2!1sen!2sin"
            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
</div>

<script>
  document.getElementById('department').addEventListener('change', function() {
    let salesOptions = document.getElementById('sales-options');
    let purchaseOptions = document.getElementById('purchase-options');
    let hrOptions = document.getElementById('hr-options');
     
    salesOptions.style.display = 'none';
    purchaseOptions.style.display = 'none';
    hrOptions.style.display = 'none';
    
    // Show the relevant options based on the selected department
    if (this.value === '1' || this.value === '2' || this.value === '3' || this.value === '4' || this.value === '5') {
        salesOptions.style.display = 'block';
    } else if (this.value === '6') {
        purchaseOptions.style.display = 'block';
    } else if (this.value === '7') {
        hrOptions.style.display = 'block';
    }
});

</script>   
</div>
<!-- Contact End -->

<!-- Include Google reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php include 'footer.php'; ?> 

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $department = $_POST['department'];  
    $interestedItems = isset($_POST['interested']) ? implode(', ', $_POST['interested']) : 'Not specified'; 


    // Determine the recipient email based on the department
    // switch ($department) {
    //     case '1': $recipientEmail = 'j.mishra@radcompackaging.com,'; break; 
    //     case '2': $recipientEmail = 'rahul@radcompackaging.com'; break; 
    //     case '3': $recipientEmail = 'harsh@radcompackaging.com'; break; 
    //     case '4': $recipientEmail = 'bdm@radcompackaging.com'; break; 
    //     case '5': $recipientEmail = 'pritam@radcompackaging.com'; break; 
    //     case '6': $recipientEmail = 'pipl@radcompackaging.com'; break;  
    //     case '7': $recipientEmail = 'hitesh@radcompackaging.com'; break; 
    //     default: 
    //         echo 'Invalid department selected.';
    //         exit;
    // }
    
      switch ($department) {
        case '1': $recipientEmail = 'mansi@radcompackaging.com'; break; 
        case '2': $recipientEmail = 'digital@radcompackaging.com'; break; 
        case '3': $recipientEmail = 'mansi@radcompackaging.com'; break; 
        case '4': $recipientEmail = 'salserppl@radcompackaging.com'; break; 
        case '5': $recipientEmail = 'salse3@radcompackaging.com'; break; 
        case '6': $recipientEmail = 'purchase@radcompackaging.com'; break;  
        case '7': $recipientEmail = 'hrnew@radcompackaging.com'; break; 
        default: 
            echo 'Invalid department selected.';
            exit;
    }

    // Include PHPMailer
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtpout.secureserver.net'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'mansi@radcompackaging.co.in'; // SMTP username 
        $mail->Password = 'GnjSmb$l6CDn'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPDebug = 0;  
        $mail->Debugoutput = 'html'; 

    //   $mail->setFrom($email, 'Radcom Website Enquiry');
        $mail->setFrom('mansi@radcompackaging.com', 'Radcom Website Enquiry');
        $mail->addReplyTo($email, $name); 
         
        $mail->addAddress($recipientEmail, 'Radcom Department');

        $mail->isHTML(true);  
        $mail->Subject = 'Enquiry from Website';
        $mail->Body    = "
            <b>Sender Name:</b> $name <br>
            <b>Sender Contact No:</b> $contact <br>
            <b>Sender Email:</b> $email <br>
            <b>Subject:</b> $subject <br>
            <b>Message:</b> $message<br>
             <b>Enquiry for:</b> $interestedItems
        ";
        
       $mail->send();
        echo 'Message sent successfully.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>