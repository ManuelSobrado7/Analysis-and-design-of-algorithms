## Manuel Eduardo Albarrán
### Ingeniería de sistemas - Noveno semestre  

Algoritmos de ordenamiento:  
- ***Burbuja***: Funciona revisando cada elemento de la lista que va a ser ordenada con el siguiente, intercambiándolos de posición si están en el orden equivocado. Es necesario revisar varias veces toda la lista hasta que no se necesiten más intercambios, lo cual significa que la lista está ordenada.  

- ***Burbuja bidireccional***: El algoritmo de ordenamiento de burbuja bidireccional también llamado ordenamiento cocktail intenta mejorar el rendimiento del ordenamiento burbuja realizando el recorrido de comparación en ambas direcciones, de esta manera  se puede realizar más de un intercambio por iteración.
De la misma manera que el algoritmo de burbuja no se utiliza excepto para motivos pedagógicos por su falta de eficiencia pero sencillez de aplicación.  

- ***Gnome sort***: El algoritmo empieza comparando la primera pareja de valores. Si están en orden incrementa el puntero y vuelve a realizar la comparación: si no están en orden, se pasa el menor a la izquierda y el mayor a la derecha, y se reduce el puntero. Ahora la comparación es con el elemento anterior, y si no hay un elemento anterior se pasa al siguiente elemento. Cuando el puntero alcanza el extremo superior del array, ya está totalmente ordenado.
Cuando compara hacia arriba va sin hacer intercambios, es que el par bajo examen está ordenado entre sí, y cuando compara hacia abajo, va haciendo intercambios. El proceso aparece como un zigzagueo continuo a un lado y otro.
La operación empieza por el puntero en el punto más bajo y cuando llega al extremo superior ha terminado de ordenar el array.  
Pseudocódigo:  
!(C:\Users\Manuel\Downloads\Ordenamiento\Gnome.jpeg)


Proyectos desarrollados:

- Aplicacion web (Conectada a base de datos)
![2020-04-03_00-49-14](2020-04-03_00-49-14.png)
-Aplicación en android (Conectada a base de datos)  

![2020-04-03_00-53-20](2020-04-03_00-53-20.png)

Certificados:  

-FULL STACK (FEDESOFT) 2018  

-CURSO EN JAVA (NO ME ACUERDO EL NOMBRE DE LA EMPRESA) 2016
