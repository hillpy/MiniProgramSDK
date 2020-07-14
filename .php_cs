<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->notPath('mpsdk_cache')
    ->in([__DIR__.'/src/', __DIR__.'/tests/'])
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'blank_line_after_opening_tag' => true,
        'braces' => ['allow_single_line_closure' => true],
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'one'],
        'declare_equal_normalize' => ['space' => 'none'],
        'function_typehint_space' => true,
        'new_with_braces' => true,
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'no_empty_statement' => true,
        'no_unused_imports' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_whitespace_in_blank_line' => true,
        'return_type_declaration' => ['space_before' => 'none'],
        'single_trait_insert_per_statement' => false,
    ])
    ->setFinder($finder)
;