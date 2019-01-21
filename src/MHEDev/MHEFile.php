<?php

namespace MHEDev;

class MHEFile {

	/** Crear fichero de texto
	 * @param string $directory
	 * @param string $name
	 * @param string $text
	 * @param boolean $overwrite
	 * @return boolean
	 */
	public static function createTextFile($directory, $name, $text, $overwrite){
		// En principio el fichero debe ser creado
		$create = true;

		// Se ajusta el nombre del directorio
		$directory = str_replace('\\', '/', $directory);

		// Crear carpeta
		if(!is_dir($directory)){
			mkdir($directory, 0777, true);
			$overwrite = true;
		}

		// Nombre de fichero
		$filename = "$directory/$name";

		// Comprobación de sobreescritura
		if(!$overwrite && is_file($filename)){
			$create = false;
		}

		if($create){
			// Abrimos fichero
			$file = fopen($filename, 'w');

			if($file){
				// Codigo
				fwrite($file, $text);

				// Cierre de fichero
				return fclose($file);
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}

	/**
	 * Remove a non empty directory
	 * @author Cristián Pérez
	 * @param string $path Folder Path
	 * @return bool
	 */
	public static function removeDirectory($path) {
		$path = rtrim( strval( $path ), '/' ) ;

		$d = @dir( $path );

		if( ! $d )
			return false;

		while ( false !== ($current = $d->read()) )
		{
			if( $current === '.' || $current === '..')
				continue;

			$file = $d->path . '/' . $current;

			if( is_dir($file) )
				self::removeDirectory($file);

			if( is_file($file) )
				unlink($file);
		}

		rmdir( $d->path );
		$d->close();
		return true;
	}
	
	public static function listFilesInFolderRecursive($folder_name){
		// Abrimos la carpeta $folder_name
		if ($res = opendir($folder_name)) {
			// Creamos la lista de archivos que serán devueltos
			$files = array();

			// Creamos la lista de subcarpetas para explorarlas posteriormente
			$folders = array();

			// Examinamos todos los elementos de la carpeta $folder_name
			while (($element = readdir($res)) !== false){

				// Elemento con ruta absoluta
				$source = "$folder_name/$element";

				// Si es un archivo, lo añadimos
				if(is_file($source)){
					$files[] = $source;
				}

				// Si es una carpeta se mete en la lista para procesarla posteriormente
				else switch($element){
					case '.':  break;
					case '..': break;
					default: $folders[] = $source;
				}
			}

			// Cerramos el recurso del directorio
			closedir($res);

			// Procesamos recursivamente las subcarpetas
			foreach($folders as $source){
				foreach (self::listFilesInFolderRecursive($source) as $file){
					$files[] = $file;
				}
			}

			unset($folders);
			return $files;
		}
		else {
			return null;
		}
	}
}
