<?php
    require_once("../inc/db.inc");
    require_once("../inc/util.inc");

    $next_url = $_GET["next_url"];
    
    $authenticator = init_session();
    if ($authenticator) {
        db_init();
        $user = get_user_from_auth($authenticator);
    }

    page_head("Log in");
    print_login_form_aux($next_url, $user);

    page_tail();
?>
