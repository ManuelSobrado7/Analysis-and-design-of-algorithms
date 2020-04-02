def seleccion_arriba(lista):
    for indice in range(0, len(lista)):
        menor = lista[indice]
        posicion = indice
        for subindice in range(posicion, len(lista)):

            if lista[subindice] < menor:
                menor = lista[subindice]
                posicion = subindice


        if posicion != indice:
            temporal = lista[indice]
            lista[indice] = lista[posicion]
            lista[posicion] = temporal

    mostrar_arreglo(lista)

def seleccion_abajo(lista):
    for indice in range(0, len(lista)):
        menor = lista[indice]
        posicion = indice
        for subindice in range(posicion, len(lista)):

            if lista[subindice] > menor:
                menor = lista[subindice]
                posicion = subindice


        if posicion != indice:
            temporal = lista[indice]
            lista[indice] = lista[posicion]
            lista[posicion] = temporal

    mostrar_arreglo(lista)
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

    seleccion_arriba(arrayN)
    print("--------------------------")
    seleccion_abajo(arrayN)

leer_arreglo()
