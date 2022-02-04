<?php
/**
 * Plugin Name: RapRap Form Trap
 * Plugin URI: https://github.com/raprap-info/cf7-gsheet-uploads
 * Author: Recode RapRap
 * Author URI: https://github.com/raprap-info/cf7-gsheet-uploads
 * Description: Get CF7 Data and send to API / Gsheet
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: cf7-gsheet-uploads
*/

defined( 'ABSPATH' ) or die( 'Unauthorized access!' );

add_action( 'cfdb7_before_save', 'raprap_cf7_data' );

// add_action( 'wpfc7_mail_sent', 'raprap_cf7_data' );

function raprap_cf7_data( $form_data ) {

    // if ($form_data -> title == 'Test Form'){

    //     $submission = WPCF7_Submission::get_instance();

    //     $form_data = $submission-> get_posted_data();

      
        
    // }
    // error_log (print_r ($form_data, true)); 
    $upload_dir = home_url( 'wp-content/uploads/cfdb7_uploads/' );

    $data = [
        'name' => $form_data ['your-name'] ,
        'email' => $form_data['your-email'],
        'subject' => $form_data['your-subject'],
        'upload' => $upload_dir . $form_data['fileuploadcfdb7_file'],

 
     ];

    $url = 'https://script.google.com/macros/s/AKfycbyU3yt7MEsDlEbFU_7m0MywsW4i1jlxd7QPaAfWTIEC06LRrMYJQsAabhyCU6Rz304Qew/exec';

    $args = [
        'method' => 'POST',
        'body'   => $data,
    ];

    wp_remote_post( $url, $args );

    //  error_log (print_r ($data, true)); 
     
}