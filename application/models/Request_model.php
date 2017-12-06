<?php

class Request_model extends CI_Model {
    // Load the database
    public function __construct(){
        $this->load->database();
    }

    // Send Friend Request
    public function send_request($sent_by_id = 0, $sent_to_id = 0) {
        $sent_by = $this->db->get_where('users', array('id' => $sent_by_id));
        $sent_to = $this->db->get_where('users', array('id' => $sent_to_id));

        $data = array(
            'sent_by' => $sent_by,
            'sent_to' => $sent_to,
            'status' => 'Pending'
        );

        return $this->db->insert('request', $data);
    }

    // Accept Friend Request
    public function accept_request($sent_by_id = 0, $sent_to_id = 0) {
        $sent_by = $this->db->get_where('users', array('id' => $sent_by_id));
        $sent_to = $this->db->get_where('users', array('id' => $sent_to_id));

        $data = array(
            'sent_by' => $sent_by,
            'sent_to' => $sent_to,
            'status' => 'Accepted'
        );

        $this->db->where(array('sent_by'=> $sent_by, 'sent_to' => $sent_to));
        return $this->db->update('request', $data);
    }

    // Reject Friend Request
    public function reject_request($sent_by_id = 0, $sent_to_id = 0) {
        $sent_by = $this->db->get_where('users', array('id' => $sent_by_id));
        $sent_to = $this->db->get_where('users', array('id' => $sent_to_id));

        $data = array(
            'sent_by' => $sent_by,
            'sent_to' => $sent_to,
            'status' => 'Rejected'
        );

        $this->db->where(array('sent_by'=> $sent_by, 'sent_to' => $sent_to));
        return $this->db->update('request', $data);
    }
}