<?php
if(isset($_POST["submit_form"]))
{
 $to = "tarunmakersmind@gmail.com";
 $subject = "Form Application";

 $email=$_POST["email"];
 $todaysdate=$_POST["todaysdate"];
 $lname=$_POST["lname"];
 $fname=$_POST["fname"];
 $mname=$_POST["mname"];
 $address=$_POST["address"];
 $occupation=$_POST["occupation"];
 $emergency=$_POST["emergency"];
 $ssn=$_POST["ssn"];
 $hnumber=$_POST["hnumber"];
 $bnumber=$_POST["bnumber"];
 $city=$_POST["city"];
 $state=$_POST["state"];
 $zip=$_POST["zip"];
 $height=$_POST["height"];
 $weight=$_POST["weight"];
 $gender=$_POST["gender"];
 $relation=$_POST["relation"];
 $Active=$_POST["Active"];
 $Persistent=$_POST["Persistent"];
 $Cough=$_POST["Cough"];
 $Been=$_POST["Been"];
 $homenum=$_POST["homenum"];
 $cellnum=$_POST["cellnum"];
 $yname=$_POST["yname"];
 $relationship=$_POST["relationship"];
 ///////////////////Dental Information////////////////////
  $floss=$_POST["floss"]; 
  $sensitive=$_POST["sensitive"]; 
  $foodorfloss=$_POST["foodorfloss"]; 
  $dry=$_POST["dry"]; 
  $periodontal=$_POST["periodontal"]; 
  $orthodontic=$_POST["orthodontic"]; 
  $associated_treat=$_POST["associated_treat"]; 
  $fluoridated=$_POST["fluoridated"]; 
  $filtered=$_POST["filtered"]; 
  $daily_week=$_POST["daily_week"]; 
  $discomfort=$_POST["discomfort"]; 
  $earaches=$_POST["earaches"]; 
  $popping=$_POST["popping"]; 
  $grind=$_POST["grind"];
  $sores=$_POST["sores"];
  $dentures=$_POST["dentures"]; 
  $recreational=$_POST["recreational"]; 
  $injury=$_POST["injury"]; 
  $Dateofdental=$_POST["Dateofdental"]; 
  $dateofxray=$_POST["dateofxray"]; 
  $dentalvisit=$_POST["dentalvisit"]; 
  $feelsmile=$_POST["feelsmile"]; 
  //////////////////////////Medical info////////////////////////////////
  $careof=$_POST["careof"]; 
  $Physiname=$_POST["Physiname"]; 
  $phnumber=$_POST["phnumber"]; 
  $adcistzi=$_POST["adcistzi"]; 
  $goodhealth=$_POST["goodhealth"]; 
  $generalhealth=$_POST["generalhealth"]; 
  $condition=$_POST["condition"]; 
  $datephysi=$_POST["datephysi"]; 
  $hospitalized=$_POST["hospitalized"];
  $illnessproblem=$_POST["illnessproblem"];
  $prescription=$_POST["prescription"];
  $herbal=$_POST["herbal"];
  $lenses=$_POST["lenses"];
  $orthopedic=$_POST["orthopedic"];
  $meddate=$_POST["meddate"];
  $complications=$_POST["complications"];
  $Fosamax=$_POST["Fosamax"];
  $Aredia=$_POST["Aredia"];
  $began=$_POST["began"];
  $reaction=$_POST["reaction"];
  $Aspirin=$_POST["Aspirin"];
  $Penicillin=$_POST["Penicillin"];
  $sedatives=$_POST["sedatives"];
  $Sulfa=$_POST["Sulfa"];
  $Codeine=$_POST["Codeine"];
  $drugs=$_POST["drugs"];
  $snuff=$_POST["snuff"];
  $interestedstop=$_POST["interestedstop"];
  $beverages=$_POST["beverages"];
  $drink24hr=$_POST["drink24hr"];
  $typically=$_POST["typically"];
  $Pregnant=$_POST["Pregnant"];
  $Numberofweek=$_POST["Numberofweek"];
  $pills=$_POST["pills"];
  $Nursing=$_POST["Nursing"];
  $Metals=$_POST["Metals"];
  $Latex=$_POST["Latex"];
  $Iodinees=$_POST["Iodinees"];
  $fevseasonal=$_POST["fevseasonal"];
  $Animals=$_POST["Animals"];
  $Food=$_POST["Food"];
  $Other=$_POST["Other"];
  $heartvalve=$_POST["heartvalve"];
  $endocarditis=$_POST["endocarditis"];
  $Damaged=$_POST["Damaged"];
  $CHD=$_POST["CHD"];
  $last_mon=$_POST["last_mon"];
  $residualdef=$_POST["residualdef"];
  $Autoimmune=$_POST["Autoimmune"];
  $Rheumatoid=$_POST["Rheumatoid"];
  $lupus=$_POST["lupus"];
  $Asthma=$_POST["Asthma"];
  $Bronchitis=$_POST["Bronchitis"];
  $Emphysema=$_POST["Emphysema"];
  $Sinus=$_POST["Sinus"];
  $Tuberculo=$_POST["Tuberculo"];
  $Chemotherapy=$_POST["Chemotherapy"];
  $Hepatitis=$_POST["Hepatitis"];
  $Epilepsy=$_POST["Epilepsy"];
  $seizures=$_POST["seizures"];
  $Neurological=$_POST["Neurological"];
  $specify_yes=$_POST["specify_yes"];
  $Sleep_dis=$_POST["Sleep_dis"];
  $Mental_heal=$_POST["Mental_heal"];
  $Spec_ify=$_POST["Spec_ify"];
  $Cardiovascular=$_POST["Cardiovascular"];
  $Angina=$_POST["Angina"];
  $Arteriosclerosis=$_POST["Arteriosclerosis"];
  $Congestive=$_POST["Congestive"];
  $Damag_heart=$_POST["Damag_heart"];
  $Heart_attack=$_POST["Heart_attack"];
  $low_blood=$_POST["low_blood"];
  $high_blood=$_POST["high_blood"];
  $cong_heart=$_POST["cong_heart"];
  $Mitral=$_POST["Mitral"];
  $Pacemaker=$_POST["Pacemaker"];
  $Rheumatic=$_POST["Rheumatic"];
  $Rheumatic_heart=$_POST["Rheumatic_heart"];
  $ab_bleeding=$_POST["ab_bleeding"];
  $Anemia=$_POST["Anemia"];
  $transfusion=$_POST["transfusion"];
  $yes_date=$_POST["yes_date"];
  $Hemophilia=$_POST["Hemophilia"];
  $aids_hiv=$_POST["aids_hiv"];
  $Arthritis=$_POST["Arthritis"];
  $Chest_pain=$_POST["Chest_pain"];
  $Chronic=$_POST["Chronic"];
  $Diabetes=$_POST["Diabetes"];
  $eating_dis=$_POST["eating_dis"];
  $Malnutrition=$_POST["Malnutrition"];
  $Gastrointestinal=$_POST["Gastrointestinal"];
  $Reflux=$_POST["Reflux"];
  $Ulcers=$_POST["Ulcers"];
  $Thyroid=$_POST["Thyroid"];
  $Stroke=$_POST["Stroke"];
  $Glaucoma=$_POST["Glaucoma"];
  $Recurrent=$_POST["Recurrent"];
  $infect_type=$_POST["infect_type"];
  $Kidney=$_POST["Kidney"];
  $Night_swit=$_POST["Night_swit"];
  $Osteoporosis=$_POST["Osteoporosis"];
  $swollen=$_POST["swollen"];
  $migraines=$_POST["migraines"];
  $rapid=$_POST["rapid"];
  $transmitted=$_POST["transmitted"];
  $urination=$_POST["urination"];
  $anti_biotics=$_POST["anti_biotics"];
  $have_dis=$_POST["have_dis"];
  $exp_plea=$_POST["exp_plea"];
  $name_phy=$_POST["name_phy"];
  $phy_phn=$_POST["phy_phn"];
  $sign=$_POST["sign"];
  $fin_date=$_POST["fin_date"];
  $message=" 
  <html>
  <head>
  <title></title>
  </head>
  <body>
  <table>
  
  <tr>
  <th>Email</th>
  <th>Today’s Date</th>
  </tr>
  <tr>
  <td>$email</td>
  <td>$todaysdate</td>
  </tr>

  <tr>
  <th>Last Name</th>
  <th>First Name</th>
  <th>Middle Name</th>
  <th>Home Phone</th>
  <th>Business Phone</th>
  </tr>
  <tr>
  <td>$lname</td>
  <td>$fname</td>
  <td>$mname</td>
  <td>$hnumber</td>
  <td>$bnumber</td>
  </tr>
  
  <tr>
  <th>Address</th>
  <th>City</th>
  <th>State</th>
  <th>Zip</th>
  </tr>
  <tr>
  <td>$address</td>
  <td>$city</td>
  <td>$state</td>
  <td>$zip</td>
  </tr>
  
  <tr>
  <th>Occupation</th>
  <th>Height</th>
  <th>Weight</th>
  <th>Sex</th>
  </tr>
  <tr>
  <td>$occupation</td>
  <td>$height</td>
  <td>$weight</td>
  <td>$gender</td>
  </tr>

  <tr>
  <th>SSN</th>
  <th>Emergency Contact</th>
  <th>Relationship</th>
  <th>Home Phone</th>
  <th>Cell Phone</th>
  </tr>
  <tr>
  <td>$ssn</td>
  <td>$emergency</td>
  <td> $relation</td>
  <td> $homenum</td>
  <td> $cellnum</td>
  </tr>

  <tr>
  <th>If you are completing this form for another person, what is your relationship to that person?</th>
  <th>Your Name</th>
  <th>Relationship</th>
  </tr>
  <tr>
  <td>$yname</td>
  <td>$relationship</td>
  </tr>

  <tr>
  <th>Do you have any of the following diseases or problems</th>
  </tr>
  <tr>
  <th>Active Tuberculosis</th>
  <th>Persistent cough greater than a 3 week duration</th>
  <th>Cough that produces blood</th>
  <th>Been exposed to anyone with tuberculosis</th>
  </tr>
  <tr>
  <td>$Active</td>
  <td>$Persistent</td>
  <td>$Cough</td>
  <td>$Been</td>
  </tr>

  <tr>
  <th>Dental Information</th>
  </tr>
  <tr>
  <th>Do your gums bleed when you brush or floss?</th>
  </tr>
  <tr>
  <td>$floss</td>
  </tr>

  <tr>
  <th>Are your teeth sensitive to cold, hot, sweets or pressure?</th>
  </tr>
  <tr>
  <td>$sensitive</td>
  </tr>

  <tr>
  <th>Does food or floss catch between your teeth?</th>
  </tr>
  <tr>
  <td>$foodorfloss</td>
  </tr>

  <tr>
  <th>Is your mouth dry?</th>
  </tr>
  <tr>
  <td>$dry</td>
  </tr>

  <tr>
  <th>Have you had any periodontal (gum) treatments?</th>
  </tr>
  <tr>
  <td>$periodontal</td>
  </tr>

  <tr>
  <th>Have you ever had orthodontic (braces) treatment?</th>
  </tr>
  <tr>
  <td>$orthodontic</td>
  </tr>
  
  <tr>
  <th>Have you had any problems associated with previous dental treatment?</th>
  </tr>
  <tr>
  <td>$associated_treat</td>
  </tr>

  <tr>
  <th>Is your home water supply fluoridated?</th>
  </tr>
  <tr>
  <td>$fluoridated</td>
  </tr>

  <tr>
  <th>Do you drink bottled or filtered water?</th>
  </tr>
  <tr>
  <td>$filtered</td>
  </tr>

  <tr>
  <th>If yes, how often? Circle one: DAILY / WEEKLY / OCCASIONALLY</th>
  </tr>
  <tr>
  <td>$daily_week</td>
  </tr>
  <tr>
  <th>Are you currently experiencing dental pain or discomfort?</th>
  </tr>
  <tr>
  <td>$discomfort</td>
  </tr>
  
  <tr>
  <th>Do you have earaches or neck pains?</th>
  </tr>
  <tr>
  <td>$earaches</td>
  </tr>
  
  <tr>
  <th>Do you have any clicking, popping or discomfort in the jaw?</th>
  </tr>
  <tr>
  <td>$popping</td>
  </tr>

  <tr>
  <th>Do you brux or grind your teeth?</th>
  </tr>
  <tr>
  <td>$grind</td>
  </tr>
  
  <tr>
  <th>Do you have sores or ulcers in your mouth?</th>
  </tr>
  <tr>
  <td>$sores</td>
  </tr>
  
  <tr>
  <th>Do you wear dentures or partials?</th>
  </tr>
  <tr>
  <td>$dentures</td>
  </tr>
  
  <tr>
  <th>Do you participate in active recreational activities?</th>
  </tr>
  <tr>
  <td>$recreational</td>
  </tr>

  <tr>
  <th>Have you ever had a serious injury to your head or mouth?</th>
  </tr>
  <tr>
  <td>$injury</td>
  </tr>
  
  <tr>
  <th>Date of your last dental exam:</th>
  </tr>
  <tr>
  <td>$Dateofdental</td>
  </tr>
  
  <tr>
  <th>Date of last dental x-rays:</th>
  </tr>
  <tr>
  <td>$dateofxray</td>
  </tr>

  <tr>
  <th>What is the reason for your dental visit today?</th>
  </tr>
  <tr>
  <td>$dentalvisit</td>
  </tr>

  <tr>
  <th>How do you feel about your smile?</th>
  </tr>
  <tr>
  <td>$feelsmile</td>
  </tr>

  <tr>
  <th><h3>Medical Information</h3></th>
  </tr>


  <tr>
  <th>Are you now under the care of a physician?</th>
  </tr>
  <tr>
  <td>$careof</td>
  </tr>
  <tr>
  <th>Physician Name:</th>
  </tr>
  <tr>
  <td>$Physiname</td>
  </tr>
  <tr>
  <th>Phone:(Include area code)</th>
  </tr>
  <tr>
  <td>$phnumber</td>
  </tr>
  
  <tr>
  <th>Address/City/State/Zip:</th>
  </tr>
  <tr>
  <td>$adcistzi</td>
  </tr>

  <tr>
  <th>Are you in good health?</th>
  </tr>
  <tr>
  <td>$goodhealth</td>
  </tr>

  <tr>
  <th>Has there been any change in your general health within the past year?</th>
  </tr>
  <tr>
  <td>$generalhealth</td>
  </tr>

  <tr>
  <th>If yes, what condition is being treated?</th>
  </tr>
  <tr>
  <td>$condition</td>
  </tr>
  
  <tr>
  <th>Date of last physical exam:</th>
  </tr>
  <tr>
  <td>$datephysi</td>
  </tr>

  <tr>
  <th>Have you had a serious illness, operation or been hospitalized in the past 5 years?</th>
  </tr>
  <tr>
  <td>$hospitalized</td>
  </tr>

  <tr>
  <th>If yes, what was the illness or problem?</th>
  </tr>
  <tr>
  <td>$illnessproblem</td>
  </tr>

  <tr>
  <th>Are you taking or have you recently taken any prescription or over the counter medicine(s)?</th>
  </tr>
  <tr>
  <td>$prescription</td>
  </tr>
  
  <tr>
  <th>If so, please list all, including vitamins, natural or herbal preparations and/or diet supplements:</th>
  </tr>
  <tr>
  <td>$herbal</td>
  </tr>

  <tr>
  <th>Do you wear contact lenses?</th>
  </tr>
  <tr>
  <td>$lenses</td>
  </tr>

  <tr>
  <th>Joint Replacement:(Have you had an orthopedic total joint (hip, knee, elbow, finger) replacement?)</th>
  </tr>
  <tr>
  <td>$orthopedic</td>
  </tr>

  <tr>
  <th>Date:</th>
  </tr>
  <tr>
  <td>$meddate</td>
  </tr>

  <tr>
  <th>If yes, have you had any complications?</th>
  </tr>
  <tr>
  <td>$complications</td>
  </tr>

  <tr>
  <th>Are you taking or scheduled to begin taking either of the medications, alendronate (Fosamax®) or risedronate (Actonel®)for osteoporosis or Paget’s disease?</th>
  </tr>
  <tr>
  <td>$Fosamax</td>
  </tr>

  <tr>
  <th>Since 2001, were you treated or are you presently scheduled to begin treatment with the intravenous bisphosphonates (Aredia® or Zometa®) for bone pain, hypercalcemia or skeletal complications resulting from Paget’s disease, multiple myeloma or metastatic cancer?</th>
  </tr>
  <tr>
  <td>$Aredia</td>
  </tr>
  
  <tr>
  <th>Date Treatment began:</th>
  </tr>
  <tr>
  <td>$began</td>
  </tr>

  <tr>
  <th>Allergies - Are you allergic to or have you had a reaction to: To all yes responses, specify type of reaction.</th>
  </tr>

  <tr>
  <th>Local anesthetics</th>
  </tr>
  <tr>
  <td>$reaction</td>
  </tr>

  <tr>
  <th>Aspirin</th>
  </tr>
  <tr>
  <td>$Aspirin</td>
  </tr>

  <tr>
  <th>Penicillin or other antibiotics</th>
  </tr>
  <tr>
  <td>$Penicillin</td>
  </tr>

  <tr>
  <th>Barbiturates, sedatives, or sleeping pills</th>
  </tr>
  <tr>
  <td>$sedatives</td>
  </tr>

  <tr>
  <th>Sulfa drugs</th>
  </tr>
  <tr>
  <td>$Sulfa</td>
  </tr>

  <tr>
  <th>Codeine or other narcotics</th>
  </tr>
  <tr>
  <td>$Codeine</td>
  </tr>
  
  <tr>
  <th>Do you use controlled substances (drugs)?</th>
  </tr>
  <tr>
  <td>$drugs</td>
  </tr>

  <tr>
  <th>Do you use tobacco (smoking, snuff, chew, bidis)?</th>
  </tr>
  <tr>
  <td>$snuff</td>
  </tr>

  <tr>
  <th>If so, how interested are you in stopping?</th>
  </tr>
  <tr>
  <td>$interestedstop</td>
  </tr>

  <tr>
  <th>Do you drink alcoholic beverages?</th>
  </tr>
  <tr>
  <td>$beverages</td>
  </tr>

  <tr>
  <th>If yes, how much alcohol did you drink in the last 24 hours?</th>
  </tr>
  <tr>
  <td>$drink24hr</td>
  </tr>

  <tr>
  <th>If yes, how much do you typically drink In a week?</th>
  </tr>
  <tr>
  <td>$typically</td>
  </tr>

  <tr>
  <th>WOMEN ONLY Are you:</th>
  </tr>

  
  <tr>
  <th>Pregnant?</th>
  </tr>
  <tr>
  <td>$Pregnant</td>
  </tr>
  
  <tr>
  <th>Number of weeks:</th>
  </tr>
  <tr>
  <td>$Numberofweek</td>
  </tr>

  <tr>
  <th>Taking birth control pills or hormonal replacement?</th>
  </tr>
  <tr>
  <td>$pills</td>
  </tr>

  <tr>
  <th>Nursing?</th>
  </tr>
  <tr>
  <td>$Nursing</td>
  </tr>

  <tr>
  <th>Metals.</th>
  </tr>
  <tr>
  <td>$Metals</td>
  </tr>

  <tr>
  <th>Latex (rubber).</th>
  </tr>
  <tr>
  <td>$Latex</td>
  </tr>

  <tr>
  <th>Iodine.</th>
  </tr>
  <tr>
  <td>$Iodinees</td>
  </tr>

  <tr>
  <th>Hay fever/seasonal.</th>
  </tr>
  <tr>
  <td>$fevseasonal</td>
  </tr>

  <tr>
  <th>Animals.</th>
  </tr>
  <tr>
  <td>$Animals</td>
  </tr>

  <tr>
  <th>Food.</th>
  </tr>
  <tr>
  <td>$Food</td>
  </tr>

  <tr>
  <th>Other.</th>
  </tr>
  <tr>
  <td>$Other</td>
  </tr>

  <tr>
  <th>Do you have any of the following diseases or problems:</th>
  </tr>

  <tr>
  <th>Artificial (prosthetic) heart valve.</th>
  </tr>
  <tr>
  <td>$heartvalve</td>
  </tr>

  <tr>
  <th>Previous infective endocarditis.</th>
  </tr>
  <tr>
  <td>$endocarditis</td>
  </tr>
  
  <tr>
  <th>Damaged valves in transplanted heart.</th>
  </tr>
  <tr>
  <td>$Damaged</td>
  </tr>

  <tr>
  <th>Congenital heart disease (CHD):</th>
  </tr>
  <tr>
  <td>$CHD</td>
  </tr>

  <tr>
  <th>Unrepaired, cyanotic CHD.</th>
  </tr>
  <tr>
  <td>$last_mon</td>
  </tr>

  <tr>
  <th>Unrepaired, cyanotic CHD.</th>
  </tr>
  <tr>
  <td>$residualdef</td>
  </tr>

  <tr>
  <th>Repaired CHD with residual defects.</th>
  </tr>
  <tr>
  <td>$residualdef</td>
  </tr>

  <tr>
  <th>Except for the conditions listed above, antibiotic prophylaxis is no longer recommended for any other form of CHD.</th>
  </tr>

  <tr>
  <th>Autoimmune disease.</th>
  </tr>
  <tr>
  <td>$Arthritis.</td>
  </tr>

  <tr>
  <th>Rheumatoid arthritis.</th>
  </tr>
  <tr>
  <td>$Rheumatoid</td>
  </tr>

  <tr>
  <th>Systemic lupus erythematosus.</th>
  </tr>
  <tr>
  <td>$lupus</td>
  </tr>

  <tr>
  <th>Asthma</th>
  </tr>
  <tr>
  <td>$Asthma</td>
  </tr>

  <tr>
  <th>Bronchitis</th>
  </tr>
  <tr>
  <td>$Bronchitis</td>
  </tr>

  <tr>
  <th>Emphysema</th>
  </tr>
  <tr>
  <td>$Emphysema</td>
  </tr>

  <tr>
  <th>Sinus trouble</th>
  </tr>
  <tr>
  <td>$Sinus</td>
  </tr>

  <tr>
  <th>Tuberculosis</th>
  </tr>
  <tr>
  <td>$Tuberculo</td>
  </tr>

  <tr>
  <th>Cancer/ Chemotherapy/ Radiation Treatment</th>
  </tr>
  <tr>
  <td>$Chemotherapy</td>
  </tr>

  <tr>
  <th>Hepatitis, jaundice or liver disease.</th>
  </tr>
  <tr>
  <td>$Hepatitis</td>
  </tr>

  <tr>
  <th>Epilepsy.</th>
  </tr>
  <tr>
  <td>$Epilepsy</td>
  </tr>

  <tr>
  <th>Fainting spells or seizures.</th>
  </tr>
  <tr>
  <td>$seizures</td>
  </tr>

  <tr>
  <th>Neurological disorders.</th>
  </tr>
  <tr>
  <td>$Neurological</td>
  </tr>
  
  <tr>
  <th>If yes, specify:</th>
  </tr>
  <tr>
  <td>$specify_yes</td>
  </tr>

  <tr>
  <th>Sleep disorder</th>
  </tr>
  <tr>
  <td>$Sleep_dis</td>
  </tr>

  <tr>
  <th>Mental health disorders.</th>
  </tr>
  <tr>
  <td>$Mental_heal</td>
  </tr>
  
  <tr>
  <th>Specify:</th>
  </tr>
  <tr>
  <td>$Spec_ify</td>
  </tr>

  <tr>
  <th>Cardiovascular disease.</th>
  </tr>
  <tr>
  <td>$Cardiovascular</td>
  </tr>

  <tr>
  <th>Angina.</th>
  </tr>
  <tr>
  <td>$Angina</td>
  </tr>

  <tr>
  <th>Arteriosclerosis.</th>
  </tr>
  <tr>
  <td>$Arteriosclerosis</td>
  </tr>

  <tr>
  <th>Congestive heart failure </th>
  </tr>
  <tr>
  <td>$Congestive</td>
  </tr>

  <tr>
  <th>Damaged heart valves</th>
  </tr>
  <tr>
  <td>$Damag_heart</td>
  </tr>

  <tr>
  <th>Heart attack.</th>
  </tr>
  <tr>
  <td>$Heart_attack</td>
  </tr>

  <tr>
  <th>Low blood pressure.</th>
  </tr>
  <tr>
  <td>$low_blood</td>
  </tr>

  <tr>
  <th>High blood pressure.</th>
  </tr>
  <tr>
  <td>$high_blood</td>
  </tr>
  
  <tr>
  <th>Other congenital heart defects.</th>
  </tr>
  <tr>
  <td>$cong_heart</td>
  </tr>

  <tr>
  <th>Mitral valve prolapse.</th>
  </tr>
  <tr>
  <td>$Mitral</td>
  </tr>

  <tr>
  <th>Pacemaker.</th>
  </tr>
  <tr>
  <td>$Pacemaker</td>
  </tr>
  
  <tr>
  <th>Rheumatic fever.</th>
  </tr>
  <tr>
  <td>$Rheumatic</td>
  </tr>
  
  <tr>
  <th>Rheumatic heart disease.</th>
  </tr>
  <tr>
  <td>$Rheumatic_heart</td>
  </tr>

  <tr>
  <th>Abnormal bleeding.</th>
  </tr>
  <tr>
  <td>$ab_bleeding</td>
  </tr>

  <tr>
  <th>Anemia</th>
  </tr>
  <tr>
  <td>$Anemia</td>
  </tr>

  <tr>
  <th>Blood transfusion.</th>
  </tr>
  <tr>
  <td>$transfusion</td>
  </tr>

  <tr>
  <th>If yes, date:</th>
  </tr>
  <tr>
  <td>$yes_date</td>
  </tr>
  
  <tr>
  <th>Hemophilia.</th>
  </tr>
  <tr>
  <td>$Hemophilia</td>
  </tr>

  <tr>
  <th>AIDS or HIV infection.</th>
  </tr>
  <tr>
  <td>$aids_hiv</td>
  </tr>

  <tr>
  <th>Arthritis.</th>
  </tr>
  <tr>
  <td>$Arthritis</td>
  </tr>

  <tr>
  <th>Chest pain upon exertion.</th>
  </tr>
  <tr>
  <td>$Chest_pain</td>
  </tr>

  <tr>
  <th>Chronic pain.</th>
  </tr>
  <tr>
  <td>$Chronic</td>
  </tr>

  <tr>
  <th>Diabetes Type I or II.</th>
  </tr>
  <tr>
  <td>$Diabetes</td>
  </tr>

  <tr>
  <th>Eating disorder.</th>
  </tr>
  <tr>
  <td>$eating_dis</td>
  </tr>

  <tr>
  <th>Malnutrition.</th>
  </tr>
  <tr>
  <td>$Malnutrition</td>
  </tr>

  <tr>
  <th>Gastrointestinal disease.</th>
  </tr>
  <tr>
  <td>$Gastrointestinal</td>
  </tr>

  <tr>
  <th>G.E. Reflux/persistent heartburn.</th>
  </tr>
  <tr>
  <td>$Reflux</td>
  </tr>

  <tr>
  <th>Ulcers</th>
  </tr>
  <tr>
  <td>$Ulcers</td>
  </tr>

  <tr>
  <th>Thyroid problems.</th>
  </tr>
  <tr>
  <td>$Thyroid</td>
  </tr>

  <tr>
  <th>Stroke</th>
  </tr>
  <tr>
  <td>$Stroke</td>
  </tr>

  <tr>
  <th>Glaucoma.</th>
  </tr>
  <tr>
  <td>$Glaucoma</td>
  </tr>

  <tr>
  <th>Recurrent Infections.</th>
  </tr>
  <tr>
  <td>$Recurrent</td>
  </tr>

  <tr>
  <th>Type of infection:</th>
  </tr>
  <tr>
  <td>$infect_type</td>
  </tr>

  <tr>
  <th>Kidney problems.</th>
  </tr>
  <tr>
  <td>$Kidney</td>
  </tr>

  <tr>
  <th>Night sweats.</th>
  </tr>
  <tr>
  <td>$Night_swit</td>
  </tr>

  <tr>
  <th>Osteoporosis.</th>
  </tr>
  <tr>
  <td>$Osteoporosis</td>
  </tr>

  <tr>
  <th>Persistent swollen glands in neck.</th>
  </tr>
  <tr>
  <td>$swollen</td>
  </tr>

  <tr>
  <th>Severe headaches/migraines.</th>
  </tr>
  <tr>
  <td>$migraines</td>
  </tr>

  <tr>
  <th>Severe or rapid weight loss.</th>
  </tr>
  <tr>
  <td>$rapid</td>
  </tr>

  <tr>
  <th>Sexually transmitted disease.</th>
  </tr>
  <tr>
  <td>$transmitted</td>
  </tr>

  <tr>
  <th>Excessive urination.</th>
  </tr>
  <tr>
  <td>$urination</td>
  </tr>

  <tr>
  <th>Has a physician or previous dentist recommended that you take antibiotics prior to your dental treatment?	</th>
  </tr>
  <tr>
  <td>$anti_biotics</td>
  </tr>

  <tr>
  <th>Do you have any disease, condition, or problem not listed above that you think I should know about?</th>
  </tr>
  <tr>
  <td>$have_dis</td>
  </tr>

  <tr>
  <th>Please explain:</th>
  </tr>
  <tr>
  <td>$exp_plea</td>
  </tr>

  <tr>
  <th>Name of physician or dentist making recommendation:</th>
  </tr>
  <tr>
  <td>$name_phy</td>
  </tr>

  <tr>
  <th>Phone:</th>
  </tr>
  <tr>
  <td>$phy_phn</td>
  </tr>
  
  <tr>
  <th>Signature of Patient/Legal Guardian:</th>
  </tr>
  <tr>
  <td>$sign</td>
  </tr>
  <tr>
  <th>Date</th>
  </tr>
  <tr>
  <td>$fin_date</td>
  </tr>
  
  </table>
  </body>
  </html>
  ";
  $header = "From:montgomery@gmail.com \r\n";
  $header .= "Cc:afgh@somedomain.com \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";
         
  $retval = mail ($to,$subject,$message,$header);
   if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

}
?>