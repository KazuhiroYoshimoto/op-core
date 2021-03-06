<?php
/**
 * 
 * @version 1.0
 * @since   2012
 * @author  Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright (C) 2004 Tomoaki Nagahara All rights reserved.
 */
class Config extends stdClass
{
	function Config()
	{
		
	}
	
	function __set( $name, $value )
	{
		if(!isset($this->{$name})){
			$this->{$name} = new Config();
			$this->{$name} = $value;
			return $this->{$name};
		}else{
			printf('<p>%s, %s</p>',__METHOD__, $name);
		}
	}

	function __get($name)
	{
		if(!isset($this->{$name})){
			//  use property chain
			$this->{$name} = new Config();
			return $this->{$name};
		}else{
			printf('<p>%s, %s</p>',__METHOD__, $name);
		}
	}
}
