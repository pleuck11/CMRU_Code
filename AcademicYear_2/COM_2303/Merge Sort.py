# แบบที่_1

def merge(A, B, C):
    i = j = k = 0
    while i < len(B) and j < len(C):
        if B[i] < C[j]:
            A[k] = B[i]
            i += 1
        else:
            A[k] = C[j]
            j += 1
        k += 1

    while i < len(B):
        A[k] = B[i]
        i += 1
        k += 1

    while j < len(C):
        A[k] = C[j]
        j += 1
        k += 1

def merge_sort(A):
    n = len(A)
    if n > 1:
        mid = n // 2
        B = A[:mid]  # คัดลอกครึ่งแรก
        C = A[mid:]  # คัดลอกครึ่งหลัง

        merge_sort(B)  # เรียกใช้ MergeSort ซ้ำกับครึ่งแรก
        merge_sort(C)  # เรียกใช้ MergeSort ซ้ำกับครึ่งหลัง
        merge(A, B, C)  # รวมอาร์เรย์ที่เรียงลำดับแล้วกลับเข้าด้วยกัน

# ทดสอบการทำงาน
arr = [64, 34, 25, 12, 22, 11, 90]
merge_sort(arr)
print(arr)  # [11, 12, 22, 25, 34, 64, 90]


# แบบที่_2

def merge(A, B, C):
    i = j = k = 0
    while i < len(B) and j < len(C):
        if B[i] < C[j]:
            A[k] = B[i]
            i += 1
        else:
            A[k] = C[j]
            j += 1
        k += 1

    while i < len(B):
        A[k] = B[i]
        i += 1
        k += 1

    while j < len(C):
        A[k] = C[j]
        j += 1
        k += 1

def merge_sort(A):
    n = len(A)
    if n > 1:
        mid = n // 2
        B = A[:mid]  # คัดลอกครึ่งแรก
        C = A[mid:]  # คัดลอกครึ่งหลัง

        merge_sort(B)  # เรียกใช้ MergeSort ซ้ำกับครึ่งแรก
        merge_sort(C)  # เรียกใช้ MergeSort ซ้ำกับครึ่งหลัง
        merge(A, B, C)  # รวมอาร์เรย์ที่เรียงลำดับแล้วกลับเข้าด้วยกัน

# ทดสอบการทำงาน
arr = [64, 34, 25, 12, 22, 11, 90]
merge_sort(arr)
print(arr)  # [11, 12, 22, 25, 34, 64, 90]
