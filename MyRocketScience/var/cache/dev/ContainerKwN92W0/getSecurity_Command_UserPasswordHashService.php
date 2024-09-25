<?php

namespace ContainerKwN92W0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_UserPasswordHashService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.user_password_hash' shared service.
     *
     * @return \Symfony\Component\PasswordHasher\Command\UserPasswordHashCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Command/UserPasswordHashCommand.php';

        $container->privates['security.command.user_password_hash'] = $instance = new \Symfony\Component\PasswordHasher\Command\UserPasswordHashCommand(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')), ['Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface']);

        $instance->setName('security:hash-password');
        $instance->setDescription('Hash a user password');

        return $instance;
    }
}
