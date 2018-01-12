<?php namespace System;

use RuntimeException;

/**
* Exception Framework
*
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class Exception extends RuntimeException
{
    /**
     *Attributters for debug deployer
     *
     * @var array
     */
    protected $attributes = [];
    /**
     * Message Template formatter sprintrf().
     *
     * @var string
     */
    protected $messageTemplate = '';
    /**
     * Constructor.
     * Create Exception
     * @param string|array $message
     */
    /**
     * Constructor.
     * Create Exception
     * @param string|array $message
     */
    public function __construct($message)
    {
        if (is_array($message)) {
            $this->attributes = $message;
            $message = vsprintf($this->messageTemplate, $message);
        } else {
            $message=trim($this->messageTemplate, ' %s').$message;
        }

        parent::__construct($message, 500, null);
    }
    /**
     * Get Attibutes
     *
     * @return array
     */
    public function getAttributes():array
    {
        return $this->attributes;
    }
}
