<?php  
/**
* 
*/
class Course extends CI_Model
{
	public function get_all_course(){
		return $this->db->query("SELECT * FROM courses ORDER BY created_at DESC")->result_array();
	}

	public function add_course($course){
		$query = "INSERT INTO courses (title,description,created_at,updated_at) VALUES(?,?,?,?)";
		$values = array($course['title'],$course['description'],date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
		return $this->db->query($query,$values);
	}

	public function remove_course($id){
		$query = "DELETE FROM courses where id = $id";
		return $this->db->query($query);
	}

	public function get_course_by_id($id){
        return $this->db->query("SELECT * FROM courses WHERE id = ?", array($id))->row_array();
    }
}
?>