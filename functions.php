<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

define('URL_BASE', get_stylesheet_directory_uri() . '/');
define('IMG_BASE', URL_BASE . 'img/');

// register webpack compiled js and css with theme
function enqueue_webpack_scripts() {
  
    $cssFilePath = glob( get_template_directory() . '/css/build/main.min.*.css' );
    $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'main_css', $cssFileURI );

    $jsFilePath = glob( get_template_directory() . '/js/build/main.min.*.js' );
    $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
    wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_webpack_scripts' );

function my_wpcf7_form_elements( $html ) {
    return preg_replace('/<br\s*\/?>/i', '', $html);
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');

function add_open_graph_tags() {
    if (is_single() || is_page()) {
        global $post;
        $post_image = '';
        if (has_post_thumbnail($post->ID)) {
            $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            $post_image = $post_image[0];
        } else {
            $post_image = 'https://antuanetytoddwedding.com/wp-content/uploads/2024/06/IMG_6335.webp';
        }
        ?>
        <meta property="og:title" content="<?php echo get_the_title(); ?>" />
        <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
        <meta property="og:image" content="<?php echo $post_image; ?>" />
        <meta property="og:url" content="<?php echo get_permalink(); ?>" />
        <meta property="og:type" content="article" />
        <?php
    }
}
add_action('wp_head', 'add_open_graph_tags');


function display_rsvp_form() {
    ?>
    <form id="rsvp-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
    
        <div class="step step-1">
        <p class="title-26 m-b20">
        ANTUANET & TODD´S WEDDING
        </p>

        <div class="text-center m-b40">
          <p class="title-16 font-poppins text-left">If you’re responding for you and a guest (or your family), you’ll be able to RSVP for your entire group.</p>
          <p class="title-16 font-poppins text-left">Please enter below your First Name and your Last Name.</p>
        </div>
            <h2 class="title--16 font-poppins text-left" style="margin-bottom: 10px">FULL NAME</h2>
            <input type="text" name="nombre" id="nombre" required placeholder="">
            <div class="form-group-button">
                <button type="button" class="next-step">FIND YOUR INVITATION</button>
            </div>
        </div>
        <div class="step step-2">
            <p class="title-26" style="margin-bottom: 7px">WELCOME PHANTOM PARTY</p>
            <p class="title--16 font-poppins text-left">March 7th, 2025</p>
            <p class="title--16 font-poppins text-left m-b30">Barco Phantom <br> 5:00 P.M.</p>
            <!-- <p class="title--16 font-poppins text-left" style="margin-bottom: 20px">7:00 P.M.</p> -->

            <div class="form-group__full">
            <div id="event-1-fields" class="event-fields"></div>
            </div>
            <div class="form-group-button">
            <button type="button" class="prev-step">Back</button>
            <button type="button" class="next-step">CONTINUE</button>
            </div>
        </div>
        <div class="step step-3">
        <p class="title-26" style="margin-bottom: 7px">CEREMONY</p>
            <p class="title--16 font-poppins text-left">March 8th, 2025</p>
            <p class="title--16 font-poppins text-left m-b30">Baluarte San Ignacio</p>

            <div class="form-group__full">
            <div id="event-2-fields" class="event-fields"></div>
            </div>
            <div class="form-group-button">
            <button type="button" class="prev-step">Back</button>
            <button type="button" class="next-step">CONTINUE</button>
            </div>
        </div>
        <div class="step step-4">
            <p class="title-26" style="margin-bottom: 7px">RECEPTION</p>
            <p class="title--16 font-poppins text-left">March 8th, 2025</p>
            <p class="title--16 font-poppins text-left">Hotel Charleston Santa Teresa <br> Following the ceremony</p>
            <p class="title--16 font-poppins text-left m-b30" style="margin-bottom: 20px">7:00 P.M.</p>

            <div class="form-group__full">
            <div id="event-3-fields" class="event-fields"></div>
            </div>
            <div class="form-group-button">
            <button type="button" class="prev-step">Back</button>
            <button type="button" class="next-step">CONTINUE</button>
            </div>
        </div>
        <div class="step step-5">
            <p class="title-26" style="margin-bottom: 7px">ADDITIONAL INFO</p>
            <p class="title--16 font-poppins text-left">Tell us if you have any food allergies or restrictions</p>
            <textarea name="food_allergies_or_restrictions" id="food_allergies_or_restrictions" rows="3" cols="50"></textarea>
            
            <label for="email">Email address</label>
            <input type="email" name="email" id="email">
            
            <div class="form-group-button">
            <button type="button" class="prev-step">Back</button>
            <button type="submit">R.S.V.P</button>
            </div>
        </div>
        <input type="hidden" name="action" value="submit_rsvp_form">
    </form>
    <?php
}
add_shortcode('rsvp_form', 'display_rsvp_form');

function process_rsvp_form() {
    if (isset($_POST['nombre']) && isset($_POST['email'])) {
        $nombre = sanitize_text_field($_POST['nombre']);
        $email = sanitize_email($_POST['email']);

        // Correo del administrador
        $admin_email = 'rsvp@eduardoyanamaria.com';

        // Preparar el mensaje para el usuario
        $user_subject = 'RSVP Confirmation for ' . $nombre;

        $user_message = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; }
                li {list-style: none;}
            </style>
        </head>
        <body>
            <img src='https://antuanetytoddwedding.com/wp-content/uploads/2024/06/confirmation.png' alt='confirmation' style='width: 100%; height: auto;'>
            <h2>Dear $nombre</h2>
            <p>We are happy to inform you that we have received your RSVP for our wedding</p>
            <p>We are excited that you will be able to join us on this special day!</p>
            <p style='margin: 0 0 10px'><strong>Full Name</strong></p>
            <p style='margin: 0 0 20px;display: inline-block;'>$nombre</p>
            <ul style='padding: 0;'>";

        foreach ($_POST as $key => $value) {
            if ($key != 'action' && $key != 'nombre' && $key != 'email') {
                $event_name = ucfirst(str_replace('_', ' ', $key));
                $user_message .= "<li><span>$event_name: <strong style='margin-bottom: 20px; display: inline-block;'>$value</strong></span> </li>";
            }
        }

        $user_message .= "<p style='margin-top: 50px'>Thank you for being part of this important moment for us.</p>";
        $user_message .= "<p>See you soon to celebrate together</p>";
        $user_message .= "<strong>With love, Antuanet & Todd</strong>";

        // Preparar el mensaje para el administrador
        $admin_subject = "Nuevo RSVP de $nombre";
        $admin_message = "Se ha recibido un nuevo RSVP del usuario:\n\n";
        
        foreach ($_POST as $key => $value) {
            if ($key != 'action') {
                $admin_message .= ucfirst(str_replace('_', ' ', $key)) . ': ' . $value . "\n";
            }
        }

        // Configurar los headers para enviar correo HTML
        $headers_admin = array(
            'Content-Type: text/html; charset=UTF-8',
            'From: Antuanet & Todd’s Wedding <rsvpnew@eduardoyanamaria.com>'
        );

        $headers_user = array(
            'Content-Type: text/html; charset=UTF-8',
            'From: Antuanet & Todd’s Wedding <rsvpnew@eduardoyanamaria.com>'
        );

        // Enviar correo al administrador
        wp_mail($admin_email, $admin_subject, $admin_message, $headers_admin);

        // Enviar correo HTML a la persona que llenó el formulario
        wp_mail($email, $user_subject, $user_message, $headers_user);

        wp_redirect(home_url('/thank-you'));
        exit;
    }
}
add_action('admin_post_nopriv_submit_rsvp_form', 'process_rsvp_form');
add_action('admin_post_submit_rsvp_form', 'process_rsvp_form');



