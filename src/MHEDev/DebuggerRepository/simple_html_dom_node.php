	<tr>
		<td>Tag</td>
		<td><?php echo $variable->tag; ?></td>
	</tr>	
	<tr>
		<td>Node type</td>
		<td><?php echo $variable->nodetype; ?></td>
	</tr>	
	<tr>
		<td>Text</td>
		<td><?php //echo htmlentities($variable->text()); ?></td>
	</tr>
	<tr>
		<td>Inner text</td>
		<td><?php //echo htmlentities($variable->innertext()); ?></td>
	</tr>
	<tr>
		<td>XML text</td>
		<td><?php //echo htmlentities($variable->xmltext()); ?></td>
	</tr>
	<tr>
		<td>Outer text</td>
		<td><?php //echo htmlentities($variable->outertext()); ?></td>
	</tr>
	<tr>
		<td>Display size</td>
		<td><?php self::showVariable($variable->get_display_size(), $name.'->get_display_size()'); ?></td>
	</tr>
	<tr>
		<td>Attributes</td>
		<td><?php self::showVariable($variable->getAllAttributes(), $name.'->getAllAttributes()'); ?></td>
	</tr>
	<tr>
		<td>Children</td>
		<td><?php self::showVariable($variable->children(), $name.'->children()'); ?></td>
	</tr>