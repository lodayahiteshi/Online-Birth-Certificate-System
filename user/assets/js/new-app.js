function sameAddress() {
    const isChecked = document.querySelector(`input[name="checkAddr"]:checked`);
    if (isChecked) {
        document.appForm.perbldg.value = document.appForm.bchbldg.value;
        document.appForm.perhouse.value = document.appForm.bchhouse.value;
        document.appForm.perstreet.value = document.appForm.bchstreet.value;
        document.appForm.perlocal.value = document.appForm.bchlocal.value;
        document.appForm.perdistr.value = document.appForm.bchdistr.value;
        for (i = document.appForm.bpstate.options.length - 1; i >= 0; i--) {
            if (document.appForm.bpstate.options[i].selected)
                document.appForm.perstate.options[i].selected = true;
        }
        for (i = document.appForm.bchvillage.options.length - 1; i >= 0; i--) {
            if (document.appForm.bchvillage.options[i].selected)
                document.appForm.pervillage.options[i].selected = true;
        }
        document.appForm.perpin.value = document.appForm.bchpin.value;
        console.log("Checked");
    } else {
        console.log("Unchecked");
    }
}

function checkSingleF() {
    const isSingleF = document.querySelector(`input[name="fcheck"]:checked`);
    if (isSingleF) {
        document.appForm.mthfname.value = "null";
        document.appForm.mthmname.value = "null";
        document.appForm.mthlname.value = "null";
        document.appForm.maadhar.value = "0";
        document.appForm.memail.value = "null@example.com";
        document.appForm.mmobile.value = "0";
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
        document.appForm.mmobile.disabled = false;
        document.appForm.mreligion.disabled = false;
        document.appForm.moccup.disabled = false;
        document.appForm.meducate.disabled = false;
        document.appForm.mthfname.value = "";
        document.appForm.mthmname.value = "";
        document.appForm.mthlname.value = "";
        document.appForm.maadhar.value = "";
        document.appForm.memail.value = "";
        document.appForm.mmobile.value = "";
        document.appForm.mreligion.value = "";
        document.appForm.moccup.value = "";
        document.appForm.meducate.value = "";
        console.log("enabled");
    }
}

function checkSingleM() {
    const isSingleM = document.querySelector(`input[name="mcheck"]:checked`);
    if (isSingleM) {
        document.appForm.fthfname.value = "null";
        document.appForm.fthmname.value = "null";
        document.appForm.fthlname.value = "null";
        document.appForm.faadhar.value = "0";
        document.appForm.femail.value = "null@example.com";
        document.appForm.fmobile.value = "0";
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
        document.appForm.fmobile.disabled = false;
        document.appForm.freligion.disabled = false;
        document.appForm.foccup.disabled = false;
        document.appForm.feducate.disabled = false;
        document.appForm.fthfname.value = "";
        document.appForm.fthmname.value = "";
        document.appForm.fthlname.value = "";
        document.appForm.faadhar.value = "";
        document.appForm.femail.value = "";
        document.appForm.fmobile.value = "";
        document.appForm.freligion.value = "";
        document.appForm.foccup.value = "";
        document.appForm.feducate.value = "";
        console.log("enabled");
    }
}