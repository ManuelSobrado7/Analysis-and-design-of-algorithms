package Sumar_arreglo;
import java.util.Scanner;


public class SumArreglo {

    public static void main(String[] args) {
        
        Scanner sn = new Scanner(System.in);
        int longitud;
        System.out.println("Ingrese la logitud del arreglo: ");
        longitud = sn.nextInt();
      
        int i;
        int[] numeros = new int[longitud];

        

        for(i=0; i<numeros.length; i++)
        {
            System.out.printf("Introduzca número %d: ", i+1);
            numeros[i] = sn.nextInt();
        }

             
        int total = 0;
        
        for (int contador = 0; contador < numeros.length; contador++) {
            total += numeros[contador];
            
        }
        
        System.out.println("El resultado es: "+total);
        System.exit(0);
    } 
} 
