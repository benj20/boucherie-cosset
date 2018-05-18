$(function(){

  $('#accueil a:contains("Accueil")').parent().addClass('active');
  $('#partenaires a:contains("Partenaires")').parent().addClass('active');
  $('#offres a:contains("Nos offres")').parent().addClass('active');
  $('#actualite a:contains("Fil d\'actualité")').parent().addClass('active');
  $('#contact a:contains("Contact")').parent().addClass('active');


  var userAgent = navigator.userAgent || navigator.vendor || window.opera;
	if (userAgent.match(/Android/i)) {
		$('footer .lien-facebook').attr("href", "fb://page/271319869734998");
  }

});
