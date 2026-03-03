<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/ResettableInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\ResettableInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3101f006af65878ce8fd24ea6d0706e4f7c6b046690ac2f19e42b45bdc902974-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Monolog\\ResettableInterface',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/ResettableInterface.php',
      ),
    ),
    'namespace' => 'Monolog',
    'name' => 'Monolog\\ResettableInterface',
    'shortName' => 'ResettableInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Handler or Processor implementing this interface will be reset when Logger::reset() is called.
 *
 * Resetting ends a log cycle gets them back to their initial state.
 *
 * Resetting a Handler or a Processor means flushing/cleaning all buffers, resetting internal
 * state, and getting it back to a state in which it can receive log records again.
 *
 * This is useful in case you want to avoid logs leaking between two requests or jobs when you
 * have a long running process like a worker or an application server serving multiple requests
 * in one process.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 31,
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
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog',
        'declaringClassName' => 'Monolog\\ResettableInterface',
        'implementingClassName' => 'Monolog\\ResettableInterface',
        'currentClassName' => 'Monolog\\ResettableInterface',
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