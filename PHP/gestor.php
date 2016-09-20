<?php

class Gestor
{

	public static function LeerCaracteres($cant_carac)
	{
		if (isset($_FILES["file"])) 
		{
			$cant_ok=0;
			$cont=0;
			//obtengo la direccion de mi archivo a levantar
			$path=$_FILES["file"]["tmp_name"];

			//levanto el archivo
			$archivo = fopen($path, "r");

			//recorro el archivo
			while (!FeoF($archivo)) 
			{	
				$cont=0;
				$renglon = fgets($archivo); //lectura linea a linea

				$mi_array=str_split($renglon);
				//var_dump($mi_array);
				foreach ($mi_array as $carac) 
				{//echo "<br>carac";
					//var_dump($carac);
					if ($carac==" ")
					{				//pregunto si es igual a la cantidad de caracteres que paso como param	
						if ($cant_carac == $cont && $cant_carac!=0) 
						{
							$cant_ok++;//sumo 1 a las coincidencias
						}
						if ($cant_carac == 0 && 4 < $cont) 
						{
							$cant_ok++;
						}
						$cont = 0;
					}
					else
					{
						$cont++; //si no es la finalización de una palabra, le sumo 1 al contador de la palabra
					}
				}
				
				if ($cant_carac == $cont) 
				{
					$cant_ok++;
				}
						
			}
			fclose($archivo);
			return $cant_ok;
		}
	}

}

?>