def shell(lista):
    mitad = len(lista) // 2

    while mitad > 0:
        for p in range(mitad):
            reducir(lista, p, mitad)

        mitad = mitad // 2

    mostrar_arreglo(lista)

def reducir(lista, inicio, salto):
    for i in range(inicio + salto, len(lista), salto):
        valor = lista[i]
        posicion = i

        while posicion >= salto and lista[posicion - salto] < valor:
            lista[posicion] = lista[posicion - salto]
            posicion = posicion - salto

        lista[posicion] = valor

def shell_inverso(lista):
    mitad = len(lista) // 2

    while mitad > 0:
        for p in range(mitad):
            reducir_inverso(lista, p, mitad)

        mitad = mitad // 2

    mostrar_arreglo(lista)

def reducir_inverso(lista, inicio, salto):
    for i in range(inicio + salto, len(lista), salto):
        valor = lista[i]
        posicion = i

        while posicion >= salto and lista[posicion - salto] > valor:
            lista[posicion] = lista[posicion - salto]
            posicion = posicion - salto

        lista[posicion] = valor

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

    print("-------------ASC--------------")
    shell_inverso(arrayN)
    print("-------------DESC-------------")
    shell(arrayN)
    print("-------------SHELL------------")

leer_arreglo()
