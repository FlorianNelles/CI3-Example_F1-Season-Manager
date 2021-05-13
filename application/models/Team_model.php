<?php
class Team_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_teams($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('id', 'ASC');
			$query = $this->db->get('teams');
			return $query->result_array();
		}
		$query = $this->db->get_where('teams', array('id' => $id));
		return $query->row_array();
	}

	public function create_team(){
		$data = array(
			'name' => $this->input->post('name'),
			'teamchef' => $this->input->post('teamchef'),
			'motor' => $this->input->post('motor'),
			'sitz' => $this->input->post('sitz'));

		return $this->db->insert('teams', $data);
	}

	public function delete_team($id){
		$this->db->where('id', $id);
		$this->db->delete('teams');
		return true;
	}

	public function update_team(){
		$data = array(
			'name' => $this->input->post('name'),
			'teamchef' => $this->input->post('teamchef'),
			'motor' => $this->input->post('motor'),
			'sitz' => $this->input->post('sitz'));

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('teams', $data);
	}

}
