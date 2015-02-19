function buscar(){
	var texto = document.getElementById('buscartxt').value;
	//if(texto==""){alert("Captura algo que buscar.");return false;}
	
	if(window.XMLHttpRequest){// codigo for IE7+, Firefox, Chrome, Opera, Safari
                //alert('no iexplorer');
	            xmlhttp=new XMLHttpRequest();
            }else{// codigo for IE6, IE5
                //alert('iexplorer');
    	        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }

        	xmlhttp.open("POST","logic.php",true);
            
            xmlhttp.onreadystatechange=function(){
            
            //alert(xmlhttp.status);
			//alert(xmlhttp.readyState);
            
            if(xmlhttp.readyState==4 && xmlhttp.status==200){//alert('in');
            document.getElementById("rs").innerHTML=xmlhttp.responseText;
            }
            }

            xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            xmlhttp.send("obj=0&bt="+texto);
            
}