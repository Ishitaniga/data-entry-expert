<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // EmailJS API endpoint and your EmailJS user ID and service/template IDs
    $api_endpoint = 'https://api.emailjs.com/api/v1.0/email/send';
    $service_id = 'service_gul97yz';
    $template_id = 'template_goyo98w';
    $user_id = 'omdataentryudit';

    // Prepare the data to send
    $data = array(
        'service_id' => $service_id,
        'template_id' => $template_id,
        'user_id' => $user_id,
        'template_params' => array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        )
    );

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ),
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($api_endpoint, false, $context);

    if ($result === FALSE) {
        echo json_encode(array('status' => 'ERROR', 'message' => 'Failed to send message.'));
        exit;
    }

    echo json_encode(array('status' => 'SUCCESS', 'message' => 'Message sent successfully!'));
    exit;
}
?>
