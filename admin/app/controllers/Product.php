<?php
	/**
	 * 
	 */
	class Products extends Database
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function addProduct($data = '')
		{
			return $this->insert('haa_projects', $data);
		}
		public function addCategory($data = '')
		{
			return $this->insert('haa_category', $data);
		}
		public function addImages($data = '')
		{
			return $this->insert('haa_photos', $data);
		}
		public function fetchCategories()
		{
			return $this->select("SELECT * FROM haa_category", true, true);
		}
		public function fetchProducts()
		{
			return $this->select("SELECT * FROM haa_projects", true, true);
		}
		public function fetchProductmage($projectID = '')
		{
			return $this->select("SELECT * FROM haa_photos WHERE projectID='$projectID'", true, true);
		}
		public function fetchSingleProducts($productID = '')
		{
			return $this->select("SELECT * FROM haa_projects WHERE projectID='$productID'", true);
		}
		public function countProductmage($projectID = '')
		{
			return $this->select("SELECT COUNT(*) FROM haa_photos WHERE projectID='$projectID'")['COUNT(*)'];
		}
		public function counter($table = '')
		{
			return $this->select("SELECT COUNT(*) FROM $table")['COUNT(*)'];
		}
	}