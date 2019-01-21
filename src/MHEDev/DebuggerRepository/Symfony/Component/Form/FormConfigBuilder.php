<tr>
	<td>getName()</td>
	<td><pre><?php echo $variable->getName(); ?></pre></td>
</tr>
<tr>
	<td>getAction()</td>
	<td><pre><?php echo $variable->getAction(); ?></pre></td>
</tr>
<tr>
	<td>getMethod()</td>
	<td><pre><?php echo $variable->getMethod(); ?></pre></td>
</tr>
<tr>
	<td>getRequired()</td>
	<td><pre><?php echo $variable->getRequired() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getAutoInitialize()</td>
	<td><pre><?php echo $variable->getAutoInitialize() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getDisabled()</td>
	<td><pre><?php echo $variable->getDisabled() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getMapped()</td>
	<td><pre><?php echo $variable->getMapped() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getByReference()</td>
	<td><pre><?php echo $variable->getByReference() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getInheritData()</td>
	<td><pre><?php echo $variable->getInheritData() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getVirtual()</td>
	<td><pre><?php echo $variable->getVirtual() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getCompound()</td>
	<td><pre><?php echo $variable->getCompound() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getErrorBubbling()</td>
	<td><pre><?php echo $variable->getErrorBubbling() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getDataLocked()</td>
	<td><pre><?php echo $variable->getDataLocked() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getOptions()</td>
	<td><?php self::debugVariable($variable->getOptions(), $name.'->getOptions()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getData()</td>
	<td><?php self::debugVariable($variable->getData(), $name.'->getData()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getAttributes()</td>
	<td><?php self::debugVariable($variable->getAttributes(), $name.'->getAttributes()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getViewTransformers()</td>
	<td><?php self::debugVariable($variable->getViewTransformers(), $name.'->getViewTransformers()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getModelTransformers()</td>
	<td><?php self::debugVariable($variable->getModelTransformers(), $name.'->getModelTransformers()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getEmptyData()</td>
	<td><?php self::debugVariable($variable->getEmptyData(), $name.'->getEmptyData()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getEventDispatcher()</td>
	<td><?php self::debugVariable($variable->getEventDispatcher(), $name.'->getEventDispatcher()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getDataMapper()</td>
	<td><?php self::debugVariable($variable->getDataMapper(), $name.'->getDataMapper()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getFormFactory()</td>
	<td><?php self::debugVariable($variable->getFormFactory(), $name.'->getFormFactory()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getRequestHandler()</td>
	<td><?php self::debugVariable($variable->getRequestHandler(), $name.'->getRequestHandler()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getFormConfig()</td>
	<td><?php // self::debugVariable($variable->getFormConfig(), $name.'->getFormConfig()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getType()</td>
	<td><?php self::debugVariable($variable->getType(), $name.'->getType()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getDataClass()</td>
	<td><?php self::debugVariable($variable->getDataClass(), $name.'->getDataClass()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getPropertyPath()</td>
	<td><?php self::debugVariable($variable->getPropertyPath(), $name.'->getPropertyPath()', $deep - 1, $directory); ?></td>
</tr>