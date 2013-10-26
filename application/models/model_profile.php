<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_profile extends MY_Model
{
	public function get_info($user_id = 1)
	{
		return array(
			'id' => 1,
			'egn' => '1010101010',
			'name' => 'Stoyan',
			'father_name' => 'Stoyanov',
			'surname' => 'Stoyanov',
			'mob_number' => '123',
			'ocenka_diploma' => 5.20,
			'ocenka_matura' => 5.40
		);

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id', $user_id);
		$query = $this->db->get();

		return $this->single_result($query);
	}
}
