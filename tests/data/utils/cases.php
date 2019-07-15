<?php

$cases = [
    'key'                            => [
        'en' => 'a key',
        'it' => 'una chiave',
    ],
    'key_no_fallback'                => [
        'en' => 'not exists in language, return a key from fallback',
    ],
    // deep
    'key_deep'                       => [
        'en' => [
            'deep' => [
                'deep' => 'key deep',
            ],
        ],
        'it' => [
            'deep' => [
                'deep' => 'chiave deep',
            ],
        ],
    ],
    'key_inline.deep.inline'         => [
        'en' => 'key deep in line',
        'it' => 'chiave deep in linea',
    ],

    // context
    'key_context'                    => [
        'en' => 'key with context',
        'it' => 'chiave con contesto',
    ],
    // replacer
    'key_interpolate'                => [
        'en' => '{{what}} is {{how}}',
        'it' => '{{what}} è {{how}}',
    ],
    // replacer
    'key_interpolate_array'          => [
        'en' => 'I am {{author.name}} and i have {{author.age}} years old',
        'it' => 'Io sono {{author.name}} ed ho {{author.age}} anni',
    ],
    // simple plurals
    'friend'                         => [
        'en' => 'A friend',
        'it' => 'Un conoscente',
        'ro' => 'Un prieten',
    ],
    'friend_male'                    => [
        'en' => 'A boyfriend',
        'it' => 'Un amico',
    ],
    'friend_female'                  => [
        'en' => 'A girlfriend',
        'it' => "Un'amica",
    ],
    'friend_male_plural'             => [
        'en' => 'boyfriends',
        'it' => 'amici',
    ],
    'friend_female_plural'           => [
        'en' => 'girlfriends',
        'it' => 'amiche',
    ],
    'friend_male_withCount_plural'   => [
        'en' => '{{count}} boyfriends',
        'it' => '{{count}} amici',
    ],
    'friend_female_withCount_plural' => [
        'en' => '{{count}} girlfriends',
        'it' => '{{count}} amiche',
    ],
    // unescape
    'key_escaped'                    => [
        'en' => 'no danger {{myVar}}',
    ],
    'key_unescaped'                  => [
        'en' => 'no danger {{-myVar}}',
    ],
    // format
    'key_format_date'                => [
        'en' => 'The current date is {{date, MM/DD/YYYY}}',
    ],
    'key_format_uppercase'           => [
        'en' => '{{text, uppercase}} just uppercased',
    ],
    'key_format_lowercase'           => [
        'en' => '{{text, lowercase}} just lowercased',
    ],
    'key_format_ucfirst'             => [
        'en' => '{{text, ucfirst}} just ucfirst',
    ],
    // multiple plural syntax
    'key_0'                          => ['en' => 'zero'],
    'key_1'                          => ['en' => 'one'],
    'key_2'                          => ['en' => 'two'],
    'key_3'                          => ['en' => 'few'],
    'key_4'                          => ['en' => 'many'],
    'key_5'                          => ['en' => 'other'],
    // nesting simple
    'nesting1'                       => ['en' => '1 $t(nesting2)'],
    'nesting2'                       => ['en' => '2 $t(nesting3)'],
    'nesting3'                       => ['en' => '3'],
    // nesting complex
    'girlsAndBoys'                   => ['en' => '$t(girls, {"count": {{girls}} }) and {{count}} boy'],
    'girlsAndBoys_plural'            => ['en' => '$t(girls, {"count": {{girls}} }) and {{count}} boys'],
    'girls'                          => ['en' => '{{count}} girl'],
    'girls_plural'                   => ['en' => '{{count}} girls'],
    // nesting value + interpolate
    'key_nesting_interpolate1'       => ['en' => 'hello world'],
    'key_nesting_interpolate2'       => ['en' => 'say {{val}}'],
    //
    'test_other_language'            => [
        'en' => 'other language',
        'it' => 'altro linguaggio',
        'ro' => 'alta limba',
    ],
    'test_other_language_single_key' => [
        'ro' => 'alta limba',
    ],
    'atk4_model' => [
        'en' => 'user : {{first_name}} {{last_name}} with email : {{email}}',
        'it' => 'utente : {{first_name}} {{last_name}} con email : {{email}}',
    ],
    'atk4_model_object' => [
        'en' => 'user : {{user.first_name}} {{user.last_name}} with email : {{user.email}}',
        'it' => 'utente : {{user.first_name}} {{user.last_name}} con email : {{user.email}}',
    ],
    'atk4_model_object2' => [
        'en' => 'user : {{user.first_name}} {{user.last_name}} with email : {{address.email}}',
        'it' => 'utente : {{user.first_name}} {{user.last_name}} con email : {{address.email}}',
    ],
    'key4_interval' => [
        'en' => '(1){one item};(2-7){a few items};(7-inf){a lot of items};',
    ],
];

$path_def = [];
foreach ($cases as $key => $code_def) {
    foreach ($code_def as $code => $def) {
        $chunk3 = substr($key, 0, 3);
        switch ($chunk3) {
            case 'gir':
            case 'fri':
                $file_name = 'friend';
                break;
            case 'nes':
                $file_name = 'nesting';
                break;
            case 'tes':
                $file_name = 'other_test';
                break;
            case 'key':
                $file_name = 'key';
                break;

            case 'atk':
                $file_name = 'atk';
                break;
            default:
                $file_name = $key;
                $key = key($def);
                $def = current($def);
                break;
        }

        $path_def[$code.'/'.$file_name.'.json'][$key] = $def;
    }
}

$namespaced = [
    'namespace1' => [
        'en' => ['nskey' => 'namespace1 key'],
        'it' => ['nskey' => 'namespace1 chiave'],
    ],
    'namespace2' => [
        'en' => ['nskey' => 'namespace2 key'],
        'it' => ['nskey' => 'namespace2 chiave'],
    ],
    'namespace3' => [
        'en' => ['nskey' => 'namespace3 key'],
        'it' => ['nskey' => 'namespace3 chiave'],
    ],
];

foreach ($namespaced as $namespace => $code_def) {
    foreach ($code_def as $code => $def) {
        foreach ($def as $key => $value) {
            $path_def[$code.'/'.$namespace.'.json'][$key] = $value;
        }
    }
}
