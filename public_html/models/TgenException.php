<?php
class TgenException extends Exception
{
    const TYPE_NOT_IMPLEMENTED   = 100;
    const INVALID_PARAMETER      = 200;
    const CONNECTION_FAILED      = 500;
    const INVALID_PAGE           = 600;

    protected $_messages = array(
        self::TYPE_NOT_IMPLEMENTED   => "'{OTHER}' is not an implemented type",
        self::INVALID_PARAMETER      => "'{OTHER}' was sent a missing/invalid parameter",
        self::CONNECTION_FAILED      => 'Connection failed',
        self::INVALID_PAGE           => 'Invalid page',
    );

    /**
     * Class constructor
     *
     * @param int    $code  One of the class constants defined above
     * @param string $other (optional) replaces {OTHER} in $_messages
     */
    public function __construct($code = null, $other = '')
    {
        if ($code === null) {
            throw new Exception('Error code cannot be null');
        } else if (!isset($this->_messages[$code])) {
            throw new Exception("Unrecognized error code: $code");
        } else {
            $newMsg = str_replace('{OTHER}', $other, $this->_messages[$code]);
            parent::__construct($newMsg, $code);
        }
    } //end __construct

} //end TgenException
