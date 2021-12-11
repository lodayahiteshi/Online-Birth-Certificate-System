<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>New Application</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/Application-Form.css">
    <link rel="stylesheet" href="../assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="../assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>
<script>
    function sameAddress() {
        const isChecked = document.querySelector(`input[name="checkAddr"]:checked`);
        if (isChecked) {
            document.appForm.perbldg.value = document.appForm.bchbldg.value;
            document.appForm.perhouse.value = document.appForm.bchhouse.value;
            document.appForm.perstreet.value = document.appForm.bchstreet.value;
            document.appForm.perlocal.value = document.appForm.bchlocal.value;
            document.appForm.perstate.value = document.appForm.bchstate.value;
            document.appForm.perdistr.value = document.appForm.bchdistr.value;
            document.appForm.pervillage.value = document.appForm.bchvillage.value;
            document.appForm.perpin.value = document.appForm.bchpin.value;
            console.log("Checked");
        } else {
            console.log("Unchecked");
        }
    }

    function checkSingleF() {
        const isSingleF = document.querySelector(`input[name="singleF"]:checked`);
        if (isSingleF) {
            document.appForm.mthfname.value = "null";
            document.appForm.mthmname.value = "null";
            document.appForm.mthlname.value = "null";
            document.appForm.maadhar.value = null;
            document.appForm.memail.value = "null";
            document.appForm.mmobile.value = null;
            document.appForm.mreligion.value = "null";
            document.appForm.moccup.value = "null";
            document.appForm.meducate.value = "null";
            document.appForm.mthfname.disabled = true;
            document.appForm.mthmname.disabled = true;
            document.appForm.mthlname.disabled = true;
            document.appForm.maadhar.disabled = true;
            document.appForm.memail.disabled = true;
            document.appForm.mmobile.disabled = true;
            document.appForm.mreligion.disabled = true;
            document.appForm.moccup.disabled = true;
            document.appForm.meducate.disabled = true;
            console.log("disabled");
        } else {
            document.appForm.mthfname.disabled = false;
            document.appForm.mthmname.disabled = false;
            document.appForm.mthlname.disabled = false;
            document.appForm.maadhar.disabled = false;
            document.appForm.memail.disabled = false;
            document.appForm.mmobile.disabled = false
            document.appForm.mreligion.disabled = false;
            document.appForm.moccup.disabled = false;
            document.appForm.meducate.disabled = false;
            console.log("enabled");
        }
    }

    function checkSingleM() {
        const isSingleM = document.querySelector(`input[name="singleM"]:checked`);
        if (isSingleM) {
            document.appForm.fthfname.value = "null";
            document.appForm.fthmname.value = "null";
            document.appForm.fthlname.value = "null";
            document.appForm.faadhar.value = null;
            document.appForm.femail.value = "null";
            document.appForm.fmobile.value = null;
            document.appForm.freligion.value = "null";
            document.appForm.foccup.value = "null";
            document.appForm.feducate.value = "null";
            document.appForm.fthfname.disabled = true;
            document.appForm.fthmname.disabled = true;
            document.appForm.fthlname.disabled = true;
            document.appForm.faadhar.disabled = true;
            document.appForm.femail.disabled = true;
            document.appForm.fmobile.disabled = true;
            document.appForm.freligion.disabled = true;
            document.appForm.foccup.disabled = true;
            document.appForm.feducate.disabled = true;
            console.log("disabled");
        } else {
            document.appForm.fthfname.disabled = false;
            document.appForm.fthmname.disabled = false;
            document.appForm.fthlname.disabled = false;
            document.appForm.faadhar.disabled = false;
            document.appForm.femail.disabled = false;
            document.appForm.fmobile.disabled = false
            document.appForm.freligion.disabled = false;
            document.appForm.foccup.disabled = false;
            document.appForm.feducate.disabled = false;
            console.log("enabled");
        }
    }
</script>

