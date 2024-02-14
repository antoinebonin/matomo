<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude(['vendor']);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PhpCsFixer' => true,
        'modernize_strpos' => true,
        '@PSR12' => true,
        'phpdoc_summary' => false,
        'strict_param' => true,
        'yoda_style' => false,
        'declare_strict_types' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);