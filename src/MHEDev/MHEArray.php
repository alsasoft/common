<?php

namespace MHEDev;

class MHEArray {

	public static function getValue(array &$array, $key, $notfoundvalue = null) {
		return isset($array[$key]) ? $array[$key] : $notfoundvalue;
	}

	public static function getValueByKeys(array &$array, array $keys, $notfoundvalue = null) {
		if(empty($keys) || empty($array)){
			return $notfoundvalue;
		}

		$key = self::first($keys, array());
		
		if(is_array($key)){
			return $notfoundvalue;
		}

		$value = self::getValue($array, $key, $notfoundvalue);

		if(count($keys) == 1){
			return $value;
		}
		else if(is_array($value)){
			return self::getValueByKeys($value, array_slice($keys, 1), $notfoundvalue);
		}
		else {
			return $notfoundvalue;
		}
	}

	public static function first(array &$array, $notfoundvalue = null) {
		foreach($array as $value){
			return $value;
		}
		return $notfoundvalue;
	}
	
	public static function last(array &$array) {
		return end($array);
	}
	
	public static function count(array &$array) {
		return count($array);
	}
	
	protected static function setMultiKeyValue(array &$array, $element, array &$key, $index){
		if($index >= count($key)){
			return false;
		}
		else if($index == count($key) - 1){
			$array[$key[$index]] = $element;
			return true;
		}
		else {
			if(!isset($array[$key[$index]]) || !is_array($array[$key[$index]])){
				$array[$key[$index]] = array();
			}

			return self::setMultiKeyValue($array[$key[$index]], $element, $key, ++$index);
		}
	}
	
	public static function push(array &$array, $element, $key = null) {
		if(is_null($key)){
			$array[] = $element;
		}
		else if(is_array($key)){
			self::setMultiKeyValue($array, $element, $key, 0);
		}
		else{
			$array[$key] = $element;
		}
		return $array;
	}
	
	public static function positionByKey(array &$array, $key_search, $notfoundvalue = -1){
		$i = 0;
	
		foreach ($array as $key => $value){
			$value;
			if($key == $key_search){
				return $i;
			}
			else {
				$i++;
			}
		}
	
		return $notfoundvalue;
	}
	
	public static function keyByPosition(array &$array, $pos_search, $notfoundvalue = null){
		if(is_numeric($pos_search) && count($array) > $pos_search){
			$i = 0;

			foreach($array as $key => $value){
				$value;
//echo "\$i = $i, \$pos_search = $pos_search <br>";
				
				if($i == $pos_search){
					return $key;
				}
				else {
					$i++;
				}
			}
		}
	
		return $notfoundvalue;
	}
	
	public static function insertAt(array &$array, $pos, $element, $key = null) {
		if(!is_null($key) && !is_array($key) && isset($array[$key])){
			unset($array[$key]);
		}
		
		$length = count($array);
	
		$pos = (int) $pos;
		
		$right = $pos >= $length ? array() : array_splice($array, $pos - $length);
	
		self::push($array, $element, $key);
	
		foreach($right as $k => $v){
			$array[$k] = $v;
		}
	
		return $array;
	}
	
	public static function insert(array &$array, $element, $key = null) {
		return self::insertAt($array, 0, $element, $key);
	}
	
	public static function insertSorted(array &$array, $sort_function, $element, $key = null, $sens = 1) {
		if(empty($array)){
			self::push($array, $element, $key);
		}
		else if($sort_function(self::last($array), $element) * $sens <= 0){
			self::push($array, $element, $key);
		}
		else{
			$i = 0;

			foreach($array as $key => $value){
				if($sort_function($value, $element) * $sens >= 0){
					break;
				}
				$i++;
			}

			self::insertAt($array, $i, $element, $key);
		}
	
		return $array;
	}
}
