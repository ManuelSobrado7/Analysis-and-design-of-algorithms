package Palindromo;

   
   public class Recursividad{
       
         boolean es_Palindromo(String s){
    if(s.length() <= 1){
        return true;
    }else{
        if(s.charAt(0) == s.charAt(s.length() - 1)){
            System.out.println(es_Palindromo(s.substring(1,s.length() - 1 ) ));
            return es_Palindromo(s.substring(1,s.length() - 1 ) );
            
        }else{
            System.out.println("No es palindromo");
            return false;
        }
    }  
}
             
         
                        
        }
        
           
    
    
    
    
    
    /*public static String Invertir(String palabra, int longitud){
        
        if (longitud == 0 ) {
            return palabra.charAt(longitud) +"";
                        
            
        }else{
            return palabra.charAt(longitud) + (Invertir(palabra, longitud-1));
        }
        
       
        
        
    }
    */
    
