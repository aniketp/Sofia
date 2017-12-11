<?php
/**
 * Created by PhpStorm.
 * User: aniketp
 * Date: 6/12/17
 * Time: 12:19 PM
 */

class Requests extends CI_Controller {
    public function send_request($sent_to_id) {
        $sent_by_id = $this->session->userdata['user_id'];

        $this->request_model->send_request($sent_by_id, $sent_to_id);

        // Set the sent request message
        // $this->session->set_flashdata('request_sent', 'Friend Request has been Sent');
        redirect('');
    }

    public function accept_request($sent_by_id, $sent_to_id) {
        $this->request_model->accept_request($sent_by_id, $sent_to_id);

        // Set the Request accepted message
        $this->session->set_flashdata('request_accepted', 'Friend Request has been Accepted');
        redirect('');
    }

    public function reject_request($sent_by_id, $sent_to_id) {
        $this->request_model->reject_request($sent_by_id, $sent_to_id);

        // Set the Request accepted message
        $this->session->set_flashdata('request_rejected', 'Friend Request has been Rejected');
        redirect('');
    }
}