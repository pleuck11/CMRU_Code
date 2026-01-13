import "dart:io";

main(){

  print("สินค้าที่ 1: ");
  String? product_id_1 = stdin.readLineSync();
  print("ราคาสินค้าที่ 1 : ");
  String? product_price_1 = stdin.readLineSync();

  print("สินค้าที่ 2 : ");
  String? product_id_2 = stdin.readLineSync();
  print("ราคาสินค้าที่ 2 : ");
  String? product_price_2 = stdin.readLineSync();

  print("สินค้าที่ 3: ");
  String? product_id_3 = stdin.readLineSync();
  print("ราคาสินค้าที่ 3 : ");
  String? product_price_3 = stdin.readLineSync();

  int p1 = int.parse(product_price_1!);
  int p2 = int.parse(product_price_2!);
  int p3 = int.parse(product_price_3!);

  int sum = p1+p2+p3;
  print("Total Price : $sum");

   if (p1 <= p2 && p1 <= p3) {
    print("สินค้าที่ 1 มีราคาถูกที่สุด : $product_id_1");
    print("ได้รับส่วนลดเท่ากับราคาของสินค้า");
    print("ราคาสินค้า : $p1");
    int sum_x = sum - p1;
    print("ราคาสุทธิ : $sum_x");
  } 
  else if (p2 <= p1 && p2 <= p3) { 
    print("สินค้าที่ 2 มีราคาถูกที่สุด : $product_id_2");
    print("ได้รับส่วนลดเท่ากับราคาของสินค้า");
    print("ราคาสินค้า : $p2");
    int sum_x = sum - p2;
    print("ราคาสุทธิ : $sum_x");
  } 
  else {
    print("สินค้าที่ 3 มีราคาถูกที่สุด : $product_id_3");
    print("ได้รับส่วนลดเท่ากับราคาของสินค้า");
    print("ราคาสินค้า : $p3");
    int sum_x = sum - p3;
    print("ราคาสุทธิ : $sum_x");
  }
  
}
