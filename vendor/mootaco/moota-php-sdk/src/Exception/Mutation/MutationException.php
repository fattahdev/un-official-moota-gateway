<?php


namespace Moota\Moota\Exception\Mutation;

class MutationException extends \Exception
{
    private $errors;

    public function __construct($message, $code = 0, Throwable $previous = null, $errors = []) {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getPharseErrors() { return $this->errors; }
}