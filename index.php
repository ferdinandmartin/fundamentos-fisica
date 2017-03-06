<?php
/*
* Fundamentos de la física
*/

class Dinamica
{
	// Cantidad de materia de un cuerpo. (Cantidad escalar)
	private static $masa;

	// Fuerza con la cual un cuerpo actua sobre un punto de apoyo originado por la aceleración de la gravedad. (Cantidad vectorial)
	private static $peso;


	public function fuerza($magnitud, $direccion, $sentido, $puntoDeAplicacion)
	{
		// POR CADA DIRECCIÓN SE APLICAN DOS SENTIDOS
		foreach ($direccion as $key => $valorDireccion) {
			// Fuerzas/Magnitud positivas en sentido
			$sentido = abs($magnitud);
			// Fuerzas/Magnitud negativas en sentido opuesto
			$sentidoOpuesto = -1 * abs($magnitud);
		}
	}
}

class LeyesNewton
{
	public function LeyDeLaInercia()
	{
	   /*
		* Todo cuerpo persevera en su estado de reposo o movimiento uniforme y rectilíneo a no ser que sea obligado a cambiar su estado por fuerzas impresas sobre él
		*/
		Dinamica::fuerza($magnitud, $direccion, $sentido, $puntoDeAplicacion);
	}

	public function LeyDeFuerza()
	{
	   /*
	    * El cambio de movimiento es proporcional a la fuerza motriz impresa y ocurre según la línea recta a lo largo de la cual aquella fuerza se imprime.
	    */
	   Dinamica::fuerza($magnitud, $direccion, $sentido, $puntoDeAplicacion);
	}

	public function leyDeAccionYReaccion()
	{
	   /*
	    *  Con toda acción ocurre siempre una reacción igual y contraria: o sea, las acciones mutuas de dos cuerpos siempre son iguales y dirigidas en sentido opuesto.
	    */
	   Dinamica::fuerza($magnitud, $direccion, $sentido, $puntoDeAplicacion);
	}
}


class ParticulasFundamentales
{

	private static $simbolo;
	private static $masa;
	private static $cargaElectrica;
	private static $espin;
	private static $interaccion;
	private static $cargaDebil;
	private static $cargaColor;

	// BOSONES

	public function Foton()
	{
		self::$simbolo = "Y";
		self::$masa = 0; // En GeV/c2
		self::$cargaElectrica = 0;
		self::$espin = 1;
		self::$interaccion = "electromagnética";

		return true;
	}

	public function BosonW()
	{
		self::$simbolo = "W±";
		self::$masa = 80.4; // En GeV/c2
		self::$cargaElectrica = "±1";
		self::$espin = 1;
		self::$interaccion = "débil";

		return true;
	}

	public function BosonZ()
	{
		self::$simbolo = "Z0";
		self::$masa = 91.187; // En GeV/c2
		self::$cargaElectrica = 0;
		self::$espin = 1;
		self::$interaccion = "débil";

		return true;
	}

	public function Gluon()
	{
		self::$simbolo = "g";
		self::$masa = 0; // En GeV/c2
		self::$cargaElectrica = 0;
		self::$espin = 1;
		self::$interaccion = "fuerte";

		return true;
	}

	// FIN BOSONES


	// FERMIONES 
	// LEPTON

	public function Electron()
	{
		self::$simbolo = "e-";
		self::$masa = 0.511; // En MeV/c2
		self::$cargaElectrica = "-1";
		self::$cargaDebil = "-1/2";
		self::$cargaColor = "0";

		return true;
	}

	public function Muon()
	{
		self::$simbolo = "u-";
		self::$masa = 105.6; // En MeV/c2
		self::$cargaElectrica = "-1";
		self::$cargaDebil = "-1/2";
		self::$cargaColor = "0";

		return true;
	}

	public function Tauon()
	{
		self::$simbolo = "T-";
		self::$masa = 1.784; // En GeV/c2
		self::$cargaElectrica = "-1";
		self::$cargaDebil = "-1/2";
		self::$cargaColor = "0";

		return true;
	}

	public function NeutrinoElectronico()
	{
		self::$simbolo = "Ve";
		self::$masa ="<50"; // En eV/c2
		self::$cargaElectrica = "0";
		self::$cargaDebil = "+1/2";
		self::$cargaColor = "0";

		return true;
	}

	public function NeutrinoMuonico()
	{
		self::$simbolo = "Vu";
		self::$masa = "<0.5"; // En MeV/c2
		self::$cargaElectrica = "0";
		self::$cargaDebil = "+1/2";
		self::$cargaColor = "0";

		return true;
	}

	public function NeutrinoTauonico()
	{
		self::$simbolo = "VT";
		self::$masa = "<70"; // En MeV/c2
		self::$cargaElectrica = "0";
		self::$cargaDebil = "+1/2";
		self::$cargaColor = "0";

		return true;
	}

	// FIN LEPTON

	// QUARKS

	public function Up()
	{
		self::$simbolo = "u";
		self::$masa = "~5"; // En MeV/c2
		self::$cargaElectrica = "+2/3";
		self::$cargaDebil = "+1/2";
		self::$cargaColor = "R/G/B";

		return true;
	}

	public function Charm()
	{
		self::$simbolo = "c";
		self::$masa = "~1.5"; // En GeV/c2
		self::$cargaElectrica = "+2/3";
		self::$cargaDebil = "+1/2";
		self::$cargaColor = "R/G/B";

		return true;
	}

	public function Top()
	{
		self::$simbolo = "t";
		self::$masa = ">30"; // En GeV/c2
		self::$cargaElectrica = "+2/3";
		self::$cargaDebil = "+1/2";
		self::$cargaColor = "R/G/B";

		return true;
	}


	public function Down()
	{
		self::$simbolo = "d";
		self::$masa = "~10"; // En MeV/c2
		self::$cargaElectrica = "-1/3";
		self::$cargaDebil = "-1/2";
		self::$cargaColor = "R/G/B";

		return true;
	}

	public function Strange()
	{
		self::$simbolo = "s";
		self::$masa = "~100"; // En MeV/c2
		self::$cargaElectrica = "-1/3";
		self::$cargaDebil = "-1/2";
		self::$cargaColor = "R/G/B";

		return true;
	}

	public function Bottom()
	{
		self::$simbolo = "s";
		self::$masa = "~4,7"; // En GeV/c2
		self::$cargaElectrica = "-1/3";
		self::$cargaDebil = "-1/2";
		self::$cargaColor = "R/G/B";

		return true;
	}


	// FIN QUARKS

	// FIN FERMIONES 

	public function ObtenerSimbolo(){
		return self::$simbolo;
	}
	public function ObtenerMasa(){
		return self::$masa;
	}
	public function ObtenerCargaElectrica(){
		return self::$cargaElectrica;
	}
	public function ObtenerEspin(){
		return self::$espin;
	}
	public function ObtenerInteraccion(){
		return self::$interaccion;
	}
	public function ObtenerCargaDebil(){
		return self::$cargaDebil;
	}
	public function ObtenerCargaColor(){
		return self::$cargaColor;
	}
}


ParticulasFundamentales::Gluon();
echo "Gluón<br>";
echo "Simbolo: ".ParticulasFundamentales::ObtenerSimbolo()."<br>";
echo "Interacción: ".ParticulasFundamentales::ObtenerInteraccion();
echo "<br>Electrón<br>";
ParticulasFundamentales::Electron();
echo "Simbolo: ".ParticulasFundamentales::ObtenerSimbolo()."<br>";
echo "Carga Débil: ".ParticulasFundamentales::ObtenerCargaDebil()."<br>";
