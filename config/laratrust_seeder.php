<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrateur' => [
            'users' => 'c,r,u,d',
            'agences' => 'c,r,u,d',
            'paiements' => 'c,r,u,d',
            'reservations' => 'c,r,u,d',
            'reservation_vehicules' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'type_vehicules' => 'c,r,u,d',
            'vehicules' => 'c,r,u,d',
            'dashboard' => 'b',
        ],
        'clients' => [
            'users' => 'c,r,u,d',
            'reservation' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'b' => 'bord',
    ],
];
