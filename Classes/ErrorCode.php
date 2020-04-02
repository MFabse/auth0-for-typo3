<?php

namespace Bitmotion\Auth0;


class ErrorCode
{
    /**
     * Error codes provided by Auth0
     * @see: https://auth0.com/docs/libraries/error-messages
     */

    // Sign up errors
    const ERROR_INVALID_PASSWORD = 'invalid_password';
    const ERROR_INVALID_SIGNUP = 'invalid_signup';
    const ERROR_PASSWORD_DICTIONARY = 'password_dictionary_error';
    const ERROR_PASSWORD_NO_USER_INFO = 'password_no_user_info_error';
    const ERROR_PASSWORD_STRENGTH_SIGN_UP = 'password_strength_error';
    const ERROR_USER_EXISTS = 'user_exists';
    const ERROR_USERNAME_EXISTS = 'username_exists';

    // Log in errors
    const ERROR_ACCESS_DENIED = 'access_denied';
    const ERROR_INVALID_USER_PASSWORD = 'invalid_user_password';
    const ERROR_MFA_INVALID_CODE = 'mfa_invalid_code';
    const ERROR_MFA_REGISTRATION_REQUIRED = 'mfa_registration_required';
    const ERROR_MFA_REQUIRED = 'mfa_required';
    const ERROR_PASSWORD_LEAKED = 'password_leaked';
    const ERROR_PASSWORD_HISTORY = 'PasswordHistoryError';
    const ERROR_PASSWORD_STRENGTH_LOG_IN = 'PasswordStrengthError';
    const ERROR_TOO_MANY_ATTEMPTS = 'too_many_attempts';

    // Errors occures in log in and sign up
    const ERROR_UNAUTHORIZED = 'unauthorized';
}