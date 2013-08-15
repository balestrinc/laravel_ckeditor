<?php

namespace Wysiwyg\Ckeditor;

/**
 * \brief CKEditor class that can be used to create editor
 * instances in PHP pages on server side.
 *
 * Sample usage:
 * @code
 * $CKEditor = new CKEditor();
 * $CKEditor->editor("editor1", "<p>Initial value.</p>");
 * @endcode
 */
class CKEditor extends \Wysiwyg\Ckeditor\CKEditor_php5
{
	private $config_class = 'packages/wysiwyg/ckeditor/CKEditor.config_class';
	private $base_path 	  = 'packages/wysiwyg/ckeditor/CKEditor.config_class.basePath';
	private $config_js 	  = 'packages/wysiwyg/ckeditor/CKEditor.config_js';

	/**
	 * Main Constructor.
	 *
	 * use the config variable CKEditor.config_class.basePath (string) URL to set the %CKEditor 
	 * installation directory, and variable CKEditor.config_class to set the configurations of editor.
	 * 
	 */
	function __construct()
	{
		
		ladybug_dump(	\Config::get('CKEditor.config_class')); 
		
		die();
	
		
		parent::__construct( \Config::get($this->base_path) );
		
		$this->config	= \Config::get( $this->config_class );
		
	}
	
	/**
	 * Creates a %CKEditor instance.
	 * In incompatible browsers %CKEditor will downgrade to plain HTML &lt;textarea&gt; element.
	 *
	 * @param $name (string) Name of the %CKEditor instance (this will be also the "name" attribute of textarea element).
	 * @param $value (string) Initial value (optional).
	 * @param $config (array) The specific configurations to apply to this editor instance (optional). If don't pass, it will use the array set in CKEditor.config_js 
	 * @param $events (array) Event listeners for this editor instance (optional).
	 *
	 * Example usage:
	 * @code
	 * $CKEditor = new CKEditor();
	 * $CKEditor->editor("field1", "<p>Initial value.</p>");
	 * @endcode
	 *
	 * Advanced example:
	 * @code
	 * $CKEditor = new CKEditor();
	 * $config = array();
	 * $config['toolbar'] = array(
	 *     array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
	 *     array( 'Image', 'Link', 'Unlink', 'Anchor' )
	 * );
	 * $events['instanceReady'] = 'function (ev) {
	 *     alert("Loaded: " + ev.editor.name);
	 * }';
	 * $CKEditor->editor("field1", "<p>Initial value.</p>", $config, $events);
	 * @endcode
	 */
	public function editor($name, $value = "", $config = array(), $events = array())
	{
		if( empty($config) )
			$config = \Config::get( $this->config_js );
			
		return parent::editor( $name, $value, $config, $events  );
	}
}
