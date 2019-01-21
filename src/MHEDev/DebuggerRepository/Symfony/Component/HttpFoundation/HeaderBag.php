<tr>
	<td>__toString()</td>
	<td><pre><?php echo $variable->__toString(); ?></pre></td>
</tr>
<tr>
	<td>count()</td>
	<td><pre><?php echo $variable->count(); ?></pre></td>
</tr>
<tr>
	<td>all()</td>
	<td><?php self::debugVariable($variable->all(), $name.'->all()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>keys()</td>
	<td><?php self::debugVariable($variable->keys(), $name.'->keys()', $deep - 1, $directory); ?></td>
</tr>