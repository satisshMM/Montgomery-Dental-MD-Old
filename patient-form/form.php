<?php
include "scripts.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="./form.css" rel="stylesheet" type="text/css">
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

        <!----------------------------------- Health History Form--------------------------------------------- -->
        <form method="post" enctype="multipart/form-data">
            <section class="head">
                <h2>Health History Form</h2>
                <div class="container">
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 start">
                            <div>
                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <label for="exampleInputEmail1" class="">Email:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email" name="email"
                                                value="email">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <label for="date" class="">Today’s Date:</label>
                                            <input type="date" class="form-control" id="exampleInputdate"
                                                aria-describedby="date" placeholder="Enter date" name="todaysdate"
                                                value="todaysdate">
                                        </div>
                                        <!---
                            <div class="col-md-2">
                                <img src="" alt="logo">
                            </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------------------------------------------->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contents">
                            <p>As required by law, our office adheres to written policies and procedures to protect the
                                privacy of information about
                                you that we create, receive or maintain. Your
                                answers are for our records only and will be kept confidential subject to applicable
                                laws.
                                Please note that you will be
                                asked some questions about your responses to
                                this questionnaire and there may be additional questions concerning your health. This
                                information is vital to allow us
                                to provide appropriate care for you. This office
                                does not use this information to discriminate.</p>
                        </div>
                    </div>

                    <!------------------------second row***************************************************---------------------------------------->
                    <div class="row">
                        <div class="col--12 col-sm-12 col-md-6 col-lg-6 field">
                            <div class="label">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-outline mb-4">
                                            <label>Last</label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                name="lname">
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-outline mb-4">
                                            <label>First</label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline mb-4">
                                            <label>Middle</label>
                                            <input type="text" class="form-control" placeholder="Middle name"
                                                name="mname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------------------------------------------------------------------------------------------------------------->
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example4">Address</label>
                                        <input type="text" id="form6Example4" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example4">Occupation</label>
                                        <select class="form-control" name="occupation">
                                            <option>Select</option>
                                            <option value="Engineer">Engineer</option>
                                            <option value="Business">Business</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Developer">Developer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!------------------------------------------------------------------------------------------------------------------------>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example4">SSN:</label>
                                        <input type="text" class="form-control" placeholder="Enter id" name="ssn">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example4">Emergency Contact:</label>
                                        <input type="tel" class="form-control" placeholder="Enter number"
                                            name="emergency">
                                    </div>
                                </div>
                            </div>



                        </div>


                        <!--------------------------------------------------------------------------------------------------------------->
                        <div class="col--12 col-sm-12 col-md-6 col-lg-6 form">
                            <div class="label">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label>Home Phone:&nbsp;(include area code)</label>
                                            <input type="tel" name="hnumber" class="form-control"
                                                placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label>Business Phone:(include area code)</label>
                                            <input type="tel" name="bnumber" class="form-control"
                                                placeholder="Enter Number">
                                        </div>
                                    </div>
                                </div>
                                <!---------------------------------------------------------------------------------------------------------------------------------------->
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example4">City</label>
                                            <select class="form-control" name="city">
                                                <option>Select</option>
                                                <option value="Ex1">Ex1</option>
                                                <option value="Ex2">Ex2</option>
                                                <option value="Ex3">Ex3</option>
                                                <option value="Ex4">Ex4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example4">State</label>
                                            <select class="form-control" name="state">
                                                <option>Select</option>
                                                <option value="Ex1">Ex1</option>
                                                <option value="Ex2">Ex2</option>
                                                <option value="EX3">EX3</option>
                                                <option value="EX4">EX4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline mb-4">
                                            <label>Zip</label>
                                            <input type="tel" name="zip" class="form-control"
                                                placeholder="Enter Number">
                                        </div>
                                    </div>
                                </div>
                                <!--------------------------------------------------------------------------------------------------------------------->
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example4">Height</label>
                                            <input type="text" name="height" class="form-control"
                                                placeholder="Enter Height">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example4">Weight</label>
                                            <input type="text" name="weight" class="form-control"
                                                placeholder="Enter Weight">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example4">Sex</label>
                                            <div class="male ml-4">
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="radio"
                                                            id="inlineCheckbox1" value="male" name="gender">
                                                    </td>
                                                    <td><label class="form-check-label"
                                                            for="inlineCheckbox1">Male</label>
                                                    </td>

                                                </tr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-outline mb-4">
                                            <div class="female ">
                                                <tr>
                                                    <td><input class="form-check-input" type="radio"
                                                            id="inlineCheckbox1" value="female" name="gender"></td>
                                                    <td><label class="form-check-label"
                                                            for="inlineCheckbox1">Female</label>
                                                    </td>

                                                </tr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--------------------------------------------------------------------------------------------------------------------------------------------------->
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-outline mb-4">
                                            <label>Relationship</label>
                                            <select class="form-control" name="relation">
                                                <option>Select</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline mb-4">
                                            <label>Home Phone:<span class="code">(include area code)</span></label>
                                            <input type="tel" name="homenum" class="form-control"
                                                placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline mb-4">
                                            <label>Cell Phone:<span class="code">(include area code)</span></label>
                                            <input type="tel" name="cellnum" class="form-control"
                                                placeholder="Enter Number">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>If you are completing this form for another person, what is your relationship to that
                                person?
                            </p>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example4">Your Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name"
                                            name="yname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example4">Relationship</label>
                                        <input type="text" class="form-control" placeholder="Enter Relation"
                                            name="relationship">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table class="end">
                                <thead>
                                    <tr>
                                        <th scope="col" class="follow">Do you have any of the following diseases or
                                            problems:<p> Check DK if you Don't Know the answer to the question </p>
                                        </th>

                                        <th scope="col" class="pres">Yes</th>
                                        <th scope="col" class="pres">No</th>
                                        <th scope="col" class="pres">Dk</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="">Active Tuberculosis</td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Active"
                                                value="yes">
                                        </td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Active"
                                                value="no">
                                        </td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Active"
                                                value="dk">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="">Persistent cough greater than a 3 week duration.</td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                name="Persistent" value="yes">
                                        </td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                name="Persistent" value="no">
                                        </td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                name="Persistent" value="dk">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="">Cough that produces blood</td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Cough"
                                                value="yes">
                                        </td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Cough"
                                                value="no">
                                        </td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Cough"
                                                value="dk">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="">Been exposed to anyone with tuberculosis.</td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Been"
                                                value="yes">
                                        </td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Been"
                                                value="no"></td>
                                        <td class="rare"><input class="" type="radio" id="inlineCheckbox1" name="Been"
                                                value="dk"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 note">
                                <p><span>Note: &nbsp;</span>If you answer yes to any of the 4 items above, please
                                    stop
                                    and return this form to
                                    the receptionist.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 nextt">
                                <div class="text-center">
                                    <button type="button" class=""><a data-toggle="collapse" href="#collapseExample"
                                            role="button" aria-expanded="false"
                                            aria-controls="collapseExample">Next</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>






                <!--------------------------------------------------------DENTAL INFORMATION--------------------------------------------------------------------------------------------------------------------------->
                <section class="dental collapse" id="collapseExample">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dental">
                                    <h1>Dental Information </h1>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <table class="den">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="resp">Yes</th>
                                                <th scope="col" class="resp">No</th>
                                                <th scope="col" class="resp">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Do your gums bleed when you brush or floss?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="floss" value="yes">
                                                </td>
                                                <td class="dare"><input class=" " type="radio" id="inlineCheckbox1"
                                                        name="floss" value="no">
                                                </td>
                                                <td class="dare"><input class=" " type="radio" id="inlineCheckbox1"
                                                        name="floss" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Are your teeth sensitive to cold, hot, sweets or
                                                    pressure?</td>
                                                <td class="dare"><input type="radio" id="inlineCheckbox1"
                                                        name="sensitive" value="yes"></td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="sensitive" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="sensitive" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Does food or floss catch between your teeth?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="foodorfloss" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="foodorfloss" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="foodorfloss" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Is your mouth dry?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="dry" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="dry" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="dry" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Have you had any periodontal (gum) treatments?
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="periodontal" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="periodontal" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="periodontal" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Have you ever had orthodontic (braces) treatment?
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="orthodontic" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="orthodontic" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="orthodontic" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Have you had any problems associated with previous
                                                    dental treatment?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="associated_treat" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="associated_treat" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="associated_treat" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Is your home water supply fluoridated?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="fluoridated" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="fluoridated" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="fluoridated" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Do you drink bottled or filtered water?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="filtered" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="filtered" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="filtered" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">If yes, how often? Select one: DAILY / WEEKLY /
                                                    OCCASIONALLY</td>
                                            </tr>
                                            <tr>
                                                <td><select class="form-control" name="daily_week">
                                                        <option value="">Select</option>
                                                        <option value="DAILY">DAILY</option>
                                                        <option value="WEEKLY">WEEKLY</option>
                                                        <option value="OCCASIONALLY">OCCASIONALLY</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Are you currently experiencing dental pain or
                                                    discomfort?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="discomfort" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="discomfort" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="discomfort" value="dk">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <table class="den">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="resp">Yes</th>
                                                <th scope="col" class="resp">No</th>
                                                <th scope="col" class="resp">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Do you have earaches or neck pains?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="earaches" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="earaches" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="earaches" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Do you have any clicking, popping or discomfort in
                                                    the
                                                    jaw?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="popping" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="popping" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="popping" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Do you brux or grind your teeth?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="grind" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="grind" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="grind" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Do you have sores or ulcers in your mouth?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="sores" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="sores" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="sores" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Do you wear dentures or partials?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="dentures" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="dentures" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="dentures" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Do you participate in active recreational
                                                    activities?
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="recreational" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="recreational" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="recreational" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Have you ever had a serious injury to your head or
                                                    mouth?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="injury" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="injury" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="injury" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Date of your last dental exam:</td>
                                            </tr>
                                            <tr>
                                                <td><input type="date" class="form-control" id="exampleInputdate"
                                                        aria-describedby="date" placeholder="Enter date"
                                                        name="Dateofdental" value="Dateofdental"></td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Date of last dental x-rays:</td>
                                            </tr>
                                            <tr>
                                                <td><input type="date" class="form-control" id="exampleInputdate"
                                                        aria-describedby="date" placeholder="Enter date"
                                                        name="dateofxray" value="dateofxray"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group green-border-focus smile">
                                        <label for="exampleFormControlTextarea5">What is the reason for your dental
                                            visit
                                            today?</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"
                                            name="dentalvisit" value="dentalvisit"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group green-border-focus smile">
                                        <label for="exampleFormControlTextarea5">How do you feel about your
                                            smile?</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"
                                            name="feelsmile" value="feelsmile"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 nextt">
                                    <div class="text-center">
                                        <button type="button" class=""><a data-toggle="collapse"
                                                href="#collapseExample2" role="button" aria-expanded="false"
                                                aria-controls="collapseExample">Next</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>

                <!--------------------------------------------------------MEDICAL-----INFORMATION--------------------------------------------------------------------------------------------------------------------------->
                <section class="dental collapse" id="collapseExample2">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dental">
                                    <h1>Medical Information</h1>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <table class="den">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="resp">Yes</th>
                                                <th scope="col" class="resp">No</th>
                                                <th scope="col" class="resp">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Are you now under the care of a physician?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="careof" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="careof" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="careof" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">Physician Name:</label>
                                                        <input type="text" id="exampleForm2" class="form-control"
                                                            name="Physiname">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">Phone:(Include area code)</label>
                                                        <input type="tel" id="exampleForm2" class="form-control"
                                                            name="phnumber">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">Address/City/State/Zip:</label>
                                                        <input type="text" id="exampleForm2" class="form-control"
                                                            name="adcistzi">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Are you in good health?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="goodhealth" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="goodhealth" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="goodhealth" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Has there been any change in your general health
                                                    within the past year?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="generalhealth" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="generalhealth" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="generalhealth" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">If yes, what condition is being
                                                            treated?</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea4"
                                                            rows="3" name="condition" value="condition"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">Date of last physical
                                                            exam:</label>
                                                        <input type="date" id="exampleForm2" class="form-control"
                                                            name="datephysi" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <table class="den">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="resp">Yes</th>
                                                <th scope="col" class="resp">No</th>
                                                <th scope="col" class="resp">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Have you had a serious illness, operation or been
                                                    hospitalized in the past 5 years?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="hospitalized" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="hospitalized" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="hospitalized" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">If yes, what was the illness or
                                                            problem?</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea4"
                                                            rows="3" name="illnessproblem"
                                                            value="illnessproblem"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Are you taking or have you recently taken any
                                                    prescription or over the counter medicine(s)?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="prescription" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="prescription" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="prescription" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">If so, please list all, including
                                                            vitamins,
                                                            natural or herbal preparations and/or diet
                                                            supplements:</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea4"
                                                            rows="3" name="herbal" value="herbal"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 nextt">
                                    <div class="text-center">
                                        <button type="button" class=""><a data-toggle="collapse"
                                                href="#collapseExample3" role="button" aria-expanded="false"
                                                aria-controls="collapseExample">Next</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>

                <!------------------------------------------------------MEDICAL INFORMATION LAST SECTION---------------------------------------------------------------------------------------------------------------------------------------->
                <section class="dental collapse" id="collapseExample3">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dental">
                                <h1>Medical Information</h1>
                            </div>
                        </div>
                    </div>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <table class="den">
                                        <thead>
                                            <tr>
                                                <th scope="col"> Check DK if you Don't Know the answer to the
                                                    question
                                                </th>
                                                <th scope="col" class="resp">Yes</th>
                                                <th scope="col" class="resp">No</th>
                                                <th scope="col" class="resp">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Do you wear contact lenses?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="lenses" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="lenses" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="lenses" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Joint Replacement:</td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Have you had an orthopedic total joint (hip, knee,
                                                    elbow, finger) replacement?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="orthopedic" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="orthopedic" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="orthopedic" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Date:</td>
                                            </tr>
                                            <tr>
                                                <td><input type="date" class="form-control" id="exampleInputdate"
                                                        aria-describedby="date" placeholder="Enter date" name="meddate"
                                                        value="meddate">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">If yes, have you had any
                                                            complications?</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea4"
                                                            rows="3" name="complications"
                                                            value="complications"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Are you taking or scheduled to begin taking either
                                                    of
                                                    the
                                                    medications, alendronate (Fosamax®) or risedronate (Actonel®)for
                                                    osteoporosis or Paget’s disease?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Fosamax" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Fosamax" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Fosamax" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Since 2001, were you treated or are you presently
                                                    scheduled
                                                    to begin treatment with the intravenous bisphosphonates
                                                    (Aredia® or Zometa®) for bone pain, hypercalcemia or skeletal
                                                    complications resulting from Paget’s disease, multiple myeloma
                                                    or metastatic cancer?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Aredia" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Aredia" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Aredia" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">Date Treatment began:</label>
                                                        <input type="date" class="form-control" id="exampleInputdate"
                                                            aria-describedby="date" placeholder="Enter date"
                                                            name="began" value="began">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Allergies - Are you allergic to or have you had a
                                                    reaction to:
                                                    To all yes responses, specify type of reaction.</td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Local anesthetics</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="reaction" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="reaction" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="reaction" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Aspirin</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Aspirin" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Aspirin" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Aspirin" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Penicillin or other antibiotics</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Penicillin" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Penicillin" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Penicillin" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Barbiturates, sedatives, or sleeping pills</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="sedatives" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="sedatives" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="sedatives" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Sulfa drugs</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sulfa" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sulfa" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sulfa" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Codeine or other narcotics</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Codeine" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Codeine" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Codeine" value="dk">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <table class="den">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="resp">Yes</th>
                                                <th scope="col" class="resp">No</th>
                                                <th scope="col" class="resp">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Do you use controlled substances (drugs)?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="drugs" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="drugs" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="drugs" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Do you use tobacco (smoking, snuff, chew, bidis)?
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="snuff" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="snuff" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="snuff" value="dk">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="form-label" for="form6Example4">If so, how
                                                        interested
                                                        are you in stopping?</label>
                                                    <select class="form-control" name="interestedstop">
                                                        <option value="">Select</option>
                                                        <option value="Very">Very</option>
                                                        <option value="Somewhat">Somewhat</option>
                                                        <option value="Not interested">Not interested</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Do you drink alcoholic beverages?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="beverages" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="beverages" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="beverages" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">If yes, how much alcohol did you
                                                            drink
                                                            in the last 24 hours?</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea4"
                                                            rows="3" name="drink24hr" value="drink24hr"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">If yes, how much do you typically
                                                            drink In a week?</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea4"
                                                            rows="3" name="typically" value="typically"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">WOMEN ONLY Are you:</td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Pregnant?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Pregnant" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Pregnant" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Pregnant" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">Number of weeks:</label>
                                                        <input type="number" class="form-control" id="exampleInputdate"
                                                            aria-describedby="number" placeholder="Enter weeks"
                                                            name="Numberofweek" value="Numberofweek">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Taking birth control pills or hormonal
                                                    replacement?
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="pills" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="pills" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="pills" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Nursing?</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Nursing" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Nursing" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Nursing" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Metals.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Metals" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Metals" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Metals" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Latex (rubber).</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Latex" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Latex" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Latex" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Iodine.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Iodinees" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Iodinees" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Iodinees" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Hay fever/seasonal.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="fevseasonal" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="fevseasonal" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="fevseasonal" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Animals.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Animals" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Animals" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Animals" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Food.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Food" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Food" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Food" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Other.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Other" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Other" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Other" value="dk">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 nextt">
                                    <div class="text-center">
                                        <button type="button" class=""><a data-toggle="collapse"
                                                href="#collapseExample5" role="button" aria-expanded="false"
                                                aria-controls="collapseExample">Next</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class="dental collapse" id="collapseExample5">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dental">
                                    <p>Please mark (X) your response to indicate if you have or have not had any of the
                                        following diseases or problems.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <table class="end">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="follow">Do you have any of the following diseases
                                                    or
                                                    problems:<p> Check DK if you
                                                        Don't Know the answer to the question</p>
                                                </th>

                                                <th scope="col" class="pres">Yes</th>
                                                <th scope="col" class="pres">No</th>
                                                <th scope="col" class="pres">Dk</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Artificial (prosthetic) heart valve.</td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="heartvalve" value="yes">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="heartvalve" value="no">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="heartvalve" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Previous infective endocarditis.</td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="endocarditis" value="yes">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="endocarditis" value="no">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="endocarditis" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Damaged valves in transplanted heart.</td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Damaged" value="yes">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Damaged" value="no">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Damaged" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Congenital heart disease (CHD):</td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Unrepaired, cyanotic CHD.</td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="CHD" value="yes">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="CHD" value="no">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="CHD" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Repaired (completely) in last 6 months.</td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="last_mon" value="yes">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="last_mon" value="no">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="last_mon" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Repaired CHD with residual defects.</td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="residualdef" value="yes">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="residualdef" value="no">
                                                </td>
                                                <td class="rare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="residualdef" value="dk">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 nextt">
                                    <div class="text-center">
                                        <button type="button" class=""><a data-toggle="collapse"
                                                href="#collapseExample6" role="button" aria-expanded="false"
                                                aria-controls="collapseExample">Next</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>

                <section class="dental collapse" id="collapseExample6">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dental">
                                    <p>Except for the conditions listed above, antibiotic prophylaxis is no longer
                                        recommended
                                        for any other form of CHD.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <table class="valve">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="fin">Yes</th>
                                                <th scope="col" class="fin">No</th>
                                                <th scope="col" class="fin">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Autoimmune disease.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Autoimmune" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Autoimmune" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Autoimmune" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Rheumatoid arthritis.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Rheumatoid" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Rheumatoid" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Rheumatoid" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Systemic lupus erythematosus.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="lupus" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="lupus" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="lupus" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Asthma</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Asthma" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Asthma" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Asthma" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Bronchitis</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Bronchitis" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Bronchitis" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Bronchitis" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Emphysema</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Emphysema" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Emphysema" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Emphysema" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Sinus trouble</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sinus" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sinus" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sinus" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Tuberculosis</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Tuberculo" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Tuberculo" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Tuberculo" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Cancer/ Chemotherapy/ Radiation Treatment</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Chemotherapy" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Chemotherapy" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Chemotherapy" value="dk">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <table class="valve">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="fin">Yes</th>
                                                <th scope="col" class="fin">No</th>
                                                <th scope="col" class="fin">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Hepatitis, jaundice or liver disease.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Hepatitis" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Hepatitis" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Hepatitis" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Epilepsy.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Epilepsy" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Epilepsy" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Epilepsy" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Fainting spells or seizures.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="seizures" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="seizures" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="seizures" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Neurological disorders.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Neurological" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Neurological" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Neurological" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">If yes, specify:</label>
                                                        <textarea style="height: 38px;" class="form-control"
                                                            id="exampleFormControlTextarea4" rows="3" name="specify_yes"
                                                            value="specify_yes"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Sleep disorder</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sleep_dis" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sleep_dis" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Sleep_dis" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Mental health disorders.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Mental_heal" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Mental_heal" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Mental_heal" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">Specify:</label>
                                                        <textarea style="height: 38px;" class="form-control"
                                                            id="exampleFormControlTextarea4" rows="3" name="Spec_ify"
                                                            value="Spec_ify"></textarea>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <table class="valve">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="fin">Yes</th>
                                                <th scope="col" class="fin">No</th>
                                                <th scope="col" class="fin">Dk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Cardiovascular disease.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Cardiovascular" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Cardiovascular" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Cardiovascular" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Angina.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Angina" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Angina" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Angina" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Arteriosclerosis.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Arteriosclerosis" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Arteriosclerosis" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Arteriosclerosis" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Congestive heart failure .</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Congestive" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Congestive" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Congestive" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Damaged heart valves.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Damag_heart" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Damag_heart" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Damag_heart" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Heart attack.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Heart_attack" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Heart_attack" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="Heart_attack" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Low blood pressure.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="low_blood" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="low_blood" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="low_blood" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">High blood pressure.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="high_blood" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="high_blood" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="high_blood" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">Other congenital heart defects.</td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="cong_heart" value="yes">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="cong_heart" value="no">
                                                </td>
                                                <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="cong_heart" value="dk">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <!---------------------------------one-->
                                        <table class="valve">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" class="fin">Yes</th>
                                                    <th scope="col" class="fin">No</th>
                                                    <th scope="col" class="fin">Dk</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="">Mitral valve prolapse.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Mitral" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Mitral" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Mitral" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Pacemaker.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Pacemaker" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Pacemaker" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Pacemaker" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Rheumatic fever.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Rheumatic" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Rheumatic" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Rheumatic" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Rheumatic heart disease.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Rheumatic_heart" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Rheumatic_heart" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Rheumatic_heart" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Abnormal bleeding.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="ab_bleeding" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="ab_bleeding" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="ab_bleeding" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Anemia.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Anemia" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Anemia" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Anemia" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Blood transfusion.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="transfusion" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="transfusion" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="transfusion" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">
                                                        <div class="checkoneinput">
                                                            <label for="exampleForm2">If yes, date:</label>
                                                            <input type="date" class="form-control"
                                                                id="exampleInputdate" aria-describedby="date"
                                                                placeholder="Enter date" name="yes_date"
                                                                value="yes_date">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Hemophilia.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Hemophilia" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Hemophilia" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Hemophilia" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">AIDS or HIV infection.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="aids_hiv" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="aids_hiv" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="aids_hiv" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Arthritis.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Arthritis" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Arthritis" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Arthritis" value="dk">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <table class="valve">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" class="fin">Yes</th>
                                                    <th scope="col" class="fin">No</th>
                                                    <th scope="col" class="fin">Dk</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="">Chest pain upon exertion.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Chest_pain" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Chest_pain" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Chest_pain" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Chronic pain.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Chronic" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Chronic" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Chronic" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Diabetes Type I or II.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Diabetes" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Diabetes" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Diabetes" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Eating disorder.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="eating_dis" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="eating_dis" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="eating_dis" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Malnutrition.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Malnutrition" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Malnutrition" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Malnutrition" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Gastrointestinal disease.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Gastrointestinal" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Gastrointestinal" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Gastrointestinal" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">G.E. Reflux/persistent heartburn.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Reflux" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Reflux" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Reflux" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Ulcers.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Ulcers" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Ulcers" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Ulcers" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Thyroid problems.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Thyroid" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Thyroid" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Thyroid" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Stroke.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Stroke" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Stroke" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Stroke" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Glaucoma.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Glaucoma" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Glaucoma" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Glaucoma" value="dk">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <table class="valve">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" class="fin">Yes</th>
                                                    <th scope="col" class="fin">No</th>
                                                    <th scope="col" class="fin">Dk</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="">Recurrent Infections.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Recurrent" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Recurrent" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Recurrent" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">
                                                        <div class="checkoneinput">
                                                            <label for="exampleForm2">Type of infection:</label>
                                                            <textarea style="height: 38px;" class="form-control"
                                                                id="exampleFormControlTextarea4" rows="3"
                                                                name="infect_type" value="infect_type"></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Kidney problems.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Kidney" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Kidney" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Kidney" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Night sweats.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Night_swit" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Night_swit" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Night_swit" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Osteoporosis.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Osteoporosis" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Osteoporosis" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="Osteoporosis" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Persistent swollen glands in neck.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="swollen" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="swollen" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="swollen" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Severe headaches/migraines.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="migraines" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="migraines" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="migraines" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Severe or rapid weight loss.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="rapid" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="rapid" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="rapid" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Sexually transmitted disease.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="transmitted" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="transmitted" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="transmitted" value="dk">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="">Excessive urination.</td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="urination" value="yes">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="urination" value="no">
                                                    </td>
                                                    <td class="dare"><input class="" type="radio" id="inlineCheckbox1"
                                                            name="urination" value="dk">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 nextt">
                                    <div class="text-center">
                                        <button type="button" class=""><a data-toggle="collapse"
                                                href="#collapseExample8" role="button" aria-expanded="false"
                                                aria-controls="collapseExample">Next</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>

                <section class="dental collapse" id="collapseExample8">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <table class="take">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="nif">Yes</th>
                                                <th scope="col" class="nif">No</th>
                                                <th scope="col" class="nif">Dk</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="">Has a physician or previous dentist recommended that
                                                    you
                                                    take antibiotics prior to your dental treatment?</td>
                                                <td class="prior"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="anti_biotics" value="yes">
                                                </td>
                                                <td class="prior"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="anti_biotics" value="no">
                                                </td>
                                                <td class="prior"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="anti_biotics" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                            <tr>
                                                <td data-label="">Do you have any disease, condition, or problem not
                                                    listed
                                                    above that you think I should know about?</td>
                                                <td class="prior"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="have_dis" value="yes">
                                                </td>
                                                <td class="prior"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="have_dis" value="no">
                                                </td>
                                                <td class="prior"><input class="" type="radio" id="inlineCheckbox1"
                                                        name="have_dis" value="dk">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="">
                                                    <div class="checkoneinput">
                                                        <label for="exampleForm2">Please explain:</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea4"
                                                            rows="3" name="exp_plea" value="exp_plea"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="label">
                                        <label>Name of physician or dentist making recommendation:</label>
                                        <input type="text" class="form-control" name="name_phy" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="label">
                                        <label>Phone:</label>
                                        <input type="tel" class="form-control" name="phy_phn"
                                            placeholder="Enter number">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 note">
                                    <p><span>Note: &nbsp;</span>Both Doctor and patient are encouraged to discuss
                                        any
                                        and all relevant patient health issues prior to treatment.</p>
                                    <h6>I certify that I have read and understand the above and that the information
                                        given on this form is accurate. I
                                        understand the importance of a truthful health
                                        history and that my dentist and his/her staff will rely on this information
                                        for
                                        treating me. I acknowledge that my
                                        questions, if any, about inquiries set forth
                                        above have been answered to my satisfaction. I will not hold my dentist, or
                                        any
                                        other member of his/her staff,
                                        responsible for any action they take or do not
                                        take because of errors or omissions that I may have made in the completion
                                        of
                                        this form.</h6>>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="row">
                                        <div class="col-md-12 sign">
                                            <h1>Signature of Patient/Legal Guardian:</h1>
                                        </div>
                                    </div>
                                    <div class="image-input">
                                        <input type="file" accept="image/*" id="imageInput" name="sign" value="sign">
                                        <label for="imageInput" class="image-button"><i class="far fa-image"></i>Upload
                                            digital Sign</label>
                                        <img src="" class="image-preview" />
                                        <span class="change-image"></span>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="checkoneinput nature">
                                        <label class="dade">Date:</label>
                                        <input type="date" class="form-control" id="exampleInputdate"
                                            aria-describedby="date" placeholder="Enter date" name="fin_date"
                                            value="fin_date">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="btn-sub">
                            <button type="submit" name="submit_form">Submit</button>
                        </div>
                    </section>
                </section>
        </form>
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
                            <li style="display: inline-block;"><a href="https://in.pinterest.com/kvn25121158/_created/"
                                    target="_blank" class="ml-4"><i class="fab fa-pinterest"></i></a></li>
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
    </section>
    <footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        <script src="./script.js"></script>
        <script>
        $("#imageInput").on("change", function() {
            $input = $(this);
            if ($input.val().length > 0) {
                fileReader = new FileReader();
                fileReader.onload = function(data) {
                    $(".image-preview").attr("src", data.target.result);
                };
                fileReader.readAsDataURL($input.prop("files")[0]);
                $(".image-button").css("display", "none");
                $(".image-preview").css("display", "block");
                $(".change-image").css("display", "block");
            }
        });
        $(".change-image").on("click", function() {
            $control = $(this);
            $("#imageInput").val("");
            $preview = $(".image-preview");
            $preview.attr("src", "");
            $preview.css("display", "none");
            $control.css("display", "none");
            $(".image-button").css("display", "block");
        });
        </script>
    </footer>

</body>

</html>