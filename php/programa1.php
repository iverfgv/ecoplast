<?php

	interface Automovil
	{
		public function encender();
		public function apagar();
	}

	interface  gasolina extends Automovil
	{
		public function llenarTanque($cant);
		public function vaciarTanque();
	}

	class Deportivo implements gasolina
	{
		private $estado=false;
		private $tanque=0;

		public function encender()
		{
			if($this->estado)
			{
				print "No puede encender el auto 2 veces<br>";
			}

			else
			{
				if($this->tanque<=0)
				{
					print "El tanque esta vacio no se puede prender el auto<br>";
				}
				else
				{
					print "Auto encendido<br>";
					$this->estado=true;
				}
			}
		}

		public function apagar()
		{
			if($this->estado)
			{
				print "Auto apagado<br>";
				$this->estado=false;
			}

			else
			{
				print "El auto ya esta apagado<br>";
			}
		}

		public function llenarTanque($cant)
		{
			$this->tanque=$cant;
		}

		public function vaciarTanque()
		{
			$this->tanque=0;
		}

		public function estado()
		{
			if($this->estado)
			{
				print "El auto esta encendido y tiene ".$this->tanque." de litros en el tanque.<br>";
			}

			else
			{
				print "el auto esa apagado";
			}
		}

		public function usar($km)
		{
			if($this->estado)
			{
				$reducir=$km/3;
				$this->tanque=$this->tanque-$reducir;
				if($this->tanque<=0)
				{
					$this->estado=false;
				}
			}

			else
			{
				echo "El auto esta apagado y no se pued usar<br>";
			}

		}
	}


	$obj = new Deportivo();
	$obj->llenarTanque(100);
	$obj->encender();
	$obj->usar(300);
	$obj->estado();
?>