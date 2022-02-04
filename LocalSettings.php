# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "CannaWiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
#$wgScriptPath = "/CannaWiki";
#$wgFavicon = "/CannaWiki/favicon.ico";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://cannawiki.herokuapp.com/";
