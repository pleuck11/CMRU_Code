// 4) เขียนโปรแกรมวนรอบรับค่าของตัวเลขจำนวนเต็มเข้ามา 10 ครั้งแล้วแสดงตัวเลขที่มีค่ามากที่สุดและตัวเลขที่มีค่าน้อยที่สุดออกทางจอภาพ

import 'dart:io';

void main() {
  int? num;      // ค่าชั่วคราว
  int max = 0;   // มากที่สุด
  int min = 0;   // น้อยสุด

  for (int i = 1; i <= 10; i++) {
    stdout.write('กรอกค่าตัวเลขตัวที่ $i: ');
    String? input = stdin.readLineSync();

    if (input == null) {
      print('ข้อมูลที่กรอกไม่ถูกต้อง');
      return;
    }

    num = int.tryParse(input.trim());
    if (num == null) {
      print('กรุณากรอกจำนวนเต็ม');
      return;
    }

    if (i == 1) {
      max = num;
      min = num;
    } else {
      if (num > max) max = num;
      if (num < min) min = num;
    }
  }

  print('ค่ามากที่สุดคือ: $max');
  print('ค่าน้อยที่สุดคือ: $min');
}