<body>
    <!-- Start: Application Form -->
    <section>
        <h1 class="text-center" style="font-family:Cormorant Garamond, serif; font-size:30px">Application form</h1><br>
        <div class="container">
            <form id="application-form" method="POST" name="appForm" enctype="multipart/form-data">

                <!-- Information of Child -->
                <div class="form-section">
                    <div class="section-head">
                        <h4>Information of Child</h4>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="fname">
                            </div>
                            <div class="col">
                                <p><strong>Middle Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="mname">
                            </div>
                            <div class="col">
                                <p><strong>Last Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p><strong>Date Of Birth</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="datetime-local" required="" name="dob">
                            </div>
                            <div class="col">
                                <p><strong>Gender</strong>&nbsp;<span class="text-danger">*</span></p>
                                <select class="shadow-sm form-select" style="font-family:Roboto, sans-serif;" name="gender">
                                    <option style="display:none"></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Transgender">Transgender</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Aadhar Number (if any)</strong>&nbsp;</p><input class="shadow-sm form-control" type="number" required="no" name="aadhar">
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Weight(kg)</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="number" step=".01" required="" name="cweight">
                            </div>
                        </div>
                    </div>

                </div>
                <br />


                <!-- Birth Place Information -->
                <div class="form-section">
                    <div class="section-head">
                        <h4>Place of Birth</h4>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p><strong>Place of Birth&nbsp;</strong><span class="text-danger">*</span></p>
                                <select class="shadow-sm form-select flex-grow-1" style="font-family:Roboto, sans-serif;" name="pob">
                                    <option style="display:none"></option>
                                    <option value="">House</option>
                                    <option value="">Other</option>
                                </select>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><strong>Bldg. No. &amp; Name&nbsp;</strong><span class="text-danger">*</span></p>
                                <textarea class="shadow-sm form-control" required="" name="pobblg" rows="3" cols="5"></textarea>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>House No.&nbsp;</strong><span class="text-danger">*</span></p>
                                <textarea class="shadow-sm form-control" required="" name="pobhouse" rows="3" cols="5"></textarea>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Street/Lane Name&nbsp;</strong><span class="text-danger">*</span></p>
                                <textarea class="shadow-sm form-control" required="" name="pobstreet" rows="3" cols="5"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>
                                    <strong>Locality/Post Office&nbsp;</strong>
                                    <span class="text-danger">*</span>
                                </p>
                                <textarea class="shadow-sm form-control" required="" name="pobpost" rows="3" cols="5"></textarea>
                            </div>
                            <div class="col">
                                <p><strong>State</strong>&nbsp;<span class="text-danger">*</span></p>
                                <select class="shadow-sm form-select selectState" style="font-family:Roboto, sans-serif;" name="pstate">
                                    <option style="display:none"></option>
                                </select>
                            </div>
                            <div class="col">
                                <p><strong>District</strong>&nbsp;<span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="text" required="" name="pobdistr">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>
                                    <strong>Village/Town</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" required="" name="pobvillage">
                            </div>
                            <div class="col-lg-4">

                                <p><strong>Pin Code&nbsp;</strong><span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="number" required="" name="pobpin">
                            </div>
                        </div>
                    </div>
                </div>
                <br />

                <!-- Fathers information-->
                <div class="form-section">
                    <div class="section-head">
                        <h4>Fathers Information</h4>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" name="singleF" value="single Father" onclick="checkSingleF()">
                                <label for="single parent">Please check if they are Single Parent</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="fthfname">
                            </div>
                            <div class="col">
                                <p><strong>Middle Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="fthmname">
                            </div>
                            <div class="col">
                                <p><strong>Last Name</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" required="" name="fthlname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p>
                                    <strong>Aadhar Number</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="number" name="faadhar" max=999999999999 required />
                            </div>
                            <div class="col">
                                <p>
                                    <strong>Email Id</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="email" name="femail" required>
                            </div>
                            <div class="col-lg-4">
                                <p>
                                    <strong>Mobile</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="number" name="fmobile" required="" />
                                <p class="text-danger" style="font-family:monospace; font-size:15px;">(P.S. Enter the Mobile Number which is registered in your Aadhar Card)</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p>
                                    <strong>Religion</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" name="freligion" required />
                            </div>
                            <div class="col">
                                <p>
                                    <strong>Occupation</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" name="foccup" required>
                            </div>
                            <div class="col-lg-4">
                                <p>
                                    <strong>Education</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" name="feducate" required="" />
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                <!--Mothers Information -->
                <div class="form-section">
                    <div class="section-head">
                        <h4>Mothers Information</h4>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" name="singleM" value="single Mother" onclick="checkSingleM()">
                                <label for="single parent">Please check if they are Single Parent</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="mthfname">
                            </div>
                            <div class="col">
                                <p><strong>Middle Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="mthmname">
                            </div>
                            <div class="col">
                                <p><strong>Last Name</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" required="" name="mthlname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p>
                                    <strong>Aadhar Number</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="number" name="maadhar" max=999999999999 required="" />
                            </div>
                            <div class="col">
                                <p>
                                    <strong>Email Id</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="email" name="memail" required="">
                            </div>
                            <div class="col-lg-4">
                                <p>
                                    <strong>Mobile</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="number" name="mmobile" required="" />
                                <p class="text-danger" style="font-family:monospace; font-size:15px;">(P.S. Enter the Mobile Number which is registered in your Aadhar Card)</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p>
                                    <strong>Religion</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" name="mreligion" required />
                            </div>
                            <div class="col">
                                <p>
                                    <strong>Occupation</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" name="moccup" required>
                            </div>
                            <div class="col-lg-4">
                                <p>
                                    <strong>Education</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" name="meducate" required="" />
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!--Address of Parents at the time of Birth of the Child -->
                <div class="form-section">
                    <div class="section-head">
                        <h4>Address of Parents at the time of Birth of the Child</h4>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="radio" name="place" value="In India" required>
                                <label for="in india">In India </label>
                            </div>
                            <div class="col">
                                <input type="radio" name="place" value="Outside India" required>
                                <label for="outside india">Outside India </label>
                            </div>
                            <div class="col"></div>
                        </div><br>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p><strong>Bldg. No. &amp; Name&nbsp;</strong><span class="text-danger">*</span></p>
                                    <textarea class="shadow-sm form-control" required="" name="bchbldg" rows="3" cols="5"></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>House No.&nbsp;</strong><span class="text-danger">*</span></p>
                                    <textarea class="shadow-sm form-control" required="" name="bchhouse" rows="3" cols="5"></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>Street/Lane Name&nbsp;</strong><span class="text-danger">*</span></p>
                                    <textarea class="shadow-sm form-control" required="" name="bchstreet" rows="3" cols="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>
                                    <strong>Locality/Post Office&nbsp;</strong>
                                    <span class="text-danger">*</span>
                                </p>
                                <textarea class="shadow-sm form-control" required="" name="bchlocal" rows="3" cols="5"></textarea>
                            </div>
                            <div class="col">
                                <p><strong>State</strong>&nbsp;<span class="text-danger">*</span></p>
                                <select class="shadow-sm form-select selectState" style="font-family:Roboto, sans-serif;" name="bchstate">
                                    <option style="display:none"></option>
                                </select>
                            </div>
                            <div class="col">
                                <p><strong>District</strong>&nbsp;<span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="text" required="" name="bchdistr">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>
                                    <strong>Village/Town</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" required="" name="bchvillage">
                            </div>
                            <div class="col-lg-4">

                                <p><strong>Pin Code&nbsp;</strong><span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="number" required="" name="bchpin">
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                <!--Permanent Address of Parents -->
                <div class="form-section">
                    <div class="section-head">
                        <h4>Permanent Address of Parents</h4>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="radio" name="place" value="In India" required="">
                                <label for="in india">In India </label>
                            </div>
                            <div class="col">
                                <input type="radio" name="place" value="Outside India" required="">
                                <label for="outside india">Outside India </label>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" name="checkAddr" value="check permanent address" onclick="sameAddress()">
                                <label for="check permanent address">Please check if permanent address is same as above address</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p><strong>Bldg. No. &amp; Name&nbsp;</strong><span class="text-danger">*</span></p>
                                    <textarea class="shadow-sm form-control" required="" name="perbldg" rows="3" cols="5"></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>House No.&nbsp;</strong><span class="text-danger">*</span></p>
                                    <textarea class="shadow-sm form-control" required="" name="perhouse" rows="3" cols="5"></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>Street/Lane Name&nbsp;</strong><span class="text-danger">*</span></p>
                                    <textarea class="shadow-sm form-control" required="" name="perstreet" rows="3" cols="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>
                                    <strong>Locality/Post Office&nbsp;</strong>
                                    <span class="text-danger">*</span>
                                </p>
                                <textarea class="shadow-sm form-control" required="" name="perlocal" rows="3" cols="5"></textarea>
                            </div>
                            <div class="col">
                                <p><strong>State</strong>&nbsp;<span class="text-danger">*</span></p>
                                <select class="shadow-sm form-select selectState" style="font-family:Roboto, sans-serif;" name="perstate">
                                    <option style="display:none"></option>
                                </select>
                            </div>
                            <div class="col">
                                <p><strong>District</strong>&nbsp;<span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="text" required="" name="perdistr">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>
                                    <strong>Village/Town</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" required="" name="pervillage">
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Pin Code&nbsp;</strong><span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="number" required="" name="perpin">
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!--Informants Information -->
                <div class="form-section">
                    <div class="section-head">
                        <h4>Informants Information</h4>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="inffname">
                            </div>
                            <div class="col">
                                <p><strong>Middle Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="shadow-sm form-control" type="text" required="" name="infmname">
                            </div>
                            <div class="col">
                                <p><strong>Last Name</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="text" required="" name="inflname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><strong>Address</strong><span class="text-danger">*</span></p>
                                <textarea class="shadow-sm form-control" required="" name="infaddress" rows="3" cols="5"></textarea>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Pin Code&nbsp;</strong><span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="number" required="" name="infpin">
                            </div>
                            <div class="col-lg-4">
                                <p>
                                    <strong>Mobile</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="number" required="" name="infmobile" />
                                <p class="text-danger" style="font-family:monospace; font-size:15px;">(P.S. Enter the Mobile Number which is registered in your Aadhar Card)</p>
                            </div><br>
                            <div class="col-lg-4">
                                <p><strong>Reporting Date</strong>&nbsp;<span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="date" required="" name="reportingdate">
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!--Other Information -->
                <div class=" form-section">
                    <div class="section-head">
                        <h4>Other Information</h4>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><strong>Age of Mother at Time of Birth&nbsp;</strong><span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="number" required="" name="ageofmth">
                            </div>
                            <div class=" col-lg-4">
                                <p><strong>Number of Child Born Alive&nbsp;</strong><span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="number" required="" name="numchildborn">
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Duration of Pregnancy(weeks)&nbsp;</strong><span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="number" required="" name="durapreg">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col">
                                <p><strong>Delivery Method&nbsp;</strong><span class="text-danger">*</span></p>
                                <select class="shadow-sm form-select" style="font-family:Roboto, sans-serif;" name="delmeth">
                                    <option style="display:none"></option>
                                    <option value="">Normal Delivery</option>
                                    <option value="">Caesaren Delivery(C-Section)</option>
                                    <option value="">Water Birth</option>
                                    <option value="">Scheduled Induction Birth</option>
                                </select>
                            </div>
                            <div class="col">
                                <p><strong>Type of Attention at Delivery</strong>&nbsp;<span class="text-danger">*</span></p><select class="shadow-sm form-select" style="font-family:Roboto, sans-serif;" name="attendel">
                                    <optgroup label="Type of Attention at Delivery">
                                        <option style="display:none"></option>
                                        <option value="">Institutional-Government</option>
                                        <option value="">Institutional-Private/Non-Government</option>
                                        <option value="">Doctor,Nurse or Trained Midwife</option>
                                        <option value="">Traditional Birth Attendant</option>
                                        <option value="">Relatives or Other</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col">
                                <p><strong>Aadhar Document(pdf file)</strong>&nbsp;<span class="text-danger">*</span></p>
                                <input class="shadow-sm form-control" type="file" required="" name="aadharproof" accept=".pdf" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>
                                    <strong>Affidavit Document(pdf file)</strong>&nbsp;
                                    <span class="text-danger">*</span>
                                </p>
                                <input class="shadow-sm form-control" type="file" required="" name="affproof" accept=".pdf">
                            </div>
                        </div>
                    </div>
                </div><br><br>




                <div class="justify-content-center d-flex form-group mb-3">
                    <div id="submit-btn">
                        <div class="row">
                            <button class="btn btn-primary btn-light m-0 rounded-pill px-4" name="submit" style="min-width:200px; background-color:black; color:white;" action method="POST" target="hidden_iframe">Submit</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        var select = document.getElementsByClassName("shadow-sm form-select selectState");
        const states = [
            "Andhra Pradesh",
            "Arunachal Pradesh",
            "Assam",
            "Bihar",
            "Chhattisgarh",
            "Goa",
            "Gujarat",
            "Haryana",
            "Himachal Pradesh",
            "Jammu and Kashmir",
            "Jharkhand",
            "Karnataka",
            "Kerala",
            "Madhya Pradesh",
            "Maharashtra",
            "Manipur",
            "Meghalaya",
            "Mizoram",
            "Nagaland",
            "Odisha",
            "Punjab",
            "Rajasthan",
            "Sikkim",
            "Tamil Nadu",
            "Telangana",
            "Tripura",
            "Uttarakhand",
            "Uttar Pradesh",
            "West Bengal",
            "Andaman and Nicobar Islands",
            "Chandigarh",
            "Dadra and Nagar Haveli",
            "Daman and Diu",
            "Delhi",
            "Lakshadweep",
            "Puducherry"
        ]
        for (var x = 0; x < select.length; x++) {
            for (var i = 0; i < states.length; i++) {
                var opt = states[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select[x].innerHTML += "<option value=\"" + opt + "\"></option>";
                select[x].appendChild(el);
                // console.log("added");
            }
        }
    </script>
    <!-- End: Application Form -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Application-Form.js"></script>
    <?php include 'insert_details.php' ?>;
</body>

</html>