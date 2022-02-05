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
}
