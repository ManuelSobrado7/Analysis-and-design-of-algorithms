package Navegador;

import java.util.Scanner;

public class WebBrowser {
    public static void main(String[] args) {
        Scanner lector = new Scanner(System.in);
        int num = lector.nextInt();
        String[] a = new String[num];
        for (int i = 0; i < a.length; i++) {
            a[i] = lector.next();
        }
        lector.nextLine();
        int b = lector.nextInt();
        for (int j = 0; j < b; j++) {
            String txt = lector.next();
            int cant = 0;
            int tamanio = 0;
            for (int i = 0; i < a.length; i++) {
                if (a[i].contains(txt)) {
                    cant++;
                    int aux = a[i].length();
                    if (aux > tamanio) {
                        tamanio = aux;
                    }
                }
            }
            if (cant > 0) {
                System.out.println(cant + " " + tamanio);
            } else {
                System.out.println("-1");
            }
        }
    } 
}
