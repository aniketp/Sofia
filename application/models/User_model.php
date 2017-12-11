<?php
class User_model extends CI_Model{
    // Load the database
    public function __construct(){
        $this->load->database();
    }

    public function register($enc_password){
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
        );

        // Insert user
        return $this->db->insert('users', $data);
    }

    // Log user in
    public function login($username, $password){
        // Validate
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

    // Check username exists
    public function check_username_exists($username){
        $query = $this->db->get_where('users', array('username' => $username));
        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }

    // Get user details
    public function get_details($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    // Get friend list
    public function get_friends($user_id){
        $user_by_id = $this->db->get_where('users', array('id' => $user_id))->row_array();
        $user = $user_by_id['name'];

        $request_recv = $this->db->get_where('requests', array('sent_to' => $user))->result_array();
        return $request_recv;

    }

}