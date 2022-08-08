<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Database\Exceptions;

use Error;

class DatabaseException extends Error implements ExceptionInterface
{
    /**
     * Exit status code
     *
     * @var int
     */
<<<<<<< HEAD
    protected $code = 8;
=======
    protected $code = EXIT_DATABASE;
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
}
