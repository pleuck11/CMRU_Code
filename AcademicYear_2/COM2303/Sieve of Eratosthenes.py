import math

def sieve(n):
    A = list(range(n + 1))  # สร้างอาร์เรย์ A[0] ถึง A[n]
    
    for p in range(2, math.isqrt(n) + 1):  # วนลูปจาก 2 ถึง sqrt(n)
        if A[p] != 0:  # ถ้า p ยังไม่ถูกกำจัด
            j = p * p  # กำหนดค่าเริ่มต้นของ j เป็น p^2
            while j <= n:
                A[j] = 0  # กำจัดตัวที่ไม่ใช่จำนวนเฉพาะ
                j += p
    
    # คืนค่าจำนวนเฉพาะ (ค่าที่ไม่ใช่ 0)
    return [x for x in A[2:] if x != 0]

# ทดสอบการทำงาน
print(sieve(50))  # หาจำนวนเฉพาะตั้งแต่ 2 ถึง 50
