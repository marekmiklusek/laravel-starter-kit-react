<?php declare(strict_types = 1);

// odsl-C:\Users\marek\Herd\wellmall\app\Actions\Fortify\ResetUserPassword.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Actions\Fortify\ResetUserPassword
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.16-278ea473d5090c93b3cbaebc06ee4c13b4f29fc5a7a1e33ffabe5cfcbf72f310',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Actions\\Fortify\\ResetUserPassword',
        'filename' => 'C:/Users/marek/Herd/wellmall/app/Actions/Fortify/ResetUserPassword.php',
      ),
    ),
    'namespace' => 'App\\Actions\\Fortify',
    'name' => 'App\\Actions\\Fortify\\ResetUserPassword',
    'shortName' => 'ResetUserPassword',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 31,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
    ),
    'traitClassNames' => 
    array (
      0 => 'App\\Concerns\\PasswordValidationRules',
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
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Models\\User',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 27,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'input' => 
          array (
            'name' => 'input',
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
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 39,
            'endColumn' => 50,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validate and reset the user\'s forgotten password.
 *
 * @param  array<string, string>  $input
 */',
        'startLine' => 21,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Actions\\Fortify',
        'declaringClassName' => 'App\\Actions\\Fortify\\ResetUserPassword',
        'implementingClassName' => 'App\\Actions\\Fortify\\ResetUserPassword',
        'currentClassName' => 'App\\Actions\\Fortify\\ResetUserPassword',
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