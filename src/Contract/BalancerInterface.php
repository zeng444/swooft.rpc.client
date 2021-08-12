<?php  declare(strict_types=1);


namespace Swoft\Rpc\Client\Contract;

/**
 * Interface BalancerInterface
 * @author Robert
 * @package Swoft\Rpc\Client\Contract
 */
interface BalancerInterface
{

    public function handle(array $hosts);

}
