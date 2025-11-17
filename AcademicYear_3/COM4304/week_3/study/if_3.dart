void main(List<String> args) {
  print("....Start Program....");

  int controlLoop1 = 0;

  while (controlLoop1 <= 5) {
    print("Loop : $controlLoop1");
    controlLoop1++;
  }
  
  print("====End Program====");


  print("....Start Program....");

  int controlLoop2 = 0;

  do {
    print("Loop do : $controlLoop2");
    controlLoop2 += 2;
  } while (controlLoop2 <= 10);
  
  print("====End Program====");


  print("....Start Program....");

  for (int i = 2; i <= 16; i+=2) {
    if (i == 10) controlLoop1;
    print("Loop for : $i");
  }

  print("====End Program====");


  
}
