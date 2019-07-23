function escapeOutput(toOutput){
  return toOutput.replace(/\&/g, '&amp;')
      .replace(/\</g, '&lt;')
      .replace(/\>/g, '&gt;')
      .replace(/\"/g, '&quot;')
      .replace(/\'/g, '&#x27')
      .replace(/\//g, '&#x2F');
}
function validateForm() {
    var message="";
    var email = document.forms["myForm"]["email"].value;
      
    var psw = document.forms["myForm"]["psw"].value;
    var pswrepeat=document.forms["myForm"]["pswrepeat"].value;
    var mySelect = document.getElementById("mySelect").value;
    var secret_question = document.getElementById("secret_question").value;

    var answer = document.forms["myForm"]["answer"].value;

    var test =escapeOutput(answer);
         alert(test);
    if (email == "") {
      
      message+="\n email must be filled out";
    } if (psw == "") {
      
        message+="\n password  must be filled out";
      }if (pswrepeat != psw) {
        message+="\n password didn't match ";

      }if (pswrepeat == "") {
      
        message+="\n password repeat  must be filled out";
      }if (mySelect == "Please select") {
      
        message+="\n Please  select user type [....  Employee , Manger , assis manager , HR .. ]"  ;
      }if (secret_question == "Please select") {
      
        message+="\n Please  chose a secret quiston ]"  ;
      }


if(message.length>0){

    alert(message);
return false ;
}else
{
    return true ;
}


  }
  