// 2)จงเขียนโปรแกรมเพื่อคำนวณหา ระยะทางรวมที่เดินทางได้ โดยรับค่า ความเร็ว (Speed) (กิโลเมตรต่อชั่วโมง) และ เวลาที่ใช้ในการเดินทาง (Time) (ชั่วโมง) เข้ามาจากทางแป้นพิมพ์ 

import 'dart:io';

void main() {
  print('คำนวณระยะทางรวม (Distance = Speed × Time)');

  double? speed; //ความเร็ว (กม./ชม.)
  double? time;  //เวลา (ชั่วโมง)

  //รับค่าความเร็ว
  while (true) {
    stdout.write('ความเร็ว (กม./ชม.): ');
    final line = stdin.readLineSync();
    if (line == null) {
      print('ไม่มีข้อมูลจากแป้นพิมพ์');
      return;
    }
    final val = double.tryParse(line.trim().replaceAll(',', '.'));
    if (val != null && val > 0) {
      speed = val;
      break;
    }
    print('กรุณากรอกตัวเลขมากกว่า 0');
  }

  //รับค่าเวลา
  while (true) {
    stdout.write('เวลา (ชั่วโมง): ');
    final line = stdin.readLineSync();
    if (line == null) {
      print('ไม่มีข้อมูลจากแป้นพิมพ์');
      return;
    }
    final val = double.tryParse(line.trim().replaceAll(',', '.'));
    if (val != null && val > 0) {
      time = val;
      break;
    }
    print('กรุณากรอกตัวเลขมากกว่า 0');
  }

  //คำนวณ
  final distance = speed * time;

  //แสดงผล
  print('สูตร: Distance = Speed × Time');
  print('ความเร็ว = ${speed.toStringAsFixed(2)} กม./ชม.');
  print('เวลา = ${time.toStringAsFixed(2)} ชั่วโมง');
  print('ระยะทางรวม = ${distance.toStringAsFixed(3)} กิโลเมตร');
}
