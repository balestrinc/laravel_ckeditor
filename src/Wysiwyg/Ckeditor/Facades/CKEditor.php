<?php

namespace Wysiwyg\Ckeditor\Facades;

use Illuminate\Support\Facades\Facade;

class CKEditor extends Facade
{

	protected static function getFacadeAccessor()
	{
		return 'ckeditor';
	}
	
}