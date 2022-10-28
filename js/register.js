function validate(){
	var field1= document.getElementById("T1");
	var field2= document.getElementById("T2");
	var field3= document.getElementById("T3");
	var field4= document.getElementById("T4");
	var field5= document.getElementById("T5");
	var field6= document.getElementById("T6");
	var field7= document.getElementById("T7");
	var field8= document.getElementById("T8");
	var checkboxs=document.getElementsByName("event[]");
	var okay=false;
	var check = false;

/*	var capital=/[A-Z]/;
	var sign='@';
	var space=' ';
	var last='.com';*/
	if(field1.value.length==0 || field2.value.length==0 || field3.value.length==0 || field4.value.length==0 || field5.value.length==0 || field6.value.length==0 || field7.value.length==0 || field8.value.length==0  )
	{
		document.getElementById("S2").innerHTML="";

		if(field1.value.length==0){
			document.getElementById("T1").style.border="1px solid red";
		}
		else{
			document.getElementById("T1").style.border="1px solid #212226";
		}
		if(field2.value.length==0){
			document.getElementById("T2").style.border="1px solid red";
		}
		else{
			document.getElementById("T2").style.border="1px solid #212226";
		}		
		if(field3.value.length==0){
			document.getElementById("T3").style.border="1px solid red";
		}
		else{
			document.getElementById("T3").style.border="1px solid #212226";
		}		
		if(field4.value.length==0){
			document.getElementById("T4").style.border="1px solid red";
		}
		else{
			document.getElementById("T4").style.border="1px solid #212226";
		}		
		if(field5.value.length==0){
			document.getElementById("T5").style.border="1px solid red";
		}
		else{
			document.getElementById("T5").style.border="1px solid #212226";
		}		
		if(field6.value.length==0){
			document.getElementById("T6").style.border="1px solid red";
		}
		else{
			document.getElementById("T6").style.border="1px solid #212226";
		}		
		if(field7.value.length==0){
			document.getElementById("T7").style.border="1px solid red";
		}
		else{
			document.getElementById("T7").style.border="1px solid #212226";
		}		
		if(field8.value.length==0){
			document.getElementById("T8").style.border="1px solid red";
		}
		else{
			document.getElementById("T8").style.border="1px solid #212226";
		}
		document.getElementById("S1").innerHTML="Error While submitting. Errors are shown in red";
		return false;
	}
	else if(field4.value.length<10){
		document.getElementById("T1").style.border="1px solid #212226";
		document.getElementById("T2").style.border="1px solid #212226";
		document.getElementById("T3").style.border="1px solid #212226";
		document.getElementById("T4").style.border="1px solid red";
		document.getElementById("T5").style.border="1px solid #212226";
		document.getElementById("T6").style.border="1px solid #212226";
		document.getElementById("T7").style.border="1px solid #212226";
		document.getElementById("T8").style.border="1px solid #212226";
		document.getElementById("S1").innerHTML="Error While submitting. Errors are shown in red";
		return false;
	}
	else{
		document.getElementById("T1").style.border="1px solid #212226";
		document.getElementById("T2").style.border="1px solid #212226";
		document.getElementById("T3").style.border="1px solid #212226";
		document.getElementById("T4").style.border="1px solid #212226";
		document.getElementById("T5").style.border="1px solid #212226";
		document.getElementById("T6").style.border="1px solid #212226";
		document.getElementById("T7").style.border="1px solid #212226";
		document.getElementById("T8").style.border="1px solid #212226";
		document.getElementById("S2").innerHTML="";

		for(var i=0,l=checkboxs.length;i<l;i++)
		{
			if(checkboxs[i].checked)
			{
				okay=true;
				break;
			}
		}
		if(okay){
			$.each($('select'),function()
			{
				if( $(this).val() != ''){  
					check=true; 
				}
				else{
					document.getElementById("S1").innerHTML="Error While submitting. Errors are shown in red";
					$('select').css("border", "1px solid red");
				}
			});
			return check;
		}
		else {

			document.getElementById("S2").innerHTML="Please select atleast one Event.";
			document.getElementById("S1").innerHTML="Error While submitting. Errors are shown in red";
			return false;
		}
	}
}