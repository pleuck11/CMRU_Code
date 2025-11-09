// 1) จงเขียนโปรแกรมคำนวณหาปริมาตรทรงกระบอกโดยรับข้อมูลความสูงและรัศมีเข้ามาจากทางแป้นพิมพ์

import 'dart:io';
import 'dart:math' as math;

void main() {
  print('คำนวณปริมาตรทรงกระบอก (V = π r² h)');

  double? r; //รัศมี
  double? h; //ความสูง

  //รับค่ารัศมี
  while (true) {
    stdout.write('รัศมี (r): ');
    final line = stdin.readLineSync();
    if (line == null) {
      print('ไม่มีข้อมูลจากแป้นพิมพ์');
      return;
    }
    final val = double.tryParse(line.trim().replaceAll(',', '.'));
    if (val != null && val > 0) {
      r = val;
      break;
    }
    print('กรุณากรอกตัวเลขมากกว่า 0');
  }

  //รับค่าความสูง
  while (true) {
    stdout.write('ความสูง (h): ');
    final line = stdin.readLineSync();
    if (line == null) {
      print('ไม่มีข้อมูลจากแป้นพิมพ์');
      return;
    }
    final val = double.tryParse(line.trim().replaceAll(',', '.'));
    if (val != null && val > 0) {
      h = val;
      break;
    }
    print('กรุณากรอกตัวเลขมากกว่า 0');
  }

  //คำนวณ10
  final v = math.pi * r * r * h; //สูตร V = π r² h

  //แสดงผล
  print('สูตร: V = π r² h');
  print('รัศมี r = ${r.toStringAsFixed(2)}');
  print('ความสูง h = ${h.toStringAsFixed(2)}');
  print('ปริมาตร = ${v.toStringAsFixed(3)}');
}
