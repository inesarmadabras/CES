<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute tem que ser aceite.',
    'active_url'           => ':attribute não é um URL válido',
    'after'                => ':attribute tem que ser uma data posterior a :date.',
    'after_or_equal'       => ':attribute tem que ser uma data igual ou posterior a :date.',
    'alpha'                => ':attribute apenas pode conter letras.',
    'alpha_dash'           => ':attribute apenas pode conter letras, números e travessões (-)',
    'alpha_num'            => ':attribute apenas pode conter letras e números.',
    'array'                => ':attribute tem que ser um array.',
    'before'               => ':attribute tem que ser uma data anterior a :date.',
    'before_or_equal'      => ':attribute tem que ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => ':attribute tem que ser entre :min e :max.',
        'file'    => ':attribute tem que ter entre :min e :max kilobytes.',
        'string'  => ':attribute tem que ter entre :min e :max caracteres.',
        'array'   => ':attribute tem que ter entre :min e :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'O :attribute seleccionado é inválido.',
    'numeric'              => 'O :attribute tem que ser um número',
    'present'              => ':attribute tem que existir.',
    'regex'                => ':attribute tem formato inválido',
    'required'             => ':attribute é necessário',
    'required_if'          => ':attribute é necessário quando :other is :value.',
    'required_unless'      => ':attribute é necessário, a não ser que :other esteja em :values.',
    'required_with'        => ':attribute é necessário quando :values existe.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => ':attribute e :other têm que ser iguais',
    'size'                 => [
        'numeric' => ':attribute tem que ter :size.',
        'file'    => ':attribute tem que ter :size kilobytes.',
        'string'  => ':attribute tem que ter :size caracteres.',
        'array'   => ':attribute tem que conter :size items.',
    ],
    'string'               => ':attribute tem que ser uma string.',
    'timezone'             => ':attribute tem que ter uma timezone válida',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => ':attribute falhou o upload',
    'url'                  => ':attribute tem formato inválido',

    // Custom Validation Rules
    App\Validation\DoesNotContainUrlRule::NAME => ' :attribute não pode ter uma URL.',
    App\Validation\PasscheckRule::NAME => 'A sua palavra-passe atual está errada.',
    App\Validation\SpamRule::NAME => ':attribute contém spam.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
