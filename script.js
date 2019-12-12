"use strict"	
	
	function f1(){
		var nameEl 	= document.getElementById('name');
		var emailEl = document.getElementById('email');
		if(nameEl.value == ""){

				var obj = document.getElementById('msg');
				obj.innerHTML = alert("provide your user name");
				return false;
				obj.style.color = "red";
			if(nameEl){
				alert("Please provide a username atleast two letters"); 
			}
		
		}
	}
	
	function f2(){
		
		var name = document.getElementById('name').value;
		document.getElementById('msg').innerHTML = name;
	}
	