<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Exceptions;

/**
 * Cast Exceptions.
 *
 * @deprecated use CodeIgniter\Entity\Exceptions\CastException instead.
 *
 * @codeCoverageIgnore
 */
class CastException extends CriticalError
{
    use DebugTraceableTrait;

    /**
<<<<<<< HEAD
     * Error code
     *
     * @var int
     */
    protected $code = 3;
=======
     * Exit status code
     *
     * @var int
     */
    protected $code = EXIT_CONFIG;
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc

    public static function forInvalidJsonFormatException(int $error)
    {
        switch ($error) {
            case JSON_ERROR_DEPTH:
                return new static(lang('Cast.jsonErrorDepth'));

            case JSON_ERROR_STATE_MISMATCH:
                return new static(lang('Cast.jsonErrorStateMismatch'));

            case JSON_ERROR_CTRL_CHAR:
                return new static(lang('Cast.jsonErrorCtrlChar'));

            case JSON_ERROR_SYNTAX:
                return new static(lang('Cast.jsonErrorSyntax'));

            case JSON_ERROR_UTF8:
                return new static(lang('Cast.jsonErrorUtf8'));

            default:
                return new static(lang('Cast.jsonErrorUnknown'));
        }
    }
}
