<?php

describe('API: Login', function () {
    it('allows a user with valid credentials to login', function () {})->todo();
    it('does not allow a user without valid credentials to login', function () {})->todo();

    it('does not allow authenticated users to login', function () {})->todo();

    it('requires an email address', function () {})->todo();
    it('rejects email addresses that are not a string', function () {})->todo();
    it('rejects invalid email addresses', function () {})->todo();

    it('requires a password', function () {})->todo();
    it('rejects passwords that are not a string', function () {})->todo();

    it('requires a device', function () {})->todo();
    it('rejects devices that are not a string', function () {})->todo();
    it('rejects devices with less than 3 characters', function () {})->todo();
    it('rejects devices with more than 255 characters', function () {})->todo();
});
