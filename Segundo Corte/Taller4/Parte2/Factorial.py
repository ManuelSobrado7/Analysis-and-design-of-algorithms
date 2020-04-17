n=int(input("Introduce numero: "))
x=1
for i in range(1,n+1):
	x=x*i
print("Fact: "+str(x))

def factor(n):
	if n==0 or n ==1:
		return 1
	else:
		return n*factor(n-1)
