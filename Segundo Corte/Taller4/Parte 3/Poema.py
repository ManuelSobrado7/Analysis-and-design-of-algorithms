voc='aeiouAEIOU'
espaci=' '
cons='bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ'
let='aeiouAEIOUbcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ'
f = open ('C:/Users/Manue/OneDrive/Documents/Noveno Semestre/Analisis y D. de algoritmos/Taller4/Parte 3/Poema.txt','r')
mss = f.read()
print(mss)
def contar(var):
	lista=len([m for m in mss if m in var])
	return lista
p=contar(voc)
print("Cantidad de vocales: "+str(p))
es=contar(espaci)
print("Cantidad de espacio: "+str(es))
c=contar(cons)
print("Cantidad de consonantes: "+str(c))
l=contar(let)
print("Cantidad de letras: "+str(l))
fr=mss.split()
pal=[]
for i in fr:
    pal.append(fr.count(i))

print("Frase\n" + str(list(zip(fr, pal))))
f.close()
