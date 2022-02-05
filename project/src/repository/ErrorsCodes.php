<?php

class ErrorsCodes {
    public const REQUEST_BODY_REQUIRED = [
        'message' => ['Incorrect request body.']
    ];
    public const USER_EMAIL_SYSTEM = [
        'message' => ['User with email are already registered in the system.']
    ];
    public const CHECK_FIELDS = [
        'message' => ['Please fill in all fields!']
    ];
    public const USER_NOT_EXIST = [
        'message' => ['User not exist!']
    ];
    public const EMAIL_NOT_EXIST = [
        'message' => ['User with this email not exist!']
    ];
    public const WRONG_PASSWORD = [
        'message' => ['Wrong password!']
    ];
    public const SAME_PASSWORD = [
        'message' => ['The password must not be the same as the current password!']
    ];
}
