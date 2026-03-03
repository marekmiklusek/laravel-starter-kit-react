<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/ForeignIdColumnDefinition.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Schema\ForeignIdColumnDefinition
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-83f9224fdb587f6e0055306d855cbf0b590d95b6f5a6bc6ce16defac95ede357-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/ForeignIdColumnDefinition.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Schema',
    'name' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
    'shortName' => 'ForeignIdColumnDefinition',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 56,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Schema\\ColumnDefinition',
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
      'blueprint' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'name' => 'blueprint',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The schema builder blueprint instance.
 *
 * @var \\Illuminate\\Database\\Schema\\Blueprint
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 25,
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
          'blueprint' => 
          array (
            'name' => 'blueprint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Schema\\Blueprint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 33,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 22,
                'endLine' => 22,
                'startTokenPos' => 46,
                'startFilePos' => 527,
                'endTokenPos' => 47,
                'endFilePos' => 528,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 55,
            'endColumn' => 70,
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
 * Create a new foreign ID column definition.
 *
 * @param  \\Illuminate\\Database\\Schema\\Blueprint  $blueprint
 * @param  array  $attributes
 */',
        'startLine' => 22,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'currentClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'aliasName' => NULL,
      ),
      'constrained' => 
      array (
        'name' => 'constrained',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 37,
                'endLine' => 37,
                'startTokenPos' => 83,
                'startFilePos' => 983,
                'endTokenPos' => 83,
                'endFilePos' => 986,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 37,
                'endLine' => 37,
                'startTokenPos' => 90,
                'startFilePos' => 999,
                'endTokenPos' => 90,
                'endFilePos' => 1002,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 48,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 37,
                'endLine' => 37,
                'startTokenPos' => 97,
                'startFilePos' => 1018,
                'endTokenPos' => 97,
                'endFilePos' => 1021,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 64,
            'endColumn' => 80,
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
 * Create a foreign key constraint on this column referencing the "id" column of the conventionally related table.
 *
 * @param  string|null  $table
 * @param  string|null  $column
 * @param  string|null  $indexName
 * @return \\Illuminate\\Database\\Schema\\ForeignKeyDefinition
 */',
        'startLine' => 37,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'currentClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'aliasName' => NULL,
      ),
      'references' => 
      array (
        'name' => 'references',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 52,
                'endLine' => 52,
                'startTokenPos' => 183,
                'startFilePos' => 1547,
                'endTokenPos' => 183,
                'endFilePos' => 1550,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 41,
            'endColumn' => 57,
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
 * Specify which column this foreign ID references on another table.
 *
 * @param  string  $column
 * @param  string|null  $indexName
 * @return \\Illuminate\\Database\\Schema\\ForeignKeyDefinition
 */',
        'startLine' => 52,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
        'currentClassName' => 'Illuminate\\Database\\Schema\\ForeignIdColumnDefinition',
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