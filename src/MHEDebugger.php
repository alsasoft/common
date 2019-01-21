<?php

namespace App\Common;

class MHEDebugger {
	public static function debugMethod(
			$variable, 
			$name, 
			$deep, 
			$directory,
			array &$visited,
			$method, 
			$mode = null, 
			array $args = array()
	) {
		$f = true;
		$argline = '(';

		foreach($args as $arg){
			if($f)
				$f = false;
			else
				$argline.= ', ';

			$type = strtolower(gettype($arg));
			switch($type){
				case 'integer': break;
				case 'double':  break;
				case 'boolean': $arg = $arg ? 'true' : 'false'; break;
				case 'string':  $arg = "'$arg'"; break;
				case 'array':   $cnt = count($arg); $arg = "ARRAY($cnt)"; break;
				case 'object':  $arg = 'OBJECT '.get_class($arg); break;
				default:        $arg = $type;
			}

			$argline.= $arg;
		}

		$argline.= ')';

		$pair = array($variable, $method);

		$call = call_user_func_array($pair, $args);

		echo "<tr>\n\t<td>$method$argline</td>\n";
		echo "\t<td>\n";

		switch(strtolower($mode)) {
			case 'integer': $call = (int)$call; echo "\t\t<pre>$call</pre>\n"; break;
			case 'double':  $call = (double)$call; echo "\t\t<pre>$call</pre>\n"; break;
			case 'boolean': $call = $call ? 'TRUE' : 'FALSE'; echo "\t\t<pre>$call</pre>\n"; break;
			case 'string': 
			case 'simple': echo "\t\t<pre>$call</pre>\n"; break;
			 
			default: self::debugVariable($call, $name.'->'.$method.$argline, $deep - 1, $directory, $visited);
		}

		echo "\t</td>\n";
		echo "</tr>\n";
	}

	public static function reflectObject($variable, $name, $deep, $directory = null, array &$visited = array()){
		$type = strtoupper(gettype($variable));
		if($type == 'OBJECT'){
			self::debugVariable(new \ReflectionClass($variable), "ReflectionClass($name)", $deep, $directory, $visited);
		}
		else {
			echo "~ No es un objeto: '$type' ~";
		}
	}

	public static function debugVariable($variable, $name, $deep, $directory = null, array &$visited = array()){
		if(is_object($variable) && array_search($variable, $visited, true) !== false){
			echo '~ Referencia cíclica ~';
		}
		else{
			$visited[] = $variable;

			echo "<style>table.mhedebug tr td {vertical-align:text-top} </style>\n";
			echo "<table class=\"mhedebug\" border=\"1\" width=\"100%\">\n";

			if(is_null($directory)){
				$directory = __DIR__;
				if(!MHEString::endsWith($directory, '/'))
					$directory.= '/DebuggerRepository/';
				else
					$directory.= 'DebuggerRepository/';
			}

			$type = strtoupper(gettype($variable));
			switch($type){
				case 'BOOLEAN':
					$detail = $variable ? 'true' : 'false';
					echo "<tr><th colspan=\"2\"><font color=\"maroon\">$name is $type = $detail</font></th></tr>\n";
					break;

				case 'INTEGER':
				case 'DOUBLE':
					echo "<tr><th colspan=\"2\"><font color=\"red\">$name is $type = $variable</font></th></tr>\n";
					break;

				case 'STRING':
					$detail = htmlentities($variable);
					echo "<tr><th colspan=\"2\"><font color=\"green\">$name is $type = '$variable'</font></th></tr>\n";
					if($deep != 0){
						echo "<tr><td>Raw</td><td><pre>$variable</pre></td></tr>";
						echo "<tr><td>Enetities</td><td><pre>$detail</pre></td></tr>";
						echo "<tr><td>mb_detect_encoding</td><td><pre>".mb_detect_encoding($variable)."</pre></td></tr>";

						echo "\n";
					}
					break;

				case 'ARRAY':
					$detail = count($variable);
					echo "<tr><th colspan=\"2\"><font color=\"purple\">$name is $type of '$detail' elements</font></th></tr>\n";
					if($deep != 0){
						foreach($variable as $key => $value){
							echo "<tr>\n";
							echo "<td>$key</td>\n";
							echo "<td>\n";
							self::debugVariable($value, $name."['$key']", $deep - 1, $directory, $visited);
							echo "</td>\n";
							echo "</tr>\n";
						}
					}
					break;

				case 'RESOURCE':
					$detail = get_resource_type($variable);
					echo "<tr><th colspan=\"2\"><font color=\"maroon\">$name is $type of type '$detail'</font></th></tr>\n";
					break;

				case 'OBJECT':
					$f = true;
					$classstack = array();
					$class = get_class($variable);

					echo "<tr><th colspan=\"2\"><font color=\"blue\">$name is $type of class '$class'</font></th></tr>\n";

					if($deep != 0){
						echo "<tr><td colspan=\"2\">";

						while($class !== false){
							if($f)
								$f = false;
							else
								echo ' -> ';

							echo $class;
							$classstack[] = $class;
							$class = get_parent_class($class);
						}

						echo "</td></tr>\n";
					//	echo "<tr><td colspan=\"2\">";
					//	self::showMethodList($variable);
					//	echo "</td></tr>\n";

						$classarray = array_reverse($classstack);

						foreach($classarray as $class){
							$filename = $directory.str_replace('\\', '/', $class).'.php';

							if(file_exists($filename)){
								echo "<tr><th colspan=\"2\"><font color=\"red\">$class</font></th></tr>\n";
								require $filename;
							}
							else{
								echo "<tr><th colspan=\"2\"><font color=\"grey\">$class</font></th></tr>\n";
							}
						}
					}
					break;

					default:
						echo "<tr><th colspan=\"2\"><font color=\"orange\">$name is $type</font></th></tr>\n";
						break;
			}

			echo "</table>\n";
		}
	}

	/** Mostrar lista de métodos del objeto
	 * @param object $object Objeto
	 */
	private static function showMethodList($object){
		$first = true;
		$methods = get_class_methods($object);

		foreach($methods as $method){
			if($first)
				$first = false;
			else
				echo ', ';

			echo $method;
		}
	}

	public static function getDebugCodeByCSVFile($csvfile){
	//	$csvfile = fopen('fichero.csv', 'r');

		while (($csvdata = fgetcsv($csvfile, 0, ';')) !== FALSE) {
			$method = $csvdata[0];

			if(!self::endsWith($method, ')'))
				$method.= '()';

			echo "<tr>\n";
			echo "\t<td>$method</td>\n";
			echo "\t<td><?php self::debugVariable(\$variable->$method, \$name.'->$method', \$deep - 1, \$directory); ?></td>\n";
			if(MHEString::startsWith($method, 'is', true) || MHEString::startsWith($method, 'has', true))
				echo "\t<td><pre><?php echo \$variable->$method ? 'YES' : 'NO'; ?></pre></td>\n";
			else
				echo "\t<td><pre><?php echo \$variable->$method; ?></pre></td>\n";
			echo "</tr>\n";
		}
	}
}
