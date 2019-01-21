<tr>
	<td>isStarted()</td>
	<td><pre><?php echo $variable->isStarted() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getId()</td>
	<td><pre><?php echo $variable->getId(); ?></pre></td>
</tr>
<tr>
	<td>getName()</td>
	<td><pre><?php echo $variable->getName(); ?></pre></td>
</tr>
<tr>
	<td>count()</td>
	<td><pre><?php echo $variable->count(); ?></pre></td>
</tr>
<tr>
	<td>getBag($name)</td>
	<td><?php //self::debugVariable($variable->getBag($name), $name.'->getBag($name)', $deep - 1, $directory); ?>?</td>
</tr>
<tr>
	<td>getFlashBag()</td>
	<td><?php self::debugVariable($variable->getFlashBag(), $name.'->getFlashBag()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getMetadataBag()</td>
	<td><?php self::debugVariable($variable->getMetadataBag(), $name.'->getMetadataBag()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getIterator()</td>
	<td><?php self::debugVariable($variable->getIterator(), $name.'->getIterator()', $deep - 1, $directory); ?></td>
</tr>