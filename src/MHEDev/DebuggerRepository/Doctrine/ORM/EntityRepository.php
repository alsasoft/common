<tr>
	<td>getClassName()</td>
	<td><pre><?php echo $variable->getClassName(); ?></pre></td>
</tr>
<tr>
	<td>findAll()</td>
	<td><?php self::debugVariable($variable->findAll(), $name.'->findAll()', $deep - 1, $directory); ?></td>
</tr>