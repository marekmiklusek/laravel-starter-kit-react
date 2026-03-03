<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\Handler\AbstractProcessingHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b0315f8119ae7512878303942669086d1439264f4c89d6e8c3ecc7e9ee302b14-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
      ),
    ),
    'namespace' => 'Monolog\\Handler',
    'name' => 'Monolog\\Handler\\AbstractProcessingHandler',
    'shortName' => 'AbstractProcessingHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base Handler class providing the Handler structure, including processors and formatters
 *
 * Classes extending it should (in most cases) only implement write($record)
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Christophe Coevoet <stof@notk.org>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 60,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Monolog\\Handler\\AbstractHandler',
    'implementsClassNames' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerTrait',
      1 => 'Monolog\\Handler\\FormattableHandlerTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'handle' => 
      array (
        'name' => 'handle',
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 28,
            'endColumn' => 44,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @inheritDoc
 */',
        'startLine' => 32,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'implementingClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'currentClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'aliasName' => NULL,
      ),
      'write' => 
      array (
        'name' => 'write',
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
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 39,
            'endColumn' => 55,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Writes the (already formatted) record down to the log of the implementing handler
 */',
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'implementingClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'currentClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'aliasName' => NULL,
      ),
      'reset' => 
      array (
        'name' => 'reset',
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
        'startLine' => 54,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'implementingClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
        'currentClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
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