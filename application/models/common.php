<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Common extends CI_Model {
    var $client_service = "frontend-client";
    var $auth_key       = "maisiniapi";

    public function check_auth_client(){
        $client_service = $this->input->get_request_header('Client-Service', TRUE);
        $auth_key  = $this->input->get_request_header('Auth-Key', TRUE);
        if($client_service == $this->client_service && $auth_key == $this->auth_key){
            return true;
        } else {
            return json_output(401,array('status' => 401,'message' => 'Unauthorized.'));
        }
    }
}
