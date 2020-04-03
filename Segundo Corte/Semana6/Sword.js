var numeroAtaques = 0;
var tablaMagica = [{Magia: 'Fire', Damage: 200, Nivel1: 20, Nivel2: 30, Nivel3: 50},
	{Magia: 'Water', Damage: 300, Nivel1: 10, Nivel2: 25, Nivel3: 40},
 	{Magia: 'Earth', Damage: 400, Nivel1: 25, Nivel2: 55, Nivel3: 70},
	{Magia: 'Air', Damage: 100, Nivel1: 18, Nivel2: 38, Nivel3: 46}]

$(document).ready(function() {

	$('#btnContinuar').click(function () {
		numeroAtaques = $('#AtaquesInput').val();

		$('#Ataques').hide();


		for (var i = 0; i < numeroAtaques; i++) {
			$('#FormularioAtaque').append('Alto del área del ejercito: <input type="number" id="EjercitoAl'+i+'" value="">		<br>'+
				'Ancho del área del ejercito: <input type="number" id="EjercitoAn'+i+'" value="">		<br>'+
				'Coordenada Y del punto incio del ejercito : <input type="number" id="YEjercito'+i+'" value="">		<br>'+
				'Coordenada X del punto incio del ejercito : <input type="number" id="XEjercito'+i+'" value="">		<br>'+
				'Tipo de magia: <select class="" id="TipoMagia'+i+'">'+
					'<option value="Fire">Fuego</option>'+
					'<option value="Air">Aire</option>'+
					'<option value="Earth">Tierra</option>'+
					'<option value="Water">Agua</option>'+
				'</select>'+
				' Nivel: '+
				'<select id="level'+i+'">'+
				  '<option value="1">1</option>'+
				  '<option value="2">2</option>'+
				  '<option value="3">3</option>'+
				'</select>'+
				'<br>'+
				'Coordenada en X donde se lanzará el ataque: <input type="number" id="AtaqueX'+i+'" value="">'+
				'<br>'+
				'Coordenada en Y donde se lanzará el ataque: <input type="number" id="AtaqueY'+i+'" value="">'+
				'<br>'+
				'<button type="button" onclick=calcularDaño('+i+')>Calcular daño</button>'+'<span id= "Resultado'+i+'"></span>'+
				'<br>'+
			'---------------------------------------------------------------------------------------------'+
			'<br>'

			);
		}
	});


});

function calcularDaño(numeroItereacion) {

	 var ejercitoAl = parseInt($('#EjercitoAl'+numeroItereacion).val());
	 var ejercitoAn = parseInt($('#EjercitoAn'+numeroItereacion).val());
	 var yEjercito = parseInt($('#YEjercito'+numeroItereacion).val());
	 var xEjercito = parseInt($('#XEjercito'+numeroItereacion).val());
	 var ataqueY = parseInt($('#AtaqueY'+numeroItereacion).val());
	 var ataqueX = parseInt($('#AtaqueX'+numeroItereacion).val());
	 var magia = $('#TipoMagia'+numeroItereacion).val();
	 var nivel = parseInt($('#level'+numeroItereacion).val());
	 var maxYEjercito = yEjercito + ejercitoAl;
	 var maxXEjercito = xEjercito + ejercitoAn;
	 var radio;
	 switch (nivel) {
	 	case 1:
			radio = tablaMagica.find(m=>m.Magia===magia).Nivel1;
	 		break;
		case 2:
			radio = tablaMagica.find(m=>m.Magia===magia).Nivel2;
		 	break;
		case 3:
			radio = tablaMagica.find(m=>m.Magia===magia).Nivel3;
			 break;

	 	default:

	 }
	 var minXSpell = ataqueX - radio;
	 var maxXspell = ataqueX + radio;
	 var minYspell = ataqueY - radio;
	 var maxYspell = ataqueY + radio;
	 if ((minXSpell <= maxXEjercito && minXSpell >= xEjercito) ||  (maxXspell  <= maxXEjercito && maxXspell >= xEjercito)
	 	|| (ataqueX >= maxXEjercito && ataqueX <= xEjercito) && ataqueY > yEjercito && ataqueY < maxYEjercito )

	{
		 $('#Resultado'+numeroItereacion).text(tablaMagica.find(m=>m.Magia===magia).Damage.toString());
		 return;

	 }

	 if ((minYspell <= maxYEjercito && minYspell >= yEjercito) ||  (maxYspell  <= maxYEjercito && maxYspell >= yEjercito)
	 	|| (ataqueY >= maxYEjercito && ataqueY <= yEjercito) && ataqueX > xEjercito && ataqueX < maxXEjercito )

	{
		 $('#Resultado'+numeroItereacion).text(tablaMagica.find(m=>m.Magia===magia).Damage.toString());
		 return;

	 }

	 $('#Resultado'+numeroItereacion).text('0');

}
