function showName(str) {
    if (str.lengt == 0) { // exit if nothing typed
        document.getElementById("txtname").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest) { // code for newer browsers
        xmlhttp= new XMLHttpRequest();
    }
    else { // for older
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { // if response
            document.getElementById("txtName").innerHTML=xmlhttp.responseText; // fill response in txtName
        }
    }

    xmlhttp.open("GET","frameworks.php?name="+str,true); //make GET Request to frameworks.php
    xmlhttp.send();
}