package Matriz;

/**
 *
 * @author Manue
 */
class Main {
	public static void main(String[] args) {
		// Demostración con enteros
		int[] numeros = { 50, 21, 6, 97, 18 };
		int numeroBuscado = 20;
		int posicionDeElementoBuscado = existeEnArreglo(numeros, numeroBuscado);
		
		String[] elemento = { "M", "F", "S" };
		String elementoBuscada = "M";
		posicionDeElementoBuscado = existeEnArreglo(elemento, elementoBuscada);
		if (posicionDeElementoBuscado == -1) {
			System.out.println("El elemento NO existe en el arreglo");
		} else {
			System.out.println("El elemento existe en la posición: " + posicionDeElementoBuscado);
		}
		
	}

	public static int existeEnArreglo(int[] arreglo, int busqueda) {
		for (int x = 0; x < arreglo.length; x++) {
			if (arreglo[x] == busqueda) {
				return x;
			}
		}
		return -1;
	}

	public static int existeEnArreglo(String[] arreglo, String busqueda) {
		for (int x = 0; x < arreglo.length; x++) {
			if (arreglo[x].equals(busqueda)) {
				return x;
			}
		}
		return -1;
	}

	
}
