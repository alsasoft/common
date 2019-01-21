<tr>
	<td>getDescripcion()</td>
	<td><pre><?php echo $variable->getDescripcion(); ?></pre></td>
</tr>
<tr>
	<td>getEmail()</td>
	<td><pre><?php echo $variable->getEmail(); ?></pre></td>
</tr>
<tr>
	<td>getDescripcion()</td>
	<td><pre><?php echo $variable->getDescripcion(); ?></pre></td>
</tr>
<tr>
	<td>getAlta()</td>
	<td><?php self::debugVariable($variable->getAlta(), $name.'->getAlta()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getBaja()</td>
	<td><?php self::debugVariable($variable->getBaja(), $name.'->getBaja()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getRoles()</td>
	<td><?php self::debugVariable($variable->getRoles(), $name.'->getRoles()', $deep - 1, $directory); ?></td>
</tr>

<tr>
	<td>getPersona()</td>
	<td><?php self::debugVariable($variable->getPersona(), $name.'->getPersona()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getCentro()</td>
	<td><?php self::debugVariable($variable->getCentro(), $name.'->getCentro()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getDepartamento()</td>
	<td><?php self::debugVariable($variable->getDepartamento(), $name.'->getDepartamento()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getDepartamentoDocencia()</td>
	<td><?php self::debugVariable($variable->getDepartamentoDocencia(), $name.'->getDepartamentoDocencia()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getTitulacion()</td>
	<td><?php self::debugVariable($variable->getTitulacion(), $name.'->getTitulacion()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getUbicaciones()</td>
	<td><?php self::debugVariable($variable->getUbicaciones(), $name.'->getUbicaciones()', $deep - 1, $directory); ?></td>
</tr>