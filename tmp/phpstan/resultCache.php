<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1772547391,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.40',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80416,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, featureToggles: {bleedingEdge: true, checkNonStringableDynamicAccess: true, checkParameterCastableToNumberFunctions: true, skipCheckGenericClasses: {_prevent_merging: true}, stricterFunctionMap: true, reportPreciseLineForUnusedFunctionParameter: true, checkPrintfParameterTypes: true, internalTag: true, newStaticInAbstractClassStaticMethod: true, checkExtensionsForComparisonOperators: true, checkGenericIterableClasses: true, reportTooWideBool: true, rawMessageInBaseline: true, reportNestedTooWideType: false, assignToByRefForeachExpr: true, curlSetOptArrayTypes: true}, paths: [C:\\Users\\marek\\Herd\\wellmall\\app, C:\\Users\\marek\\Herd\\wellmall\\bootstrap\\app.php, C:\\Users\\marek\\Herd\\wellmall\\config, C:\\Users\\marek\\Herd\\wellmall\\database, C:\\Users\\marek\\Herd\\wellmall\\public, C:\\Users\\marek\\Herd\\wellmall\\routes], level: max, tmpDir: C:\\Users\\marek\\Herd\\wellmall\\tmp\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}, {class: Carbon\\PHPStan\\MacroExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}}}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\marek\\Herd\\wellmall\\app',
    1 => 'C:\\Users\\marek\\Herd\\wellmall\\bootstrap\\app.php',
    2 => 'C:\\Users\\marek\\Herd\\wellmall\\config',
    3 => 'C:\\Users\\marek\\Herd\\wellmall\\database',
    4 => 'C:\\Users\\marek\\Herd\\wellmall\\public',
    5 => 'C:\\Users\\marek\\Herd\\wellmall\\routes',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/Users/marek/Herd/wellmall/composer.lock' => '35cb75abeb3e8db0aecca4ce37b6ea1a8b9bd8eb597b753376118c4dcc59a2da',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/marek/Herd/wellmall/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'amphp/amp' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'fa0ab33a6f47a82929c38d03ca47ebb71086a93f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/amp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/byte-stream' => 
        array (
          'pretty_version' => 'v2.1.2',
          'version' => '2.1.2.0',
          'reference' => '55a6bd071aec26fa2a3e002618c20c35e3df1b46',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/byte-stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/cache' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '46912e387e6aa94933b61ea1ead9cf7540b7797c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/dns' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '78eb3db5fc69bf2fc0cb503c4fcba667bc223c71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/hpack' => 
        array (
          'pretty_version' => 'v3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f293064b15682a2b178b1367ddf0b8b5feb0239',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/hpack',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/http' => 
        array (
          'pretty_version' => 'v2.1.2',
          'version' => '2.1.2.0',
          'reference' => '3680d80bd38b5d6f3c2cef2214ca6dd6cef26588',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/http',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/http-client' => 
        array (
          'pretty_version' => 'v5.3.4',
          'version' => '5.3.4.0',
          'reference' => '75ad21574fd632594a2dd914496647816d5106bc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/http-server' => 
        array (
          'pretty_version' => 'v3.4.4',
          'version' => '3.4.4.0',
          'reference' => '8dc32cc6a65c12a3543276305796b993c56b76ef',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/http-server',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/parser' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'reference' => '3cf1f8b32a0171d4b1bed93d25617637a77cded7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/pipeline' => 
        array (
          'pretty_version' => 'v1.2.3',
          'version' => '1.2.3.0',
          'reference' => '7b52598c2e9105ebcddf247fc523161581930367',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/pipeline',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/process' => 
        array (
          'pretty_version' => 'v2.0.3',
          'version' => '2.0.3.0',
          'reference' => '52e08c09dec7511d5fbc1fb00d3e4e79fc77d58d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/serialization' => 
        array (
          'pretty_version' => 'v1.0.0',
          'version' => '1.0.0.0',
          'reference' => '693e77b2fb0b266c3c7d622317f881de44ae94a1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/serialization',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/socket' => 
        array (
          'pretty_version' => 'v2.3.1',
          'version' => '2.3.1.0',
          'reference' => '58e0422221825b79681b72c50c47a930be7bf1e1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/sync' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '217097b785130d77cfcc58ff583cf26cd1770bf1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/sync',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/websocket' => 
        array (
          'pretty_version' => 'v2.0.4',
          'version' => '2.0.4.0',
          'reference' => '963904b6a883c4b62d9222d1d9749814fac96a3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/websocket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/websocket-client' => 
        array (
          'pretty_version' => 'v2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'dc033fdce0af56295a23f63ac4f579b34d470d6c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../amphp/websocket-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'bacon/bacon-qr-code' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => '36a1cb2b81493fa5b82e50bf8068bf84d1542563',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../bacon/bacon-qr-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.19.0',
          'version' => '7.19.0.0',
          'reference' => '7c6c29af7c4b406b49ce0c6b0a3a81d3684474e6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dasprid/enum' => 
        array (
          'pretty_version' => '1.0.7',
          'version' => '1.0.7.0',
          'reference' => 'b5874fa9ed0043116c72162ec7f4fb50e02e7cce',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../dasprid/enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'daverandom/libdns' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'b84c94e8fe6b7ee4aecfe121bfe3b6177d303c8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../daverandom/libdns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'driftingly/rector-laravel' => 
        array (
          'pretty_version' => '2.1.9',
          'version' => '2.1.9.0',
          'reference' => 'aee9d4a1d489e7ec484fc79f33137f8ee051b3f7',
          'type' => 'rector-extension',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../driftingly/rector-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'inertiajs/inertia-laravel' => 
        array (
          'pretty_version' => 'v2.0.21',
          'version' => '2.0.21.0',
          'reference' => 'fabf202a29023de5f2d59f1474271fa35f84f1d4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../inertiajs/inertia-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kelunik/certificate' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '7e00d498c264d5eb4f78c69f41c8bd6719c0199e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../kelunik/certificate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.9.3',
          'version' => '3.9.3.0',
          'reference' => '64a52bcc5347c89fdf131cb59f96ebfbc8d1ad65',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/boost' => 
        array (
          'pretty_version' => 'v2.2.1',
          'version' => '2.2.1.0',
          'reference' => 'e27f1616177377fef95296620530c44a7dda4df9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/boost',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/fortify' => 
        array (
          'pretty_version' => 'v1.35.0',
          'version' => '1.35.0.0',
          'reference' => '24c5bb81ea4787e0865c4a62f054ed7d1cb7a093',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/fortify',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.53.0',
          'version' => '12.53.0.0',
          'reference' => 'f57f035c0d34503d9ff30be76159bb35a003cd1f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/mcp' => 
        array (
          'pretty_version' => 'v0.5.9',
          'version' => '0.5.9.0',
          'reference' => '39e8da60eb7bce4737c5d868d35a3fe78938c129',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/mcp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.6',
          'version' => '1.2.6.0',
          'reference' => 'aa71a01c309e7f66bc2ec4fb1a59291b82eb4abf',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.27.1',
          'version' => '1.27.1.0',
          'reference' => '54cca2de13790570c7b6f0f94f37896bee4abcb5',
          'type' => 'project',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.13',
          'version' => '0.3.13.0',
          'reference' => 'ed8c466571b37e977532fb2fd3c272c784d7050d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/roster' => 
        array (
          'pretty_version' => 'v0.5.0',
          'version' => '0.5.0.0',
          'reference' => '56904a78f4d7360c1c490ced7deeebf9aecb8c0e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/roster',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.53.0',
          'version' => '1.53.0.0',
          'reference' => 'e340eaa2bea9b99192570c48ed837155dbf24fbb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.10',
          'version' => '2.0.10.0',
          'reference' => '870fc81d2f879903dfc5b60bf8a0f94a1609e669',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.11.1',
          'version' => '2.11.1.0',
          'reference' => 'c9f80cc835649b5c1842898fb043f8cc098dd741',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/wayfinder' => 
        array (
          'pretty_version' => 'v0.1.14',
          'version' => '0.1.14.0',
          'reference' => '57bbd154ae69b11513d459bb97a0db19a8b7c871',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../laravel/wayfinder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.32.0',
          'version' => '3.32.0.0',
          'reference' => '254b1595b16b22dbddaaef9ed6ca9fdac4956725',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => '4436c6ec8d458e4244448b069cc572d088230b76',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-components' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => '8b5ffcebcc0842b76eb80964795bd56a8333b2ba',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../league/uri-components',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => 'c5c5cd056110fc8afaba29fa6b72a43ced42acd4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.1',
          'version' => '3.11.1.0',
          'reference' => 'f438fcc98f92babee98381d399c65336f3a3827f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.3',
          'version' => '4.1.3.0',
          'reference' => 'bb3ea637e3d131d72acc033cfc2746ee893349fe',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.1',
          'version' => '8.9.1.0',
          'reference' => 'a1ed3fa530fd60bc515f9303e8520fcb7d4bd935',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/essentials' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'c5458ca21a395e592ba7d2ae16ec62632f7c7f3a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../nunomaduro/essentials',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/pokio' => 
        array (
          'pretty_version' => 'v0.1.2',
          'version' => '0.1.2.0',
          'reference' => '961069aa5682328cd78cff9c81e2fb67a15b5b1b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../nunomaduro/pokio',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'paragonie/constant_time_encoding' => 
        array (
          'pretty_version' => 'v3.1.3',
          'version' => '3.1.3.0',
          'reference' => 'd5b01a39b3415c2cd581d3bd3a3575c1ebbd8e77',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../paragonie/constant_time_encoding',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.4.1',
          'version' => '4.4.1.0',
          'reference' => 'f96a1b27864b585b0b29b0ee7331176726f7e54a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
          'type' => 'composer-plugin',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '25bb17e37920ccc35cbbcda3b00d596aadf3e58d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-browser' => 
        array (
          'pretty_version' => 'v4.3.0',
          'version' => '4.3.0.0',
          'reference' => '48bc408033281974952a6b296592cef3b920a2db',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pestphp/pest-plugin-browser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => '3057a36669ff11416cc0dc2b521b3aec58c488d0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v4.2.1',
          'version' => '4.2.1.0',
          'reference' => '343cfa6f3564b7e35df0ebb77b7fa97039f72b27',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-type-coverage' => 
        array (
          'pretty_version' => 'v4.0.3',
          'version' => '4.0.3.0',
          'reference' => '123bbf73d4b790373600132f503fd8d1453d40bb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pestphp/pest-plugin-type-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => '897b5986ece6b4f9d8413fea345c7d49c757d6bf',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '327a05bbee54120d4786a0dc67aad30226ad4cf9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.2',
          'version' => '2.3.2.0',
          'reference' => 'a004701b11273a26cd7955a61d67a7f1e525a45a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.40',
          'version' => '2.1.40.0',
          'reference' => '9b2c7aeb83a75d8680ea5e7c9b7fca88052b766b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.3',
          'version' => '12.5.3.0',
          'reference' => 'b015312f28dd75b75d3422ca37dff2cd1a565e8d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '3d1cd096ef6bea4bf2762ba586e35dbd317cbfd5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.12',
          'version' => '12.5.12.0',
          'reference' => '418e06b3b46b0d54bad749ff4907fc7dfb530199',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pragmarx/google2fa' => 
        array (
          'pretty_version' => 'v9.0.0',
          'version' => '9.0.0.0',
          'reference' => 'e6bc62dd6ae83acc475f57912e27466019a1f2cf',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../pragmarx/google2fa',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.20',
          'version' => '0.12.20.0',
          'reference' => '19678eb6b952a03b8a1d96ecee9edba518bb0373',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rector/rector' => 
        array (
          'pretty_version' => '2.3.8',
          'version' => '2.3.8.0',
          'reference' => 'bbd37aedd8df749916cffa2a947cfc4714d1ba2c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../rector/rector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'revolt/event-loop' => 
        array (
          'pretty_version' => 'v1.0.8',
          'version' => '1.0.8.0',
          'reference' => 'b6fc06dce8e9b523c9946138fa5e62181934f91c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../revolt/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => '90f41072d220e5c40df6e8635f5dafba2d9d4d04',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.4',
          'version' => '7.1.4.0',
          'reference' => '6a7de5df2e094f9a80b40a522391a7e6022df5f6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.0.3',
          'version' => '8.0.3.0',
          'reference' => '24a711b5c916efc6d6e62aa65aa2ec98fef77f68',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '016951ae10980765e4e7aee491eb288c64e505b7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.2',
          'version' => '8.0.2.0',
          'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '97ffee3bcfb5805568d6af7f0f893678fc076d2f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'e549163b9760b8f71f191651d22acf32d56d6d4d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '832119f9b8dbc6c8e6f65f30c5969eca1e88764f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '6d643a93b47398599124022eb24d97c153c12f27',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.0.6',
          'version' => '8.0.6.0',
          'reference' => '2a178bf80f05dbbe469a337730eba79d61315262',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '8da531f364ddfee53e36092a7eebbbd0b775f6b8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.4',
          'version' => '8.0.4.0',
          'reference' => '99301401da182b6cfaa4700dbe9987bb75474b47',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '8655bf1076b7a3a346cb11413ffdabff50c7ffcf',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => 'fd97d5e926e988a363cef56fbbf88c5c528e9065',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '002ac0cf4cd972a7fd0912dcd513a95e8a81ce83',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => 'b02726f39a20bc65e30364f5c750c4ddbf1f58e9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '9fc881d95feae4c6c48678cb6372bd8a7ba04f5f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '608476f4604102976d687c483ac63a79ba18cc97',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '238d749c56b804b31a9bf3e26519d93b65a60938',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.6',
          'version' => '8.0.6.0',
          'reference' => '6c9e1108041b5dce21a9a4984b531c4923aa9ec4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.0.6',
          'version' => '8.0.6.0',
          'reference' => '13ff19bcf2bea492d3c2fbeaa194dd6f4599ce1b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '7719ce8aba76be93dfe249192f1fbfa52c588e36',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '045321c440ac18347b136c63d2e9bf28a2dc0291',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v8.0.6',
          'version' => '8.0.6.0',
          'reference' => '5f006c50a981e1630bbb70ad409c5d85f9a716e0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'tomasvotruba/type-coverage' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '468354b3964120806a69890cbeb3fcf005876391',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../tomasvotruba/type-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.12.1',
          'version' => '1.12.1.0',
          'reference' => '9be6926d8b485f55b9229203f962b51ed377ba68',
          'type' => 'library',
          'install_path' => 'C:\\Users\\marek\\Herd\\wellmall\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\Users\\marek\\Herd\\wellmall\\vendor\\larastan\\larastan\\bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar://C:\\Users\\marek\\Herd\\wellmall\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://C:\\Users\\marek\\Herd\\wellmall\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://C:\\Users\\marek\\Herd\\wellmall\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://C:\\Users\\marek\\Herd\\wellmall\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dom',
    15 => 'exif',
    16 => 'fileinfo',
    17 => 'filter',
    18 => 'gd',
    19 => 'gmp',
    20 => 'hash',
    21 => 'herd',
    22 => 'iconv',
    23 => 'imagick',
    24 => 'intl',
    25 => 'json',
    26 => 'libxml',
    27 => 'mbstring',
    28 => 'mongodb',
    29 => 'mysqli',
    30 => 'mysqlnd',
    31 => 'openssl',
    32 => 'pcre',
    33 => 'pdo_mysql',
    34 => 'pdo_pgsql',
    35 => 'pdo_sqlite',
    36 => 'pgsql',
    37 => 'random',
    38 => 'readline',
    39 => 'redis',
    40 => 'session',
    41 => 'shmop',
    42 => 'soap',
    43 => 'sockets',
    44 => 'sodium',
    45 => 'sqlite3',
    46 => 'standard',
    47 => 'tokenizer',
    48 => 'xml',
    49 => 'xmlreader',
    50 => 'xmlwriter',
    51 => 'zip',
    52 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => 'max',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Instanceof between App\\Models\\User|null and Illuminate\\Contracts\\Auth\\MustVerifyEmail will always evaluate to false.',
       'file' => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\Instanceof_',
       'identifier' => 'instanceof.alwaysFalse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\CreateNewUser.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Fortify\\CreateNewUser',
        1 => 'currentPasswordRules',
        2 => 'App\\Actions\\Fortify\\CreateNewUser',
      ),
      1 => 
      array (
        0 => 'App\\Actions\\Fortify\\CreateNewUser',
        1 => 'nameRules',
        2 => 'App\\Actions\\Fortify\\CreateNewUser',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
      1 => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\ResetUserPassword.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Fortify\\ResetUserPassword',
        1 => 'currentPasswordRules',
        2 => 'App\\Actions\\Fortify\\ResetUserPassword',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 27,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Concerns\\PasswordValidationRules.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
        1 => 10,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Concerns\\ProfileValidationRules.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
        1 => 11,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\PasswordController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'update',
        2 => 32,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 47,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'delete',
        2 => 62,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Middleware\\HandleAppearance.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\View',
        1 => 'share',
        2 => 21,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
        1 => 'currentPasswordRules',
        2 => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
        1 => 'currentPasswordRules',
        2 => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
        1 => 'nameRules',
        2 => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Models\\User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
      2 => 
      array (
        0 => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Date',
        1 => 'use',
        2 => 36,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Validation\\Rules\\Password',
        1 => 'defaults',
        2 => 42,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\FortifyServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 83,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 85,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
        1 => 'create',
        2 => 20,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\public\\index.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'define',
        1 => 8,
      ),
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\routes\\settings.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'redirect',
        2 => 11,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\CreateNewUser.php' => 
  array (
    'fileHash' => 'f843c3e0a125fa4bdb233ff3974f65bbd3f83b199a0f9a5f03fd6d6462093411',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\FortifyServiceProvider.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\ResetUserPassword.php' => 
  array (
    'fileHash' => '278ea473d5090c93b3cbaebc06ee4c13b4f29fc5a7a1e33ffabe5cfcbf72f310',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\FortifyServiceProvider.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Concerns\\PasswordValidationRules.php' => 
  array (
    'fileHash' => 'abf3568e1af1d681dcb95f964472b34347b1bd0b6ad4919c1335dfb6f1dd3fab',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\ResetUserPassword.php',
      2 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\PasswordController.php',
      3 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php',
      4 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php',
      5 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php',
      6 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\FortifyServiceProvider.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\ResetUserPassword.php',
      2 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php',
      3 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Concerns\\ProfileValidationRules.php' => 
  array (
    'fileHash' => 'aa468f71973a0f6b6170d1a70ec4bade4c904ae2863c4eed0781753afc7cea2a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php',
      2 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
      3 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\FortifyServiceProvider.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => '09e5cac5a69959ccf23d756cda697b993df937c106655d124ff27ca5fe24a705',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\PasswordController.php',
      1 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php',
      2 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php',
      3 => 'C:\\Users\\marek\\Herd\\wellmall\\routes\\settings.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\PasswordController.php' => 
  array (
    'fileHash' => 'c512a5856da5d1da735121d4ab1a9a3151f7c0911df772905f812354e44cf8bf',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\routes\\settings.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php' => 
  array (
    'fileHash' => '0412338a6eb1008a65a47cb0de80ae11fb0835bb9e39f29cbff329a86b3d0dd6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\routes\\settings.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php' => 
  array (
    'fileHash' => 'f204f1f3f7c735c5e792009258b188339c6c51db3080e1f0a41a6bf4937bcdaa',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\routes\\settings.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Middleware\\HandleAppearance.php' => 
  array (
    'fileHash' => '234da5480ab1f04622c10b9936d9ce9bd7863e70f6900dcbde68d878f708ed45',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\bootstrap\\app.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Middleware\\HandleInertiaRequests.php' => 
  array (
    'fileHash' => '0ec9d641ca5a58fe41388e869ddb692307a27f32b0f59b2cc5cdef5b1d027f8a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\bootstrap\\app.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php' => 
  array (
    'fileHash' => '149a53d7b796440f9d172080a98b1c26f909df5f8a2db59d7e3c8fce3f9defa1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\PasswordController.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php' => 
  array (
    'fileHash' => 'dc13139b46257381b58b77966f2a4042390ae6b6e849a6bcc20ee442f0d434ed',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => 
  array (
    'fileHash' => '7b24ce5b2d482e36b1833bbfd15d0c6b10539a13a98d7bb649fd3b7b084d229b',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.php' => 
  array (
    'fileHash' => '5adbf74e79b7391841a28e0db1b6ad09ca322493445984fb5569e83164dc5590',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Models\\User.php' => 
  array (
    'fileHash' => '997213f7dd03a42afe062bca1b420509a896a12d8da1d3d154c51fd360bbe364',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\ResetUserPassword.php',
      2 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\PasswordController.php',
      3 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php',
      4 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php',
      5 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Middleware\\HandleInertiaRequests.php',
      6 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
      7 => 'C:\\Users\\marek\\Herd\\wellmall\\config\\auth.php',
      8 => 'C:\\Users\\marek\\Herd\\wellmall\\database\\factories\\UserFactory.php',
      9 => 'C:\\Users\\marek\\Herd\\wellmall\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => '3daa68f33536bde0bb9c51ada1302021bd59a9b402aecf65c0047af51a1fd5b1',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\FortifyServiceProvider.php' => 
  array (
    'fileHash' => 'ec4483ce6ff1dfd46e50cf03264dfb94f8cd1e90f8881037ccb13471479f2142',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\bootstrap\\app.php' => 
  array (
    'fileHash' => 'e21d60cfc4de9b630153d38460f89c2a798bd25e8a2b670e598650e084772809',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\app.php' => 
  array (
    'fileHash' => '26e0b8bafbf7b33bff6cb14ccb76905329c998e50cb2a208f37b1a6cfabc2e24',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\auth.php' => 
  array (
    'fileHash' => '4c3c04aea0426b878bafe2e873a1d16b1df56be4d8e2060d9e16367bb8b0b059',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\cache.php' => 
  array (
    'fileHash' => '6f94ca33fce94aac675a7b41a91e631ab2c4aece89547b4c770377733d630fab',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\database.php' => 
  array (
    'fileHash' => '3a641ac67753c2e3c661b5ba17ea21effb9d093f12cd05b2bfcfebed54fdc757',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\filesystems.php' => 
  array (
    'fileHash' => '47fad3643442b952e77bbf45153f972e6b4ad655048911543a6efdb8b7afcf1e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\fortify.php' => 
  array (
    'fileHash' => '22e74bde41839ee29e709fb0b00e63770d51e5d17f350376ac67d73360d9ae44',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\inertia.php' => 
  array (
    'fileHash' => '7eeced8a1276ebfea204eef0cbc10cec267226a27e156228e4ac1ba0d37e572c',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\logging.php' => 
  array (
    'fileHash' => '5ec627682d495c4bbf0f775c8875072b8f26bcd08472acf34bce06663330d8e8',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\mail.php' => 
  array (
    'fileHash' => 'bb494f6fcf94567d46b29cb93dda26a14c3acab986619967515769842c84fb48',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\queue.php' => 
  array (
    'fileHash' => '726a1f09999779c025cba796df9e0d174955f752f7256e4b1cb699519a89e916',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\services.php' => 
  array (
    'fileHash' => '37c1281883d2876439decac5933fb5aa8e2106bc57c0d65679bf03e87c15dccb',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\config\\session.php' => 
  array (
    'fileHash' => '72eabbde07cd399f854aabd9205114060fc38a2650212c76289a91fdbdea7a9d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\factories\\UserFactory.php' => 
  array (
    'fileHash' => 'c07c8b8f709670d452613781999dc45aa8daf46c7574d32d01373a781ad881d5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\marek\\Herd\\wellmall\\app\\Models\\User.php',
      1 => 'C:\\Users\\marek\\Herd\\wellmall\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\migrations\\0001_01_01_000000_create_users_table.php' => 
  array (
    'fileHash' => 'b1d2bd7a75a793f7fab4b600d7a52b0b5ea81eca5780fbf84a0edcf9b694727a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\migrations\\0001_01_01_000001_create_cache_table.php' => 
  array (
    'fileHash' => '0be98cc07a8c2ce78511988343de1c9b6f12b95988dcce52ebeea3fea3cbb6e6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\migrations\\0001_01_01_000002_create_jobs_table.php' => 
  array (
    'fileHash' => 'e71b179e095c063534fbff1e9a15c69603d2a346405f258d5fa8d323d5a3bc2e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\migrations\\2025_08_14_170933_add_two_factor_columns_to_users_table.php' => 
  array (
    'fileHash' => '266242d6f2cc19714f35440e52e76779a72ca14a19d76a852a0175fbb35fb6a0',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'fileHash' => 'f2d9330f818e1523f685a214d669494d355a5455077f28bb5e43e41e36420296',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\public\\index.php' => 
  array (
    'fileHash' => '49bee8b1d6e46e409bc238c714a3efd6bcc84546a578c616f4bd6e1bf29c9ac8',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\routes\\console.php' => 
  array (
    'fileHash' => 'ed7498862cfa2ee95b008becf1abdd58feab37be1cb414d441de43aaa6feb395',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\routes\\settings.php' => 
  array (
    'fileHash' => '1c95780469706d76a191ee474cae6b8b9943c2c3ec4d4eecb209dfef757e539a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\routes\\web.php' => 
  array (
    'fileHash' => '76484d3bc7331c5de89586aade5b95660ddaac5933995f0d7c61a16704812b41',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\CreateNewUser.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\CreateNewUser',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
        1 => 'App\\Concerns\\ProfileValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'profilevalidationrules' => 'App\\Concerns\\ProfileValidationRules',
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'createsnewusers' => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Actions\\Fortify\\ResetUserPassword.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\ResetUserPassword',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reset',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and reset the user\'s forgotten password.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'resetsuserpasswords' => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Concerns\\PasswordValidationRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Concerns\\PasswordValidationRules',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'passwordRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, Rule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'rule' => 'Illuminate\\Contracts\\Validation\\Rule',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'currentPasswordRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate the current password.
     *
     * @return array<int, Rule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'rule' => 'Illuminate\\Contracts\\Validation\\Rule',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Concerns\\ProfileValidationRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Concerns\\ProfileValidationRules',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'profileRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user profiles.
     *
     * @return array<string, array<int, \\Illuminate\\Contracts\\Validation\\Rule|Unique|array<mixed>|string>>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'rule' => 'Illuminate\\Validation\\Rule',
              'unique' => 'Illuminate\\Validation\\Rules\\Unique',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nameRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user names.
     *
     * @return array<int, \\Illuminate\\Contracts\\Validation\\Rule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'rule' => 'Illuminate\\Validation\\Rule',
              'unique' => 'Illuminate\\Validation\\Rules\\Unique',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'emailRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user emails.
     *
     * @return array<int, \\Illuminate\\Contracts\\Validation\\Rule|Unique|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'rule' => 'Illuminate\\Validation\\Rule',
              'unique' => 'Illuminate\\Validation\\Rules\\Unique',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\PasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Settings\\PasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the user\'s password settings page.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'passwordupdaterequest' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'passwordupdaterequest' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Settings\\ProfileController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the user\'s profile settings page.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s profile information.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete the user\'s profile.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
        0 => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'middleware',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the middleware that should be assigned to the controller.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'features' => 'Laravel\\Fortify\\Features',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'middleware' => 'Illuminate\\Routing\\Controllers\\Middleware',
              'hasmiddleware' => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
              'twofactorauthenticationrequest' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the user\'s two-factor authentication settings page.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'features' => 'Laravel\\Fortify\\Features',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'middleware' => 'Illuminate\\Routing\\Controllers\\Middleware',
              'hasmiddleware' => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
              'twofactorauthenticationrequest' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Middleware\\HandleAppearance.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\HandleAppearance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Middleware\\HandleInertiaRequests.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\HandleInertiaRequests',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Inertia\\Middleware',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'rootView',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The root template that\'s loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Inertia\\Middleware',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'version',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Inertia\\Middleware',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'share',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Inertia\\Middleware',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'profilevalidationrules' => 'App\\Concerns\\ProfileValidationRules',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'features' => 'Laravel\\Fortify\\Features',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'interactswithtwofactorstate' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'features' => 'Laravel\\Fortify\\Features',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'interactswithtwofactorstate' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\app\\Providers\\FortifyServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\FortifyServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'inertia' => 'Inertia\\Inertia',
              'str' => 'Illuminate\\Support\\Str',
              'request' => 'Illuminate\\Http\\Request',
              'fortify' => 'Laravel\\Fortify\\Fortify',
              'features' => 'Laravel\\Fortify\\Features',
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'inertia' => 'Inertia\\Inertia',
              'str' => 'Illuminate\\Support\\Str',
              'request' => 'Illuminate\\Http\\Request',
              'fortify' => 'Laravel\\Fortify\\Fortify',
              'features' => 'Laravel\\Fortify\\Features',
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\factories\\UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
          'str' => 'Illuminate\\Support\\Str',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'str' => 'Illuminate\\Support\\Str',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'str' => 'Illuminate\\Support\\Str',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withTwoFactor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model has two-factor authentication configured.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'str' => 'Illuminate\\Support\\Str',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\marek\\Herd\\wellmall\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
