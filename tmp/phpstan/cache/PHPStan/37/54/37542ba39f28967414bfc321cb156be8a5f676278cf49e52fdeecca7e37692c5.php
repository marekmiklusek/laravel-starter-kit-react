<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/HandlerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\Handler\HandlerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5b0f770ce764d50d871d805da2683ccfca39e64e70e56be3518648873318eeec-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Monolog\\Handler\\HandlerInterface',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
      ),
    ),
    'namespace' => 'Monolog\\Handler',
    'name' => 'Monolog\\Handler\\HandlerInterface',
    'shortName' => 'HandlerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface that all Monolog Handlers must implement
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 76,
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
      'isHandling' => 
      array (
        'name' => 'isHandling',
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
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 32,
            'endColumn' => 48,
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
 * Checks whether the given record will be handled by this handler.
 *
 * This is mostly done for performance reasons, to avoid calling processors for nothing.
 *
 * Handlers should still check the record levels within handle(), returning false in isHandling()
 * is no guarantee that handle() will not be called, and isHandling() might not be called
 * for a given record.
 *
 * @param LogRecord $record Partial log record having only a level initialized
 */',
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\HandlerInterface',
        'implementingClassName' => 'Monolog\\Handler\\HandlerInterface',
        'currentClassName' => 'Monolog\\Handler\\HandlerInterface',
        'aliasName' => NULL,
      ),
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
            'startLine' => 50,
            'endLine' => 50,
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
 * Handles a record.
 *
 * All records may be passed to this method, and the handler should discard
 * those that it does not want to handle.
 *
 * The return value of this function controls the bubbling process of the handler stack.
 * Unless the bubbling is interrupted (by returning true), the Logger class will keep on
 * calling further handlers in the stack with a given log record.
 *
 * @param  LogRecord $record The record to handle
 * @return bool      true means that this handler handled the record, and that bubbling is not permitted.
 *                   false means the record was either not processed or that this handler allows bubbling.
 */',
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\HandlerInterface',
        'implementingClassName' => 'Monolog\\Handler\\HandlerInterface',
        'currentClassName' => 'Monolog\\Handler\\HandlerInterface',
        'aliasName' => NULL,
      ),
      'handleBatch' => 
      array (
        'name' => 'handleBatch',
        'parameters' => 
        array (
          'records' => 
          array (
            'name' => 'records',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 33,
            'endColumn' => 46,
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
 * Handles a set of records at once.
 *
 * @param array<LogRecord> $records The records to handle
 */',
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\HandlerInterface',
        'implementingClassName' => 'Monolog\\Handler\\HandlerInterface',
        'currentClassName' => 'Monolog\\Handler\\HandlerInterface',
        'aliasName' => NULL,
      ),
      'close' => 
      array (
        'name' => 'close',
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
        'docComment' => '/**
 * Closes the handler.
 *
 * Ends a log cycle and frees all resources used by the handler.
 *
 * Closing a Handler means flushing all buffers and freeing any open resources/handles.
 *
 * Implementations have to be idempotent (i.e. it should be possible to call close several times without breakage)
 * and ideally handlers should be able to reopen themselves on handle() after they have been closed.
 *
 * This is useful at the end of a request and will be called automatically when the object
 * is destroyed if you extend Monolog\\Handler\\Handler.
 *
 * If you are thinking of calling this method yourself, most likely you should be
 * calling ResettableInterface::reset instead. Have a look.
 */',
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\HandlerInterface',
        'implementingClassName' => 'Monolog\\Handler\\HandlerInterface',
        'currentClassName' => 'Monolog\\Handler\\HandlerInterface',
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