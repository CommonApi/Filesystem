<?php
/**
 * Filesystem Connection Interface
 *
 * @package    Filesystem
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Filesystem;

/**
 * Filesystem Connection Interface
 *
 * @package    Filesystem
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      1.0
 */
interface ConnectionInterface
{
    /**
     * Connect to the Filesystem
     *
     * @param   array $options
     *
     * @return  $this
     * @since   1.0.0
     */
    public function connect($options = array());

    /**
     * Close the Connection
     *
     * @return  $this
     * @since   1.0.0
     */
    public function close();
}
