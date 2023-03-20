<?php

/*
 * Music Class
 */

class Music extends Media {

	private $album;

	/**
	 * Retrieve all records from the table and return them as an array of assoc. arrays.
	 * @param $dbc
	 * @return mixed
	 */
	public function setAlbum($album) {
		$this->album = $album;
	}
	public function getAlbum() {
		return $this->album;
	}
	


	

	/**
	 * @param mixed $album
	 */
	



	public static function all($dbc) {
		$query = "SELECT * from `music`";
		$results = $dbc->fetchArray($query);

		return $results;
	}

	/**
	 * Create and execute a delete statement
	 * @param $dbc
	 * @param $title
	 * @return mixed
	 */
	public static function delete($dbc, $title) {
		$query = "DELETE FROM `music` WHERE title = '$title'";
		$result = $dbc->sqlQuery($query);

		return $result;
	}

	/**
	 * Search for a record and map the properties to a new Movie object
	 * @param $dbc
	 * @param $title
	 * @return Movie
	 */
	public static function find($dbc, $title) {
		$query = "SELECT * FROM `music` WHERE title = '$title'";
		$result = $dbc->fetchRecord($query);
		$newObj = new self($result['id'], $result['title'], $result['production_company'],
			$result['year_released'], $result['album']);

		return $newObj;
	}

	/**
	 * Movie constructor.
	 * @param $id
	 * @param $title
	 * @param $productionCompany
	 * @param $yearReleased
	 * @param $director
	 */
	public function __construct($id, $title, $productionCompany, $yearReleased, $album) {
		$this->id = $id;
		$this->title = $title;
		$this->productionCompany = $productionCompany;
		$this->yearReleased = $yearReleased;
		$this->album = $album;
	}

	/**
	 * Dynamically construct an SQL insert statement using the object properties and execute the statement
	 *
	 * @param $dbc
	 * @return mixed
	 */
	public function create($dbc) {
		$query = "INSERT into `music` values " .
			"('0', '$this->title', '$this->productionCompany', " .
			"'$this->yearReleased', '$this->album')";
		$result = $dbc->sqlQuery($query);

		return $result;
	}

	/**
	 * Dynamically construct an SQL update statement using the object properties and execute the statement
	 * @param $dbc
	 * @return mixed
	 */
	public function update($dbc) {
		$query = "UPDATE `music` SET title = '$this->title',".
				"production_company = '$this->productionCompany', ".
		        "year_released = '$this->yearReleased',".
				"album = '$this->album' WHERE id = '$this->id' ";
		$result = $dbc->sqlQuery($query);

		return $result;
	}

	

}

?>