// Initialize Firebase
const firebase = require("firebase");
require("firebase/firestore");
  var config =
  {
    apiKey: "AIzaSyDfMv0FVfPsmazci8zFx5wkc8I7P_lBxgI",
    authDomain: "modmeds-2549b.firebaseapp.com",
    databaseURL: "https://modmeds-2549b.firebaseio.com",
    projectId: "modmeds-2549b",
    storageBucket: "modmeds-2549b.appspot.com",
    messagingSenderId: "594307993950"
  };
  firebase.initializeApp(config);
  var firestore=firebase.firestore();
	var output=document.doc("ModMeds/Prescription");

//listen for form submit
	document.getElememtById('contactForm').addEventListener('submit',submitForm);
	function submitForm(e)
{
	e.preventDefault();
		//getting values
		var Prescription_no=getInputVal('presid');
		var DoctorName=getInputVal('dname');
		var p_age=getInputVal('age');
		var Patient_ID=getInputVal('pkey');
    var disease_desc=getInputVal('describe');
    var medicine=getInputVal('medicine');
    var dosage=getInputVal('dosages')
		//Saving the data
		saveMessage(Prescription_no,DoctorName,p_age,Patient_ID,disease_desc,medicine,dosage);
}
function getInputVal(id)
{
	return document.getElememtById(id).value;
}

//Save message to firebase
function saveMessage(Prescription_no,DoctorName,p_age,Patient_ID,disease_desc,medicine,dosage)
{
	output.set
	(
	{
			Doctor_Name:DoctorName,
      Dosage:dosage,
      Medicine_1:medicine,
      Patient_ID:Patient_ID,
      Prescription_no:Prescription_no,
      disease:disease_desc

	}
);
}
