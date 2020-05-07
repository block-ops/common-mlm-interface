<?php
namespace BlockOpsInterface;
/**
 *	@description	
 */
interface IOrder
{
	/**
	 *	@description	
	 */
	public	function get();
	/**
	 *	@description	
	 */
	public	function create();
	/**
	 *	@description	
	 */
	public	function update();
	/**
	 *	@description	
	 */
	public	function delete();
}