<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'single_quote' => true,
        'no_unused_imports' => true,

        'blank_line_after_namespace' => true,
        'class_definition' => true,
        'elseif' => true,
        'function_declaration' => true,
        'no_extra_blank_lines' => true,
        'align_multiline_comment' => true,
        'cast_spaces' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'concat_space' => ['spacing' => 'one'],
        'no_blank_lines_after_class_opening' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_null_property_initialization' => true,
        'no_useless_return' => true,
        'no_useless_else' => true,
        'ordered_imports' => true,
        'ordered_class_elements' => true,
        'whitespace_after_comma_in_array' => true,
        'backtick_to_shell_exec' => true,
        'class_attributes_separation' => true,
        'no_superfluous_elseif' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'trim_array_spaces' => true,
        'space_after_semicolon' => true,
        'method_argument_space' => [
            'on_multiline' => 'ignore', // 'ignore', 'one', or 'align'
            'keep_multiple_spaces_after_comma' => false
        ],
        'indentation_type' => true,
    ])
    ->setFinder($finder)
    ->setUsingCache(false);
