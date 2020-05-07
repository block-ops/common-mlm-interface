<?php
namespace BlockOpsInterface;
/**
 *	@description	
 */
interface IVendor
{
	/**
	 *	@description	
	 */
	public	function getConnection();
	/**
	 *	@description	
	 */
	public	function Product();
	/**
	 *	@description	
	 */
	public	function Member();
	/**
	 *	@description	
	 */
	public	function Order();
	/**
	 *	@description	
	 */
	public	function Assets();
}