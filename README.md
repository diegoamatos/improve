# improve @SimpSyst

[![Maintainer](http://img.shields.io/badge/maintainer-@diegoamatos-blue.svg?style=flat-square)](https://twitter.com/diegoamatos)
[![Source Code](http://img.shields.io/badge/source-simpsyst/improve-blue.svg?style=flat-square)](https://github.com/diegoamatos/improve)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/simpsyst/improve.svg?style=flat-square)](https://packagist.org/packages/simpsyst/paginator)
[![Latest Version](https://img.shields.io/github/release/diegoamatos/improve.svg?style=flat-square)](https://github.com/diegoamatos/improve/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/diegoamatos/improve.svg?style=flat-square)](https://scrutinizer-ci.com/g/diegoamatos/improve)
[![Quality Score](https://img.shields.io/scrutinizer/g/diegoamatos/improve.svg?style=flat-square)](https://scrutinizer-ci.com/g/diegoamatos/improve)
[![Total Downloads](https://img.shields.io/packagist/dt/simpsyst/improve.svg?style=flat-square)](https://packagist.org/packages/simpsyst/improve)

###### improve is a component of website optimization for search engines and social networks. Simplified and straight to the point it creates the necessary tags and links in your ***head*** for the best search and sharing result.

improve é um componente de otimização de sites para motores de buscas e redes sociais. Simplificado e direto ao ponto ele cria as tags e links necessários em sua ***head*** para o melhor resultado de busca e compartilhamento.

## About SimpSyst

###### SimpSyst is a set of small and optimized PHP components for common tasks. Held by Diego Matos. With them you perform routine tasks with fewer lines, writing less and doing much more.

SimpSyst é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Diego Matos. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais.

### Highlights

- Simple composer for dynamic data (Compositor simples para dados dinâmicos)
- Author and publisher settings for Facebook (Configuração de autor e publicador para Facebook)
- Quickly configure TwitterCard data for sharing cards (Configure rapidamente os dados TwitterCard para cartões de compartilhamento)
- Quickly configure OpenGraph data for social sharing. (Configure rapidamente os dados OpenGraph para compartilhamento social.)
- Add FacebookAdmins or FacebookAppId and everything is ready (Adiciona FacebookAdmins ou FacebookAppId e tudo fica pronto)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

improve is available via Composer:

```bash
"simpsyst/improve": "2.0.*"
```

or run

```bash
composer require simpsyst/improve
```

## Documentation

###### For details on how to use the improve, see the sample folder with details in the component directory

Para mais detalhes sobre como usar o improve, veja a pasta de exemplo com detalhes no diretório do componente

#### @improve

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$op = new \SimpSyst\Improve\Improve();

echo $op->improver(
    "improve Happy and @SimpSyst",
    "Is a compact and easy-to-use tag creator to improve your site",
    "https://www.diegomatos.com/simpsyst/improve/example/",
    "https://www.diegomatos.com/storage/images/cache/tutorial-blockchain-para-iniciantes-aprenda-a-tecnologia-blockchain-800x500-34fd23f6.jpg"
)->render();
```

##### Result @improve

````html
<title>improve Happy and @SimpSyst</title>
<meta property="og:url" content="https://www.diegomatos.com/simpsyst/improve/example/"/>
<meta property="og:title" content="improve Happy and @SimpSyst"/>
<meta property="og:image" content="https://www.diegomatos.com/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"/>
<meta property="og:description" content="Is a compact and easy-to-use tag creator to improve your site"/>
<meta name="twitter:url" content="https://www.diegomatos.com/simpsyst/improve/example/"/>
<meta name="twitter:title" content="improve Happy and @SimpSyst"/>
<meta name="twitter:image" content="https://www.diegomatos.com/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"/>
<meta name="twitter:description" content="Is a compact and easy-to-use tag creator to improve your site"/>
<meta name="robots" content="index, follow"/>
<meta name="description" content="Is a compact and easy-to-use tag creator to improve your site"/>
<meta itemprop="url" content="https://www.diegomatos.com/simpsyst/improve/example/"/>
<meta itemprop="name" content="improve Happy and @SimpSyst"/>
<meta itemprop="image" content="https://www.diegomatos.com/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"/>
<meta itemprop="description" content="Is a compact and easy-to-use tag creator to improve your site"/>
<link rel="canonical" href="https://www.diegomatos.com/simpsyst/improve/example/"/>
````

#### @publisher

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$op = new \SimpSyst\Improve\Improve();

echo $op->publisher(
  "compusert",
  "diegoamatos"
)->render();
```

##### Result @publisher

````html
<meta property="article:publisher" content="https://www.facebook.com/compusert"/>
<meta property="article:author" content="https://www.facebook.com/diegoamatos"/>
````

#### @twitterCard

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$op = new \SimpSyst\Improve\Improve();

echo $op->twitterCard(
  "@diegoamatos",
  "@compusert",
  "diegomatos.com",
  "summary_large_image"
)->render();
```

##### Result @twitterCard

````html
<meta name="twitter:site" content="@diegoamatos"/>
<meta name="twitter:domain" content="diegomatos.com"/>
<meta name="twitter:creator" content="@diegoamatos"/>
<meta name="twitter:card" content="summary_large_image"/>
````

#### @openGraph

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$op = new \SimpSyst\Improve\Improve();

echo $op->openGraph(
  "compusert",
  "pt_BR",
  "article"
)->render();
```

##### Result @openGraph

````html
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="compusert"/>
<meta property="og:locale" content="pt_BR"/>
````

## Contributing

Please see [CONTRIBUTING](https://github.com/diegoamatos/improve/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email oi@diegomatos.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para oi@diegomatos.com em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Diego Matos](https://github.com/diegoamatos) (Developer)
- [Compusert Technologies](https://github.com/diegoamatos) (Team)
- [All Contributors](https://github.com/diegoamatos/improve/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/diegoamatos/improve/blob/master/LICENSE) for more information.
