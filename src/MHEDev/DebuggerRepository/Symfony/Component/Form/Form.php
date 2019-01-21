<tr>
	<td>isRoot()</td>
	<td><pre><?php echo $variable->isRoot() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isSubmitted()</td>
	<td><pre><?php echo $variable->isSubmitted() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isBound()</td>
	<td><pre><?php echo $variable->isBound() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isSynchronized()</td>
	<td><pre><?php echo $variable->isSynchronized() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isEmpty()</td>
	<td><pre><?php echo $variable->isEmpty() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isValid()</td>
	<td><pre><?php echo $variable->isValid() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isRequired()</td>
	<td><pre><?php echo $variable->isRequired() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>isDisabled()</td>
	<td><pre><?php echo $variable->isDisabled() ? 'YES' : 'NO'; ?></pre></td>
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
	<td>getData()</td>
	<td><?php self::debugVariable($variable->getData(), $name.'->getData()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getNormData()</td>
	<td><?php self::debugVariable($variable->getNormData(), $name.'->getNormData()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getViewData()</td>
	<td><?php self::debugVariable($variable->getViewData(), $name.'->getViewData()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getExtraData()</td>
	<td><?php self::debugVariable($variable->getExtraData(), $name.'->getExtraData()', $deep - 1, $directory); ?></td>
</tr>

<tr>
	<td>getClickedButton()</td>
	<td><?php self::debugVariable($variable->getClickedButton(), $name.'->getClickedButton()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getErrors()</td>
	<td><?php self::debugVariable($variable->getErrors(), $name.'->getErrors()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getErrorsAsString(0)</td>
	<td><pre><?php echo $variable->getErrorsAsString(0); ?></pre></td>
</tr>
<tr>
	<td>getConfig()</td>
	<td><?php self::debugVariable($variable->getConfig(), $name.'->getConfig()', $deep - 1, $directory); ?></td>
</tr>

<tr>
	<td>getPropertyPath()</td>
	<td><?php self::debugVariable($variable->getPropertyPath(), $name.'->getPropertyPath()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getParent()</td>
	<td><?php self::debugVariable($variable->getParent(), $name.'->getParent()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getRoot()</td>
	<td><?php self::debugVariable($variable->getRoot(), $name.'->getRoot()', $deep - 1, $directory); ?></td>
</tr>