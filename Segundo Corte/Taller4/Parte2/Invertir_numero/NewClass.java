package Invertir_numero;

import java.util.Scanner;

public class NewClass {
    
    public static void main(String[] args) {
        
        Scanner sn = new Scanner(System.in);
        
        System.out.println("Ingrese el número a invertir");
        int a = sn.nextInt();
        int b = a;
        int digitos = (int)(Math.log10(b)+1);
        int c = digitos-1;
        
        
        System.out.println(InvertirNum(a, c));
        
    }
    
    public static int InvertirNum(int num, int pos){
        
        if (num < 10 ) {
            return num;
        }else{
            return (num % 10) * (int) Math.pow(10, pos) + (InvertirNum(num/10, pos-1));
        }
      
        
        
        
        
    }
    
}

