<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\Processor\PsrLogMessageProcessor
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-37c76ccc6b142c1262b9812679d16a29672924e351a031aca7d9df2cf6fb72de-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
      ),
    ),
    'namespace' => 'Monolog\\Processor',
    'name' => 'Monolog\\Processor\\PsrLogMessageProcessor',
    'shortName' => 'PsrLogMessageProcessor',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Processes a record\'s message according to PSR-3 rules
 *
 * It replaces {foo} with the value from $context[\'foo\']
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 87,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'SIMPLE_DATE' => 
      array (
        'declaringClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'implementingClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'name' => 'SIMPLE_DATE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '"Y-m-d\\\\TH:i:s.uP"',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 46,
            'startFilePos' => 601,
            'endTokenPos' => 46,
            'endFilePos' => 617,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 49,
      ),
    ),
    'immediateProperties' => 
    array (
      'dateFormat' => 
      array (
        'declaringClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'implementingClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'name' => 'dateFormat',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'removeUsedContextFields' => 
      array (
        'declaringClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'implementingClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'name' => 'removeUsedContextFields',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 42,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'dateFormat' => 
          array (
            'name' => 'dateFormat',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 36,
                'endLine' => 36,
                'startTokenPos' => 79,
                'startFilePos' => 997,
                'endTokenPos' => 79,
                'endFilePos' => 1000,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 33,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'removeUsedContextFields' => 
          array (
            'name' => 'removeUsedContextFields',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 36,
                'endLine' => 36,
                'startTokenPos' => 88,
                'startFilePos' => 1035,
                'endTokenPos' => 88,
                'endFilePos' => 1039,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 61,
            'endColumn' => 97,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string|null $dateFormat              The format of the timestamp: one supported by DateTime::format
 * @param bool        $removeUsedContextFields If set to true the fields interpolated into message gets unset
 */',
        'startLine' => 36,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Processor',
        'declaringClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'implementingClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'currentClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'aliasName' => NULL,
      ),
      '__invoke' => 
      array (
        'name' => '__invoke',
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
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 30,
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
            'name' => 'Monolog\\LogRecord',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @inheritDoc
 */',
        'startLine' => 45,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Processor',
        'declaringClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'implementingClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
        'currentClassName' => 'Monolog\\Processor\\PsrLogMessageProcessor',
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