# แบบที่_1

def partition(A, l, r):
    pivot = A[r]  # เลือก pivot เป็นตัวสุดท้าย
    i = l - 1  # กำหนดตำแหน่งของตัวที่เล็กกว่า pivot
    
    for j in range(l, r):
        if A[j] < pivot:  # ถ้าค่าปัจจุบันน้อยกว่า pivot
            i += 1
            A[i], A[j] = A[j], A[i]  # สลับตำแหน่ง
    
    A[i + 1], A[r] = A[r], A[i + 1]  # นำ pivot ไปวางที่ตำแหน่งที่เหมาะสม
    return i + 1  # คืนค่าดัชนีของ pivot หลังจากจัดเรียง

def quick_sort(A, l, r):
    if l < r:
        s = partition(A, l, r)  # หาตำแหน่งของ pivot
        quick_sort(A, l, s - 1)  # เรียงลำดับซีกซ้ายของ pivot
        quick_sort(A, s + 1, r)  # เรียงลำดับซีกขวาของ pivot

# ทดสอบการทำงาน
arr = [64, 34, 25, 12, 22, 11, 90]
quick_sort(arr, 0, len(arr) - 1)
print(arr)  # [11, 12, 22, 25, 34, 64, 90]


# แบบที่_2

def partition(A, l, r):
    p = A[l]  # เลือก pivot เป็นตัวแรกของอาร์เรย์ย่อย
    i = l
    j = r + 1

    while True:
        # เลื่อน i ไปทางขวาจนกว่าจะเจอค่าที่ >= pivot
        while True:
            i += 1
            if i >= r or A[i] >= p:
                break
        
        # เลื่อน j ไปทางซ้ายจนกว่าจะเจอค่าที่ <= pivot
        while True:
            j -= 1
            if j <= l or A[j] <= p:
                break
        
        # ถ้า i กับ j ข้ามกัน ให้หยุดการสลับ
        if i >= j:
            break
        
        # สลับค่า A[i] และ A[j]
        A[i], A[j] = A[j], A[i]

    # สลับ pivot กับ A[j]
    A[l], A[j] = A[j], A[l]

    return j  # คืนค่าตำแหน่ง split ของ pivot

# ทดสอบการทำงาน
arr = [64, 34, 25, 12, 22, 11, 90]
split_index = partition(arr, 0, len(arr) - 1)
print(arr)  # อาร์เรย์หลังจาก partition
print("Pivot index:", split_index)
