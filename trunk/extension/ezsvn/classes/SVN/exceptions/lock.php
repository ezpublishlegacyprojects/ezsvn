<?php
class xrowSVNLockException extends ezcBaseException
{ 
    public $wc;
    public function __construct( $message, xrowSVNWorkingCopy $wc )
    {
        $this->wc = $wc;
        parent::__construct( $message );
    }
}
?>