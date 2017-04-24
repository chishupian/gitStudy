#include <stdio.h>
#include <math.h>
/**
 * 判断一个数是否为素数
 * @author xian
 * @param 
 * @return 
 * @date 2017-4-24 12:55:34
 */
int isPrimeNumber(int number)
{
	int i;
	float sqrtNumber = sqrt(number);

	for (i=1; i<=sqrtNumber; ++i) {
		if (number%i==0) {
			return 0;
		}
	}

	return 1;
}

int main(void)
{
	int number, //起始数据
	    end = 100; //结束数据

	for (number=3; number<=end; ++number) {
		printf("%d:%c\n", number, (isPrimeNumber(number) ? 'y' :'n'));
	}
	return 0;
}
