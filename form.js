/*******************************************************************
* Most of this code is just downloaded from github.  I did, however
* modify the code a little (I removed a piece that requires an
* email address), I added a "myValidator" function to validate
* the form data, and I added some event listeners.
*******************************************************************/
function validEmail(email) { // see:
  var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return re.test(email);
}

function validateHuman(honeypot) {
  if (honeypot) {  //if hidden form filled up
    console.log("Robot Detected!");
    return true;
  } else {
    console.log("Welcome Human!");
  }
}

// get all data in form and return object
function getFormData() {
  var form = document.getElementById("gform");
  var elements = form.elements; // all form elements
  var fields = Object.keys(elements).map(function(k) {
    if(elements[k].name !== undefined) {
      return elements[k].name;
    // special case for Edge's html collection
    }else if(elements[k].length > 0){
      return elements[k].item(0).name;
    }
  }).filter(function(item, pos, self) {
    return self.indexOf(item) == pos && item;
  });
  var data = {};
  fields.forEach(function(k){
    data[k] = elements[k].value;
    var str = ""; // declare empty string outside of loop to allow
                  // it to be appended to for each item in the loop
    if(elements[k].type === "checkbox"){ // special case for Edge's html collection
      str = str + elements[k].checked + ", "; // take the string and append 
                                              // the current checked value to 
                                              // the end of it, along with 
                                              // a comma and a space
      data[k] = str.slice(0, -2); // remove the last comma and space 
                                  // from the  string to make the output 
                                  // prettier in the spreadsheet
    }else if(elements[k].length){
      for(var i = 0; i < elements[k].length; i++){
        if(elements[k].item(i).checked){
          str = str + elements[k].item(i).value + ", "; // same as above
          data[k] = str.slice(0, -2);
        }
      }
    }
  });

  // add form-specific values into the data
  data.formDataNameOrder = JSON.stringify(fields);
  data.formGoogleSheetName = form.dataset.sheet || "responses"; // default sheet name
  data.formGoogleSendEmail = form.dataset.email || ""; // no email by default

  console.log(data);
  return data;
}

