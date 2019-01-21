<tr>
	<td>Count</td>
	<td><?php echo $variable->count(); ?></td>
</tr>
<tr>
	<td>Name</td>
	<td><?php echo $variable->getName(); ?></td>
</tr>
<tr>
	<td>Namespaces</td>
	<td><?php self::debugVariable($variable->getNamespaces(), $name.'->getNamespaces()', $deep - 1); ?></td>
</tr>
<tr>
	<td>__toString</td>
	<td><?php self::debugVariable($variable->__toString(), $name.'->__toString()', $deep - 1); ?></td>
</tr>
<tr>
	<td>asXML</td>
	<td><pre><?php echo htmlentities($variable->asXML()); ?></pre></td>
</tr>
<tr>
	<td>Attributes: <?php echo $variable->attributes()->count(); ?></td>
	<td>
	<?php 
		foreach($variable->attributes() as $key => $attribute){
			self::debugVariable($attribute, $name."->attributes()['$key']", $deep - 1);
		}
	?>
	</td>
</tr>
<tr>
	<td>Children: <?php echo $variable->children()->count(); ?></td>
	<td>
	<?php 
		foreach($variable->children() as $key => $attribute){
			self::debugVariable($attribute, $name."->children()['$key']", $deep - 1);
		}
	?>
	</td>
</tr>