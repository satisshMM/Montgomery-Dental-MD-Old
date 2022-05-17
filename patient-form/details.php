<?php
include "scripts.php";
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="./form.css" rel="stylesheet" type="text/css">
    <link href="./form2.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <section class="boddy">
        <section class="bann">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 logo">
                            <img src="./assets/den logo white.png" alt="logo" class="mt-2">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 med">
                            <li><i class="fas fa-phone-alt ml-3"></i></li>
                            <li class="ml-2 mt-4">240.288.9999</li>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 med">

                            <ul>
                                <li><a href="https://www.facebook.com/MontgomeryDentalMD" target="_blank"
                                        class="ml-4 mt-4"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://wa.me/240-288-9999" target="_blank" class="ml-4"><i
                                            class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://twitter.com/home" target="_blank" class="ml-4"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/montgomery_dental_md_10007/" target="_blank"
                                        class="ml-4"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://in.pinterest.com/kvn25121158/_created/" target="_blank"
                                        class="ml-4"><i class="fab fa-pinterest"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <h2 class="txt-cen">Full Details</h2>
        <div class="container">
            <div class="row">
                <?php  
                $form_query= mysqli_query($conn,"select * from health_history INNER JOIN dental_info ON health_history.health_history_id = dental_info.matching_id INNER JOIN medical_information ON health_history.health_history_id = medical_information.matching_id INNER JOIN medical_information1 ON health_history.health_history_id = medical_information1.matching_id INNER JOIN medical_info2 ON health_history.health_history_id = medical_info2.matching_id INNER JOIN medical_info3 ON health_history.health_history_id = medical_info3.matching_id INNER JOIN medical_info4 ON health_history.health_history_id = medical_info4.matching_id where health_history_id='".$_GET['id']."'");
                $form_fetch= mysqli_fetch_array($form_query);
               
                ?>

                <table>
                    <tr>

                        <div class="col-md-6">
                            <th width="50%">Email</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['email']; ?></td>
                        </div>


                    </tr>
                    <tr>

                        <div class="col-md-6">
                            <th width="50%">Todays date</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['date']; ?></td>
                        </div>


                    </tr>
                    <tr>

                        <div class="col-md-6">
                            <th width="50%">Full Name</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['lname']; ?></td>
                        </div>


                    </tr>
                    <tr>

                        <div class="col-md-6">
                            <th width="50%">Business Phone:(include area code)</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['business_phone']; ?></td>
                        </div>


                    </tr>
                    <tr>

                        <div class="col-md-6">
                            <th width="50%">Business Phone:(include area code)</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['business_phone']; ?></td>
                        </div>


                    </tr>

                    <tr>

                        <div class="col-md-6">
                            <th width="50%">Business Phone:(include area code)</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['business_phone']; ?></td>
                        </div>


                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Address</th>
                        </div>
                        <div class="col-md-6">
                            <td> <?php echo $form_fetch['address']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">City</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['city']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">State</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['state']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Zip</th>
                        </div>
                        <div class="col-md-6">
                            <td> <?php echo $form_fetch['zip']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Occupation</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['occupation']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Height</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['height']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Weight</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['weight']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Sex</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['sex']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">SSN:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['ssn']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Emergency Contact:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['emergency_contact']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Relationship</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['releationship']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Home Phone:(include area code)</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['phone_home']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Cell Phone:(include area code)</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['cell_phone']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <th width="100%" class="txt-cen">If you are completing this form for another person, what is
                            your relationship
                            to that
                            person?</th>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Your Name:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['your_name']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Relationship</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['releationship_other']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Active Tuberculosis</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['Active_tuberculosis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Persistent cough greater than a 3 week duration.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['Persistent_cough_3_week_duration']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Cough that produces blood</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['Cough_that_produces_blood']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Been exposed to anyone with tuberculosis.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['exposed_tuberculosis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do your gums bleed when you brush or floss?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['did_gum_brush_fluss']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you have earaches or neck pains?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['do_eraches_neckpains']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Are your teeth sensitive to cold, hot, sweets or pressure?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['are_teeth_sensitive']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you have any clicking, popping or discomfort in the jaw?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['do_clicking_popping']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Does food or floss catch between your teeth?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['did_food_floss']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you brux or grind your teeth?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['do_brux_grind']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Is your mouth dry?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['mouth_dry']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you have sores or ulcers in your mouth?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['do_sores_ulcers']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Have you had any periodontal (gum) treatments?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['had_periodontal']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you wear dentures or partials?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['dentures_partials']; ?></td>
                        </div>
                    </tr>

                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Have you ever had orthodontic (braces) treatment?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['had_orthodontic']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you participate in active recreational activities?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['active_recreational']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Have you had any problems associated with previous dental treatment?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['problems_previous_dental']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Have you ever had a serious injury to your head or mouth?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['serious_injury_head']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Is your home water supply fluoridated?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['home_water_fluoridated']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Date of your last dental exam:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['date_last_dental']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you drink bottled or filtered water?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['drink_botteled_filter']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If yes, how often? Select one: DAILY / WEEKLY / OCCASIONALLY</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['daily_weekly']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Date of last dental x-rays:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['date_last_dentalxrays']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Are you currently experiencing dental pain or discomfort?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['are_dentalpain_discomfort']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">What is the reason for your dental visit today?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['reason_for_dental_visit_today']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">How do you feel about your smile?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['about_ur_smile']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Are you now under the care of a physician?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['under_care_physician']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Have you had a serious illness, operation or been hospitalized in the past 5
                                years?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['serious_operation_5yrs']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Physician Name:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['physician_name']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If yes, what was the illness or problem?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['yes_illness_problem']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Phone:(Include area code)</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['phone_areacode']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Address/City/State/Zip:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['address_state_city']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Are you taking or have you recently taken any prescription or over the
                                counter
                                medicine(s)?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['prescription_counter_medicine']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Are you in good health?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['good_in_health']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If so, please list all, including vitamins, natural or herbal preparations
                                and/or diet
                                supplements:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['vitamins_natural_herbal']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Has there been any change in your general health within the past year?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['change_health_pastyear']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If yes, what condition is being treated?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['yes_condition_treated']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Date of last physical exam:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['last_physical_exam']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you wear contact lenses?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['u_wear_contact_lenses']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you use controlled substances (drugs)?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['use_controlled_substances']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Joint Replacement:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['joint_replacement']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you use tobacco (smoking, snuff, chew, bidis)?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['use_tobbaco']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If so, how interested are you in stopping?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['intrested_in_stopping']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Have you had an orthopedic total joint (hip, knee, elbow, finger)
                                replacement?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['arthopedic_total_joint']; ?></td>
                        </div>
                    </tr>

                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Date:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['joint_date']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Do you drink alcoholic beverages?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['intrested_in_stopping']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If yes, how much alcohol did you drink in the last 24 hours?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['alochoholic_bevarages']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If yes, how much do you typically drink In a week?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['typically_drink_week']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Are you taking or scheduled to begin taking either of the medications,
                                alendronate
                                (Fosamax®) or risedronate (Actonel®)for osteoporosis or Paget’s disease?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['medications_alendronate']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Since 2001, were you treated or are you presently scheduled to begin
                                treatment with the
                                intravenous bisphosphonates (Aredia® or Zometa®) for bone pain, hypercalcemia or
                                skeletal complications resulting from Paget’s disease, multiple myeloma or metastatic
                                cancer?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['2001_intravenous_bisphosphonates']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Date Treatment began:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['treatment_began']; ?> </td>
                        </div>
                    </tr>
                    <tr>

                        <th width="100%">Allergies - Are you allergic to or have you had a reaction to: To all yes
                            responses,
                            specify type of reaction.</th>


                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Local anesthetics</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['local_anesthitics']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Aspirin</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['aspirin']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Penicillin or other antibiotics</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['pencilin_antibiotics']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Barbiturates, sedatives, or sleeping pills</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['barbiturates_sedatives']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Sulfa drugs</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['sulfa_drugs']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Codeine or other narcotics</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['codeiene_other_narcotics']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <th class="txt-cen">WOMEN ONLY Are you:</th>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Pregnant?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['are_u_pregnant']; ?> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Number of weeks:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['no_of_weeks']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Taking birth control pills or hormonal replacement?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['birth_controller_pills']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Nursing?</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['nursing']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Metals.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['metals']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Latex (rubber).</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['latex']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Iodine.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['lodine']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Hay fever/seasonal.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['hay_fever_seasonal']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Animals.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['animals']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Food.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['food']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Other.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['other']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Artificial (prosthetic) heart valve.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['artificial_heart_valve']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Previous infective endocarditis.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['infective_endocarditis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Damaged valves in transplanted heart.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['damaged_transplanted_heart']; ?></td>
                        </div>
                    </tr>
                    <tr>

                        <th width="100%" class="txt-cen">Congenital heart disease (CHD):</th>


                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Unrepaired, cyanotic CHD.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['unrepaired_cyanotic']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Repaired (completely) in last 6 months.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['repaired_last_6mnths']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Repaired CHD with residual defects.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['repaired_chd']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Autoimmune disease.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['aurtoimmune_disease']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Rheumatoid arthritis.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['rheumatoid_arthritis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Systemic lupus erythematosus.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['systemic_lupus']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Asthma</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['asthma']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Bronchitis</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['bronchitis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Emphysema</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['emphysema']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Sinus trouble</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['sinus_trouble']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Tuberculosis</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['tuberculosis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Cancer/ Chemotherapy/ Radiation Treatment</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['cancer_chemotheraphy']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Mitral valve prolapse.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['mitral_valve']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Pacemaker.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['pacemaker']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Rheumatic fever.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['rheumatic_fever']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Rheumatic heart disease.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['rhemutaic_heart_disease']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Abnormal bleeding.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['abnormal_bleeding']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Anemia.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['anemia']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Blood transfusion.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['blood_transfusion']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If yes, date:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['if_yes_date']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Hemophilia.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['hemophilia']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">AIDS or HIV infection.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['aids_hiv_infection']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Arthritis.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['arthritis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Hepatitis, jaundice or liver disease.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['hepatatis_jaundice_liver']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Epilepsy.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['epilipesy']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Fainting spells or seizures.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['fainting_spells']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Neurological disorders.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['neurological_disorders']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">If yes, specify:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['if_yes_specify']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Sleep disorder</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['sleep_disorder']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Mental health disorders.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['mental_health_disorders']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Specify:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['specifys']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Chest pain upon exertion.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['chest_pain']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Chronic pain.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['chronicpain']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Diabetes Type I or II.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['daibetis_type']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Eating disorder.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['eating_disorder']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Malnutrition.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['malnutrition']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Gastrointestinal disease.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['gastrointestinal_disease']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">G.E. Reflux/persistent heartburn.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['reflux_heartburn']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Ulcers.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['ulcers']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Thyroid problems.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['thyroid_problems']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Stroke.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['stroke']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Glaucoma.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['glaucoma']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Cardiovascular disease.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['cardio_vascular_disease']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Angina.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['angina']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Arteriosclerosis.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['arteriosclerosis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Congestive heart failure .</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['congestive_heart']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Damaged heart valves.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['dam_heart_valve']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Heart attack.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['heart_attack']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Low blood pressure.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['low_blood_pressure']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">High blood pressure.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['high_blood_pressure']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Other congenital heart defects.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['congential_heart_defects']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Recurrent Infections.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['recurrent_infections']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Type of infection</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['type_of_infection']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Kidney problems.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['kidney_problems']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Night sweats.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['night_sweats']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Osteoporosis.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['osteoporosis']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Persistent swollen glands in neck.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['presistent_swallon_glands']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Severe headaches/migraines.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['severe_headaches']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Severe or rapid weight loss.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['rapid_weight_loss']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Sexually transmitted disease.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['sexually_transmitted_disease']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Excessive urination.</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['excessive_urination']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">
                                Please explain:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['please_explain']; ?></td>
                        </div>
                    </tr>

                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Name of physician or dentist making recommendation:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['physician_dentist_recommendation']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Phone:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['phone']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Date:</th>
                        </div>
                        <div class="col-md-6">
                            <td><?php echo $form_fetch['date']; ?></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <th width="50%">Signature of Patient/Legal Guardian:</th>
                        </div>
                        <div class="col-md-6">
                            <td><img src="uploads/signs/<?php echo $form_fetch['signature']; ?>" alt="" width="100px"
                                    height="100px"></td>
                        </div>
                    </tr>

                </table>

            </div>
        </div>

        <footer>

            <section class="footers">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4  foot">
                            <h5>Why Choose Us</h5>
                            <ul>
                                <li><a href="https://montgomerydentalmd.com/emergency-care-3/"><i
                                            class="fas fa-angle-right"></i>&nbsp; &nbsp;24/ 7 Emergency
                                        Calls</a>
                                </li>
                                <li><a href="https://montgomerydentalmd.com/financing/"><i
                                            class="fas fa-angle-right"></i>&nbsp; &nbsp;Highest Quality Care</a>
                                </li>
                                <li><a href="https://montgomerydentalmd.com/financing/"><i
                                            class="fas fa-angle-right"></i>&nbsp; &nbsp;Outstanding Facility</a>
                                </li>
                                <li><a href="https://montgomerydentalmd.com/restorative-dentistry/"><i
                                            class="fas fa-angle-right"></i>&nbsp; &nbsp;Comfortable Dental </a>
                                </li>

                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 foot">
                            <h5>Our Services</h5>
                            <ul>
                                <li><a href="https://montgomerydentalmd.com/cosmetic-dentistry-2/"><i
                                            class="fas fa-angle-right"></i>&nbsp; &nbsp;Cosmetic</a></li>
                                <li><a href="https://montgomerydentalmd.com/speciality-services/"><i
                                            class="fas fa-angle-right"></i>&nbsp; &nbsp;Speciality</a></li>
                                <li><a href="https://montgomerydentalmd.com/dental-bonding/"><i
                                            class="fas fa-angle-right"></i>&nbsp; &nbsp;Bonding</a></li>
                                <li><a href="https://montgomerydentalmd.com/dental-crowns/"><i
                                            class="fas fa-angle-right"></i>&nbsp; &nbsp;Crowns</a></li>

                            </ul>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 foot">
                            <h5>Contact Us</h5>
                            <ul>
                                <li><a href="#"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;10007 Stedwick
                                        Road ,</a></li>
                                <li><a href="#">Montgomery Village MD 20886</a></li>
                                <li><a href="tel:240-288-9999"><i class="fas fa-mobile-alt"></i>&nbsp;
                                        &nbsp;240-288-9999</a></li>
                                <li><a href="mailto:info@montgomerydentalmd.com?subject=subject&cc=cc@example.com"><i
                                            class="far fa-envelope"></i>&nbsp; &nbsp;info@montgomerydentalmd.com
                                    </a></li>
                            </ul>
                            <ul>
                                <li style="display: inline-block;"><a href="https://www.facebook.com/MontgomeryDentalMD"
                                        target="_blank" class="ml-4"><i class="fab fa-facebook-f"></i></a></li>
                                <li style="display: inline-block;"><a href="https://wa.me/240-288-9999" target="_blank"
                                        class="ml-4"><i class="fab fa-whatsapp"></i></a></li>
                                <li style="display: inline-block;"><a href="https://twitter.com/home" target="_blank"
                                        class="ml-4"><i class="fab fa-twitter"></i></a></li>
                                <li style="display: inline-block;"><a
                                        href="https://www.instagram.com/montgomery_dental_md_10007/" target="_blank"
                                        class="ml-4"><i class="fab fa-instagram"></i></a></li>
                                <li style="display: inline-block;"><a
                                        href="https://in.pinterest.com/kvn25121158/_created/" target="_blank"
                                        class="ml-4"><i class="fab fa-pinterest"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <hr width="100%" size="5" color="White">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 coppy">
                            <p>©2021 Montgomery.All rights reserved.|&nbsp;Makers Mind</p>
                        </div>
                    </div>
                </div>
            </section>


        </footer>