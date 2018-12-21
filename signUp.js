``
function foo(){
  var f = document.getElementsByTagName('form')[0];

  if(f.checkValidity()) {
    //checking if password and check password are the same
    registerUser(f);
  }
  else {
    alert("Make sure to fill all the fields");
  }


}

//to make sure phone number entered is only number
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

function registerUser(f){
  var selected = "";
  if(document.getElementById("csi").checked){
    selected+= "CSI";
  }

  if(document.getElementById("ieee").checked){
    if (selected.length>0){
      selected+=", ";
    }
    selected+= "IEEE";
  }
  if(document.getElementById("lcc").checked){
    if (selected.length>0){
      selected+=", ";
    }
    selected+= "LCC";
  }
  if(document.getElementById("jced").checked){
    if (selected.length>0){
      selected+=", ";
    }
    selected+= "JCED";
  }
  var fname = document.getElementById('fname').value;
  var lname = document.getElementById('lname').value;
  var usn = document.getElementById('usn').value;
  var phone = document.getElementById('phone').value;
      console.log(phone);
  var dept = document.getElementById("dept").value;
      console.log(dept);
  var sem = document.getElementById('sem').value;
  var pwd = document.getElementById("pwd").value;
  var clubs = selected;
  $.post("registerUser.inc.php",
      {
        fname: fname,
        lname: lname,
        usn : usn,
        phone: phone,
        dept: dept,
        sem: sem,
        clubs: clubs,
        pwd: pwd
      },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
      });


}
