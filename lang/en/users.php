<?php

return [
    'title' => 'Users',
    'create_user' => 'Add User',
    'confirm_delete_user' => 'Are you sure you want to delete this user?',

    'create' => [
        'context' => 'Create a new user profile with a password that can be shared. '.
            'The user must complete email verification before obtaining access to the system. '.
            'It is advisable to prompt the user to change the provided password immediately.',
    ],

    'update' => [
        'title' => 'Update User',
    ],

    'status' => [
        'user_created' => 'User created.',
        'user_updated' => 'User updated.',
        'cannot_self_delete' => 'You cannot self-delete your account.',
        'user_deleted' => 'User deleted.',
    ],
];
