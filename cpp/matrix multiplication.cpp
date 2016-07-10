#include <iostream>
using namespace std;
int main()
{

     int arr[3][3]={0}; 
     int arr1[3][3]={0}; 
     int arr2[3][3]={0};

     
     for(int i = 0; i < 3; i++) {
       for(int j = 0; j <3; j++) {
          cout<<"Matrix 1st ["<<i<<"]["<<j<<"]:\n";
          cin>>arr[i][j];
        }
       }

     for(int i = 0; i < 3; i++) {
        for(int j = 0; j < 3; j++) {
          cout<<"Matrix 2nd ["<<i<<"]["<<j<<"]:\n";
          cin>>arr1[i][j];
        }
       }

  //write your logic here 
	int suma;
	for (int i = 0; i <= 2; i++) { //fila m3
      for (int j = 0; j <= 2; j++) { //fila m1
         suma = 0;
         for (int k = 0; k <= 2; k++) { //columna m2
            suma = suma + arr[i][k] * arr1[k][j];
         }
         arr2[i][j] = suma;
      }
   }
  //end


  cout<<"Multiply of both matrix:\n";

  for(int i = 0; i < 3; i++) 
  {
     for(int j = 0; j < 3; j++) 
      {
          cout<<arr2[i][j]<<" ";
      }  
     cout<<"\n"; 
  }   

return 0;
}
