def convertir(lista):
	cad=""
	for ele in lista:
		cad += ele
	return(cad)

voc='aeiouAEIOU'
cons='bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ'
f = open ('C:/Users/Manue/OneDrive/Documents/Noveno Semestre/Analisis y D. de algoritmos/Taller4/Parte 3/Cancion.txt','r')
mss = f.read()
lista=len([m for m in mss if m in voc])
print(mss)
print("Cantidad de vocales: "+str(lista))
sv= open ('C:/Users/Manue/OneDrive/Documents/Noveno Semestre/Analisis y D. de algoritmos/Taller4/Parte 3/CancionSin.txt','w')
lis=[m for m in mss if m in cons]
print(convertir(lis))
men=sv.write(convertir(lis))
sv.close()
f.close()
