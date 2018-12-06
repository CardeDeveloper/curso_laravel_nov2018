<?php

return [

    /*validaciones en formularios*/

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute debe contener solo letras.',
    'alpha_dash'           => 'El campo :attribute debe contener solo letras, números, guines y guiones bajos',
    'alpha_num'            => 'El campo :attribute debe contener solo letras, números.',
    'array'                => 'El campo :attribute debe ser un arreglo.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a:date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior  o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe contener entre :min y :max characters.',
        'array'   => 'El campo :attribute debe contener entre :min y :max items.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo de confirmacion :attribute no coincide.',
    'date'                 => 'El campo :attribute no es una fecha válida',
    'date_format'          => 'El campo :attribute no corresponde con el formatgo de fecha :format.',
    'different'            => 'Los campos :attribute y :other deben ser diferentes',
    'digits'               => 'El campo :attribute debe ser un número de  :digits digitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max digitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones de imagen invalidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute debe ser un email valido.',
    'exists'               => 'El campo seleccionado :attribute no existe.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute field debe contener un valor.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo seleccionado :attribute es invalido.',
    'in_array'             => 'El campo :attribute field no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un numero entero.',
    'ip'                   => 'El campo :attribute debe ser un IP valida.',
    'ipv4'                 => 'El campo :attribute debe ser un IPV4 valida',
    'ipv6'                 => 'El campo :attribute debe ser un IPV6 valida.',
    'json'                 => 'El campo :attribute debe ser una cadena de JSON valida.',
    'max'                  => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'file'    => 'El archvio :attribute no debe pesar mas de :max kilobytes.',
        'string'  => 'El campo :attribute no debe contener mas de :max caracteres.',
        'array'   => 'El campo :attribute no debe tener mas de :max elemntos.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El campo seleccionado :attribute es invalido.',
    'numeric'              => 'El campo :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato :attribute es invalido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values esta presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values esta presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no estea presente.',
    'required_without_all' => 'El campo :attribute field es obligatorio cuando ninguno de los campos  :values estan presentes.',
    'same'                 => 'El campo :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'string'               => 'El campo :attribute debe ser una cadena.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria valida.',
    'unique'               => 'El valor del campo :attribute ya esta en uso.',
    'uploaded'             => 'El campo :attribute no se puede subir.',
    'url'                  => 'El formato del campo :attribute es invalido.',

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
