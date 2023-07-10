const form = document.querySelector('form') ;

// imc : 

var imc = function (resultat) {

	if(resultat < 18.5) {
		return"insuffisance pondérale (maigreur)";
	}
	else if(18.5 <= resultat && resultat <= 24.9) {
		return "poids normal" ;
	}
	else if(25 <= resultat && resultat <= 29.9) {
		return"surpoids" ;
	}
	else if(30 <= resultat && resultat <= 34.9) {
		return "Obésité moderée" ;
	}
	else if(35 <= resultat && resultat <= 39.9) {
		return "Obésité sévère" ;
	}
	else if(40 <= resultat ) {
		return "Obésité massive" ;
	}

}

// calcul :

var calcul = function (poids , taille) {
	const res = poids / Math.pow(taille,2) ;
	return res ;
}

// function valider :
// e : event / e.preventDefault()

var valider = function(e) {
	e.preventDefault() ;
	
	var resultat ,valueOfImc;

	var poids = document.querySelector('.poids').value ;
	var taille = document.querySelector('.taille').value ;
	var affichage1 = document.querySelector('.res') ;
	var affichage2 = document.querySelector('p') ;

	// verfication champ input :

	if(poids && taille) {
		
		poids = parseFloat(poids) ;
		taille = parseFloat(taille) ;

		if(poids && taille) {
			
			// calcul :
			resultat = calcul(poids,taille) ;

			resultat = resultat.toFixed(2);

			// condition : 

			valueOfImc =  imc(resultat)

			// affichage : 
			affichage1.textContent = resultat ;

			affichage2.textContent = valueOfImc ;

			this.reset() ;
		}
		else {
			alert('Ce \' est pas un nombre') ;
		}
	}
	else {
		alert('Veuillez entrer des données') ;
	}



}

form.addEventListener('submit' , valider) ;


