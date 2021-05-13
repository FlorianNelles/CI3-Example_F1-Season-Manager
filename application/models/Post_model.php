<?php
	class Post_model extends CI_Model{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_posts($id = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($id === FALSE){
				$this->db->order_by('created_at', 'DESC');
				$query = $this->db->get('posts');
				return $query->result_array();
			}
			$query = $this->db->get_where('posts', array('id' => $id));
			return $query->row_array();
		}

		public function create_post(){

			$data = array(
				'title' => $this->input->post('title'),
				'body' => $this->input->post('body'),
				'user_id' => $this->session->userdata('user_id')
			);

			return $this->db->insert('posts', $data);
		}
		public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}

		public function update_post(){
			$id = url_title($this->input->post('id'));

			$data = array(
				'title' => $this->input->post('title'),
				'body' => $this->input->post('body'),
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}

	}
