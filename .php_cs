<?php

$header = <<<'EOF'
@link https://github.com/ixocreate
@copyright IXOLIT GmbH
@license MIT License
EOF;

$dirs = [
    'src',
    'tests',
];

$optionalDirs = [
    'bootstrap',
    'config',
    'resources/migrations',
];

foreach ($optionalDirs as $dir) {
    if (is_dir($dir)) {
        $dirs[] = $dir;
    }
}

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        'header_comment' => [
            'header' => $header,
            'commentType' => 'PHPDoc',
            'location' => 'after_open',
            'separate' => 'bottom',
        ],

        '@PSR2' => true,
        'psr4' => true,
        'declare_strict_types' => true,

        // comments
        'hash_to_slash_comment' => true,
        'no_empty_comment' => false,
        'no_empty_phpdoc' => false,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_no_alias_tag' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order' => true,
        'phpdoc_scalar' => true,
        'phpdoc_summary' => false,
        'no_blank_lines_after_phpdoc' => true,

        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
        ],

        'class_attributes_separation' => ['elements' => ['const', 'method', 'property']],
        'single_blank_line_before_namespace' => true,
        'combine_consecutive_unsets' => true,
        'concat_space' => ['spacing' => 'one'],
        'is_null' => true,
        'yoda_style' => [
            'always_move_variable' => false,
            'equal' => false,
            'identical' => false,
            'less_and_greater' => null,
        ],
        'linebreak_after_opening_tag' => true,
        'lowercase_cast' => true,
        'mb_str_functions' => true,
        'modernize_types_casting' => true,
        'native_function_casing' => true,
        'native_function_invocation' => true,
        'new_with_braces' => true,
        'no_alias_functions' => true,
        'no_empty_statement' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => true,
        'no_unreachable_default_argument_value' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unused_imports' => true,
        'no_useless_return' => true,
        'no_whitespace_in_blank_line' => true,
        'normalize_index_brace' => true,
        'object_operator_without_whitespace' => true,
        'pow_to_exponentiation' => true,
        'random_api_migration' => true,
        'short_scalar_cast' => true,
        'standardize_not_equals' => true,
        'trailing_comma_in_multiline_array' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()->in($dirs)
    );
