<?php 
/**
 * Admin Page Framework
 * 
 * Provides plugin and theme developers with simpler means of creating option pages, custom post types, ant meta boxes. 
 * The framework uses the built-in WordPress Settings API so it respects the WordPress standard form layout design.
 * @author				Michael Uno <michael@michaeluno.jp>
 * @copyright			Michael Uno
 * @license				GPLv2 or later
 * @see					http://wordpress.org/plugins/admin-page-framework/
 * @see					https://github.com/michaeluno/admin-page-framework
 * @link				http://en.michaeluno.jp/admin-page-framework
 * @package				Admin Page Framework
 * @remarks				To use the framework, 1. Extend the class 2. Override the setUp() method. 3. Use the hook functions.
 * @remarks				Requirements: WordPress 3.3 or above, PHP 5.2.4 or above.
 * @remarks				The documentation employs the <a href="http://en.wikipedia.org/wiki/PHPDoc">PHPDOc(DocBlock)</a> syntax.
 * @version				3.0.0b3
 */

if ( ! class_exists( 'AdminPageFramework_Bootstrap' ) ) :
/**
 * Loads the Admin Page Framework library.
 * 
 * @since			3.0.0
 * @abstract
 * @remark			The minifier script will refer this comment section to create the comment header. So don't remove the @info section.
 * @package			Admin Page Framework
 * @subpackage		Admin Page Framework - Utility
 * @info
 *		Library Name: Admin Page Framework
 *		Library URI: http://wordpress.org/extend/plugins/admin-page-framework/
 *		Author:  Michael Uno
 *		Author URI: http://michaeluno.jp
 *		Version: 3.0.0b3
 *		Requirements: WordPress 3.3 or above, PHP 5.2.4 or above.
 *		Description: Provides simpler means of building administration pages for plugin and theme developers.
 */
class AdminPageFramework_Bootstrap {
	
	function __construct( $sLibraryPath ) {
		
		$sDirPath = dirname( $sLibraryPath );
		include_once( $sDirPath . '/utility/AdminPageFramework_RegisterClasses.php' );
		new AdminPageFramework_RegisterClasses( $sDirPath );
		AdminPageFramework_Property_Base::_setLibraryData( $sLibraryPath );		
		
	}
	
}
new AdminPageFramework_Bootstrap( __FILE__ );	// do it now
endif;