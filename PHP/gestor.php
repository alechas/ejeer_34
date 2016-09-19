<?php

class Gestor
{

	public static function LeerCaracteres($cant_carac)
	{
		if (isset($_FILES["file"])) 
		{
			//obtengo la direccion de mi archivo a levantar
			$path=$_FILES["file"]["tmp_name"];

			//levanto el archivo
			$archivo = fopen($path, "r");

			//recorro el archivo
			while (!FeoF($archivo)) 
			{echo "<br>";
				$renglon = fgets($archivo); //lectura linea a linea

				$mi_array=str_split($renglon);
				//var_dump($mi_array);
				//foreach ($mi_array as $carac) 
				//{
					echo $renglon;
					//echo $carac;
				//}

			}
			echo "<br>";
			echo "fin del archivo";
			fclose($archivo);

		}
	}

}

?>