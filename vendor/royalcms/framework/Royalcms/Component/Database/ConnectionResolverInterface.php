<?php namespace Royalcms\Component\Database;

interface ConnectionResolverInterface {

	/**
	 * Get a database connection instance.
	 *
	 * @param  string  $name
	 * @return \Royalcms\Component\Database\Connection
	 */
	public function connection($name = null);

	/**
	 * Get the default connection name.
	 *
	 * @return string
	 */
	public function getDefaultConnection();

	/**
	 * Set the default connection name.
	 *
	 * @param  string  $name
	 * @return void
	 */
	public function setDefaultConnection($name);

}
