
public class Bateria {

	private int carga;


	public Bateria(int carga){
		
		this.carga = carga;

	}

	public int getCarga() {
		return carga;
	}


	public void descarregar(){
		//se a bateria não estiver vazia descarrega 10%, se não mostra msg sem bateria!
		if(this.carga> 0)
			this.carga = this.carga-10;
		else
			System.out.println("Sem Bateria!");
	}
	public void carregar(){
		//se a bateria não estiver cheia carrega 5% senão mosta msg bateria cheia
		if(this.carga !=100)
			this.carga = this.carga+5;
		else
			System.out.println("Bateria Cheia!");
	}   

}





