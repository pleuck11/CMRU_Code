def selection_sort(A):
    n = len(A)
    for i in range(n - 1):
        min_index = i
        for j in range(i + 1, n):
            if A[j] < A[min_index]:  # ค้นหาค่าที่น้อยที่สุด
                min_index = j
        A[i], A[min_index] = A[min_index], A[i]  # สลับตำแหน่ง

# ทดสอบการทำงาน
arr = [64, 25, 12, 22, 11]
selection_sort(arr)
print(arr)  # [11, 12, 22, 25, 64]
