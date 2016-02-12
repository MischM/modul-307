<?php
/**
 * Überprüft, ob sich ein Benutzer einloggen kann.
 *
 * @param  string   $username
 * @param  string   $password
 * @return string
 */
function login($username, $password)
{
    // Registrierte Benutzer in Array laden
    $users = include realpath(__DIR__) . '/users.php';

    if ( ! array_key_exists($username, $users)) {
        return 'Dieser Benutzer existiert nicht.';
    }

    $user = $users[$username];

    if ($user['password'] !== $password) {
        return 'Das eingegebene Passwort ist falsch.';
    }

    if ($user['blocked'] === true) {
        return 'Dieser Benutzer ist gesperrt.';
    }

    if ( ! in_array($user['role'], ['Administrator', 'Publisher'])) {
        return 'Nur Administratoren und Publisher dürfen sich einloggen.';
    }

    return 'Login okay!';
}

// Tests laden und ausführen
require realpath(__DIR__) . '/../tests/tests.php';
