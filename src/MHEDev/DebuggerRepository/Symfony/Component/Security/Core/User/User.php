<tr>
	<td>getUsername()</td>
	<td><pre><?php echo $variable->getUsername(); ?></pre></td>
</tr>
<tr>
	<td>getPassword()</td>
	<td><pre><?php echo $variable->getPassword(); ?></pre></td>
</tr>
<tr>
	<td>isEnabled()</td>
	<td><pre><?php echo $variable->isEnabled() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isAccountNonExpired()</td>
	<td><pre><?php echo $variable->isAccountNonExpired() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isAccountNonLocked()</td>
	<td><pre><?php echo $variable->isAccountNonLocked() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isCredentialsNonExpired()</td>
	<td><pre><?php echo $variable->isCredentialsNonExpired() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getSalt()</td>
	<td><?php self::debugVariable($variable->getSalt(), $name.'->getSalt()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getRoles()</td>
	<td><?php self::debugVariable($variable->getRoles(), $name.'->getRoles()', $deep - 1, $directory); ?></td>
</tr>