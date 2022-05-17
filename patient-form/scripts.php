<?php
include "db.php";

if(isset($_POST['submit_form'])){
error_reporting(0);
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $todaysdate=mysqli_real_escape_string($conn,$_POST['todaysdate']);
 $lname=mysqli_real_escape_string($conn,$_POST['lname']);
 $fname=mysqli_real_escape_string($conn,$_POST['fname']);
 $mname=mysqli_real_escape_string($conn,$_POST['mname']);
 $address=mysqli_real_escape_string($conn,$_POST['address']);
 $occupation=mysqli_real_escape_string($conn,$_POST['occupation']);
 $emergency=mysqli_real_escape_string($conn,$_POST['emergency']);
 $ssn=mysqli_real_escape_string($conn,$_POST['ssn']);
 $hnumber=mysqli_real_escape_string($conn,$_POST['hnumber']);
 $bnumber=mysqli_real_escape_string($conn,$_POST['bnumber']);
 $city=mysqli_real_escape_string($conn,$_POST['city']);
 $state=mysqli_real_escape_string($conn,$_POST['state']);
 $zip=mysqli_real_escape_string($conn,$_POST['zip']);
 $height=mysqli_real_escape_string($conn,$_POST['height']);
 $weight=mysqli_real_escape_string($conn,$_POST['weight']);
 $gender=mysqli_real_escape_string($conn,$_POST['gender']);
 $relation=mysqli_real_escape_string($conn,$_POST['relation']);
 $Active=mysqli_real_escape_string($conn,$_POST['Active']);
 $Persistent=mysqli_real_escape_string($conn,$_POST['Persistent']);
 $Cough=mysqli_real_escape_string($conn,$_POST['Cough']);
 $Been=mysqli_real_escape_string($conn,$_POST['Been']);
 $homenum=mysqli_real_escape_string($conn,$_POST['homenum']);
 $cellnum=mysqli_real_escape_string($conn,$_POST['cellnum']);
 $yname=mysqli_real_escape_string($conn,$_POST['yname']);
 $relationship=mysqli_real_escape_string($conn,$_POST['relationship']);
 ///////////////////Dental Information////////////////////
  $floss=mysqli_real_escape_string($conn,$_POST['floss']); 
  $sensitive=mysqli_real_escape_string($conn,$_POST['sensitive']); 
  $foodorfloss=mysqli_real_escape_string($conn,$_POST['foodorfloss']); 
  $dry=mysqli_real_escape_string($conn,$_POST['dry']); 
  $periodontal=mysqli_real_escape_string($conn,$_POST['periodontal']); 
  $orthodontic=mysqli_real_escape_string($conn,$_POST['orthodontic']); 
  $associated_treat=mysqli_real_escape_string($conn,$_POST['associated_treat']); 
  $fluoridated=mysqli_real_escape_string($conn,$_POST['fluoridated']); 
  $filtered=mysqli_real_escape_string($conn,$_POST['filtered']); 
  $daily_week=mysqli_real_escape_string($conn,$_POST['daily_week']); 
  $discomfort=mysqli_real_escape_string($conn,$_POST['discomfort']); 
  $earaches=mysqli_real_escape_string($conn,$_POST['earaches']); 
  $popping=mysqli_real_escape_string($conn,$_POST['popping']); 
  $grind=mysqli_real_escape_string($conn,$_POST['grind']);
  $sores=mysqli_real_escape_string($conn,$_POST['sores']);
  $dentures=mysqli_real_escape_string($conn,$_POST['dentures']); 
  $recreational=mysqli_real_escape_string($conn,$_POST['recreational']); 
  $injury=mysqli_real_escape_string($conn,$_POST['injury']); 
  $Dateofdental=mysqli_real_escape_string($conn,$_POST['Dateofdental']); 
  $dateofxray=mysqli_real_escape_string($conn,$_POST['dateofxray']); 
  $dentalvisit=mysqli_real_escape_string($conn,$_POST['dentalvisit']); 
  $feelsmile=mysqli_real_escape_string($conn,$_POST['feelsmile']); 
  //////////////////////////Medical info////////////////////////////////
  $careof=mysqli_real_escape_string($conn,$_POST['careof']); 
  $Physiname=mysqli_real_escape_string($conn,$_POST['Physiname']); 
  $phnumber=mysqli_real_escape_string($conn,$_POST['phnumber']); 
  $adcistzi=mysqli_real_escape_string($conn,$_POST['adcistzi']); 
  $goodhealth=mysqli_real_escape_string($conn,$_POST['goodhealth']); 
  $generalhealth=mysqli_real_escape_string($conn,$_POST['generalhealth']); 
  $condition=mysqli_real_escape_string($conn,$_POST['condition']); 
  $datephysi=mysqli_real_escape_string($conn,$_POST['datephysi']); 
  $hospitalized=mysqli_real_escape_string($conn,$_POST['hospitalized']);
  $illnessproblem=mysqli_real_escape_string($conn,$_POST['illnessproblem']);
  $prescription=mysqli_real_escape_string($conn,$_POST['prescription']);
  $herbal=mysqli_real_escape_string($conn,$_POST['herbal']);
  $lenses=mysqli_real_escape_string($conn,$_POST['lenses']);
  $orthopedic=mysqli_real_escape_string($conn,$_POST['orthopedic']);
  $meddate=mysqli_real_escape_string($conn,$_POST['meddate']);
  $complications=mysqli_real_escape_string($conn,$_POST['complications']);
  $Fosamax=mysqli_real_escape_string($conn,$_POST['Fosamax']);
  $Aredia=mysqli_real_escape_string($conn,$_POST['Aredia']);
  $began=mysqli_real_escape_string($conn,$_POST['began']);
  $reaction=mysqli_real_escape_string($conn,$_POST['reaction']);
  $Aspirin=mysqli_real_escape_string($conn,$_POST['Aspirin']);
  $Penicillin=mysqli_real_escape_string($conn,$_POST['Penicillin']);
  $sedatives=mysqli_real_escape_string($conn,$_POST['sedatives']);
  $Sulfa=mysqli_real_escape_string($conn,$_POST['Sulfa']);
  $Codeine=mysqli_real_escape_string($conn,$_POST['Codeine']);
  $drugs=mysqli_real_escape_string($conn,$_POST['drugs']);
  $snuff=mysqli_real_escape_string($conn,$_POST['snuff']);
  $interestedstop=mysqli_real_escape_string($conn,$_POST['interestedstop']);
  $beverages=mysqli_real_escape_string($conn,$_POST['beverages']);
  $drink24hr=mysqli_real_escape_string($conn,$_POST['drink24hr']);
  $typically=mysqli_real_escape_string($conn,$_POST['typically']);
  $Pregnant=mysqli_real_escape_string($conn,$_POST['Pregnant']);
  $Numberofweek=mysqli_real_escape_string($conn,$_POST['Numberofweek']);
  $pills=mysqli_real_escape_string($conn,$_POST['pills']);
  $Nursing=mysqli_real_escape_string($conn,$_POST['Nursing']);
  $Metals=mysqli_real_escape_string($conn,$_POST['Metals']);
  $Latex=mysqli_real_escape_string($conn,$_POST['Latex']);
  $Iodinees=mysqli_real_escape_string($conn,$_POST['Iodinees']);
  $fevseasonal=mysqli_real_escape_string($conn,$_POST['fevseasonal']);
  $Animals=mysqli_real_escape_string($conn,$_POST['Animals']);
  $Food=mysqli_real_escape_string($conn,$_POST['Food']);
  $Other=mysqli_real_escape_string($conn,$_POST['Other']);
  $heartvalve=mysqli_real_escape_string($conn,$_POST['heartvalve']);
  $endocarditis=mysqli_real_escape_string($conn,$_POST['endocarditis']);
  $Damaged=mysqli_real_escape_string($conn,$_POST['Damaged']);
  $CHD=mysqli_real_escape_string($conn,$_POST['CHD']);
  $last_mon=mysqli_real_escape_string($conn,$_POST['last_mon']);
  $residualdef=mysqli_real_escape_string($conn,$_POST['residualdef']);
  $Autoimmune=mysqli_real_escape_string($conn,$_POST['Autoimmune']);
  $Rheumatoid=mysqli_real_escape_string($conn,$_POST['Rheumatoid']);
  $lupus=mysqli_real_escape_string($conn,$_POST['lupus']);
  $Asthma=mysqli_real_escape_string($conn,$_POST['Asthma']);
  $Bronchitis=mysqli_real_escape_string($conn,$_POST['Bronchitis']);
  $Emphysema=mysqli_real_escape_string($conn,$_POST['Emphysema']);
  $Sinus=mysqli_real_escape_string($conn,$_POST['Sinus']);
  $Tuberculo=mysqli_real_escape_string($conn,$_POST['Tuberculo']);
  $Chemotherapy=mysqli_real_escape_string($conn,$_POST['Chemotherapy']);
  $Hepatitis=mysqli_real_escape_string($conn,$_POST['Hepatitis']);
  $Epilepsy=mysqli_real_escape_string($conn,$_POST['Epilepsy']);
  $seizures=mysqli_real_escape_string($conn,$_POST['seizures']);
  $Neurological=mysqli_real_escape_string($conn,$_POST['Neurological']);
  $specify_yes=mysqli_real_escape_string($conn,$_POST['specify_yes']);
  $Sleep_dis=mysqli_real_escape_string($conn,$_POST['Sleep_dis']);
  $Mental_heal=mysqli_real_escape_string($conn,$_POST['Mental_heal']);
  $Spec_ify=mysqli_real_escape_string($conn,$_POST['Spec_ify']);
  $Cardiovascular=mysqli_real_escape_string($conn,$_POST['Cardiovascular']);
  $Angina=mysqli_real_escape_string($conn,$_POST['Angina']);
  $Arteriosclerosis=mysqli_real_escape_string($conn,$_POST['Arteriosclerosis']);
  $Congestive=mysqli_real_escape_string($conn,$_POST['Congestive']);
  $Damag_heart=mysqli_real_escape_string($conn,$_POST['Damag_heart']);
  $Heart_attack=mysqli_real_escape_string($conn,$_POST['Heart_attack']);
  $low_blood=mysqli_real_escape_string($conn,$_POST['low_blood']);
  $high_blood=mysqli_real_escape_string($conn,$_POST['high_blood']);
  $cong_heart=mysqli_real_escape_string($conn,$_POST['cong_heart']);
  $Mitral=mysqli_real_escape_string($conn,$_POST['Mitral']);
  $Pacemaker=mysqli_real_escape_string($conn,$_POST['Pacemaker']);
  $Rheumatic=mysqli_real_escape_string($conn,$_POST['Rheumatic']);
  $Rheumatic_heart=mysqli_real_escape_string($conn,$_POST['Rheumatic_heart']);
  $ab_bleeding=mysqli_real_escape_string($conn,$_POST['ab_bleeding']);
  $Anemia=mysqli_real_escape_string($conn,$_POST['Anemia']);
  $transfusion=mysqli_real_escape_string($conn,$_POST['transfusion']);
  $yes_date=mysqli_real_escape_string($conn,$_POST['yes_date']);
  $Hemophilia=mysqli_real_escape_string($conn,$_POST['Hemophilia']);
  $aids_hiv=mysqli_real_escape_string($conn,$_POST['aids_hiv']);
  $Arthritis=mysqli_real_escape_string($conn,$_POST['Arthritis']);
  $Chest_pain=mysqli_real_escape_string($conn,$_POST['Chest_pain']);
  $Chronic=mysqli_real_escape_string($conn,$_POST['Chronic']);
  $Diabetes=mysqli_real_escape_string($conn,$_POST['Diabetes']);
  $eating_dis=mysqli_real_escape_string($conn,$_POST['eating_dis']);
  $Malnutrition=mysqli_real_escape_string($conn,$_POST['Malnutrition']);
  $Gastrointestinal=mysqli_real_escape_string($conn,$_POST['Gastrointestinal']);
  $Reflux=mysqli_real_escape_string($conn,$_POST['Reflux']);
  $Ulcers=mysqli_real_escape_string($conn,$_POST['Ulcers']);
  $Thyroid=mysqli_real_escape_string($conn,$_POST['Thyroid']);
  $Stroke=mysqli_real_escape_string($conn,$_POST['Stroke']);
  $Glaucoma=mysqli_real_escape_string($conn,$_POST['Glaucoma']);
  $Recurrent=mysqli_real_escape_string($conn,$_POST['Recurrent']);
  $infect_type=mysqli_real_escape_string($conn,$_POST['infect_type']);
  $Kidney=mysqli_real_escape_string($conn,$_POST['Kidney']);
  $Night_swit=mysqli_real_escape_string($conn,$_POST['Night_swit']);
  $Osteoporosis=mysqli_real_escape_string($conn,$_POST['Osteoporosis']);
  $swollen=mysqli_real_escape_string($conn,$_POST['swollen']);
  $migraines=mysqli_real_escape_string($conn,$_POST['migraines']);
  $rapid=mysqli_real_escape_string($conn,$_POST['rapid']);
  $transmitted=mysqli_real_escape_string($conn,$_POST['transmitted']);
  $urination=mysqli_real_escape_string($conn,$_POST['urination']);
  $anti_biotics=mysqli_real_escape_string($conn,$_POST['anti_biotics']);
  $have_dis=mysqli_real_escape_string($conn,$_POST['have_dis']);
  $exp_plea=mysqli_real_escape_string($conn,$_POST['exp_plea']);
  $name_phy=mysqli_real_escape_string($conn,$_POST['name_phy']);
  $phy_phn=mysqli_real_escape_string($conn,$_POST['phy_phn']);
  $fin_date=mysqli_real_escape_string($conn,$_POST['fin_date']);
  $last_insert_id;

$sign = mysqli_real_escape_string($conn,$_FILES['sign']['name']);
$imageFileType = pathinfo($sign,PATHINFO_EXTENSION);


//  echo"<script>alert($sign)</script>";
//     exit();

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_FILES['sign']['name']){
    echo "<script>alert('only jpg, jpeg, png, gif files are allowed.')</script>";
echo "<script> window.location.href='form.php'";

}
else{
    $targeting="uploads/signs/";
    $imgrename = date('ymd').rand(1,1000000).'.'.$imageFileType;
    $image = move_uploaded_file($_FILES['sign']['tmp_name'],$targeting.$imgrename);



  $health_history_insert = mysqli_query($conn,"INSERT INTO health_history SET email='".$email."', date='".$todaysdate."', lname='".$lname."', fname='".$fname."', mname='".$mname."', home_phone='".$hnumber."', business_phone='".$bnumber."', address='".$address."', city='".$city."', state='".$state."', zip='".$zip."', occupation='".$occupation."', height='".$height."', weight='".$weight."', sex='".$gender."', ssn='".$ssn."', emergency_contact='".$emergency."', releationship='".$relation."', phone_home='".$homenum."', cell_phone='".$cellnum."', your_name='".$yname."', releationship_other='".$relationship."', Active_tuberculosis='".$Active."', Persistent_cough_3_week_duration='".$Persistent."', Cough_that_produces_blood='".$Cough."', exposed_tuberculosis='".$Been."'");

  if($health_history_insert == true)
  {
    $last_insert_id = mysqli_insert_id($conn);
  }


$dental_info_insert = mysqli_query($conn,"INSERT INTO dental_info SET did_gum_brush_fluss='".$floss."', do_eraches_neckpains='".$earaches."', are_teeth_sensitive='".$sensitive."', do_clicking_popping='".$popping."', did_food_floss='".$foodorfloss."', do_brux_grind='".$grind."', mouth_dry='".$dry."', do_sores_ulcers='".$sores."', had_periodontal='".$periodontal."', dentures_partials='".$dentures."', had_orthodontic='".$orthodontic."', active_recreational='".$recreational."', problems_previous_dental='".$associated_treat."', serious_injury_head='".$injury."', home_water_fluoridated='".$fluoridated."', date_last_dental='".$Dateofdental."', drink_botteled_filter='".$filtered."', date_last_dentalxrays='".$dateofxray."', daily_weekly='".$daily_week."', are_dentalpain_discomfort='".$discomfort."', reason_for_dental_visit_today='".$dentalvisit."', about_ur_smile='".$feelsmile."', matching_id='".$last_insert_id."'");


$medical_info_insert = mysqli_query($conn,"INSERT INTO medical_information SET under_care_physician='".$careof."', serious_operation_5yrs='".$hospitalized."', physician_name='".$Physiname."', yes_illness_problem='".$illnessproblem."', phone_areacode='".$phnumber."', address_state_city='".$adcistzi."', prescription_counter_medicine='".$prescription."', good_in_health='".$goodhealth."', vitamins_natural_herbal='".$herbal."', change_health_pastyear='".$generalhealth."', yes_condition_treated='".$condition."', last_physical_exam='".$datephysi."', matching_id='".$last_insert_id."'");


$medical_info1_insert = mysqli_query($conn,"INSERT INTO medical_information1 SET u_wear_contact_lenses='".$lenses."', use_controlled_substances='".$drugs."', arthopedic_total_joint='".$lenses."', use_tobbaco='".$snuff."', joint_replacement='".$orthopedic."', intrested_in_stopping='".$interestedstop."', joint_date='".$meddate."', alochoholic_bevarages='".$beverages."', had_any_complications='".$complications."', alochohol_drink_24hrs='".$drink24hr."', medications_alendronate='".$Fosamax."', typically_drink_week='".$typically."', 2001_intravenous_bisphosphonates='".$Aredia."', are_u_pregnant='".$Pregnant."', no_of_weeks='".$Numberofweek."', birth_controller_pills='".$pills."', nursing='".$Nursing."', treatment_began='".$began."', metals='".$Metals."', local_anesthitics='".$reaction."', latex='".$Latex."', lodine='".$Iodinees."', aspirin='".$Aspirin."', hay_fever_seasonal='".$fevseasonal."', pencilin_antibiotics='".$Penicillin."', animals='".$Animals."', barbiturates_sedatives='".$sedatives."', food='".$Food."', sulfa_drugs='".$Sulfa."', other='".$Other."', codeiene_other_narcotics='".$Codeine."', matching_id='".$last_insert_id."'");

$medical_info2_insert = mysqli_query($conn,"INSERT INTO medical_info2 SET artificial_heart_valve='".$heartvalve."', infective_endocarditis='".$endocarditis."', damaged_transplanted_heart='".$Damaged."', unrepaired_cyanotic='".$CHD."', repaired_last_6mnths='".$last_mon."', repaired_chd='".$residualdef."', matching_id='".$last_insert_id."'");

$medical_inf03_insert = mysqli_query($conn,"INSERT INTO medical_info3 SET aurtoimmune_disease ='".$Autoimmune."', hepatatis_jaundice_liver='".$Hepatitis."', cardio_vascular_disease='".$Cardiovascular."', rheumatoid_arthritis='".$Rheumatoid."', angina='".$Angina."', systemic_lupus='".$lupus."', epilipesy='".$Epilepsy."', arteriosclerosis='".$Arteriosclerosis."', fainting_spells='".$seizures."', asthma='".$Asthma."', neurological_disorders='".$Neurological."', congestive_heart='".$Congestive."', bronchitis='".$Bronchitis."', if_yes_specify='".$specify_yes."', heart_attack='".$Heart_attack."', emphysema='".$Emphysema."', sinus_trouble='".$Sinus."', sleep_disorder='".$Sleep_dis."', low_blood_pressure='".$low_blood."', tuberculosis='".$Tuberculo."', mental_health_disorders='".$Mental_heal."', high_blood_pressure='".$high_blood."', cancer_chemotheraphy='".$Chemotherapy."', specifys='".$Spec_ify."', congential_heart_defects='".$cong_heart."', mitral_valve='".$Mitral."', chest_pain='".$Chest_pain."', recurrent_infections='".$Recurrent."', pacemaker='".$Pacemaker."', chronicpain='".$Chronic."', type_of_infection='".$infect_type."', rheumatic_fever='".$Rheumatic."', daibetis_type='".$Diabetes."', rhemutaic_heart_disease='".$Rheumatic_heart."', eating_disorder='".$eating_dis."', kidney_problems='".$Kidney."', abnormal_bleeding='".$ab_bleeding."', malnutrition='".$Malnutrition."', night_sweats='".$Night_swit."', anemia='".$Anemia."', gastrointestinal_disease='".$Gastrointestinal."', osteoporosis='".$Osteoporosis."', blood_transfusion='".$transfusion."', reflux_heartburn='".$Reflux."', presistent_swallon_glands='".$swollen."', if_yes_date='".$yes_date."', ulcers='".$Ulcers."', severe_headaches='".$migraines."', hemophilia='".$Hemophilia."', thyroid_problems='".$Thyroid."', rapid_weight_loss='".$rapid."', aids_hiv_infection='".$aids_hiv."', stroke='".$Stroke."', sexually_transmitted_disease='".$transmitted."', arthritis='".$Arthritis."', glaucoma='".$Glaucoma."', excessive_urination='".$urination."', dam_heart_valve='".$Damag_heart."', matching_id='".$last_insert_id."'");

$medical_info4_insert = mysqli_query($conn,"INSERT INTO medical_info4 SET antibiotics_dental_treatment='".$anti_biotics."', please_explain='".$exp_plea."', physician_dentist_recommendation='".$name_phy."', phone='".$phy_phn."', signature='".$imgrename."', date='".$fin_date."', matching_id='".$last_insert_id."', status=1");

if($health_history_insert && $dental_info_insert && $medical_info_insert && $medical_info1_insert && $medical_info2_insert && $medical_inf03_insert && $medical_info4_insert == true){

   echo "<script>alert('Details Submitted Successfully')</script>";

}
else{

//  echo "<script>alert('Something Went wrong')</script>";
        echo("Error description: " . mysqli_error($conn));
}
}

}

?>