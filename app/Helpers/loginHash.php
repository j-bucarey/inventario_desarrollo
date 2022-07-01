<?php

function hashPassword($pass)
{
    return password_hash($pass,PASSWORD_DEFAULT);
}
function verifyPassword($pass,$hashPassword)
{
    return password_verify($pass,$hashPassword);
}