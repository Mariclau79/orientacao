public class Bateria {
	
	    private int carga;
	    private int cargaMinima;
	    private int cargaMaxima;
	    
	    public Bateria(){
		this.carga = 50;
		this.cargaMinima = 0;
		this.cargaMaxima = 100;
		}
	
	    public int getCarga() {
	        return carga;
	    }
	    public int getCargaMinima() {
	        return cargaMinima;
	    }
	
	    public int getCargaMaxima() {
	        return cargaMaxima;
	    }
	    
	    public void descarregando(){
	        if(this.carga<= this.cargaMaxima && this.carga>=this.cargaMinima){
		this.carga = this.carga-10;
		}
	    }
	    public void carregando(){
		if(this.carga<=this.cargaMaxima && this.carga>=this.cargaMinima){
		this.carga = this.carga+5;
		}
	        if(this.carga<0){
	            this.carga=0;
	        }
	    }   
	    public void exibeCarga(){
	        System.out.println(" A carga da bateria está com: " + this.getCarga()); 
	    }
	}
