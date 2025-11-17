// 5) เขียนโปรแกรมวนรอบรับค่าของตัวเลขจำนวนเต็มเข้ามา 10 ครั้งแล้วแสดงค่าของตัวเลขทั้งหมดออก ทางจอภาพโดยเรียบลำดับจากมาก ไปหาน้อย

import 'dart:io';

void main() {
  var numbers = <int>[];

  for (var i = 1; i <= 10; i++) {
    stdout.write('กรอกค่าตัวเลขตัวที่ $i: ');
    var input = stdin.readLineSync();

    if (input == null) {
      print('ข้อมูลไม่ถูกต้อง');
      return;
    }

    var value = int.tryParse(input.trim());
    if (value == null) {
      print('กรุณากรอกจำนวนเต็ม');
      return;
    }

    numbers.add(value);
  }

  // เมากไปน้อย
  numbers.sort((a, b) => b.compareTo(a));

  var result = numbers.join(',');

  print('ค่าที่เรียงจากมากไปน้อย $result');
}