function fetch_guest_info() {
    if (isset($_POST['nombre'])) {
        $nombre = sanitize_text_field($_POST['nombre']);
        
        $guest_list = array(
            'daniel' => array('daniel'),
            'Rodrigo Bravo' => array('Rodrigo Bravo', 'Megan Opazo'),
            'Yolanda Vasquez' => array('Yolanda Vasquez'),
            'Patricia Carhuatocto' => array('Patricia Carhuatocto'),
            'Ruby Aldea' => array('Ruby Aldea', 'Nayid'),
            'Ana Paula Chavez' => array('Ana Paula Chavez', 'Jorge Chavez'),
            'Brenda Contreras' => array('Brenda Contreras', 'Invitado'),
            'Gianina La Serna' => array('Gianina La Serna'),
            'Valeria Tuesta' => array('Valeria Tuesta', 'Russell Lavado'),
            'Diego Diaz' => array('Diego Diaz', 'Sofia Otarola'),
            'Michelle Rojas' => array('Michelle Rojas', 'Elizabeth K. Avila'),
            'Daniela Nacarino' => array('Daniela Nacarino', 'Fabricio Estupiñan', 'Erick Allende'),
            'Liliana Rojas' => array('Liliana Rojas', 'Invitado'),
            'Geraldine Alvarado' => array('Geraldine Alvarado', 'Oscar Aledo'),
            'Mauricio Valdivia' => array('Mauricio Valdivia', 'Andrea Chavez'),
            'Fernando Gutierrez' => array('Fernando Gutierrez'),
            'Eithel Cordova' => array('Eithel Cordova'),
            'Katherine Grandez' => array('Katherine Grandez', 'Tomas Luciani'),
            'Daniel Nacarino' => array('Daniel Nacarino', 'Rosa Tovar'),
            'Cyntia Romero' => array('Cyntia Romero'),
            'Nataly Otoya' => array('Nataly Otoya'),
            'Luisa Benazar' => array('Luisa Benazar'),
            'David Lizama' => array('David Lizama', 'Elena Santillan'),
            'Pilar Chirinos' => array('Pilar Chirinos', 'Augusto Echegaray'),
            'Desiree Seminario' => array('Desiree Seminario'),
            'Claudia Garcia' => array('Claudia Garcia'),
            'Kenji Lopez' => array('Kenji Lopez', 'Ale Lopez'),
            'Bryan Campos' => array('Bryan Campos'),
            'Carol Icaza' => array('Carol Icaza', 'Cesar Andres'),
            'Arlette Moarri' => array('Arlette Moarri', 'Fernando Jibaja'),
            'Kevin Silva' => array('Kevin Silva'),
            'Anthony Romero' => array('Anthony Romero', 'Tamy Cruz'),
            'Elia Samame' => array('Elia Samame', 'Dennis Delgado'),
            'Francesca Chappell' => array('Francesca Chappell', 'Diego Best'),
            'Mary Sobrados' => array('Mary Sobrados', 'Martin Luque'),
            'Lady Espinoza' => array('Lady Espinoza', 'Frank Anderson'),
            'Jaime Huaman' => array('Jaime Huaman'),
            'Fiorella Villalobos' => array('Fiorella Villalobos'),
            'Wendy Angeles' => array('Wendy Angeles'),
            'Maximiliano Nacarino' => array('Maximiliano Nacarino'),
            'Manuel Torres' => array('Manuel Torres', 'Heder'),
            'Paola Buczynski' => array('Paola Buczynski', 'Mike Buczynski'),
            'Ricardo Montoya' => array('Ricardo Montoya'),
            'Victor Zapana' => array('Victor Zapana'),
            'Ana Lozano' => array('Ana Lozano', 'Victor Montoya'),
            'Camila Vasquez' => array('Camila Vasquez'),
            'Diana Calderon' => array('Diana Calderon', 'Felipe Siles'),
            'Javier Infante' => array('Javier Infante'),
            'Christian Obregon' => array('Christian Obregon', 'Anita Miranda'),
            'David Juarez' => array('David Juarez'),
            'Ivan Garcia' => array('Ivan Garcia', 'Lidia Escobar'),
            'Alexandra Castro' => array('Alexandra Castro', 'Gianella Ramirez'),
            'Nadine DiMaggio' => array('Nadine DiMaggio', 'Robert DiMaggio'),
            'John Andrews' => array('John Andrews', 'Meghan Andrews'),
            'Rob Moir' => array('Rob Moir', 'Aubrey Moir'),
            'Chris Irwin' => array('Chris Irwin', 'Kellyanne Miller'),
            'Armando Urias' => array('Armando Urias', 'Megan Urias'),
            'Joe Stassi' => array('Joe Stassi', 'Cassie Stassie'),
            'Elliot Whelan' => array('Elliot Whelan', 'Hollis Heydenreich'),
            'Mac Harris' => array('Mac Harris', 'Liz Gullett'),
            'Carlo Candela' => array('Carlo Candela', 'Jaclyn Candela'),
            'Shea Brucker' => array('Shea Brucker', 'Kasey Alicia'),
            'Mike Magee' => array('Mike Magee', 'Lauren Peck'),
            'Bill Zogorski' => array('Bill Zogorski'),
            'Kevin Moyer' => array('Kevin Moyer', 'Gina Moyer'),
            'Emily Rossum' => array('Emily Rossum', 'Jordan Rossum'),
            'Michelle Gardner' => array('Michelle Gardner', 'Norm Imber'),
            'Dave Gardner' => array('Dave Gardner', 'Paula Gardner'),
            'Sean McGonical' => array('Sean McGonical'),
            'Nick Defillipo' => array('Nick Defillipo', 'Val Defillipo'),
            'Matt Reece' => array('Matt Reece', 'Jordan Reece'),
            'Andrew Mcelroy' => array('Andrew Mcelroy', 'Amanda McElroy'),
            'Carl Harris' => array('Carl Harris'),
            'Matt Ike' => array('Matt Ike'),
            'Bryan Sorenson' => array('Bryan Sorenson'),
            'Becca Linquist' => array('Becca Linquist', 'Taylor Udell'),
            'Pat Schall' => array('Pat Schall', 'Melissa Schall'),
            'Chris Mancuso' => array('Chris Mancuso'),
            'Peter Longo' => array('Peter Longo', 'Lindsey Longo'),
            'Peter Lacovara' => array('Peter Lacovara', 'Sarah Lewis'),
            'Paddy Bruder' => array('Paddy Bruder', 'Doug Brown'),
            'Patrick Schell' => array('Patrick Schell'),
            'Meghan Bush' => array('Meghan Bush', 'John Bush'),
            'Renee Cronin' => array('Renee Cronin', 'Kyle Cronin'),
            'Stephen Ruff' => array('Stephen Ruff'),
            'Dan Lowenherz' => array('Dan Lowenherz', 'Rachel Lowenherz'),
            'Patrick Sofen' => array('Patrick Sofen', 'Stef Corgel'),
            'Joe Hutch' => array('Joe Hutch'),
            'Frank Tumarello' => array('Frank Tumarello', 'Kelly Tumarello'),
            'Patrick Smith' => array('Patrick Smith', 'Frannie Smith'),
            'Bob Bechtel' => array('Bob Bechtel', 'Lauren Bechtel'),
            'Mary Jane Breen' => array('Mary Jane Breen', 'Jim Breen'),
            'Joan Hurley' => array('Joan Hurley'),
            'Matt Pellegrino' => array('Matt Pellegrino', 'Delsa Pellegrino'),
            'Mike Garafolo' => array('Mike Garafolo', 'Brittney Garafolo'),
            'Rick Guerrieri' => array('Rick Guerrieri'),
            'Karen Zannelli' => array('Karen Zannelli', 'Alvaro Zannelli'),
            'Karen Navarra' => array('Karen Navarra', 'Kevin Navarra'),
            'Anapaula Satiesteban' => array('Anapaula Satiesteban', 'Invitado'),
            'Michael Busler' => array('Michael Busler', 'Katherine Busler'),
            'Adam Busler' => array('Adam Busler', 'Jennifer Busler'),
            'Kaitlyn Debernardo' => array('Kaitlyn Debernardo', 'Ralph Debernardo'),
            'Veronica Moriarity' => array('Veronica Moriarity', 'Dave Moriarity'),
            'Mary Beth Moriarity' => array('Mary Beth Moriarity', 'Paddy Moriarity'),
            'Dean Moriarity' => array('Dean Moriarity'),
            'Dylan Moriarity' => array('Dylan Moriarity', 'Ashley Galvan'),
            'Justin Gentile' => array('Justin Gentile'),
            'Jimmy Gentile' => array('Jimmy Gentile'),
            'Justin Rau' => array('Justin Rau', 'Gabrielle Beach'),
            'Jim Abbott' => array('Jim Abbott'),
            'AJ Holland' => array('AJ Holland'),
            'Jeremy Glick' => array('Jeremy Glick'),
            'Michael McCarron' => array('Michael McCarron', 'Raina Roche'),
            'Joe Marciani' => array('Joe Marciani', 'Tina Marchiani'),
            'Isabel Tyler' => array('Isabel Tyler', 'Tristan Tyler'),
            'Chris Ruley' => array('Chris Ruley'),
            'Ryan Rothstein' => array('Ryan Rothstein'),
            'Sal Imperiale' => array('Sal Imperiale', 'Carly Imperiale'),
            'Adam Seiden' => array('Adam Seiden', 'Melissa Bennett'),
            'Janey Goldberg' => array('Janey Goldberg', 'Andrew Steinmetz'),
            'Matt Beirne' => array('Matt Beirne', 'Danielle Naoum'),
            'Joe Cappocci' => array('Joe Cappocci'),
            'Jackie Masters' => array('Jackie Masters', 'Joe Masters'),
            'Keith Corcoran' => array('Keith Corcoran', 'Emily Corcoran'),
            'Dan Lombardi' => array('Dan Lombardi', 'Montana Lombardi'),
            'Nate Segal' => array('Nate Segal'),
            'Dave Hubsher' => array('Dave Hubsher', 'Ali Hubsher'),
            'Mike Boyle' => array('Mike Boyle', 'Nadia Boyle'),
            'Mike Bagnoli' => array('Mike Bagnoli', 'Laura Bagnoli'),
            'Colin Dampier' => array('Colin Dampier', 'Anna Connors'),
            'Frank Diebold' => array('Frank Diebold', 'Chelsea Prior'),
            'Gage O\'Connell' => array('Gage O\'Connell', 'Megan O\'Connell'),
            'Sam Biddle' => array('Sam Biddle'),
            'Matt Wetherell' => array('Matt Wetherell', 'Cassie Wetherell'),
            'Zack Metheson' => array('Zack Metheson', 'Emily Matheson'),
            'Justin Davis' => array('Justin Davis', 'Chelsea Davis'),
            'John Savage' => array('John Savage', 'Tatum Savage'),
            'Matt Andrews' => array('Matt Andrews', 'Meghan Andrews'),
            'Mario Lolo Macedo' => array('Mario Lolo Macedo', 'Luz Mery Macedo'),
            'Marya Macedo' => array('Marya Macedo'),
            'Marjorie Berrocal' => array('Marjorie Berrocal', 'Alex Ramos'),
            'Carl Harris' => array('Carl Harris'),
            'Bryan Sorensen' => array('Bryan Sorensen')
        );

        if (isset($guest_list[$nombre])) {
            wp_send_json_success(array('guests' => $guest_list[$nombre]));
        } else {
            wp_send_json_error(array('message' => 'Nombre no encontrado'));
        }
    } else {
        wp_send_json_error(array('message' => 'Nombre no proporcionado'));
    }
}
add_action('wp_ajax_fetch_guest_info', 'fetch_guest_info');
add_action('wp_ajax_nopriv_fetch_guest_info', 'fetch_guest_info');


