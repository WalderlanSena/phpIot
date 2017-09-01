<h1 align="center">Phpuino</h1>
<p align="center">
  <img src="http://walderlan.xyz/assets/stablePhp.svg">
</p>
<p align="center">Biblioteca php para manipulação da porta serial do arduino</p>

<h2>Como usar:</h2>

<h3>Enviando dados</h3>

```php

  $app = new \Core\Phpuino();
  $app->setPort("/dev/ttyACM0","r+");

  $write = new \Core\Write($app);
  $write->write("ola mundo");

```

<h3>Lendo dados</h3>

```php

  $app = new \Core\Phpuino();
  $app->setPort("/dev/ttyACM0","r+");

  $readData = new \Core\Write($app);
  $readData->read(1024);

```
## Licença
Essa biblioteca é um software livre, deste modo é licenciada sob a licença <em>GPL License</em>
