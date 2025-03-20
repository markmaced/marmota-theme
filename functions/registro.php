<?php

function custom_ajax_register() {
    if (!isset($_POST['name'], $_POST['email'], $_POST['telefone'], $_POST['password'])) {
        wp_send_json_error(['message' => 'Dados incompletos.']);
    }

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $telefone = sanitize_text_field($_POST['telefone']);
    $password = $_POST['password']; // Já tratado pelo WordPress ao inserir usuário

    if (email_exists($email)) {
        wp_send_json_error(['message' => 'Este e-mail já está cadastrado.']);
    }

    $user_id = wp_insert_user([
        'user_login' => $email,
        'user_email' => $email,
        'first_name' => $name,
        'user_pass' => $password,
        'role' => 'subscriber'
    ]);

    if (is_wp_error($user_id)) {
        wp_send_json_error(['message' => 'Erro ao criar usuário.']);
    }

    // Salvar telefone no ACF
    update_field('telefone', $telefone, "user_$user_id");

    // Fazer login automático após registro
    $user = get_user_by('id', $user_id);
    wp_set_current_user($user_id, $user->user_login);
    wp_set_auth_cookie($user_id);
    do_action('wp_login', $user->user_login, $user);

    wp_send_json_success(['message' => 'Usuário registrado com sucesso!']);
}

add_action('wp_ajax_custom_ajax_register', 'custom_ajax_register');
add_action('wp_ajax_nopriv_custom_ajax_register', 'custom_ajax_register');