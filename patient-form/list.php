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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
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
             

               <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="no-print">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                $form_query= mysqli_query($conn,"select * from health_history INNER JOIN dental_info ON health_history.health_history_id = dental_info.matching_id INNER JOIN medical_information ON health_history.health_history_id = medical_information.matching_id INNER JOIN medical_information1 ON health_history.health_history_id = medical_information1.matching_id INNER JOIN medical_info2 ON health_history.health_history_id = medical_info2.matching_id INNER JOIN medical_info3 ON health_history.health_history_id = medical_info3.matching_id INNER JOIN medical_info4 ON health_history.health_history_id = medical_info4.matching_id");
                        if(!empty($form_query)){
                            $i=1;
                        while($list = mysqli_fetch_array($form_query))
                        
                        {
                        ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $list['fname']; ?><?php echo $list['mname']; ?><?php echo $list['lname']; ?></td>
                        <td><?php echo $list['email'];?></td>
                        <td><?php echo $list['home_phone'];?></td>
                        <td><?php echo $list['address'];?></td>
                        <td>
                            <a class="btn btn-info btn-xs detailsbutton" title="View"
                                href="details.php?id=<?php echo $list['health_history_id']; ?>"><i
                                    class="fa fa-eye"> View </i></a>
                            <a class="btn btn-danger btn-xs delete_button"
                                href="delete.php?id=<?php echo $list['health_history_id']; ?>" title="Delete"><i
                                    class="fa fa-trash-o"> </i> Delete</a>
                        </td>
                    </tr>
                    <?php $i++; }  } ?>
                </tbody>
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

<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- end -->

