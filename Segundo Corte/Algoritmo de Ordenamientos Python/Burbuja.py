def burbuja_mayor(lista):
    for n in range(len(lista) - 1, 0, -1):
        for i in range(n):
            if lista[i] < lista[i + 1]:
                temp = lista[i]
                lista[i] = lista[i + 1]
                lista[i + 1] = temp

    mostrar_arreglo(lista)
def burbuja_menor(lista):
    for n in range(len(lista) - 1, 0, -1):
        for i in range(n):
            if lista[i] > lista[i + 1]:
                temp = lista[i]
                lista[i] = lista[i + 1]
                lista[i + 1] = temp

    mostrar_arreglo(lista)
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

    print("---------DESC------------------")
    burbuja_mayor(arrayN)
    print("---------ASC-------------------")
    burbuja_menor(arrayN)
    print("---------BURBUJA---------------")

leer_arreglo()
