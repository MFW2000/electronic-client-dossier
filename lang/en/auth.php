<?php

return [
    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'forgot_password' => [
        'context' => 'Forgot your password? No problem. Just let us know your email address and we will email you a '
            .'password reset link that will allow you to choose a new one.',
        'submit' => 'Email Password Reset Link',
    ],

    'login' => [
        'remember_me' => 'Remember me',
        'submit' => 'Log In',
        'forgot_password' => 'Forgot your password?',
    ],

    'reset_password' => [
        'confirm' => 'Confirm Password',
        'submit' => 'Reset Password',
    ],

    'verify_email' => [
        'context' => 'For security reasons, you must first verify your email by clicking on the link we just '
            .'emailed to you. If you didn\'t receive the email, we will gladly send you another.',
        'success' => 'A new verification link has been sent to the given email address.',
        'submit' => 'Resend Verification Email',
    ],
];
