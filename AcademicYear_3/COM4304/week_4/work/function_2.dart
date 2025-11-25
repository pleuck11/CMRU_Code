main() {
  print("....Start Program...");

  printDoubleLine();
  add2Num(50, 20); //50and20 is argument
  int sum10 = sum1to10();
  print("sum of 1-10 is : $sum10");
  print("sum of 1-N is : ${sum1toN(20)}");
  print("diff value ${diffValue(10, 2)}");
  print("max value ${max2Num(15, 40)}");
  print("2 power 5 is ${myPower(2, 5)}");
  print("3 power 2 is ${myPower(3)}");

  print("===== End Program ======");
}

int myPower(int b, [int p = 2]) {
  int answer = 1;
  for (int i = 1; i <= p; i++) {
    answer *= b;
  }
  return answer;
}

int diffValue(int a, int b) => a - b; // arrow function
int max2Num(int x, int y) => x > y ? x : y;

double sum1toN(int n) {
  double sum = 0;
  for (int i = 1; i <= n; i++) {
    sum = sum + i;
  }
  return sum;
}

int sum1to10() {
  int sum = 0;
  for (int i = 1; i <= 10; i++) {
    sum = sum + i;
  }
  return sum;
}

//function with parameter
void add2Num(int x, int y) {
  int z = x + y;
  print("${x} + ${y} = ${z}");
}

void printDoubleLine() {
  print("**************************");
  print("**************************");
}