
function validateForm() {
 //alert("Hello! I am an alert box!!");  
 var car_plate = document.getElementById("car_info").value; 
  var car_status = document.getElementById("car_status").value; 
    var period = document.getElementById("period").value;
 var fuel = document.getElementById("fuel").value;
var name_of_Trainer= document.getElementById("Name_of_Trainer").value;	
 
 var errorMassage="";
 if(car_plate=="الرجاء الاختيار") {
	 
	errorMassage+="\nفضلا اختر السيارة"; 
 
  }

   if(car_status=="الرجاء الاختيار") {
	 
	errorMassage+="\nفضلا اختر حالة السيارة"; 
 
  } if(period=="الرجاء الاختيار") {
	 
	errorMassage+="\n الرجاء اختيار الفترة"; 
 
  }if(fuel=="الرجاء الاختيار") {
	 
	errorMassage+="\n  الرجاء اختيار نوع البنزين"; 
 
  }if(name_of_Trainer.length<=0) {
	 
	errorMassage+="\n  الرجاء ادخال اسم المدربة"; 
 
  }if(typeof name_of_Trainer != 'string') {
	 
	errorMassage+="\n  اسم المدربة يجب ان يكون حرفي"; 
 
  }
  
  


  if(errorMassage.length>0){

    alert(errorMassage);
return false ;
}else
{
    return true ;
}
  
  
  }