<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoft\Rpc\Client\Contract;

/**
 * Class ExtenderInterface
 *
 * @since 2.0
 */
interface ExtenderInterface
{
    /**
     * @return array
     *
     * @example
     * [
     *     'key' => 'value',
     *     'key' => 'value'
     * ]
     */
    public function getExt(): array;
}
