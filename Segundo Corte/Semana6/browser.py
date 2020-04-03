N=int(input("Numero de palabras: "))
if 1<=N<=10^4:
	lis=[]
	for i in range(0,N):
		r=input("palabra: ")
		lis.append(r)
	print(lis)

	Q=int(input("Numero de consultas: "))
	if 1<=Q<=100:
		lista1=[]
		for x in range(0,Q):
			cons=input("Consulta es: ")
			#lista1.append(cons)
			conta=0
			for i in lis:
				if r.startswith(cons)==True:
					conta +=1
					if conta ==0:
						print("nada"+str(conta))
				print(conta)
