def euclid(m, n):
    while n != 0:
        r = m % n
        m = n
        n = r
    return m

# ทดสอบการทำงาน
print(euclid(48, 18))  # GCD ของ 48 และ 18 คือ 6
print(euclid(56, 98))  # GCD ของ 56 และ 98 คือ 14
print(euclid(101, 103)) # GCD ของ 101 และ 103 คือ 1 (เป็นจำนวนเฉพาะ)
