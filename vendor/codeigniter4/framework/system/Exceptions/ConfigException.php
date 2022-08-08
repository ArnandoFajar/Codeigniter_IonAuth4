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
 * Exception for automatic logging.
 */
class ConfigException extends CriticalError
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

    public static function forDisabledMigrations()
    {
        return new static(lang('Migrations.disabled'));
    }
}
