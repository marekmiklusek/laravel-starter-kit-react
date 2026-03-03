<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\Handler\SyslogUdpHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-577d7733061ff27dff04988cd0efce07b8165264e780b470468596e9d6e50989-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Monolog\\Handler\\SyslogUdpHandler',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
      ),
    ),
    'namespace' => 'Monolog\\Handler',
    'name' => 'Monolog\\Handler\\SyslogUdpHandler',
    'shortName' => 'SyslogUdpHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A Handler for logging to a remote syslogd server.
 *
 * @author Jesper Skovgaard Nielsen <nulpunkt@gmail.com>
 * @author Dominik Kukacka <dominik.kukacka@gmail.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 154,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Monolog\\Handler\\AbstractSyslogHandler',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'RFC3164' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'name' => 'RFC3164',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 59,
            'startFilePos' => 666,
            'endTokenPos' => 59,
            'endFilePos' => 666,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 22,
      ),
      'RFC5424' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'name' => 'RFC5424',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 68,
            'startFilePos' => 689,
            'endTokenPos' => 68,
            'endFilePos' => 689,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 22,
      ),
      'RFC5424e' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'name' => 'RFC5424e',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 30,
            'endLine' => 30,
            'startTokenPos' => 77,
            'startFilePos' => 713,
            'endTokenPos' => 77,
            'endFilePos' => 713,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
    ),
    'immediateProperties' => 
    array (
      'dateFormats' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'name' => 'dateFormats',
        'modifiers' => 4,
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
          'code' => '[self::RFC3164 => \'M d H:i:s\', self::RFC5424 => \\DateTime::RFC3339, self::RFC5424e => \\DateTime::RFC3339_EXTENDED]',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 37,
            'startTokenPos' => 90,
            'startFilePos' => 792,
            'endTokenPos' => 123,
            'endFilePos' => 936,
          ),
        ),
        'docComment' => '/** @var array<self::RFC*, string> */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'socket' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'name' => 'socket',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Monolog\\Handler\\SyslogUdp\\UdpSocket',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ident' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'name' => 'ident',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rfc' => 
      array (
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'name' => 'rfc',
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
        'docComment' => '/** @var self::RFC* */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 23,
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
          'host' => 
          array (
            'name' => 'host',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'port' => 
          array (
            'name' => 'port',
            'default' => 
            array (
              'code' => '514',
              'attributes' => 
              array (
                'startLine' => 55,
                'endLine' => 55,
                'startTokenPos' => 168,
                'startFilePos' => 1895,
                'endTokenPos' => 168,
                'endFilePos' => 1897,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 47,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'facility' => 
          array (
            'name' => 'facility',
            'default' => 
            array (
              'code' => 'LOG_USER',
              'attributes' => 
              array (
                'startLine' => 55,
                'endLine' => 55,
                'startTokenPos' => 179,
                'startFilePos' => 1923,
                'endTokenPos' => 179,
                'endFilePos' => 1930,
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
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 64,
            'endColumn' => 94,
            'parameterIndex' => 2,
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
                'startLine' => 55,
                'endLine' => 55,
                'startTokenPos' => 192,
                'startFilePos' => 1959,
                'endTokenPos' => 194,
                'endFilePos' => 1970,
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
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 97,
            'endColumn' => 134,
            'parameterIndex' => 3,
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
                'startLine' => 55,
                'endLine' => 55,
                'startTokenPos' => 203,
                'startFilePos' => 1988,
                'endTokenPos' => 203,
                'endFilePos' => 1991,
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
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 137,
            'endColumn' => 155,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'ident' => 
          array (
            'name' => 'ident',
            'default' => 
            array (
              'code' => '\'php\'',
              'attributes' => 
              array (
                'startLine' => 55,
                'endLine' => 55,
                'startTokenPos' => 212,
                'startFilePos' => 2010,
                'endTokenPos' => 212,
                'endFilePos' => 2014,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 158,
            'endColumn' => 178,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'rfc' => 
          array (
            'name' => 'rfc',
            'default' => 
            array (
              'code' => 'self::RFC5424',
              'attributes' => 
              array (
                'startLine' => 55,
                'endLine' => 55,
                'startTokenPos' => 221,
                'startFilePos' => 2028,
                'endTokenPos' => 223,
                'endFilePos' => 2040,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 181,
            'endColumn' => 204,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param  string                    $host     Either IP/hostname or a path to a unix socket (port must be 0 then)
 * @param  int                       $port     Port number, or 0 if $host is a unix socket
 * @param  string|int                $facility Either one of the names of the keys in $this->facilities, or a LOG_* facility constant
 * @param  bool                      $bubble   Whether the messages that are handled can bubble up the stack or not
 * @param  string                    $ident    Program name or tag for each log message.
 * @param  int                       $rfc      RFC to format the message for.
 * @throws MissingExtensionException when there is no socket extension
 *
 * @phpstan-param self::RFC* $rfc
 */',
        'startLine' => 55,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'currentClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
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
            'startLine' => 69,
            'endLine' => 69,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 69,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'currentClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
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
        'docComment' => NULL,
        'startLine' => 80,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'currentClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'aliasName' => NULL,
      ),
      'splitMessageIntoLines' => 
      array (
        'name' => 'splitMessageIntoLines',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 44,
            'endColumn' => 51,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param  string|string[] $message
 * @return string[]
 */',
        'startLine' => 89,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'currentClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'aliasName' => NULL,
      ),
      'makeCommonSyslogHeader' => 
      array (
        'name' => 'makeCommonSyslogHeader',
        'parameters' => 
        array (
          'severity' => 
          array (
            'name' => 'severity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 47,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'datetime' => 
          array (
            'name' => 'datetime',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateTimeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 62,
            'endColumn' => 88,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Make common syslog header (see rfc5424 or rfc3164)
 */',
        'startLine' => 108,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'currentClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'aliasName' => NULL,
      ),
      'setSocket' => 
      array (
        'name' => 'setSocket',
        'parameters' => 
        array (
          'socket' => 
          array (
            'name' => 'socket',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Monolog\\Handler\\SyslogUdp\\UdpSocket',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 148,
            'endLine' => 148,
            'startColumn' => 31,
            'endColumn' => 47,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Inject your own socket, mainly used for testing
 *
 * @return $this
 */',
        'startLine' => 148,
        'endLine' => 153,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Monolog\\Handler',
        'declaringClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'implementingClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
        'currentClassName' => 'Monolog\\Handler\\SyslogUdpHandler',
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