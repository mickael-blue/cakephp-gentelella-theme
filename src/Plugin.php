<?php
declare(strict_types=1);
namespace Gentelella;

use Cake\Console\CommandCollection;
use Cake\Core\BasePlugin;
use Cake\Core\ContainerInterface;
use Cake\Core\PluginApplicationInterface;
use Cake\Http\MiddlewareQueue;

/**
 * FileStorage Plugin for CakePHP
 */
class Plugin extends BasePlugin
{

    public function bootstrap(PluginApplicationInterface $app): void
    {
        // Add constants, load configuration defaults.
        // By default will load `config/bootstrap.php` in the plugin.
        parent::bootstrap($app);
        $app->addPlugin('BootstrapUI');
    }

}
