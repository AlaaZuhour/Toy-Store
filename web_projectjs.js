function validateForm(reg) {

	 var valid =true
  if(reg.Username.value==""){
		document.getElementById("namee").innerHTML = "Username must be filled out";
        valid= false;
	}
	  if (reg.Username.value.length < 6 || Username.length > 13) {
       document.getElementById("namee").innerHTML = "Username should be between 6-13 character";
        valid= false;
    }
	
	else if(reg.add.value=="" ){
		document.getElementById("adde").innerHTML = "you must fill out this field";
        valid= false;
	}
	else if(reg.date.value=="" ){
		document.getElementById("datee").innerHTML = "you must fill out this field";
        valid= false;
	}
	else if(reg.email.value=="" ){
		document.getElementById("emaile").innerHTML = "you must fill out this field";
        valid= false;
	}
	else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(reg.email.value)){
		document.getElementById("emaile").innerHTML = "this is invalide email address";
        valid= false;
	}
	else if(reg.tel.value=="" ){
		document.getElementById("tele").innerHTML = "you must fill out this field";
        valid= false;
	}
	else if(reg.fax.value=="" ){
		document.getElementById("faxe").innerHTML = "you must fill out this field";
        valid= false;
	}
	
	return valid;
}