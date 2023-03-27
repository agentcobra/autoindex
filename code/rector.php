<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\Assign\RemoveUnusedVariableAssignRector;
use Rector\Php74\Rector\LNumber\AddLiteralSeparatorToNumberRector;
use Rector\PSR4\Rector\Namespace_\MultipleClassFileToPsr4ClassesRector;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/code/classes',
        __DIR__ . '/code/config.php',
        __DIR__ . '/code/index.php',
    ]);

    $rectorConfig->skip([
        __DIR__ . '/code/vendor/*',
    ]);

    // register a single rule
    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    $rectorConfig->rule(MultipleClassFileToPsr4ClassesRector::class);
    // $rectorConfig->rule(RemoveUnusedVariableAssignRector::class);

    // define sets of rules
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_74
    ]);
    $rectorConfig->skip([
        AddLiteralSeparatorToNumberRector::class,
    ]);
};
