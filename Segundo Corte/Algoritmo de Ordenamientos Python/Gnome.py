def Gnome(lista):
	i=1
	while i<len(lista):
		if lista[i]<=lista[i-1]:
			i=i+1
		else:
			temp=lista[i-1]
			lista[i-1]=lista[i]
			lista[i]=temp
			if i>1:
				i=i-1

	mostrar_arreglo(lista)
def Gnome_abajo(lista):
	i=1
	while i<len(lista):
		if lista[i]>=lista[i-1]:
			i=i+1
		else:
			temp=lista[i-1]
			lista[i-1]=lista[i]
			lista[i]=temp
			if i>1:
				i=i-1

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

    print("---------DESC------------------")
    Gnome(arrayN)
    print("---------ASC-------------------")
    Gnome_abajo(arrayN)
    print("---------GNOME-----------------")

leer_arreglo()
