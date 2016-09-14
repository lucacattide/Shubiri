<!--

// Cookies Login

$(document).ready(function(e) { // All'inizializzazione del documento
    
	// Dichiarazione ed Inizializzazione Variabili
	
	var user = getCookie("userShubiri"); // Cookie Nome Utente
	var pass = getCookie("passShubiri"); // Cookie Password
	
	
	// Controllo Cookies

	if ((user !== "") || (pass !== "")) { // Se i cookies non sono vuoti ed esistono
		
		// Allora assegna valori ai campi
		
		$("#login").val(user); // User
		$("#password").val(pass); // Password
		
	} else { // Altrimenti settali
		
		$("#login_cms").on("click tap", function() { // Al click sul pulsante login
		
			setCookie("userShubiri", $("#login").val(), 31557600000);
			setCookie("passShubiri", $("#password").val(), 31557600000);
		
		});
		
	}
	
});


// Cookies Setter

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}


// Cookies Getter

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

//-->