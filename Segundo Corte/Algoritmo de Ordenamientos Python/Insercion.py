def ordenamientoPorInsercion_abajo(unaLista):
   for indice in range(1,len(unaLista)):

     valorActual = unaLista[indice]
     posicion = indice

     while posicion>0 and unaLista[posicion-1]<valorActual:
         unaLista[posicion]=unaLista[posicion-1]
         posicion = posicion-1

     unaLista[posicion]=valorActual
     mostrar_arreglo(unaLista)

def ordenamientoPorInsercion_arriba(unaLista):
   for indice in range(1,len(unaLista)):

     valorActual = unaLista[indice]
     posicion = indice

     while posicion>0 and unaLista[posicion-1]>valorActual:
         unaLista[posicion]=unaLista[posicion-1]
         posicion = posicion-1

     unaLista[posicion]=valorActual
     mostrar_arreglo(unaLista)

def mostrar_arreglo(arrayN):
    for i in range(len(arrayN)):
        print('Elemento '+'-------> '+str(arrayN[i]))


def leer_arreglo():
    longitud = int(input("¿De que tamaña seria?"))
    arrayN = [0]*longitud
    index = 0
    for iten in arrayN:
        arrayN[index] = int(input("Digite el numero "+str(index)+" del arreglo: "))
        index = index + 1

    print("---------DESC------------------")
    ordenamientoPorInsercion_abajo(arrayN)
    print("---------ASC-------------------")
    ordenamientoPorInsercion_arriba(arrayN)
    print("---------Insercion-------------")

leer_arreglo()
