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
  print("4 + 5 + 6 = ${sum3(4, 5, 6)}");
  print("1 + ? + 2 = ${sum3(1, 2)}");
  print("9 + ? + ? = ${sum3(9)}");
  friendName('somwang', fnd2: 'pete');
  friendName('manee', fnd3: 'chuji');

  print("===== End Program ======");
}

void friendName(fnd1, {fnd2, fnd3}){
  print("friend 1 : $fnd1");
  print("friend 2 : $fnd2");
  print("friend 3 : $fnd3");
}

int sum3(int a, [int b = 0, int c = 0]) => a + b + c;

int myPower(int b, [int p = 2]) { //optional
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
}void printName(String name) {
  print("My name is $name");
}
