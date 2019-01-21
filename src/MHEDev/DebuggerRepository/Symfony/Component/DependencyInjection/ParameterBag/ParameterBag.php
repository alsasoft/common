<tr>
	<td>isResolved()</td>
	<td><pre><?php echo $variable->isResolved() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>all()</td>
	<td><?php self::debugVariable($variable->all(), $name.'->all()', $deep - 1, $directory); ?></td>
</tr>
