<?php


// Luis rodriguez - 0812903

class Media{

    protected $id;
    protected $title;
    protected $productionCompany;
    protected $yearReleased;

    public function setId($id){
        $this->id = $id;
    }
    
	
	
	public function getId(){
        return $this->id;
    }

    
	
	
	public function setTitle($title){
        $this->title = $title;
    }
    
	
	
	public function getTitle(){
        return $this->title;
    }

    
	
	
	public function setProductionCompany($productionCompany){
        $this->productionCompany = $productionCompany;
    }
    
	
	
	public function getProductionCompany(){
        return $this->productionCompany;
    }

    
	
	
	public function setYearReleased($yearReleased){
        $this->yearReleased = $yearReleased;
    }
    
	
	
	public function getYearReleased(){
        return $this->yearReleased;
    }
}
?>