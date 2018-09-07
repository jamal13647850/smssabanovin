<?php

namespace pgsavis\smssabanovin\Exceptions;

class HttpException extends BaseRuntimeException
{
	public function getName()
    {
        return 'HttpException';
    }
}

?>
