<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\Handler\AbstractSyslogHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1d3f69c885ba356b1ae73e1aedbea24cfda06dfde6ba1f1bc94fe951f3f1a754-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
      ),
    ),
    'namespace' => 'Monolog\\Handler',
    'name' => 'Monolog\\Handler\\AbstractSyslogHandler',
    'shortName' => 'AbstractSyslogHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Common syslog functionality
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 95,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Monolog\\Handler\\AbstractProcessingHandler',
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
      'facility' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'implementingClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'name' => 'facility',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'facilities' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'implementingClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'name' => 'facilities',
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
          'code' => '[\'auth\' => \\LOG_AUTH, \'authpriv\' => \\LOG_AUTHPRIV, \'cron\' => \\LOG_CRON, \'daemon\' => \\LOG_DAEMON, \'kern\' => \\LOG_KERN, \'lpr\' => \\LOG_LPR, \'mail\' => \\LOG_MAIL, \'news\' => \\LOG_NEWS, \'syslog\' => \\LOG_SYSLOG, \'user\' => \\LOG_USER, \'uucp\' => \\LOG_UUCP]',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 41,
            'startTokenPos' => 62,
            'startFilePos' => 652,
            'endTokenPos' => 141,
            'endFilePos' => 1028,
          ),
        ),
        'docComment' => '/**
 * List of valid log facility names.
 * @var array<string, int>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 6,
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
      'toSyslogPriority' => 
      array (
        'name' => 'toSyslogPriority',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Monolog\\Level',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 41,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Translates Monolog log levels to syslog log priorities.
 */',
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'implementingClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'currentClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'aliasName' => NULL,
      ),
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'facility' => 
          array (
            'name' => 'facility',
            'default' => 
            array (
              'code' => '\\LOG_USER',
              'attributes' => 
              array (
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 189,
                'startFilePos' => 1417,
                'endTokenPos' => 189,
                'endFilePos' => 1425,
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
                      'name' => 'int',
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 33,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'level' => 
          array (
            'name' => 'level',
            'default' => 
            array (
              'code' => '\\Monolog\\Level::Debug',
              'attributes' => 
              array (
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 202,
                'startFilePos' => 1454,
                'endTokenPos' => 204,
                'endFilePos' => 1465,
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
                      'name' => 'int',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Monolog\\Level',
                      'isIdentifier' => false,
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 67,
            'endColumn' => 104,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'bubble' => 
          array (
            'name' => 'bubble',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 213,
                'startFilePos' => 1483,
                'endTokenPos' => 213,
                'endFilePos' => 1486,
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 107,
            'endColumn' => 125,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string|int $facility Either one of the names of the keys in $this->facilities, or a LOG_* facility constant
 */',
        'startLine' => 54,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'implementingClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'currentClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'aliasName' => NULL,
      ),
      'getDefaultFormatter' => 
      array (
        'name' => 'getDefaultFormatter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Monolog\\Formatter\\FormatterInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @inheritDoc
 */',
        'startLine' => 91,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'implementingClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
        'currentClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
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