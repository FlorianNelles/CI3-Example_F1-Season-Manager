<?php
class Driver_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_drivers($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('points', 'DESC');
			$query = $this->db->get('drivers');
			return $query->result_array();
		}
		$query = $this->db->get_where('drivers', array('id' => $id));
		return $query->row_array();
	}

	public function create_driver($driver_image){
		$data = array(
			'name' => $this->input->post('name'),
			'startnr' => $this->input->post('startnr'),
			'team_id' => $this->input->post('team'),
			'points' => $this->input->post('points'),
			'user_id' => $this->session->userdata('user_id'),
            'drivers_image' => $driver_image
        );

		return $this->db->insert('drivers', $data);
	}

	public function delete_driver($id){
		$this->db->where('id', $id);
		$this->db->delete('drivers');
		return true;
	}

	public function update_driver($driver_image){
		$data = array(
			'name' => $this->input->post('name'),
			'startnr' => $this->input->post('startnr'),
			'team_id' => $this->input->post('team'),
			'points' => $this->input->post('points'),
            'drivers_image' => $driver_image
        );

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('drivers', $data);
	}
}
