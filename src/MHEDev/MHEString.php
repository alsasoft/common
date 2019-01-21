<?php

namespace MHEDev;

class MHEString {
	
	public static $accenteds = array(
			'à', 'á', 'â', 'ã', 'ä', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 
			'À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý'
	);
	
	public static $atonics = array(
			'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 
			'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y'
	);
	
	public static $lowers_ac = array(
			'à', 'á', 'â', 'ã', 'ä', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ'
	);
	
	public static $lowers_at = array(
			'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y'
	);
	
	public static $uppers_ac = array(
			'À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý'
	);
	
	public static $uppers_at = array(
			'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y'
	);

	public static function startsWith($haystack, $needle) {
		return strpos($haystack, $needle) === 0 || $needle === "";
	}
	
	public static function endsWith($haystack, $needle) {
		return substr($haystack, -strlen($needle)) === $needle || $needle === "";
	}
	
	public static function castToStringOrNull($string){
		return is_null($string) ? null : (string) $string;
	}

	public static function normalize($string, $safe = true) {
		return $safe ?
		mb_strtolower(str_replace(self::$accenteds, self::$atonics, $string)):
		strtr(
				$string,
				'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
				'aaaaaceeeeiiiinooooouuuuyyaaaaaceeeeiiiinooooouuuuy'
				);
	}
	
	public static function stripAccents($string, $safe = true) {
		return $safe ? 
			str_replace(self::$accenteds, self::$atonics, $string): 
			strtr(
					$string, 
					'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ', 
					'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'
			);
	}
	
	public static function toUpperCase($string, $safe = true){
		return $safe ?
			mb_strtoupper(str_replace(self::$lowers_ac, self::$uppers_ac, $string)) :
			strtoupper(
					strtr(
							$string,
							'àáâãäçèéêëìíîïñòóôõöùúûüýÿ',
							'ÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝY'
					)
		);
	}
	
	public static function toLowerCase($string, $safe = true){
		return $safe ?
			mb_strtolower(str_replace(self::$uppers_ac, self::$lowers_ac, $string)) :
			strtolower(
					strtr(
							$string,
							'ÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
							'àáâãäçèéêëìíîïñòóôõöùúûüý'
					)
			);
	}
	
	public static function multiReplace(array &$search, $replace, $subject){
		foreach ($search as $needle)
			$subject = str_replace($needle, $replace, $subject);
		
		return $subject;
	}
	
	public static function generateRandomString(
			$length = 10,
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
	) {
		$randomString = '';
		$n = strlen($characters);
		for ($i = 0; $i < $length; $i++)
			$randomString .= $characters[rand() % $n];
		return $randomString;
	}
	

	/** Comprobar si la cadena dada es un patrón variable
	 * @param string $pattern
	 * @param string $charX
	 * @return boolean
	 */
	public static function isTaggedString(&$pattern, $charX = '#'){
		$ret = false;
	
		if(is_string($pattern)){
			$n = strlen($pattern);
			for($i = 0 ; $i < $n && !$ret; $i++){
				$current = $pattern[$i];
				switch($current){
					case '\\': $i++; break;
					case $charX: $ret = true; break;
				}
			}
		}
	
		return $ret;
	}
	
	/** Obtener una cadena en base a un patron y unos valores
	 * @param string $pattern
	 * @param mixed $values
	 * @param callable $parseFunction
	 * @param string $charX
	 * @param string $charA
	 * @param string $charB
	 * @return string
	 */
	public static function fillTaggedString(
			&$pattern,
			&$values,
			$parseFunction = null,
			$charX = '#',
			$charA = '{',
			$charB = '}'
	){
		$r = '';
		$n = strlen($pattern);
		for($i = 0 ; $i < $n; $i++){
	
			$current = $pattern[$i];
	
			if($i < $n - 1) switch($current){
				case '\\':
					$r.= $pattern[++$i];
					break;
				case $charX:
					$current = $pattern[++$i];
	
					if($current == $charA){
						$index = '';
						$current = $pattern[++$i];
						while($i < $n - 1 && $current != $charB){
							$index.= $current;
							$current = $pattern[++$i];
						}
						$index = trim($index);
						if($current == $charB){
							if(isset($values[$index])){
								if(is_array($values[$index]))
									$r.= count($values[$index]);
								else
									$r.= $parseFunction
									? $parseFunction($values[$index])
									: $values[$index];
							}
							else{
								$parts = explode(' ', $index);
								$flag = count($parts) - 1;
								$secindex = trim($parts[$flag]);
								unset($parts[$flag]);
								$priindex = implode(' ', $parts);
								if(isset($values[$priindex][$secindex])){
									$r.= $parseFunction
									? $parseFunction($values[$priindex][$secindex])
									: $values[$priindex][$secindex];
								}
							}
						}
					}
					else{
						$r.= $parseFunction
						? $parseFunction($values)
						: $values;
					}
					break;
				default: $r.= $current;
			}
			else switch($current){
				case '\\': break;
				case $charX:
					$r.= $parseFunction
					? $parseFunction($values)
					: $values;
					break;
				default: $r.= $current;
			}
		}
		return $r;
	}

	/**
	 * @param integer $n
	 * @param string $c
	 * @return string
	 */
	public static function addTab($n, $c = "\t"){
		$ret = '';

		$n = (integer) $n;

		for($i = 0; $i < $n; $i++){
			$ret.= $c;
		}

		return $ret;
	}

	/**
	 * @param mixed $value
	 * @return boolean
	 */
	public static function parseBoolean($value){
		switch(gettype($value)){
			case 'string':
				switch(strtolower($value)){
					case 'true':  return true;
					case 'false': return false;
					default: return (boolean) $value;
				}
			default:
				return (boolean) $value;
		}
	}

	/**
	 * This is needed to keep documents unique that have the same timestamp.
	 * @var integer
	 * @see $timestamp
	 */
	public static $_mongoIdFromTimestampCounter = 0;
	
	/**
	 * Mongo Id From Timestamp
	 * @param integer $timestamp
	 * @return string
	 * @see http://docs.mongodb.org/manual/reference/object-id/
	 */
	public static function generateObjectId() {
		if(self::$_mongoIdFromTimestampCounter == 0){
			self::$_mongoIdFromTimestampCounter = rand();
		}

		// Build Binary Id
		$binaryTimestamp = pack('N', strtotime('now')); // unsigned long
		$machineId = substr(md5(gethostname()), 0, 3); // 3 bit machine identifier
		$binaryPID = pack('n', posix_getpid()); // unsigned short
		$counter = substr(pack('N', self::$_mongoIdFromTimestampCounter++), 1, 3); // Counter
		$binaryId = "{$binaryTimestamp}{$machineId}{$binaryPID}{$counter}";

		// Convert to ASCII
		$id = '';
		for ($i = 0; $i < 12; $i++) {
			$id .= sprintf("%02X", ord($binaryId[$i]));
		}

		// Return Mongo ID
		return strtolower($id);
	}
}
