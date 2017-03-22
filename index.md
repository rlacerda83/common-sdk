---
layout: default
---



# common-sdk

Componente de uso comum entre SDKs para integração a partir de aplicações PHP com Restful webservices



## Requisitos para uso

* PHP >= *5.6*
* [curl extension](http://php.net/manual/en/intro.curl.php)
* [Composer Dependency Manager](http://getcomposer.org)

Este componente **não é uma aplicação Stand Alone** e seu objetivo é ser utilizado como biblioteca.
Sua implantação deve ser feita por desenvolvedores experientes.

**Isto não é um Plugin!**

As opções que funcionam no modo de comando apenas servem para depuração em modo de
desenvolvimento.

A documentação mais importante está nos testes unitários. Se você não consegue ler os testes unitários, eu recomendo que não utilize esta biblioteca.



## Direitos autorais e de licença

Este componente está sob a [licença MIT](https://github.com/gpupo/common-sdk/blob/master/LICENSE)

Para a informação dos direitos autorais e de licença você deve ler o arquivo
de [licença](https://github.com/gpupo/common-sdk/blob/master/LICENSE) que é distribuído com este código-fonte.

### Resumo da licença

Exigido:

- Aviso de licença e direitos autorais

Permitido:

- Uso comercial
- Modificação
- Distribuição
- Sublicenciamento

Proibido:

- Responsabilidade Assegurada



## Indicadores de qualidade

[![Build Status](https://secure.travis-ci.org/gpupo/common-sdk.png?branch=master)](http://travis-ci.org/gpupo/common-sdk)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gpupo/common-sdk/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gpupo/common-sdk/?branch=master)
[![Codacy Badge](https://www.codacy.com/project/badge/323afbd6d88f4c4dbc4dec27810c70b9)](https://www.codacy.com/app/g/common-sdk)
[![Code Climate](https://codeclimate.com/github/gpupo/common-sdk/badges/gpa.svg)](https://codeclimate.com/github/gpupo/common-sdk)
[![Test Coverage](https://codeclimate.com/github/gpupo/common-sdk/badges/coverage.svg)](https://codeclimate.com/github/gpupo/common-sdk/coverage)


[![SensioLabsInsight](https://insight.sensiolabs.com/projects/97bf5441-1b04-4f1d-a946-c547c61a90f0/big.png)](https://insight.sensiolabs.com/projects/97bf5441-1b04-4f1d-a946-c547c61a90f0)



---

## Agradecimentos

* A todos os que [contribuiram com patchs](https://github.com/gpupo/common-sdk/contributors);
* Aos que [fizeram sugestões importantes](https://github.com/gpupo/common-sdk/issues);
* Aos desenvolvedores que criaram as [bibliotecas utilizadas neste componente](https://github.com/gpupo/common-sdk/blob/master/Resources/doc/libraries-list.md).

 _- [Gilmar Pupo](http://www.g1mr.com/)_



---

## Instalação

Adicione o pacote ``common-sdk`` ao seu projeto utilizando [composer](http://getcomposer.org):

    composer require gpupo/common-sdk









---

## Links

* [Composer Package](https://packagist.org/packages/gpupo/) on packagist.org
* [SDKs para o Ecommerce do Brasil](http://www.g1mr.com/common-sdk/)













---

## Propriedades dos objetos



### CommonSdk\Client\Client


- [x] Url independente de configuracao
- [x] Url baseado em configuracao
- [x] Url evitando configuracao
- [x] Acesso a objeto request
- [x] Objeto request possui header
- [x] Executa requisições post

### CommonSdk\Client\Oauth2\Provider\GenericProvider


- [x] Acesso a url de autorizacao

### CommonSdk\Entity\Entity


- [x] Acesso a identificador padrao da entidade
- [x] Acesso ao nome da entidade atual
- [x] Valida dados obrigatórios
- [x] Possui getter para acesso a foo 
- [x] Possui setter para definir foo 
- [x] Possui getter para acesso a bar 
- [x] Possui setter para definir bar 
- [x] Possui métodos especiais para output de informações

### CommonSdk\Entity\Manager


- [x] Factory collection
- [x] Nao encontra diferenca entre entidades iguais 
- [x] Encontra diferenca entre entidades diferentes 
- [x] Encontra diferenca entre entidades diferentes a partir de chaves selecionadas 
- [x] Falha ao tentar encontrar diferenca usando propriedade inexistente 

### CommonSdk\Entity\Metadata\MetadataContainer


- [x] É um objeto metadata container 
- [x] Possui objeto metadata 
- [x] Possui propriedade indicadora de quantidade de registros 

### CommonSdk\Entity\Metadata\Metadata


- [ ] ``getOffset()`` 
- [ ] ``getLimit()`` 
- [ ] ``getTotalRows()`` 

### CommonSdk\Entity\Schema\Tools


- [x] Valida tipos de informacao 
- [x] Normaliza tipos de informacao 
- [x] Aborta com uso de dados invalidos
- [x] Sucesso com uso de dados validos

### CommonSdk\Exception\ClientException


- [ ] ``setMessage()`` 
- [ ] ``toLog()`` 
- [ ] ``addMessagePrefix()`` 

### CommonSdk\Exception\InvalidArgumentException


- [ ] ``setMessage()`` 
- [ ] ``toLog()`` 
- [ ] ``addMessagePrefix()`` 

### CommonSdk\Exception\Main


- [x] A biblioteca possui uma lista de Exceções 

### CommonSdk\Exception\RuntimeException


- [ ] ``setMessage()`` 
- [ ] ``toLog()`` 
- [ ] ``addMessagePrefix()`` 

### CommonSdk\Exception\UnexpectedValueException


- [ ] ``setMessage()`` 
- [ ] ``toLog()`` 
- [ ] ``addMessagePrefix()`` 

### CommonSdk\Map


- [ ] ``getResource()`` 
- [ ] ``placeHolderValueEmpty()`` 
- [ ] ``populatePlaceholders()`` 
- [ ] ``toLog()`` 
- [ ] ``getMode()`` 

### CommonSdk\Request


- [ ] ``getBody()`` 
- [ ] ``getHeader()`` 
- [ ] ``setTransport()`` 
- [ ] ``getTransport()`` 
- [ ] ``exec()`` 

### CommonSdk\Response


- [ ] ``validate()`` 
- [ ] ``getData()`` 

### CommonSdk\Transport


- [x] Recebe objeto options
- [x] Executa uma requisição para url informada





## Lista de dependências (libraries)

Name | Version | Description
-----|---------|------------------------------------------------------
codeclimate/php-test-reporter | v0.3.2 | PHP client for reporting test coverage to Code Climate
doctrine/instantiator | 1.0.5 | A small, lightweight utility to instantiate objects in PHP without invoking their constructors
gpupo/cache | 1.3.0 | Caching library that implements PSR-6
gpupo/common | 1.7.3 | Common Objects
guzzle/guzzle | v3.9.3 | PHP HTTP client. This library is deprecated in favor of https://packagist.org/packages/guzzlehttp/guzzle
monolog/monolog | 1.20.0 | Sends your logs to files, sockets, inboxes, databases and various web services
myclabs/deep-copy | 1.5.1 | Create deep copies (clones) of your objects
phpdocumentor/reflection-common | 1.0 | Common reflection classes used by phpdocumentor to reflect the code structure
phpdocumentor/reflection-docblock | 3.1.0 | With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.
phpdocumentor/type-resolver | 0.2 | 
phpspec/prophecy | v1.6.1 | Highly opinionated mocking framework for PHP 5.3+
phpunit/php-code-coverage | 4.0.0 | Library that provides collection, processing, and rendering functionality for PHP code coverage information.
phpunit/php-file-iterator | 1.4.1 | FilterIterator implementation that filters files based on a list of suffixes.
phpunit/php-text-template | 1.2.1 | Simple template engine.
phpunit/php-timer | 1.0.8 | Utility class for timing
phpunit/php-token-stream | 1.4.8 | Wrapper around PHP's tokenizer extension.
phpunit/phpunit | 5.4.6 | The PHP Unit Testing framework.
phpunit/phpunit-mock-objects | 3.2.3 | Mock Object library for PHPUnit
psr/cache | 1.0.0 | Common interface for caching libraries
psr/log | 1.0.0 | Common interface for logging libraries
satooshi/php-coveralls | v1.0.1 | PHP client library for Coveralls API
sebastian/code-unit-reverse-lookup 1.0.0 | Looks up which function or method a line of code belongs to
sebastian/comparator | 1.2.0 | Provides the functionality to compare PHP values for equality
sebastian/diff | 1.4.1 | Diff implementation
sebastian/environment | 1.3.7 | Provides functionality to handle HHVM/PHP environments
sebastian/exporter | 1.2.2 | Provides the functionality to export PHP variables for visualization
sebastian/global-state | 1.1.1 | Snapshotting of global state
sebastian/object-enumerator | 1.0.0 | Traverses array structures and object graphs to enumerate all referenced objects
sebastian/peek-and-poke | dev-master a8295 | Proxy for accessing non-public attributes and methods of an object
sebastian/recursion-context | 1.0.2 | Provides functionality to recursively process PHP variables
sebastian/resource-operations | 1.0.0 | Provides a list of PHP built-in functions that operate on resources
sebastian/version | 2.0.0 | Library that helps with managing the version number of Git-hosted PHP projects
symfony/config | v3.1.2 | Symfony Config Component
symfony/console | v3.1.2 | Symfony Console Component
symfony/event-dispatcher | v2.8.8 | Symfony EventDispatcher Component
symfony/filesystem | v3.1.2 | Symfony Filesystem Component
symfony/polyfill-mbstring | v1.2.0 | Symfony polyfill for the Mbstring extension
symfony/stopwatch | v3.1.2 | Symfony Stopwatch Component
symfony/yaml | v3.1.2 | Symfony Yaml Component
twig/twig | v1.24.1 | Twig, the flexible, fast, and secure template language for PHP
webmozart/assert | 1.0.2 | Assertions to validate method input/output with nice error messages.






