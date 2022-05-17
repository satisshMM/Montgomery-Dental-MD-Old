<?php
include "includes/header.php";
?>
<div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal-search-form">
                    <input type="search" class="search-field" placeholder="Search..." />
                    <button type="submit"><i class="bx bx-search-alt"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Contact Us</h2>
            <ul class="pages-list">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-info">
    <div class="contact-info-content">
        <h3>Contact us by phone number or email address</h3>
        <!-- <h2>
                    <a href="tel:240.288.9999">+240.288.9999</a>
                    <span>OR</span>
                    <a
                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#5631243f3816313b373f3a7835393b"><span
                            class="__cf_email__"
                            data-cfemail="2443564d4a644349454d480a474b49">[email&#160;protected]</span></a>
                </h2> -->
        <ul class="top-header-optional">
            <li>
                <a href="https://www.facebook.com/" target="_blank">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://twitter.com/?lang=en" target="_blank">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="https://www.linkedin.com/" target="_blank">
                    <i class='bx bxl-linkedin'></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <i class='bx bxl-instagram'></i>
                </a>
            </li>
            <ul>
    </div>
</div>
</div>
<section class="texture">

    <div class=" container">
        <div class="row justify-content-center">
            <div class="col-lg-1 col-md-1 noned"></div>
            <div class="col-lg-3 col-md-4 box-sha">
                <div class="paddinglr lg">
                    <div class="padding-left20"><img src="assets/images/call_11zon.webp" alt="" class="measurement">
                    </div>
                    <h2 class="font-weight"> <b class="clr-con">Call us</b></h2>
                    <span>
                        <a href="tel:240.288.9999" class="contactc">
                            <p class="contactc font-size14"> Phone:-240.288.9999</p>
                        </a>
                    </span>

                </div>

            </div>
            <div class="col-lg-3 col-md-4 box-sha">
                <div class="paddinglr">
                    <div class="padding-left20"><img src="assets/images/location_11zon.webp" alt="" class="measurement">
                    </div>
                    <h2 class="font-weight"><b class="clr-con">Reach us</b></h2>
                    <span>
                        <p class="font-size14"> 10007 Stedwick Road Montgomery Village, MD 20886</p>

                    </span>

                </div>

            </div>
            <div class="col-lg-3 col-md-4 box-sha">
                <div class="paddinglr lg">
                    <div class="padding-left20"> <img src="assets/images/email_11zon.webp" alt="" class="measurement">
                    </div>
                    <h2 class="font-weight"><b class="clr-con">Email us</b></h2>
                    <span><a href="mailto:info@montgomerydentalmd.com">
                            <p class="contactc font-size14 margin-lef-42px">info@montgomerydentalmd.com </p>
                        </a></span>

                </div>

            </div>
            <div class="col-lg-1 col-md-1 noned"></div>

            <!-- <div class=" col-lg-2">
            </div> -->

        </div>
    </div>

</section>


</section>
<section class="bgtexture">
    <div class="container">
        <div class="row center">
            <div class="col-lg-12 width80">
                <div class="appointment-overview-box gfd">
                    <h4 class="dj8"><i class="flaticon-calendar"></i>Enquiry Us</h4>
                    <p>Our office will contact you to schedule an appointment or discuss any questions you might have.
                    </p>
                    <form action="https://vsynapse.com/mail/scripts.php" method="post">
                        <div class="row" style="justify-content: center;">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="Are You a new patient">Are you a new patient</label>
                                    <select name="new_patient" id="" required>
                                        <option value="">Select</option>
                                        <option value="Yes, this is my first appointment.">Yes, this is my first
                                            appointment.</option>
                                        <option value="No, I'm a current patient.">No, I'm a current patient.
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group dj9">

                                    <input type="text" class="form-control" placeholder=" Patient's name"
                                        name="patient_name" required>
                                </div>
                                <div class="form-group dj9">

                                    <input type="text" class="form-control" placeholder="Phone number (required)"
                                        name="phone_num" required>
                                </div>
                                <div class="form-group mp15">

                                    <label for=" Preferred Day(s)">Preferred day(s) </label>
                                    <div class="dj7">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="monday"
                                                id="defaultCheck1" name="preferred_day[]">
                                            <label class="form-check-label mr17" for="defaultCheck1">
                                                Monday
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="tuesday"
                                                id="defaultCheck1" name="preferred_day[]">
                                            <label class="form-check-label mr17" for="defaultCheck1">
                                                Tuesday
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="wednesday"
                                                id="defaultCheck1" name="preferred_day[]">
                                            <label class="form-check-label mr17" for="defaultCheck1">
                                                Wednesday
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="thursday"
                                                id="defaultCheck1" name="preferred_day[]">
                                            <label class="form-check-label mr17" for="defaultCheck1">
                                                Thursday
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="friday"
                                                id="defaultCheck1" name="preferred_day[]">
                                            <label class="form-check-label mr17" for="defaultCheck1">
                                                Friday
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="make-appointment-content">


                                    <div class="form-group ">

                                        <label for=" Preferred Day(s)"> Best time for appointment </label>
                                        <div class="dj7">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="morning"
                                                    id="defaultCheck1" name="best_time[]">
                                                <label class="form-check-label mr17" for="defaultCheck1">
                                                    Morning
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" value="early-afternoon"
                                                    id="defaultCheck1" name="best_time[]">
                                                <label class="form-check-label mr17" for="defaultCheck1">
                                                    Early afternoon
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Late Afternoon"
                                                    name="best_time[]"> <label class="form-check-label mr17"
                                                    for="defaultCheck1">
                                                    Late afternoon
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-group mp15">
                                            <label for=" Reason for Appointment"> Reason for appointment</label>
                                            <select name="rsn_apt" id="" required>
                                                <option value="">Select</option>
                                                <option value="Complete Exam">Complete exam</option>
                                                <option value="Regular Cleaning">Regular cleaning</option>
                                                <option value="Crown">Crown</option>
                                                <option value="Filling">Filling</option>
                                                <option value="Pain / Problem">Pain / Problem</option>
                                                <option value="Tooth Repair">Tooth repair</option>
                                                <option value="Teeth Whitening">Teeth whitening</option>
                                                <option value="Veneers">Veneers</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group mp15">
                                            <label for="exampleFormControlTextarea1 "> Please provide any other
                                                information
                                                related to this appointment request:</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                                                name="oth_info" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="option-item mr-3 main dj10">
                                <div class="navbar-btn sub-main">
                                    <input class="button-three" type="submit" name="bk_aptm">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3093.16049330684!2d-77.207159!3d39.171072!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf74cb95959593487!2sMontgomery%20Dental%20MD!5e0!3m2!1sen!2sus!4v1634364626823!5m2!1sen!2sus"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-6">

        </div>

    </div>

</div>

<?php
include "includes/footer.php";
?>