def max_element(A):
    maxval = A[0]  # กำหนดค่าเริ่มต้นเป็นตัวแรกของอาร์เรย์
    for i in range(1, len(A)):
        if A[i] > maxval:
            maxval = A[i]
    return maxval

# ทดสอบการทำงาน
arr = [3, 1, 7, 9, 2, 5]
print(max_element(arr))  # ค่ามากที่สุดคือ 9
