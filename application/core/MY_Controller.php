<?php
/**
* 
*/
class MY_Controller extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('template');
	}
}