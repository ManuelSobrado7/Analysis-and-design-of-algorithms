def siGap(gap):
	gap=(gap*10)//13
	if gap<1:
		return 1
	return gap

def Peine_abajo(lista):
    n=len(lista)
    gap=n
    flag=True
    while(gap!=1 or flag==True):
            gap=siGap(gap)
            flag=False
            for i in range(0,n-gap):
                    if lista[i]<lista[i+gap]:
                            aux=lista[i]
                            lista[i]=lista[i+gap]
                            lista[i+gap]=aux

                            flag=True
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


    Peine_abajo(arrayN)
	




leer_arreglo()
