<?php
namespace BlockOpsInterface;
/**
 *	@description	
 */
interface IUser
{
	/**
	 *	@description	
	 */
	public	function get();
	/**
	 *	@description	
	 */
	public	function exists();
	/**
	 *	@description	
	 */
	public	function create();
	/**
	 *	@description	
	 */
	public	function update();
}