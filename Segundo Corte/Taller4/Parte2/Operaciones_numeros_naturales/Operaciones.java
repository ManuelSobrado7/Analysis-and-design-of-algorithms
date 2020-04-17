package Operaciones_numeros_naturales;

import java.util.Scanner;


public class Operaciones {
    public static void main(String[] args) {
        
        Scanner sn = new Scanner(System.in);
        
        System.out.println("Ingrese el primer nùmero: ");
        int a = sn.nextInt();
        
        System.out.println("Ingrese el segundo nùmero: ");
        int b = sn.nextInt();
        int suma, resta, mul, divi;
       
        
        
        suma = a+b;
        resta = a-b;
        mul = a*b;
        divi = a/b;
        
        System.out.println("Su suma es: "+suma+"\n"+"Su resta es: "+resta+"\n"+"Su multiplicacion es: "+mul+"\n"+"Su division es: "+divi);
                
       
        
        
        
        
        
    }
    
    
    
    
       
    
 
    
    
    
    
}


