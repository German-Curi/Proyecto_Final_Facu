<?php

// models/Facturas.php

class Facturas extends Model {
	
	public function getFacturas() {
		$this->db->query("	SELECT f.Serie_Factura, f.Numero_Factura, f.Fecha, f.Forma_Pago,t.Marca,t.Num_Tarjeta, f.monto_total, a.Nombre, a.Apellido, c.Nombre AS 'Curso'
							FROM facturas as f
							LEFT JOIN alumnos as a ON
							a.ID_Alumno = f.ID_Alumno
							LEFT JOIN detalle_facturas as df ON
							df.Numero_Factura = f.Numero_Factura
							LEFT JOIN inscripciones as i ON
							i.ID_Inscripciones = df.ID_Inscripciones
							LEFT join cursos AS c ON
							c.ID_Curso = i.ID_Curso
							LEFT JOIN tarjetas as t ON
							t.ID_tarjeta = f.ID_tarjeta");
		return $this->db->fetchAll();
	}

	public function NumeroFactura() {
		$this->db->query("SELECT MAX(Numero_Factura) as Numero_Factura
						FROM facturas");
		return $this->db->fetchAll();
	}

	public function DarAltaFacturaEfectivo($id,$SerieFactura,$NumeroFactura,$FormaPago,$montototal){

		if(!isset($id)) throw new validacionExceptionAlum('error ID 1');
		if(!ctype_digit($id)) throw new validacionExceptionAlum('error ID 2');
		if($id < 1) throw new validacionExceptionAlum('error ID 3');

		//valido Serie factura
		if(!isset($SerieFactura)) throw new validacionExceptionFac('error SerieFacutura 1');
		if( $SerieFactura != 'A' && $SerieFactura != 'B' && $SerieFactura != 'C' ) throw new validacionExceptionFac('error SerieFacutura 2');
		$sf = $SerieFactura;

		//valido Numero factura.
		if(!isset($NumeroFactura)) throw new validacionExceptionFac('error NumeroFacutura 1');
		if(!ctype_digit($NumeroFactura)) throw new validacionExceptionFac('error NumeroFacutura 2');
		if($NumeroFactura < 1) throw new validacionExceptionFac('error NumeroFacutura 3');
		$nf = $NumeroFactura;

		//valido forma de pago.
		if(!isset($FormaPago)) throw new validacionExceptionFac('error FormaPago 1');
		if($FormaPago != 'Efectivo') throw new validacionExceptionFac('error FormaPago 2');
		$fp = $FormaPago;

		//valido monto.
		if(!isset($montototal)) throw new validacionExceptionFac('error Monto 1');
		if(!is_numeric($montototal)) throw new validacionExceptionFac('error Monto 2');
		$m = $montototal;


		$this->db->query("	INSERT INTO facturas
									(Serie_Factura,Numero_Factura,Fecha,ID_Alumno,Forma_Pago,monto_total) VALUES
									( '$sf', $nf , NOW() ,'$id' , '$fp' , '$m')
						");

		$this->db->query("	INSERT INTO detalle_facturas
							(Serie_Factura,Numero_Factura,ID_Inscripciones) VALUES
							('$sf',$nf,(SELECT MAX(ID_Inscripciones) 
										FROM inscripciones))
						");



	}


		public function DarAltaFacturaTarjeta($id,$SerieFactura,$NumeroFactura,$TipoTarjeta,$NumeroTarjeta,$montototal){

		if(!isset($id)) throw new validacionExceptionAlum('error ID 1');
		if(!ctype_digit($id)) throw new validacionExceptionAlum('error ID 2');
		if($id < 1) throw new validacionExceptionAlum('error ID 3');

		//valido Serie factura
		if(!isset($SerieFactura)) throw new validacionExceptionFac('error SerieFacutura 1');
		if( $SerieFactura != 'A' && $SerieFactura != 'B' && $SerieFactura != 'C' ) throw new validacionExceptionFac('error SerieFacutura 2');
		$sf = $SerieFactura;

		//valido Numero factura
		if(!isset($NumeroFactura)) throw new validacionExceptionFac('error NumeroFacutura 1');
		if(!ctype_digit($NumeroFactura)) throw new validacionExceptionFac('error NumeroFacutura 2');
		if($NumeroFactura < 1) throw new validacionExceptionFac('error NumeroFacutura 3');
		$nf = $NumeroFactura;

		//validar tipo de tarjeta.
		if(!isset($TipoTarjeta)) throw new validacionExceptionFac('error TipoTarjeta 1');
		if($TipoTarjeta != 'Visa' && $TipoTarjeta != 'Mastercard' ) throw new validacionExceptionFac('error TipoTarjeta 2');
		$tt = $TipoTarjeta;

		//validar numero de tarjeta.
		if(!isset($NumeroTarjeta)) throw new validacionExceptionFac('error NumeroTarjeta 1');
		if(!ctype_digit($NumeroTarjeta)) throw new validacionExceptionFac('error NumeroTarjeta 2');
		$nt = $NumeroTarjeta;

		//valido monto.
		if(!isset($montototal)) throw new validacionExceptionFac('error Monto 1');
		if(!is_numeric($montototal)) throw new validacionExceptionFac('error Monto 2');
		$m = $montototal;

		$a=$this->db->query("	INSERT INTO tarjetas
									(Marca,Num_Tarjeta)
							 VALUES
									('$tt', '$nt' )
						");

		$ulti = $this->db->insertId($a);

		$this->db->query("	INSERT INTO facturas
									(Serie_Factura,Numero_Factura,Fecha,ID_Alumno,Forma_Pago,ID_tarjeta,monto_total) VALUES
									('$sf', $nf , NOW() , '$id' , 'Tarjeta' , $ulti , '$m' )
						");

		$this->db->query("	INSERT INTO detalle_facturas
							(Serie_Factura,Numero_Factura,ID_Inscripciones) VALUES
							('$SerieFactura',$NumeroFactura,(SELECT MAX(ID_Inscripciones) 
															FROM inscripciones))
						");

		}

}

class validacionExceptionFac extends Exception {}

?>