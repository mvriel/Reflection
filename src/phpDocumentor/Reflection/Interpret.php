<?php

namespace phpDocumentor\Reflection;

use phpDocumentor\Reflection\Types\Context;

/**
 * An immutable value object that commands a reducer in the interpreter how
 * to interpret the given subject.
 */
final class Interpret
{
    /** @var mixed */
    private $subject;

    /** @var Interpreter|null */
    private $interpreter;

    /** @var Context */
    private $context;

    /**
     * InterpretCommand constructor.
     *
     * @param mixed $subject
     * @param Context $withContext
     */
    public function __construct($subject, Context $withContext)
    {
        $this->subject = $subject;
        $this->context = $withContext;
    }

    /**
     * @return mixed
     */
    public function subject()
    {
        return $this->subject;
    }

    /**
     * @return Interpreter|null
     */
    public function interpreter()
    {
        return $this->interpreter;
    }

    /**
     * @return Context
     */
    public function context()
    {
        return $this->context;
    }

    /**
     * @param Interpreter $interpreter
     *
     * @return Interpret
     */
    public function usingInterpreter(Interpreter $interpreter)
    {
        $command = clone $this;
        $command->interpreter = $interpreter;

        return $command;
    }
}
