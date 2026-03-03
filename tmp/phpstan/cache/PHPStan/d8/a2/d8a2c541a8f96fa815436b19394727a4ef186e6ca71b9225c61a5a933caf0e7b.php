<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\Handler\ProcessableHandlerTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7de97be3b653016783c1885af79cc790822652ce25d350e30d83f5b71ba8665c-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php',
      ),
    ),
    'namespace' => 'Monolog\\Handler',
    'name' => 'Monolog\\Handler\\ProcessableHandlerTrait',
    'shortName' => 'ProcessableHandlerTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Helper trait for implementing ProcessableInterface
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 70,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'processors' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'implementingClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'name' => 'processors',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 49,
            'startFilePos' => 684,
            'endTokenPos' => 50,
            'endFilePos' => 685,
          ),
        ),
        'docComment' => '/**
 * @var callable[]
 * @phpstan-var array<(callable(LogRecord): LogRecord)|ProcessorInterface>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'pushProcessor' => 
      array (
        'name' => 'pushProcessor',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 35,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Monolog\\Handler\\HandlerInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @inheritDoc
 */',
        'startLine' => 34,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'implementingClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'currentClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'aliasName' => NULL,
      ),
      'popProcessor' => 
      array (
        'name' => 'popProcessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'callable',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @inheritDoc
 */',
        'startLine' => 44,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'implementingClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'currentClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'aliasName' => NULL,
      ),
      'processRecord' => 
      array (
        'name' => 'processRecord',
        'parameters' => 
        array (
          'record' => 
          array (
            'name' => 'record',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Monolog\\LogRecord',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 38,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Monolog\\LogRecord',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 53,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'implementingClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'currentClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'aliasName' => NULL,
      ),
      'resetProcessors' => 
      array (
        'name' => 'resetProcessors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 62,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'implementingClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'currentClassName' => 'Monolog\\Handler\\ProcessableHandlerTrait',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));