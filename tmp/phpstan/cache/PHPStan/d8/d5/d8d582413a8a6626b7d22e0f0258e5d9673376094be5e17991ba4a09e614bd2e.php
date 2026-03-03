<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\Handler\ProcessableHandlerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-2f951faf55182850873e0c302277ab8b75b943db4d9b17f778b3791feb535643-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Monolog\\Handler\\ProcessableHandlerInterface',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php',
      ),
    ),
    'namespace' => 'Monolog\\Handler',
    'name' => 'Monolog\\Handler\\ProcessableHandlerInterface',
    'shortName' => 'ProcessableHandlerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface to describe loggers that have processors
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 43,
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
            'startLine' => 32,
            'endLine' => 32,
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
 * Adds a processor in the stack.
 *
 * @phpstan-param ProcessorInterface|(callable(LogRecord): LogRecord) $callback
 *
 * @param  ProcessorInterface|callable $callback
 * @return HandlerInterface            self
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\ProcessableHandlerInterface',
        'implementingClassName' => 'Monolog\\Handler\\ProcessableHandlerInterface',
        'currentClassName' => 'Monolog\\Handler\\ProcessableHandlerInterface',
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
 * Removes the processor on top of the stack and returns it.
 *
 * @phpstan-return ProcessorInterface|(callable(LogRecord): LogRecord) $callback
 *
 * @throws \\LogicException             In case the processor stack is empty
 * @return callable|ProcessorInterface
 */',
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\ProcessableHandlerInterface',
        'implementingClassName' => 'Monolog\\Handler\\ProcessableHandlerInterface',
        'currentClassName' => 'Monolog\\Handler\\ProcessableHandlerInterface',
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