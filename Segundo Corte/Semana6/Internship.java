
package usb;

import java.util.Scanner;

public class Internship {

    public static void main(String[] args) {
        Scanner lector = new Scanner(System.in);
        int casos, denom = 0, numer = 0, nota, carga;
        double media;
        casos=lector.nextInt();
        numer = denom = 0;
        while ((casos--) != 0) {
            nota=lector.nextInt();
            carga=lector.nextInt();
            numer += nota * carga;
            denom += carga;
        }
        media = numer / (denom * 100.0);
        System.out.printf("%.4f %n", media);
    }

}