function handleFormSubmit(event) {  // handles form submit withtout any jquery
  event.preventDefault();           // we are submitting via xhr below
  var data = getFormData();         // get the values submitted in the form

  /* OPTION: Remove this comment to enable SPAM prevention, see README.md
  if (validateHuman(data.honeypot)) {  //if form is filled, form will not be submitted
    return false;
  }
  */

  var url = event.target.action;  //
  var xhr = new XMLHttpRequest();
  xhr.open('POST', url);
  // xhr.withCredentials = true;
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
      console.log( xhr.status, xhr.statusText )
      console.log(xhr.responseText);
      document.getElementById('gform').style.display = 'none'; // hide form
	  document.getElementById('instructions').style.display = 'none';
      document.getElementById('thankyou_message').style.display = 'block';
      return;
  };
  // url encode form data for sending as post data
  var encoded = Object.keys(data).map(function(k) {
      return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&')
  xhr.send(encoded);
}
/**********************************************************************
* This is a function that I wrote to validate form data before passing
* action back to the code that I got from github.
***********************************************************************/
function myValidator(event) {
	event.preventDefault();		
	var valid = true,
		name = document.forms["gform"]["name"].value,
		name_match = /^[A-Za-z]+[ ]*[A-Za-z]*[ ]*[A-Za-z]*$/,
		address = document.forms["gform"]["address"].value,
		address_match = /^\d+[ ](\w+( \w+\.?|-\w+\.?)*)+$/,
		zip = document.forms["gform"]["zip"].value,
		zip_match = /^\d{5}([-]\d{4})?$/,
		phone = document.forms["gform"]["phone"].value,
		phone_match = /^[(]\d{3}[)]\d{3}-\d{4}$/,
		email = document.forms["gform"]["email"].value,
		contact = document.forms["gform"]["contact"].value,
		time = [
			document.forms["gform"]["morning"].checked,
			document.forms["gform"]["evening"].checked,
			document.forms["gform"]["night"].checked
		],
		reason = document.forms["gform"]["reason"].value,
		details = document.forms["gform"]["details"].value;
	if(!zip_match.test(zip) && zip !== ""){
		alert("The zipcode is not in a proper format. " +
			"The zipcode should be in the format 88888 or " +
			"88888-8888. Please, try again.");
		valid = false;
	}
	if(!phone_match.test(phone) && phone !== "" && valid){
		alert("The phone number is not in the proper format. " +
			"The phone number should be in the format (888)888-8888." +
			" Please, try again.");
		valid = false;
	}
	if(!validEmail(email) && email !== "" & valid){
		alert("The e-mail is not in a proper format.  Please, check " +
			"and try again.");
		valid = false;
	}
	if(name === "" && valid){
		valid = confirm("Although the name is not required, it is " +
			"recommended that you include at least a nick name. " +
			"Click CANCEL if you would like to return to the form " +
			"and add a name.");
	}
	if(!name_match.test(name) && valid && name !== ""){
		valid = confirm("Your name is not in a regular format. " +
			"Click OK if " + name + " is correct.");
	}
	if(!address_match.test(address) && valid && address !== ""){
		valid = confirm("Your address is not in a regular format. " +
			"Click OK if " + address + " is correct.");
	}
	if(contact === "" && valid){
		valid = confirm("Click CANCEL if you'd like to select " +
		"a preffered contact method.");
	}
	if(time.every(function(bool) {return bool === false;}) && valid){
		valid = confirm("Click CANCEL if you would like to select a " +
		"preferred contact time.");
	}
	if(details === "" && valid){
		switch (reason){
			case "offer":
				valid = confirm("Awesome!  I'd love to know some " +
					"details about his offer. Click OK if you really " +
					"need me to reach out to you to get them.");
				break;
			case "comment":
			case "question":
				valid = confirm("Just so you know, I'm much more likely " +
					"to get back to you if you'd give me some details. " +
					"Click CANCEL if you'd like to add some.");
				break;
			case "other":
				valid = confirm("Click CANCEL and add some details, unless " +
					"you have contacted me previously.");
				break;
		}
	}
		
	if(valid){
		handleFormSubmit(event);
	}
}
function loaded() {
  console.log('contact form submission handler loaded successfully');
  // bind to the submit event of our form
  var form = document.getElementById('gform');
  form.addEventListener("submit", myValidator, false);
};
document.addEventListener('DOMContentLoaded', loaded, false);
/***********************************************************************
* Here's some code that I wrote to make it easier for the user to enter
* numbers in the proper format.
************************************************************************/
var phone = document.getElementById("phone"),
	bckspace = false;
phone.addEventListener("keydown", function(event) {
	bckspace = (event.key === "Backspace");
});
phone.addEventListener("input", function(event) {
    var matches = [
    	/^[(]\d{3}[)]\d{3}-\d{0,4}$/,
        /^[(]\d{3}[)]\d{0,3}$/,
        /^[(]\d{0,3}$/,
        /^\d{0,3}$/,
        /^[(]\d{3}([)]{2})?$/,
        /^[(]\d{3}[)]\d{3}(-{2})?$/,
        /^\d{10}$/,
        /^\d{3}-\d{3}-\d{4}$/
    	],
    	text = document.getElementById("phone_warning");	
    if(bckspace){
    } else if(matches[3].test(phone.value)){
    	phone.value = "(" + phone.value;
    } else if(matches[4].test(phone.value)){
    	phone.value = (phone.value).substr(0,4) + ")";
    } else if (matches[5].test(phone.value)){
    	phone.value = (phone.value).substr(0,8) + "-";
    } else if (matches[6].test(phone.value)){
    	phone.value = "(" + phone.value.substr(0,3) + ")" +
        	phone.value.substr(3,3) + "-" + phone.value.substr(6);
    } else if (matches[7].test(phone.value)){
    	phone.value = "(" + phone.value.substr(0,3) + ")" + 
        	phone.value.substr(4);
    }
    text.style.display = "inline";
    for (var i = 0; i < 3; i++){
       	if(matches[i].test(phone.value)){
           	text.style.display = "none";
       	}
    }
	if(phone.value === ""){
		text.style.display = "none";
	}
});