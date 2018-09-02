// Initialize Firebase
// Initialize Firebase
  var config = {
    apiKey: "AIzaSyDfMv0FVfPsmazci8zFx5wkc8I7P_lBxgI",
    authDomain: "modmeds-2549b.firebaseapp.com",
    databaseURL: "https://modmeds-2549b.firebaseio.com",
    projectId: "modmeds-2549b",
    storageBucket: "modmeds-2549b.appspot.com",
    messagingSenderId: "594307993950"
  };
  firebase.initializeApp(config);

//referance messages collection
	var messagesRef=firebase.database().ref('messages');

//listen for form submit
	document.getElememtById('success').addEventListener('sendPrescriptionButton',submitForm);
	function submitForm(e)
{
	e.preventDefault();
		//getting values
		var patient_name=getInputVal('name');
		var age=getInputVal('age');
		var prescription_id=getInputVal('presid');
		var medicine=getInputVal('medicine');
		var dosage=getInputVal('dosages');
		//Saving the data
		saveMessage(patient_name,age,prescription_id,medicine,dosage);
}
function getInputVal(id)
{
	return document.getElememtById(id).value;
}

//Save message to firebase
function saveMessage(patient_name,age,prescription_id,medicine,dosage)
{
	var newMessageRef=messagesRef.push();
	newMessageRef.set
	(
	{
			patient_name: patient_name,
			age: age,
			prescription_id: prescription_id,
			medicine: medicine,
			dosage: dosage

	}
		)
}