#include<bits/stdc++.h>
#include<unistd.h>

using namespace std;

// flag= GLUG{3l0n_0n_m4r5}

void encode(char * input_str, char * output_str) {
    int len = strlen(input_str);
    for (int i = 0; i < len; i++) {
        output_str[i] = (input_str[i] ^ 0x11) - 0x4;
    }
}

// void decode(char * input_str, char * output_str) {
//     int len = strlen(input_str);
//     for (int i = 0; i < len; i++) {
//         output_str[i] = (input_str[i] + 0x4) ^ 0x11;
//     }
// }

// int main()
// {
// 	char galf[19];
//     galf[0] = 'G';
// 	char *f="A";
//     int a2 = 3;
//     galf[1] = 'L';
//     galf[2] = 'U';
// 	galf[3] = 'G';
// 	galf[4] = '{';
// 	galf[5] = '3';
// 	galf[6] = 'l';
// 	galf[7] = '0';
// 	galf[8] = 'n';
// 	galf[9] = '_';
// 	galf[10] = '0';
// 	galf[11] = 'n';
// 	galf[12] = '_';
// 	galf[13] = 'm';
// 	galf[14] = '4';
// 	galf[15] = 'r';
// 	galf[16] = '5';
// 	galf[17] = '}';
// 	galf[18] = '\0';
//     char flag[19], actualflag[19];

//     encode(galf, flag);
//     decode(flag, actualflag);
//     flag[18] = '\0';
//     actualflag[18] = '\0';
//     for(int i = 0 ; i < 18 ; i++)
//         printf("0x%x", flag[i]);
//     cout << endl;
    
//     for(int i = 0 ; i < 18 ; i++)
//         printf("%c", actualflag[i]);
//     cout << endl;
    
//     // cout << std::hex << flag ;


//     return 0;
// }

void flagContainer()
{
    char encodedFlag[]="0x520x590x400x520x660x1e0x790x1d0x7b0x4a0x1d0x7b0x4a0x780x210x5f0x200x68";
}

int main()
{
    char c;
	puts("Do you want the flag?[y/N]");
	scanf("%c",&c);
	fflush(stdout);
	if(c == 'y')
	{
		int i,j=2;
		for(i=0;i<61;i++)
		{
			printf("%c",(0x41+i));
			fflush(stdout);
			usleep(20*1000);
			printf("\r");
		}
		printf("\nSome%}ing w%0red %~/ Tr%}0ps{ xs%$\n");
		// flagHelper(fg);
		sleep(2);
		system("xdg-open https://www.youtube.com/watch?v=CEM5SXxpmlE");
	}
	else
	{
		system("xdg-open https://www.youtube.com/watch?v=75gBFiFtAb8");
	}
	return 0;
}