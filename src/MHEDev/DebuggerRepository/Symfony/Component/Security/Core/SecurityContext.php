<tr>
	<td>isGranted(array())</td>
	<td><pre><?php echo $variable->isGranted(array()) ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getToken()</td>
	<td><?php self::debugVariable($variable->getToken(), $name.'->getToken()', $deep - 1, $directory); ?></td>
</tr>