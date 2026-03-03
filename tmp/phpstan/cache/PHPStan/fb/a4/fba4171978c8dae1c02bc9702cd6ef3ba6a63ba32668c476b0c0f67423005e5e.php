<?php declare(strict_types = 1);

// osfsl-C:/Users/marek/Herd/wellmall/vendor/composer/../laravel/fortify/src/InteractsWithTwoFactorState.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Fortify\InteractsWithTwoFactorState
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f73477715b45d7c19daf4e715cb21c2a18b0706e0a0aea8136cb65ac619888bd-8.4.16-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'filename' => 'C:/Users/marek/Herd/wellmall/vendor/composer/../laravel/fortify/src/InteractsWithTwoFactorState.php',
      ),
    ),
    'namespace' => 'Laravel\\Fortify',
    'name' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
    'shortName' => 'InteractsWithTwoFactorState',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin \\Illuminate\\Foundation\\Http\\FormRequest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 66,
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
      'ensureStateIsValid' => 
      array (
        'name' => 'ensureStateIsValid',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure the two-factor authentication state is valid and handle transitions.
 *
 * @return void
 */',
        'startLine' => 17,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Fortify',
        'declaringClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'implementingClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'currentClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'aliasName' => NULL,
      ),
      'hasJustBegunConfirmingTwoFactorAuthentication' => 
      array (
        'name' => 'hasJustBegunConfirmingTwoFactorAuthentication',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if two-factor authentication is just now being confirmed within the last request cycle.
 *
 * @return bool
 */',
        'startLine' => 46,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Fortify',
        'declaringClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'implementingClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'currentClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'aliasName' => NULL,
      ),
      'neverFinishedConfirmingTwoFactorAuthentication' => 
      array (
        'name' => 'neverFinishedConfirmingTwoFactorAuthentication',
        'parameters' => 
        array (
          'currentTime' => 
          array (
            'name' => 'currentTime',
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 71,
            'endColumn' => 86,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if two-factor authentication was never totally confirmed once confirmation started.
 *
 * @param  int  $currentTime
 * @return bool
 */',
        'startLine' => 60,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Fortify',
        'declaringClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'implementingClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
        'currentClassName' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
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