<?php


// Luis Rodriguez - 0812903

    class Movie extends Media{

        private $director;

        
		
		public function setDirector($director){
            $this->director = $director;
        }
        
		
		
		public function getDirector(){
            return $this->director;
        }

        
		
		
		public function __construct($id,$title,$productionCompany,$yearReleased,$director)
        {
            $this->id=$id;
            $this->title=$title;
            $this->productionCompany=$productionCompany;
            $this->yearReleased=$yearReleased;
            $this->director=$director;
        }
    
        
		
		
		public function create($dbc){
            $query = "INSERT into `movies` values".
                    "('0','$this->title','$this->productionCompany',".
                    "'$this->yearReleased','$this->director')";
            $result = $dbc->sqlQuery($query);
            return $result;
        }
        
		
		
		
		public function update($dbc){
            $query = "UPDATE `movies` SET title= '$this->title', ".
                    "productionCompany = '$this->productionCompany', ".
                    "yearReleased = '$this->yearReleased', ".
                    "director = '$this->director' WHERE id='$this->id' ";
            $result = $dbc->sqlQuery($query);
            return $result;
        }



        public static function all($dbc){
            $query = "SELECT * from `movies`";
            $results= $dbc-> fetchArray($query);
            return $results;
        }
        
		
		
		
		
		public static function delete($dbc, $title){
            $query= "DELETE FROM  `movies` WHERE title ='$title'";
            $result= $dbc->sqlQuery($query);
            return $result;
        }
        
		
		
		
		
		public static function find($dbc, $title) {
            $query = "SELECT * FROM `movies` WHERE title='$title' LIMIT 1";
            $result = $dbc->fetchRecord($query);
            $newObj = new self($result['id'],$result['title'],
                               $result['productionCompany'],
                               $result['yearReleased'],
                               $result['director']);
            return $newObj;
        }

    }
    
?>