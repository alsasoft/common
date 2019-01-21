<?php
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCharset', 'simple');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getGlobals', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getLoader', 'normal');
?><tr><td colspan='2'>Debug Methods (Non official)</td></tr><?php 
	self::debugMethod($variable, $name, $deep, $directory, $visited, '_debug_getHelpers', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, '_debug_getParents', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, '_debug_getStack', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, '_debug_getCache', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, '_debug_getParser', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, '_debug_getEvalTemplate', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, '_debug_getEvalParamaters', 'normal');
	