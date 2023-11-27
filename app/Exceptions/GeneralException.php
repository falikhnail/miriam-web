<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class GeneralException extends Exception {

    /**
     * @var
     */
    public $message;

    /**
     * GeneralException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Report the exception.
     */
    public function report() {
        //
    }

    public function render($request) {
        if ($request->is('api/*')) {
            return response([], 500);
        }

        return redirect()
            ->back()
            //->withInput()
            ->with($this->message);
    }
}
