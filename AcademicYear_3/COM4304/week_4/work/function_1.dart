main() {
  print("....Start Program...");

  printDoubleLine();
  add2Num(50, 20); //50and20 is argument
  int sum10 = sum1to10();
  print("sum of 1-10 is : $sum10");
  print("sum of 1-N is : ${sum1toN(20)}");

  print("===== End Program ======");
}

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
