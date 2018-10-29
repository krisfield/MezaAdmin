<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'MezaAdmin' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['MezaAdmin'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['MezaAdminAlias'] = __DIR__ . '/MezaAdmin.i18n.alias.php';
	$wgExtensionMessagesFiles['MezaAdminMagic'] = __DIR__ . '/MezaAdmin.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for MezaAdmin extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the MezaAdmin extension requires MediaWiki 1.25+' );
}
