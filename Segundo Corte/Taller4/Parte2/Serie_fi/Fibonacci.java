package Serie_fi;

import java.util.Scanner;

public class Fibonacci {
    public static void main(String[] args) {
        
        Scanner sn = new Scanner(System.in);
        
        System.out.println("¿Cuántos terminos serán?");
        int numero = sn.nextInt();
        
        int a = 0;
        int b = 1;
        int c;
        int s = 1;
        
        System.out.println(a +"\t"+ b);
        
        for (int i = 2; i < numero; i++) {
            
            c = a + b;
            System.out.println(c +"\t");
            s += c;
            a = b;
            b = c;
                       
        }
        
        System.out.println("\n La sumatoria es: "+ s);
        
        
        
    }
}
