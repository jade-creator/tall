<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1707182973,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.10.57',
  'phpVersion' => 80301,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd, rd, dd], excludePaths: {analyseAndScan: [*.blade.php, /home/vagrant/code/tall/database/migrations], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [/home/vagrant/code/tall/vendor/larastan/larastan/bootstrap.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [database/settings], disableMigrationScan: false, disableSchemaScan: false, viewDirectories: [], checkModelProperties: true, checkPhpDocMissingReturn: false, checkUnusedViews: false, tmpDir: /home/vagrant/code/tall/build/phpstan, paths: [/home/vagrant/code/tall/app, /home/vagrant/code/tall/database], level: 8, checkGenericClassInNonGenericObjectType: false, checkMissingIterableValueType: false, checkAlwaysTrueInstanceof: true}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, Larastan\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, Larastan\\Larastan\\ReturnTypes\\AppMakeHelper, Larastan\\Larastan\\Internal\\ConsoleApplicationResolver, Larastan\\Larastan\\Internal\\ConsoleApplicationHelper, Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper]}',
  'analysedPaths' => 
  array (
    0 => '/home/vagrant/code/tall/app',
    1 => '/home/vagrant/code/tall/database',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/home/vagrant/code/tall/composer.lock' => 'f33b30fa73c5375903db220071cb0b10ef0bde49',
  ),
  'composerInstalled' => 
  array (
    '/home/vagrant/code/tall/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'bacon/bacon-qr-code' => 
        array (
          'pretty_version' => '2.0.8',
          'version' => '2.0.8.0',
          'reference' => '8674e51bb65af933a5ffaf1c308a660387c35c22',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../bacon/bacon-qr-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '4ffc52ebbce2f259d6a15c1ddaf4ad837eef6703',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.11.0',
          'version' => '0.11.0.0',
          'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '99f76ffa36cce3b70a4a6abce41dba15ca2e84cb',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../carbonphp/carbon-doctrine-types',
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
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => '6faf451159fb8ba4126b925ed2d78acfce0dc016',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../dasprid/enum',
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
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.3',
          'version' => '1.1.3.0',
          'reference' => 'dfbaa3c2d2e9a9df1118213f3b8b0c597bb99fab',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.9',
          'version' => '2.0.9.0',
          'reference' => '2930cd5ef353871c821d5c43ed030d39ac8cfe65',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../doctrine/inflector',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.3.3',
          'version' => '3.3.3.0',
          'reference' => 'adfb1f505deb6384dc8b39804c5065dd3c8c8c0a',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => 'ebaaf5be6c0286928352e054f2d5125608e5405e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.23.1',
          'version' => '1.23.1.0',
          'reference' => 'bfb4fe148adbf78eff521199619b93a52ae3554b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => '85193c0b0cb5c47894b5eaec906e946f054e7077',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.15.4',
          'version' => '2.15.4.0',
          'reference' => 'a139776fa3f5985a50b509f2a02ff0f709d2a546',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.2',
          'version' => '1.1.2.0',
          'reference' => 'fbd48bce38f73f8a4ec8583362e732e4095e5862',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '41042bc7ab002487b876a0683fc8dce04ddce104',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'bbff78d96034045e58e13dedd6ad91b5d1253223',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.6.2',
          'version' => '2.6.2.0',
          'reference' => '45b30f99ac27b5ca93cb4831afe16285f57b8221',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'ecea8feef63bd4fef1f037ecb288386999ecc11c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../hamcrest/hamcrest-php',
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
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.43.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.0.5',
          'version' => '2.0.5.0',
          'reference' => 'ae547e455a3d8babd07b96966b17d7fd21d9c6af',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../jean85/pretty-package-versions',
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
          'pretty_version' => 'v2.8.1',
          'version' => '2.8.1.0',
          'reference' => 'b7cc6a29c457a7d4f3de90466392ae9ad3e17022',
          'type' => 'phpstan-extension',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/fortify' => 
        array (
          'pretty_version' => 'v1.20.0',
          'version' => '1.20.0.0',
          'reference' => '587a55f906ae4f8448a19019a4b2ee7002d5c001',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/fortify',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v10.43.0',
          'version' => '10.43.0.0',
          'reference' => '4f7802dfc9993cb57cf69615491ce1a7eb2e9529',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/jetstream' => 
        array (
          'pretty_version' => 'v4.2.2',
          'version' => '4.2.2.0',
          'reference' => '7a11a4fb1426855b7132900af5c113a684b820cc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/jetstream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.13.10',
          'version' => '1.13.10.0',
          'reference' => 'e2b5060885694ca30ac008c05dc9d47f10ed1abf',
          'type' => 'project',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.1.15',
          'version' => '0.1.15.0',
          'reference' => 'd814a27514d99b03c85aa42b22cfd946568636c1',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.27.3',
          'version' => '1.27.3.0',
          'reference' => '7e01b345072c9604ead9d7aed175bf7ac1d80289',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v3.3.3',
          'version' => '3.3.3.0',
          'reference' => '8c104366459739f3ada0e994bcd3e6fd681ce3d5',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '3dbf8a8e914634c48d389c1234552666b3d43754',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.9.0',
          'version' => '2.9.0.0',
          'reference' => '502e0fe3f0415d06d5db1f83a472f0f3b754bafe',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.4.2',
          'version' => '2.4.2.0',
          'reference' => '91c24291965bd6d7c46c46a12ba7492f83b1cadf',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../league/commonmark',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.24.0',
          'version' => '3.24.0.0',
          'reference' => 'b25a361508c407563b34fac6f64a8a17a8819675',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.23.1',
          'version' => '3.23.1.0',
          'reference' => 'b884d2bf9b53bb4804a56d2df4902bb51e253f00',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.15.0',
          'version' => '1.15.0.0',
          'reference' => 'ce0f4d1e8a6f4eb0ddff33f57c69c50fd09f4301',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v3.4.4',
          'version' => '3.4.4.0',
          'reference' => 'c0489d4a76382f6dcf6e2702112f86aa089d0c8d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mobiledetect/mobiledetectlib' => 
        array (
          'pretty_version' => '4.8.05',
          'version' => '4.8.05.0',
          'reference' => 'b7a8cdd70955ea6162269939914ba97fe36a154a',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../mobiledetect/mobiledetectlib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.7',
          'version' => '1.6.7.0',
          'reference' => '0cc058854b3195ba21dc6b1f7b1f60f4ef3a9c06',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.5.0',
          'version' => '3.5.0.0',
          'reference' => 'c915e2634718dbc8a4a15c61b0e62e7a44e14448',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../monolog/monolog',
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
          'pretty_version' => '1.11.1',
          'version' => '1.11.1.0',
          'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '2.72.3',
          'version' => '2.72.3.0',
          'reference' => '0c6fd108360c562f6e4fd1dedb8233b423e91c83',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'a6d3a6d1f545f01ef38e60f375d1cf1f4de98188',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd3ad0aa3b9f934602cb3e3902ebccf10be34d218',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4a21235f7e56e713259a6f76bf4b5ea08502b9dc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v7.10.0',
          'version' => '7.10.0.0',
          'reference' => '49ec67fa7b002712da8526678abd651c09f375b2',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v1.15.1',
          'version' => '1.15.1.0',
          'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'paragonie/constant_time_encoding' => 
        array (
          'pretty_version' => 'v2.6.3',
          'version' => '2.6.3.0',
          'reference' => '58c3f47f650c94ec05a151692652a868995d2938',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../paragonie/constant_time_encoding',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v2.33.4',
          'version' => '2.33.4.0',
          'reference' => '4baf27911e088cd27c0114bd9b4ee579203f8810',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'e05d2859e08c2567ee38ce8b005d044e72648c0b',
          'type' => 'composer-plugin',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v2.7.0',
          'version' => '2.7.0.0',
          'reference' => 'd23b2d7498475354522c3818c42ef355dca3fcda',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v2.2.0',
          'version' => '2.2.0.0',
          'reference' => '77a2838c1d3b09d147211e76a48987ba9a758279',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phar-io/manifest',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phar-io/version',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.3.0',
          'version' => '5.3.0.0',
          'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.8.0',
          'version' => '1.8.0.0',
          'reference' => 'fad452781b3d774e3337b0c0b245dd8e5a4455fc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.9.0',
          'version' => '5.9.0.0',
          'reference' => '011fa18a4e55591fac6545a821921dd1d61c6984',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.2',
          'version' => '1.9.2.0',
          'reference' => '80735db690fe4fc5c76dfa7f9b770634285fa820',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '1.25.0',
          'version' => '1.25.0.0',
          'reference' => 'bd84b629c8de41aa2ae82c067c955e06f1b00240',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.10.57',
          'version' => '1.10.57.0',
          'reference' => '1627b1d03446904aaa77593f370c5201d2ecc34e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '10.1.11',
          'version' => '10.1.11.0',
          'reference' => '78c3b7625965c2513ee96569a4dbb62601784145',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '4.1.0',
          'version' => '4.1.0.0',
          'reference' => 'a95037b6d9e608ba092da1b23931e537cadc3c3c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '0c7b06ff49e3d5072f057eb1fa59258bf287a748',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '10.5.9',
          'version' => '10.5.9.0',
          'reference' => '0bd663704f0165c9e76fe4f06ffa6a1ca727fdbe',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pragmarx/google2fa' => 
        array (
          'pretty_version' => 'v8.0.1',
          'version' => '8.0.1.0',
          'reference' => '80c3d801b31fe165f8fe99ea085e0a37834e1be3',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../pragmarx/google2fa',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psr/clock',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psr/container',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psr/event-dispatcher',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psr/http-client',
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
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psr/http-factory',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psr/http-message',
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
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psr/log',
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
            0 => '3.0.0',
            1 => '1.0|2.0|3.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psr/simple-cache',
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
          'pretty_version' => 'v0.12.0',
          'version' => '0.12.0.0',
          'reference' => '750bf031a48fd07c673dbe3f11f72362ea306d0d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../psy/psysh',
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
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.5',
          'version' => '4.7.5.0',
          'reference' => '5f0df49ae5ad6efb7afa69e6bfab4e5b1e080d8e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.5',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'efdc130dbbbb8ef0b545a994fd811725c5282cae',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => '2db5010a484d53ebf536087a70b4a5423c102372',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '68ff824baeae169ec9f2137158ee529584553799',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => 'fbf413a49e54f6b9b17e12d900ac7f6101591b7f',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '43c751b41d74f96cbbd4e07b7aec9675651e2951',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '64f51654862e0f5e318db7e9dcc2292c63cdbddc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '7ea9ead78f6d380d2a667864c132c2f7b83055e4',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => '856e7f6a75a84e339195d48c556f23be2ebf75d0',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '05909fb5bc7df4c52992396d0116aed689f93712',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'reference' => '483f76a82964a0431aa836b6ed0edde0c248e3ab',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/flare-client-php' => 
        array (
          'pretty_version' => '1.4.4',
          'version' => '1.4.4.0',
          'reference' => '17082e780752d346c2db12ef5d6bee8e835e399c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../spatie/flare-client-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/ignition' => 
        array (
          'pretty_version' => '1.12.0',
          'version' => '1.12.0.0',
          'reference' => '5b6f801c605a593106b623e45ca41496a6e7d56d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../spatie/ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-ignition' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '005e1e7b1232f3b22d7e7be3f602693efc7dba67',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../spatie/laravel-ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '2aaf83b4de5b9d43b93e4aec6f2f8b676f7c567e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.0.3',
          'version' => '7.0.3.0',
          'reference' => 'ec60a4edf94e63b0556b6a0888548bb400a3a3be',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '6dc3c76a278b77f01d864a6005d640822c6f26a6',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.0.3',
          'version' => '7.0.3.0',
          'reference' => '834c28d533dd0636f910909d01b9ff45cc094b5e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => 'a76aed96a42d2b521153fb382d418e30d18b59df',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/event-dispatcher-contracts',
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
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => '11d736e97f116ac375a81f96e662911a34cd50ce',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '5677bdf7cade4619cb17fc9e1e7b31ec392244a9',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '9c6ec4e543044f7568a53a76ab1484ecd30637a2',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '74412c62f88a85a41b61f0b71ab0afcaad6f03ee',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '5017e0a9398c77090b7694be46f20eb796262a34',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => 'ef4d7e442ca910c4764bce785146269b30cb5fc4',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => '32a9da87d7b3245e09ac426c83d334ae9f06f80f',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => 'a287ed7475f85bf6f61890146edbc932c0fff919',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => 'bc45c394692b948b4d383a08d7753968bed9a83d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => '9773676c8a1bb1f8d4340a62efe641cf76eda7ec',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => '861391a8da9a04cbad2d232ddd9e4893220d6e25',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-php72',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => '87b68208d5c1188808dd7839ee1e6c8ec3b02f1b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => '86fcae159633351e5fd145d1c47de6c528f8caff',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => '3abdd21b0ceaa3000ee950097bc3cf9efc137853',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '31642b0818bfcff85930344ef93193f8c607e0a3',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '3b2957ad54902f0f544df83e3d58b38d7e8e5842',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.4.1',
          'version' => '3.4.1.0',
          'reference' => 'fe07cbc8d837f60caf7018068e350cc5163681a0',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.0.3',
          'version' => '7.0.3.0',
          'reference' => '524aac4a280b90a4420d8d6a040718d0586505ac',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '637c51191b6b184184bbf98937702bcf554f7d04',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.4.1',
          'version' => '3.4.1.0',
          'reference' => '06450585bf65e978026bda220cdebca3f867fde7',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/translation-contracts',
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
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '1d31267211cc3a2fff32bcfc7c1818dac41b6fc0',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '0435a08f69125535336177c29d56af3abc1f69da',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.0.3',
          'version' => '7.0.3.0',
          'reference' => '2d4fca631c00700597e9442a0b2451ce234513d3',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.4',
          'version' => '0.8.4.0',
          'reference' => '89f0dea1cb0f0d5744d3ec1764a286af5e006636',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.2',
          'version' => '1.2.2.0',
          'reference' => 'b2ad5003ca10d4ee50a12da31de12a5774ba6b96',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.2.7',
          'version' => '2.2.7.0',
          'reference' => '83ee6f38df0a63106a9e4536e3060458b74ccedb',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.0',
          'version' => '5.6.0.0',
          'reference' => '2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/tall/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/home/vagrant/code/tall/vendor/larastan/larastan/bootstrap.php' => '7ec7406cae3f706d3c160e03d7967840a5d9f98c',
    'phar:///home/vagrant/code/tall/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///home/vagrant/code/tall/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///home/vagrant/code/tall/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///home/vagrant/code/tall/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'PDO_ODBC',
    4 => 'Phar',
    5 => 'Reflection',
    6 => 'SPL',
    7 => 'SimpleXML',
    8 => 'Zend OPcache',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dba',
    16 => 'dom',
    17 => 'enchant',
    18 => 'exif',
    19 => 'fileinfo',
    20 => 'filter',
    21 => 'ftp',
    22 => 'gd',
    23 => 'gettext',
    24 => 'gmp',
    25 => 'hash',
    26 => 'iconv',
    27 => 'igbinary',
    28 => 'imagick',
    29 => 'imap',
    30 => 'intl',
    31 => 'json',
    32 => 'ldap',
    33 => 'libxml',
    34 => 'mbstring',
    35 => 'memcached',
    36 => 'msgpack',
    37 => 'mysqli',
    38 => 'mysqlnd',
    39 => 'odbc',
    40 => 'openssl',
    41 => 'pcntl',
    42 => 'pcre',
    43 => 'pdo_dblib',
    44 => 'pdo_mysql',
    45 => 'pdo_pgsql',
    46 => 'pdo_sqlite',
    47 => 'pgsql',
    48 => 'posix',
    49 => 'pspell',
    50 => 'random',
    51 => 'readline',
    52 => 'redis',
    53 => 'session',
    54 => 'shmop',
    55 => 'snmp',
    56 => 'soap',
    57 => 'sockets',
    58 => 'sodium',
    59 => 'sqlite3',
    60 => 'standard',
    61 => 'sysvmsg',
    62 => 'sysvsem',
    63 => 'sysvshm',
    64 => 'tidy',
    65 => 'tokenizer',
    66 => 'xml',
    67 => 'xmlreader',
    68 => 'xmlrpc',
    69 => 'xmlwriter',
    70 => 'xsl',
    71 => 'zip',
    72 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/home/vagrant/code/tall/app/Http/Controllers/PostController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $id on App\\Models\\User|null.',
       'file' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\PostController::update() has no return type specified.',
       'file' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\PostController::destroy() has no return type specified.',
       'file' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/tall/app/Models/Post.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<string, mixed> of property App\\Models\\Post::$casts is not covariant with PHPDoc type array<string, string> of overridden property Illuminate\\Database\\Eloquent\\Model::$casts.',
       'file' => '/home/vagrant/code/tall/app/Models/Post.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/vagrant/code/tall/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 31,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @return with type mixed is not subtype of native type Illuminate\\Database\\Eloquent\\Relations\\BelongsTo.',
       'file' => '/home/vagrant/code/tall/app/Models/Post.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/home/vagrant/code/tall/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Stmt\\ClassMethod',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/tall/database/factories/PostFactory.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Return type (array<string, mixed>) of method Database\\Factories\\PostFactory::definition() should be compatible with return type (array<string, mixed>) of method Illuminate\\Database\\Eloquent\\Factories\\Factory<App\\Models\\Post>::definition()',
       'file' => '/home/vagrant/code/tall/database/factories/PostFactory.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/home/vagrant/code/tall/database/factories/PostFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/tall/database/factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Return type (array<string, mixed>) of method Database\\Factories\\UserFactory::definition() should be compatible with return type (array<string, mixed>) of method Illuminate\\Database\\Eloquent\\Factories\\Factory<App\\Models\\User>::definition()',
       'file' => '/home/vagrant/code/tall/database/factories/UserFactory.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/vagrant/code/tall/database/factories/UserFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to static method factory() on an unknown class App\\Models\\Team.',
       'file' => '/home/vagrant/code/tall/database/factories/UserFactory.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => '/home/vagrant/code/tall/database/factories/UserFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 58,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'collectedDataCallback' => static function (): array { return array (
  '/home/vagrant/code/tall/app/Http/Controllers/PostController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'posts.index',
       'filePath' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'collectorType' => 'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'posts.create',
       'filePath' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'collectorType' => 'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
    2 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'posts.show',
       'filePath' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'collectorType' => 'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
    3 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'posts.edit',
       'filePath' => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
       'collectorType' => 'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/home/vagrant/code/tall/app/Livewire/DeleteModal.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'livewire.delete-modal',
       'filePath' => '/home/vagrant/code/tall/app/Livewire/DeleteModal.php',
       'collectorType' => 'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/home/vagrant/code/tall/app/View/Components/AppLayout.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'layouts.app',
       'filePath' => '/home/vagrant/code/tall/app/View/Components/AppLayout.php',
       'collectorType' => 'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/home/vagrant/code/tall/app/View/Components/GuestLayout.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'layouts.guest',
       'filePath' => '/home/vagrant/code/tall/app/View/Components/GuestLayout.php',
       'collectorType' => 'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
); },
	'dependencies' => array (
  '/home/vagrant/code/tall/app/Actions/Fortify/CreateNewUser.php' => 
  array (
    'fileHash' => '2dde62f61f5c692340e483bb2a90bc6113b0886c',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Actions/Fortify/PasswordValidationRules.php' => 
  array (
    'fileHash' => '8036f7d53dc0a746c450df33e92cfdf1bd865fe3',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Actions/Fortify/CreateNewUser.php',
      1 => '/home/vagrant/code/tall/app/Actions/Fortify/ResetUserPassword.php',
      2 => '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserPassword.php',
      3 => '/home/vagrant/code/tall/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Actions/Fortify/ResetUserPassword.php' => 
  array (
    'fileHash' => '2bf397c872ba96d1501f16b81ce3f6258157ff60',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserPassword.php' => 
  array (
    'fileHash' => 'bb1b95774b5a0f30d4fdc29e67ccf4fcecd41fda',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserProfileInformation.php' => 
  array (
    'fileHash' => 'e3fd214a7330da7228e8e33f37744841534d6bc1',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Actions/Jetstream/DeleteUser.php' => 
  array (
    'fileHash' => 'f78a2b97a70c8578396f14c1d6577e9d900c68b8',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Providers/JetstreamServiceProvider.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Console/Kernel.php' => 
  array (
    'fileHash' => '7762951222b8c365bbfcd10db5f2c08e39ff8142',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Exceptions/Handler.php' => 
  array (
    'fileHash' => 'fe00c651cc3178876f5a61e05d595da4b8210c0c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '1bff29ea03648d6fedf22b3619d8964630d46a69',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Controllers/PostController.php' => 
  array (
    'fileHash' => 'a65a2a90fd4d9647aa0a54b64f599aef767355aa',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Kernel.php' => 
  array (
    'fileHash' => 'f9b34fdbcbfcc43b6f7bee0af39809fa5c91a7dd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/Authenticate.php' => 
  array (
    'fileHash' => 'aa7a909ab8e4a8d509f2cecfe890fd7f19df8938',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/EncryptCookies.php' => 
  array (
    'fileHash' => 'fcbbfaae9d7ac781cd043ee7ce2ee66800d075ee',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => 
  array (
    'fileHash' => '3f1cc28f08b8a3a8bbd1495e187fc197110cdab1',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/RedirectIfAuthenticated.php' => 
  array (
    'fileHash' => '22865d62613f580ef172e96566cf7b7221117c3d',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/TrimStrings.php' => 
  array (
    'fileHash' => 'fdae9e792d68b2827446435ff17d6848726a1e81',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/TrustHosts.php' => 
  array (
    'fileHash' => '67a8483c3620b6cd2c6354e8282fb08a98feb608',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/TrustProxies.php' => 
  array (
    'fileHash' => '4c915478c380e43a2889f66130fe95f9b90ca5f0',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/ValidateSignature.php' => 
  array (
    'fileHash' => 'ef66937ccd20e6a189479dcc98e564cc72d4c92c',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/VerifyCsrfToken.php' => 
  array (
    'fileHash' => 'f40416cadebf79cecb5ffaa1d7bed8d360f8addd',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Http/Requests/PostRequest.php' => 
  array (
    'fileHash' => 'e11a86e8504e799c87388e21889e5c190817ce0d',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Livewire/DeleteModal.php' => 
  array (
    'fileHash' => 'e0c4979dc4a0b663d8718b59e29aa0412146bd40',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Models/Post.php' => 
  array (
    'fileHash' => '1cca03f576470ca224ab99eb87e9f68f05eaf037',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Actions/Fortify/CreateNewUser.php',
      1 => '/home/vagrant/code/tall/app/Actions/Fortify/ResetUserPassword.php',
      2 => '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserPassword.php',
      3 => '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserProfileInformation.php',
      4 => '/home/vagrant/code/tall/app/Actions/Jetstream/DeleteUser.php',
      5 => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
      6 => '/home/vagrant/code/tall/app/Models/User.php',
      7 => '/home/vagrant/code/tall/app/Providers/RouteServiceProvider.php',
      8 => '/home/vagrant/code/tall/database/factories/PostFactory.php',
      9 => '/home/vagrant/code/tall/database/factories/UserFactory.php',
      10 => '/home/vagrant/code/tall/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Models/User.php' => 
  array (
    'fileHash' => '429e5f3398a4f9bf56f207b3ec9976f676663c5f',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Actions/Fortify/CreateNewUser.php',
      1 => '/home/vagrant/code/tall/app/Actions/Fortify/ResetUserPassword.php',
      2 => '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserPassword.php',
      3 => '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserProfileInformation.php',
      4 => '/home/vagrant/code/tall/app/Actions/Jetstream/DeleteUser.php',
      5 => '/home/vagrant/code/tall/app/Http/Controllers/PostController.php',
      6 => '/home/vagrant/code/tall/app/Models/Post.php',
      7 => '/home/vagrant/code/tall/app/Providers/RouteServiceProvider.php',
      8 => '/home/vagrant/code/tall/database/factories/PostFactory.php',
      9 => '/home/vagrant/code/tall/database/factories/UserFactory.php',
      10 => '/home/vagrant/code/tall/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/vagrant/code/tall/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '01bf9e5cf5bb666446625056b618445ae4749675',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Providers/AuthServiceProvider.php' => 
  array (
    'fileHash' => '494bb0a4861384d9ba08f6b49d67830d54e54284',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Providers/BroadcastServiceProvider.php' => 
  array (
    'fileHash' => '65964eb912591e8f2a962d7f2930702f3223f9be',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Providers/EventServiceProvider.php' => 
  array (
    'fileHash' => 'b4c10462ddd299c88e23da3b4f30b88b45a4f964',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Providers/FortifyServiceProvider.php' => 
  array (
    'fileHash' => 'aad42b49b935f4a69e1de19b203e55e2cd38d323',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Providers/JetstreamServiceProvider.php' => 
  array (
    'fileHash' => 'f23a35bf237a721b9a7573efc477b79d8a84c715',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => '28b00ae833d163b393e4abe27e885c59bc8073fd',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/app/Http/Middleware/RedirectIfAuthenticated.php',
    ),
  ),
  '/home/vagrant/code/tall/app/View/Components/AppLayout.php' => 
  array (
    'fileHash' => '70a0e0d946bc58e7b0e04d6d3d08ce854cc82be7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/app/View/Components/GuestLayout.php' => 
  array (
    'fileHash' => '18d31703058edf2f03018c5e3e257eb84aab4c3d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/tall/database/factories/PostFactory.php' => 
  array (
    'fileHash' => '5c6ab96a8fc1cfc1757929a9e42b45ae4edcc790',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/vagrant/code/tall/database/factories/UserFactory.php' => 
  array (
    'fileHash' => '999958c3c45350635757a60563c74817221655b9',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/tall/database/factories/PostFactory.php',
      1 => '/home/vagrant/code/tall/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/vagrant/code/tall/database/seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => '58e16f07d8ff70642de978a2e73b72ba22de3d0b',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/home/vagrant/code/tall/app/Actions/Fortify/CreateNewUser.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\CreateNewUser',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
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
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'createsnewusers' => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
              'jetstream' => 'Laravel\\Jetstream\\Jetstream',
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
  '/home/vagrant/code/tall/app/Actions/Fortify/PasswordValidationRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'App\\Actions\\Fortify\\PasswordValidationRules',
    )),
  ),
  '/home/vagrant/code/tall/app/Actions/Fortify/ResetUserPassword.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\ResetUserPassword',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
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
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
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
  '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserPassword.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\UpdateUserPassword',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\UpdatesUserPasswords',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and update the user\'s password.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'updatesuserpasswords' => 'Laravel\\Fortify\\Contracts\\UpdatesUserPasswords',
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
  '/home/vagrant/code/tall/app/Actions/Fortify/UpdateUserProfileInformation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\UpdateUserProfileInformation',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\UpdatesUserProfileInformation',
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
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and update the given user\'s profile information.
     *
     * @param  array<string, mixed>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'rule' => 'Illuminate\\Validation\\Rule',
              'updatesuserprofileinformation' => 'Laravel\\Fortify\\Contracts\\UpdatesUserProfileInformation',
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
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateVerifiedUser',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the given verified user\'s profile information.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'rule' => 'Illuminate\\Validation\\Rule',
              'updatesuserprofileinformation' => 'Laravel\\Fortify\\Contracts\\UpdatesUserProfileInformation',
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
  '/home/vagrant/code/tall/app/Actions/Jetstream/DeleteUser.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Jetstream\\DeleteUser',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Jetstream\\Contracts\\DeletesUsers',
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
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete the given user.
     */',
             'namespace' => 'App\\Actions\\Jetstream',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'deletesusers' => 'Laravel\\Jetstream\\Contracts\\DeletesUsers',
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
  '/home/vagrant/code/tall/app/Console/Kernel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Console\\Kernel',
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
           'name' => 'schedule',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the application\'s command schedule.
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
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
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schedule',
               'type' => 'Illuminate\\Console\\Scheduling\\Schedule',
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
           'name' => 'commands',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the commands for the application.
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
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
  '/home/vagrant/code/tall/app/Exceptions/Handler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Handler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Exceptions\\Handler',
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
            0 => 'dontFlash',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the exception handling callbacks for the application.
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
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
  '/home/vagrant/code/tall/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        1 => 'Illuminate\\Foundation\\Validation\\ValidatesRequests',
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
  '/home/vagrant/code/tall/app/Http/Controllers/PostController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\PostController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
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
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\PostRequest',
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
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
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
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
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
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\PostRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
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
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
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
  '/home/vagrant/code/tall/app/Http/Kernel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Kernel',
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
            0 => 'middleware',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareGroups',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareAliases',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s middleware aliases.
     *
     * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
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
  '/home/vagrant/code/tall/app/Http/Middleware/Authenticate.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\Authenticate',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Auth\\Middleware\\Authenticate',
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
           'name' => 'redirectTo',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the path the user should be redirected to when they are not authenticated.
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Auth\\Middleware\\Authenticate',
              'request' => 'Illuminate\\Http\\Request',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/tall/app/Http/Middleware/EncryptCookies.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EncryptCookies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
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
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
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
  '/home/vagrant/code/tall/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\PreventRequestsDuringMaintenance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
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
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
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
  '/home/vagrant/code/tall/app/Http/Middleware/RedirectIfAuthenticated.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\RedirectIfAuthenticated',
       'phpDoc' => NULL,
       'abstract' => false,
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
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Symfony\\Component\\HttpFoundation\\Response)  $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
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
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guards',
               'type' => 'string',
               'byRef' => false,
               'variadic' => true,
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
  '/home/vagrant/code/tall/app/Http/Middleware/TrimStrings.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrimStrings',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
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
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
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
  '/home/vagrant/code/tall/app/Http/Middleware/TrustHosts.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustHosts',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustHosts',
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
           'name' => 'hosts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustHosts',
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
  '/home/vagrant/code/tall/app/Http/Middleware/TrustProxies.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustProxies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustProxies',
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
            0 => 'proxies',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'headers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
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
  '/home/vagrant/code/tall/app/Http/Middleware/ValidateSignature.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\ValidateSignature',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
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
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
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
  '/home/vagrant/code/tall/app/Http/Middleware/VerifyCsrfToken.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\VerifyCsrfToken',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
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
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
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
  '/home/vagrant/code/tall/app/Http/Requests/PostRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\PostRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
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
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string> */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
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
  '/home/vagrant/code/tall/app/Livewire/DeleteModal.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\DeleteModal',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
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
            0 => 'action',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'confirmingModelDeletion',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
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
  '/home/vagrant/code/tall/app/Models/Post.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Post',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * \\App\\Models\\Post
 *
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property \\Carbon\\Carbon $date
 * @property-read \\App\\Models\\User|null $user
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
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
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, mixed> */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return mixed \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<\\App\\Models\\User, \\App\\Models\\Post> */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
  '/home/vagrant/code/tall/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * \\App\\Models\\User
 *
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \\Carbon\\Carbon|null $email_verified_at
 * @property-read \\Illuminate\\Support\\Collection<int, \\App\\Models\\Post> $posts
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
          'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
          'notifiable' => 'Illuminate\\Notifications\\Notifiable',
          'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
          'hasprofilephoto' => 'Laravel\\Jetstream\\HasProfilePhoto',
          'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Laravel\\Jetstream\\HasProfilePhoto',
        3 => 'Illuminate\\Notifications\\Notifiable',
        4 => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
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
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
              'hasprofilephoto' => 'Laravel\\Jetstream\\HasProfilePhoto',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'attributes' => 
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
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
              'hasprofilephoto' => 'Laravel\\Jetstream\\HasProfilePhoto',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
              'hasprofilephoto' => 'Laravel\\Jetstream\\HasProfilePhoto',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appends',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
              'hasprofilephoto' => 'Laravel\\Jetstream\\HasProfilePhoto',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'posts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany<\\App\\Models\\Post>*/',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
              'hasprofilephoto' => 'Laravel\\Jetstream\\HasProfilePhoto',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
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
  '/home/vagrant/code/tall/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
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
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
  '/home/vagrant/code/tall/app/Providers/AuthServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AuthServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
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
            0 => 'policies',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
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
     * Register any authentication / authorization services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
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
  '/home/vagrant/code/tall/app/Providers/BroadcastServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\BroadcastServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
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
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
  '/home/vagrant/code/tall/app/Providers/EventServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
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
            0 => 'listen',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
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
     * Register any events for your application.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
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
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'shouldDiscoverEvents',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if events and listeners should be automatically discovered.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/tall/app/Providers/FortifyServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\FortifyServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
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
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'updateuserpassword' => 'App\\Actions\\Fortify\\UpdateUserPassword',
              'updateuserprofileinformation' => 'App\\Actions\\Fortify\\UpdateUserProfileInformation',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'str' => 'Illuminate\\Support\\Str',
              'fortify' => 'Laravel\\Fortify\\Fortify',
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
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'updateuserpassword' => 'App\\Actions\\Fortify\\UpdateUserPassword',
              'updateuserprofileinformation' => 'App\\Actions\\Fortify\\UpdateUserProfileInformation',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'str' => 'Illuminate\\Support\\Str',
              'fortify' => 'Laravel\\Fortify\\Fortify',
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
  '/home/vagrant/code/tall/app/Providers/JetstreamServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\JetstreamServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
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
              'deleteuser' => 'App\\Actions\\Jetstream\\DeleteUser',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'jetstream' => 'Laravel\\Jetstream\\Jetstream',
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
              'deleteuser' => 'App\\Actions\\Jetstream\\DeleteUser',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'jetstream' => 'Laravel\\Jetstream\\Jetstream',
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
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configurePermissions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Configure the permissions that are available within the application.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'deleteuser' => 'App\\Actions\\Jetstream\\DeleteUser',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'jetstream' => 'Laravel\\Jetstream\\Jetstream',
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
  '/home/vagrant/code/tall/app/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
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
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HOME',
               'value' => '\'/dashboard\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The path to your application\'s "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define your route model bindings, pattern filters, and other route configuration.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
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
  '/home/vagrant/code/tall/app/View/Components/AppLayout.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\AppLayout',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
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
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represents the component.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
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
           'returnType' => 'Illuminate\\View\\View',
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
  '/home/vagrant/code/tall/app/View/Components/GuestLayout.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\GuestLayout',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
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
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represents the component.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
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
           'returnType' => 'Illuminate\\View\\View',
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
  '/home/vagrant/code/tall/database/factories/PostFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\PostFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\Post>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
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
             'phpDocString' => '/** @return array<string, mixed> */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/tall/database/factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'team' => 'App\\Models\\Team',
          'user' => 'App\\Models\\User',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'str' => 'Illuminate\\Support\\Str',
          'features' => 'Laravel\\Jetstream\\Features',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
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
              'team' => 'App\\Models\\Team',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
              'features' => 'Laravel\\Jetstream\\Features',
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
              'team' => 'App\\Models\\Team',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
              'features' => 'Laravel\\Jetstream\\Features',
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
           'name' => 'withPersonalTeam',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the user should have a personal team.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'team' => 'App\\Models\\Team',
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'str' => 'Illuminate\\Support\\Str',
              'features' => 'Laravel\\Jetstream\\Features',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'callback',
               'type' => '?callable',
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
  '/home/vagrant/code/tall/database/seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
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
           'phpDoc' => NULL,
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
