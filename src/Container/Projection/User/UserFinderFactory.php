<?php
/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Prooph\ProophessorDo\Container\Projection\User;

use Interop\Container\ContainerInterface;
use Prooph\ProophessorDo\Projection\User\UserFinder;

/**
 * Class UserFinderFactory
 *
 * @package Prooph\ProophessorDo\Projection\User
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class UserFinderFactory
{

    /**
     * @param ContainerInterface $container
     * @return UserFinder
     */
    public function __invoke(ContainerInterface $container)
    {
        return new UserFinder($container->get('doctrine.connection.default'));
    }
}
