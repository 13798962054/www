function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 

		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}
			if(i > 0) {     
				(function(i) {
			        rows[i].onmouseover = function() {
			            rows[i].style.backgroundColor="#ffff66"
			        }
			        rows[i].onmouseout = function() {
			        	if(i % 2 == 0){
				            rows[i].style.backgroundColor="#c3dde0"
				        }else{
				        	rows[i].style.backgroundColor="#d4e3e5"
				        }
				    }
			    })(i)
			}
		}
	}
}
 

function changeTrBackgroundColor(tr){
	console.log(tr)
}

window.onload=function(){
	altRows('alternatecolor');
}