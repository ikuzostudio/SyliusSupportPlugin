<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Support Plugin</h1>

<p align="center">Add Ikuzo support links into Sylius.</p>

## Quickstart


```
$ composer require ikuzostudio/support-plugin
```

Add plugin dependencies to your `config/bundles.php` file:

```php
return [
  // ...
  Ikuzo\SyliusAvisVerifiesPlugin\IkuzoSyliusSupportPlugin::class => ['all' => true],
];
```

Import required config in your `config/packages/_sylius.yaml` file:

```yaml
# config/packages/_sylius.yaml

imports:
  ...
  - { resource: "@IkuzoSyliusSupportPlugin/Resources/config/app/config.yaml"}
```