package Num_menor;


public class maxMin
{
	public static void main(String[] ARGS)
	{
		int[] myList = {5,4,8,6,3,2,9};
		int i, min, suma;
 
		min=myList[0];
 
		for(i = 0; i < myList.length; i++)
		{
			if(min>myList[i])
			{
				min=myList[i];
			}
					}
 
		System.out.println("El número menor es: "+min);
	}
}