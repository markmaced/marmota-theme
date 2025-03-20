<?php

function custom_ajax_login() {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        wp_send_json_error(['message' => 'Preencha todos os campos!']);
    }

    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];

    $user = wp_authenticate($email, $password);

    if (is_wp_error($user)) {
        wp_send_json_error(['message' => 'E-mail ou senha incorretos!']);
    }
    
    wp_set_current_user($user->ID);
    wp_set_auth_cookie($user->ID);

    wp_send_json_success(['message' => 'Login realizado com sucesso!']);
}

add_action('wp_ajax_custom_ajax_login', 'custom_ajax_login');
add_action('wp_ajax_nopriv_custom_ajax_login', 'custom_ajax_login');
