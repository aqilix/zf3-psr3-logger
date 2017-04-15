PSR3 Logger For ZF3 and ZF2 Application
=======================================

This is a simple module for loading **logger** using `PSR3` to your ZF3/ZF2 application. By default the **logger** will write to a file (`data/log/system.log`). But you can override the logger configuration by override **logger** in `autoload/*.local.php`.
By using this module you don't need to write `delegators` to modify the **logger** from `Zend\Log`.

### Installation

Add `zf3-psr3-logger` to `composer.json`

```
composer require aqilix/zf3-psr3-logger
```

Add `Aqilix\\ZF3PSR3Logger` to `config/modules.config.php`

### Usage

Inject `psr3_logger` service into class that wanna use **logger**. If using `factories` we can do it like this

```
public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
{
    $example = new Example();
    $example->setLogger($container->get("psr3_logger"));
    return $example;
}
```

And here the `Example` class

```
class Example
{
    use Psr\Log\LoggerAwareTrait;

    public function test()
    {
        $this->logger->log(\Psr\Log\LogLevel::INFO, "{function} Testing logger", ["function" => __FUNCTION__]);
        $this->logger->log(\Psr\Log\LogLevel::ERROR, "{function} Testing logger", ["function" => __FUNCTION__]);
    }
}
```
