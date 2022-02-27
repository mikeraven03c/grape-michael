<?php
return [
    /**
     * User made config
     */

     // Entities
    'entities' => [
        App\Models\Customer::class
    ],

    // Attributes
    'attributes' => [
        [
            'slug' => 'first_name',
            'type' => 'varchar',
            'name' => 'First Name',
            'entities' => ['App\Models\Customer'],
        ],
        [
            'slug' => 'last_name',
            'type' => 'varchar',
            'name' => 'Last Name',
            'entities' => ['App\Models\Customer'],
        ],
        [
            'slug' => 'age',
            'type' => 'integer',
            'name' => 'Age',
            'entities' => ['App\Models\Customer'],
        ],
        [
            'slug' => 'gender',
            'type' => 'varchar',
            'name' => 'Gender',
            'entities' => ['App\Models\Customer'],
        ],
        [
            'slug' => 'address_1',
            'type' => 'varchar',
            'name' => 'Address',
            'entities' => ['App\Models\Customer'],
        ],
        [
            'slug' => 'birthdate',
            'type' => 'varchar',
            'name' => 'Birth Date',
            'entities' => ['App\Models\Customer'],
        ]
    ]
];