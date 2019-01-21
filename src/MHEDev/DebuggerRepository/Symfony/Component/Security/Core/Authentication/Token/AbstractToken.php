<tr>
	<td>__toString()</td>
	<td><pre><?php // echo $variable->__toString(); ?></pre></td>
</tr>
<tr>
	<td>getUsername()</td>
	<td><pre><?php echo $variable->getUsername(); ?></pre></td>
</tr>
<tr>
	<td>isAuthenticated()</td>
	<td><pre><?php echo $variable->isAuthenticated() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getAttributes()</td>
	<td><?php self::debugVariable($variable->getAttributes(), $name.'->getAttributes()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getRoles()</td>
	<td><?php self::debugVariable($variable->getRoles(), $name.'->getRoles()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getUser()</td>
	<td><?php self::debugVariable($variable->getUser(), $name.'->getUser()', $deep - 1, $directory); ?></td>
</tr>