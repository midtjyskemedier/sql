<?php

namespace mindplay\sql\framework;

/**
 * This interface defines the aspect of e.g. `Statement` that makes it "executable", in the
 * sense it can create or provide a fully-populated SQL `Template`, ready for execution.
 *
 * @see Connection::prepare()
 * @see Connection::execute()
 */
interface Executable
{
    /**
     * @return Template fully-populated SQL template
     */
    public function getTemplate();
}
