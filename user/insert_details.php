<?php
include 'database_connect.php';

if (isset($_POST['submit'])) {
    //information of child
    $firstname = $_POST['fname'];
    $midname = $_POST['mname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $weight = $_POST['cweight'];
    $aadhar = $_POST['aadhar'];
    //place of birth
    $pob = $_POST['pob'];
    $bldg_no_name = $_POST['pobblg'];
    $house_no = $_POST['pobhouse'];
    $street_lane = $_POST['pobstreet'];
    $pstate = $_POST['pstate'];
    $district = $_POST['pobdistr'];
    $village_town = $_POST['pobvillage'];
    $pincode = $_POST['pobpin'];
    //fathers information
    $fname = $_POST['fthfname'];
    $fmname = $_POST['fthmname'];
    $flname = $_POST['fthlname'];
    $faadhar = $_POST['faadhar'];
    $femail = $_POST['femail'];
    $fmobile = $_POST['fmobile'];
    $freligion = $_POST['freligion'];
    $foccup = $_POST['foccup'];
    $feducate = $_POST['feducate'];
    //mothers information
    $mname = $_POST['mthfname'];
    $mmidname = $_POST['mthmname'];
    $mlname = $_POST['mthlname'];
    $maadhar = $_POST['maadhar'];
    $memail = $_POST['memail'];
    $mmobile = $_POST['mmobile'];
    $mreligion = $_POST['mreligion'];
    $moccup = $_POST['moccup'];
    $meducate = $_POST['meducate'];
    //permanent address
    $place = $_POST['place'];
    $perbldg = $_POST['perbldg'];
    $perhouse = $_POST['perhouse'];
    $perstreet = $_POST['perstreet'];
    $perlocal = $_POST['perlocal'];
    $perstate = $_POST['perstate'];
    $perdistr = $_POST['perdistr'];
    $pervillage = $_POST['pervillage'];
    $perpin = $_POST['perpin'];
    //informants information
    $inffname = $_POST['inffname'];
    $infmname = $_POST['infmname'];
    $inflname = $_POST['inflname'];
    $infaddress = $_POST['infaddress'];
    $infpin = $_POST['infpin'];
    $infmobile = $_POST['infmobile'];
    $reportdate = $_POST['reportingdate'];
    //other information
    $mage = $_POST['ageofmth'];
    $chborn = $_POST['numchildborn'];
    $delmeth = $_POST['delmeth'];
    $fn = $_FILES['aadharproof']['name'];
    $tm1 = $_FILES['aadharproof']['tmp_name'];
    move_uploaded_file($tm1, "../assets/aadharproof/" . $fn);

    $afn = $_FILES['affproof']['name'];
    $tm2 = $_FILES['aadharproof']['tmp_name'];
    move_uploaded_file($tm2, "../assets/affproof/" . $afn);

    $query1 = mysqli_query($con, "INSERT INTO info_of_child (firstname,midname,lastname,dob,gender,cweight,aadhar) VALUES('$firstname','$midname','$lastname','$dob','$gender','$weight','$aadhar')");
    $query2 = mysqli_query($con, "INSERT INTO place_of_birth (pob,bldg_no_name,house_no,street_lane,pstate,district,village_town,pincode) VALUES('$pob','$bldg_no_name','$house_no','$street_lane','$pstate','$district','$village_town','$pincode')");
    $query3 = mysqli_query($con, "INSERT INTO fathers_info (fname,fmname,flname,faadhar,femail,fmobile,freligion,foccup,feducate) VALUES ('$fname','$fmname','$flname','$faadhar','$femail','$fmobile','$freligion','$foccup','$feducate')");
    $query4 = mysqli_query($con, "INSERT INTO mothers_info (mfname,mmidname,mlname,maadhar,memail,mmobile,mreligion,moccup,meducate) VALUES ('$mname','$mmidname','$mlname','$maadhar','$memail','$mmobile','$mreligion','$moccup','$meducate')");
    $query5 = mysqli_query($con, "INSERT INTO permanent_addr (place,perbldg,perhouse,perstreet,perlocal,perstate,perdistr,pervillage,perpin) VALUES ('$place','$perbldg','$perhouse','$perstreet','$perlocal','$perstate','$perdistr','$pervillage','$perpin')");
    $query6 = mysqli_query($con, "INSERT INTO informants_info (inffname,infmname,inflname,infaddress,infpin,infmobile,reportdate) VALUES ('$inffname','$infmname','$inflname','$infaddress','$infpin','$infmobile','$reportdate')");
    $query7 = mysqli_query($con, "INSERT INTO other_info (mage,chborn,delmeth,aadharproof,affproof) VALUES('$mage','$chborn','$delmeth','$fn','$afn')");

    if ((!$query1) && (!$query2) && (!$query3) && (!$query4) && (!$query5) && (!$query6) && (!$query7)) {
        echo '<script type="text/javascript"> alert("Error") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Record Added Successfully") </script>';
    }
}
