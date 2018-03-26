public class Bateria {
	
	    private $carga;
	   
	    
	    public function Bateria(){
		$this->carga = carga;
		
		}
	
	    public function getCarga() {
	        return $this->carga;
	    }
	    
	    
	    public function descarregando(){
	        if($this->carga>0){
		$this->carga = $this->carga-10;
		else
			echo("Sem Bateria!");
		
	    }
	    public function carregando(){
		if($this->carga!=100){
		$this->carga = $this->carga+5;
		
		else
			echo("Bateria Cheia!");
	       
	        }
	    }   
	     
	 
