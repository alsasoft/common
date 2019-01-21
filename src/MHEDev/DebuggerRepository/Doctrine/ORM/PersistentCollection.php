<tr>
	<td>count()</td>
	<td><pre><?php echo $variable->count(); ?></pre></td>
</tr>
<tr>
	<td>isEmpty()</td>
	<td><pre><?php echo $variable->isEmpty() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isDirty()</td>
	<td><pre><?php echo $variable->isDirty() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isInitialized()</td>
	<td><pre><?php echo $variable->isInitialized() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getOwner()</td>
	<td><?php // self::debugVariable($variable->getOwner(), $name.'->getOwner()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getTypeClass()</td>
	<td><?php self::debugVariable($variable->getTypeClass(), $name.'->getTypeClass()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getMapping()</td>
	<td><?php self::debugVariable($variable->getMapping(), $name.'->getMapping()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getInsertDiff()</td>
	<td><?php self::debugVariable($variable->getInsertDiff(), $name.'->getInsertDiff()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getKeys()</td>
	<td><?php self::debugVariable($variable->getKeys(), $name.'->getKeys()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getValues()</td>
	<td><?php self::debugVariable($variable->getValues(), $name.'->getValues()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getIterator()</td>
	<td><?php self::debugVariable($variable->getIterator(), $name.'->getIterator()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>toArray()</td>
	<td><?php self::debugVariable($variable->toArray(), $name.'->toArray()', $deep - 1, $directory); ?></td>
</tr>