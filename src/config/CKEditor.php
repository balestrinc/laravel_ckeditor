<?php
return array(

	'config_class'=>array(

		'returnOutput' => true,
	    'basePath' => URL::asset('/packages/wysiwyg/ckeditor/ckeditor\/'),
	    'width' => '100%',
	
	    //Define os padrões de Colar para Plain Text
	    'pasteFromWordPromptCleanup'    => TRUE,
	    'pasteFromWordRemoveFontStyles' => TRUE,
	    'forcePasteAsPlainText'         => TRUE,
	    'ignoreEmptyParagraph'          => TRUE,
	    'removeFormatAttributes'        => TRUE,
	    'resize_dir'                    => 'vertical',	   
	    'extraPlugins'                  => 'loremIpsum'
      
      ),
      
	'config_js'=>array(
      
      	'language' 		  	=> 'PT-BR',
      	'removePlugins'   	=> 'elementspath',
      	'htmlEncodeOutput' 	=> true,
		'toolbar' 			=> array(
						      	array('Bold','Italic','Underline'),
						        array('JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'),
						        array('Format', 'TextColor'),
					      		array('LoremIpsum')
					      	   )
      	
	)

);