def burbuja_direccional(arrayN):
    izq = 0
    der = len(arrayN)-1
    ultimo = len(arrayN)-1
    while True:
        entra = False
        for i in range(izq, der):
            if arrayN[i]>arrayN[i + 1]:
                aux = arrayN[i]
                arrayN[i] = arrayN[i + 1]
                arrayN[i + 1] = aux
                entra=True

        for k in range(der-1, izq-1,-1):
            if arrayN[k]>arrayN[k + 1]:
                aux = arrayN[k]
                arrayN[k] = arrayN[k + 1]
                arrayN[k + 1] = aux
                entra = True

        if (entra==False):
            break
    mostrar_arreglo(arrayN)

def burbuja_direccional_abajo(arrayN):
    izq = 0
    der = len(arrayN)-1
    ultimo = len(arrayN)-1
    while True:
        entra = False
        for i in range(izq, der):
            if arrayN[i]<arrayN[i + 1]:
                aux = arrayN[i]
                arrayN[i] = arrayN[i + 1]
                arrayN[i + 1] = aux
                entra=True

        for k in range(der-1, izq-1,-1):
            if arrayN[k]<arrayN[k + 1]:
                aux = arrayN[k]
                arrayN[k] = arrayN[k + 1]
                arrayN[k + 1] = aux
                entra = True

        if (entra==False):
            break
    mostrar_arreglo(arrayN)

def mostrar_arreglo(arrayN):
    for i in range(len(arrayN)):
        print('Elemento '+'-------> '+str(arrayN[i]))

def leer_arreglo():
    longitud = int(input("¿De que tamaña seria? "))
    arrayN = [0]*longitud
    index = 0
    for iten in arrayN:
        arrayN[index] = int(input("Digite el numero "+str(index)+" del arreglo: "))
        index = index + 1

    print("-----------------ASC----------------------------")
    burbuja_direccional(arrayN)
    print("-----------------DESC---------------------------")
    burbuja_direccional_abajo(arrayN)
    print("---------BURBUJA BIDIRECCIONAL------------------")
leer_arreglo()
