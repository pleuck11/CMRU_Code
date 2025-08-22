numbers = []
sum_val = 0

while True:
    try:
        num = int(input("ป้อนตัวเลข (1-100, 0 เพื่อหยุด): "))
    except ValueError:
        print("กรุณาป้อนตัวเลขเท่านั้น")
        continue

    if num == 0:
        break

    if num < 1 or num > 100:
        print("กรุณาป้อนตัวเลขในช่วง 1-100 หรือ 0 เพื่อหยุด")
        continue

    numbers.append(num)
    print(f"array ปัจจุบัน: {numbers}")  # แสดง array หลังจากเพิ่มตัวเลข
    sum_val = sum(numbers)

    if sum_val > 100:
        break

print("\nผลลัพธ์:")
print(f"ตัวเลขที่รับเข้ามา: {numbers}")
print(f"ผลรวม = {sum_val}")
