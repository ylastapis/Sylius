<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Order\StateResolver;

use Sylius\Component\Order\Model\OrderInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface StateResolverInterface
{
    /**
     * @param OrderInterface $order
     */
    public function resolve(OrderInterface $order): void;
}
