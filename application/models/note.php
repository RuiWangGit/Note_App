<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Note extends CI_Model {


	public function all(){
		return $this->db->query("SELECT * FROM notes")->result_array();

	}

  public function add($input){
  	$query = "INSERT INTO notes (title,  created_at, updated_at) VALUES(?,  now(), now())";
  	$values = array($input['title'] );

    $this->db->query($query, $values);
  }


  public function delete($id){
  	$query="DELETE FROM notes WHERE id = ?";
  	$values = array($id);
  	$this->db->query($query, $values);
  }


  public function update($input){
  	$query = "UPDATE notes set description = ? WHERE id = ?";
  	$values = array( $input['description'], $input['id'] );
    $this->db->query($query, $values);
  }



}