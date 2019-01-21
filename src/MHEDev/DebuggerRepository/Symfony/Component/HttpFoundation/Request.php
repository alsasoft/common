<tr>
	<td>Data</td>
	<td>
	<?php 
	/*
	$string = $variable->getContent();
	
	$pairs = explode('&', $string);
	
	$data = array();
	
	foreach($pairs as $pair){
		$dup = explode('=', $pair, 2);
		
		//$data[html_entity_decode($dup[0])] = $dup[1];
		$data[$dup[0]] = $dup[1];
	}
	
	self::debugVariable($data, $name.'{DATA}', $deep - 1, $directory);
	*/
	?>
	</td>
</tr>
<tr>
	<td>$_POST</td>
	<td><?php self::debugVariable($_POST, '$_POST', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>__toString()</td>
	<td><pre><?php // echo $variable->__toString(); ?></pre></td>
</tr>
<tr>
	<td>attributes</td>
	<td><?php self::debugVariable($variable->attributes, $name.'->attributes', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>request</td>
	<td><?php self::debugVariable($variable->request, $name.'->request', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>query</td>
	<td><?php self::debugVariable($variable->query, $name.'->query', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>server</td>
	<td><?php self::debugVariable($variable->server, $name.'->server', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>files</td>
	<td><?php self::debugVariable($variable->files, $name.'->files', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>cookies</td>
	<td><?php self::debugVariable($variable->cookies, $name.'->cookies', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>headers</td>
	<td><?php self::debugVariable($variable->headers, $name.'->headers', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getContent()</td>
	<td><pre><?php // echo $variable->getContent(); ?></pre></td>
</tr>
<tr>
	<td>getSession()</td>
	<td><?php self::debugVariable($variable->getSession(), $name.'->getSession()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>hasSession()</td>
	<td><pre><?php echo $variable->hasSession() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>hasPreviousSession()</td>
	<td><pre><?php echo $variable->hasPreviousSession() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getClientIp()</td>
	<td><pre><?php echo $variable->getClientIp(); ?></pre></td>
</tr>
<tr>
	<td>getScriptName()</td>
	<td><pre><?php echo $variable->getScriptName(); ?></pre></td>
</tr>
<tr>
	<td>getPathInfo()</td>
	<td><pre><?php echo $variable->getPathInfo(); ?></pre></td>
</tr>
<tr>
	<td>getBasePath()</td>
	<td><pre><?php echo $variable->getBasePath(); ?></pre></td>
</tr>
<tr>
	<td>getBaseUrl()</td>
	<td><pre><?php echo $variable->getBaseUrl(); ?></pre></td>
</tr>
<tr>
	<td>getScheme()</td>
	<td><pre><?php echo $variable->getScheme(); ?></pre></td>
</tr>
<tr>
	<td>getPort()</td>
	<td><pre><?php echo $variable->getPort(); ?></pre></td>
</tr>
<tr>
	<td>getUser()</td>
	<td><?php 
		//self::debugVariable($variable->getUser(), $name.'->getUser()', $deep - 1, $directory); 
		echo $variable->getUser();
	?></td>
</tr>
<tr>
	<td>getPassword()</td>
	<td><pre><?php echo $variable->getPassword(); ?></pre></td>
</tr>
<tr>
	<td>getUserInfo()</td>
	<td><pre><?php echo $variable->getUserInfo(); ?></pre></td>
</tr>
<tr>
	<td>getHttpHost()</td>
	<td><pre><?php echo $variable->getHttpHost(); ?></pre></td>
</tr>
<tr>
	<td>getRequestUri()</td>
	<td><pre><?php echo $variable->getRequestUri(); ?></pre></td>
</tr>
<tr>
	<td>getSchemeAndHttpHost()</td>
	<td><pre><?php echo $variable->getSchemeAndHttpHost(); ?></pre></td>
</tr>
<tr>
	<td>getUri()</td>
	<td><pre><?php echo $variable->getUri(); ?></pre></td>
</tr>
<tr>
	<td>getQueryString()</td>
	<td><pre><?php echo $variable->getQueryString(); ?></pre></td>
</tr>
<tr>
	<td>isSecure()</td>
	<td><pre><?php echo $variable->isSecure() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getHost()</td>
	<td><pre><?php echo $variable->getHost(); ?></pre></td>
</tr>
<tr>
	<td>getMethod()</td>
	<td><pre><?php echo $variable->getMethod(); ?></pre></td>
</tr>
<tr>
	<td>getRealMethod()</td>
	<td><pre><?php echo $variable->getRealMethod(); ?></pre></td>
</tr>
<tr>
	<td>getRequestFormat()</td>
	<td><pre><?php echo $variable->getRequestFormat(); ?></pre></td>
</tr>
<tr>
	<td>getContentType()</td>
	<td><pre><?php echo $variable->getContentType(); ?></pre></td>
</tr>
<tr>
	<td>getLocale()</td>
	<td><pre><?php echo $variable->getLocale(); ?></pre></td>
</tr>
<tr>
	<td>isMethodSafe()</td>
	<td><pre><?php echo $variable->isMethodSafe() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getETags()</td>
	<td><?php self::debugVariable($variable->getETags(), $name.'->getETags()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>isNoCache()</td>
	<td><pre><?php echo $variable->isNoCache() ? 'YES' : 'NO'; ?></pre></td>
</tr>
<tr>
	<td>getPreferredLanguage()</td>
	<td><pre><?php echo $variable->getPreferredLanguage(); ?></pre></td>
</tr>
<tr>
	<td>getLanguages()</td>
	<td><?php self::debugVariable($variable->getLanguages(), $name.'->getLanguages()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getCharsets()</td>
	<td><?php self::debugVariable($variable->getCharsets(), $name.'->getCharsets()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>getAcceptableContentTypes()</td>
	<td><?php self::debugVariable($variable->getAcceptableContentTypes(), $name.'->getAcceptableContentTypes()', $deep - 1, $directory); ?></td>
</tr>
<tr>
	<td>isXmlHttpRequest()</td>
	<td><pre><?php echo $variable->isXmlHttpRequest() ? 'YES' : 'NO'; ?></pre></td>
</tr>