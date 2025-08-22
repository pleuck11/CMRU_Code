def menu():
    print("เมนูโปรแกรมคำนวณ")
    print("1. บวก (+)")
    print("2. ลบ (-)")
    print("3. คูณ (x)")
    print("4. หาร (/)")
    print("0. ออกจากโปรแกรม")

def calculate(choice, a, b):
    if choice == '1':
        return a + b
    elif choice == '2':
        return a - b
    elif choice == '3':
        return a * b
    elif choice == '4':
        if b == 0:
            return "ไม่สามารถหารด้วยศูนย์"
        return a / b
    else:
        return None

while True:
    menu()
    choice = input("กรุณาเลือกเมนู (0-4): ")
    if choice == '0':
        print("จบการทำงาน")
        break
    if choice in ['1', '2', '3', '4']:
        try:
            a = float(input("กรุณาใส่เลขตัวที่ 1: "))
            b = float(input("กรุณาใส่เลขตัวที่ 2: "))
            result = calculate(choice, a, b)
            print("ผลลัพธ์:", result)
        except ValueError:
            print("กรุณาใส่ตัวเลขที่ถูกต้อง")
    else:
        print("กรุณาเลือกเมนูที่ถูกต้อง")