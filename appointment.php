<?php
    include "includes/header.php";
    include "includes/scripts.php";
    
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

<div class="page-banner-area" id="appointment">
    <div class="container">
        <div class="page-banner-content">
            <h2>Appointment</h2>
            <ul class="pages-list">
                <li><a href="index.php">Home</a></li>
                <li>Appointment</li>
            </ul>
        </div>
    </div>
</div>



<section class="appointment-area bg-image ptb-100">
    <div class="container">
        <!-- <div class="appointment-form">
            <h4><i class="flaticon-calendar"></i> Make An Appointment</h4>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Date" />
                </div>
                <button type="submit" class="default-btn">Book Appointment</button>
            </form>
        </div> -->
        <div class="col-lg-8">
            <div class="appointment-overview-box">
                <h4 class="dj8"><i class="flaticon-calendar"></i> Make an Appointment</h4>
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
</section>
<section class="features-area-two pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-box">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-caduceus"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">Quality Brackets</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-box">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-policy"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">Certified Dentist</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-box">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">Experience</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-features-box">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-hospitalisation"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">Patient Care</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "includes/footer.php";
?>