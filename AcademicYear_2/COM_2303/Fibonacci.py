def F(n):
    if n == 0:
        return 0
    elif n == 1:
        return 1

    F1 = 0
    F2 = 1
    for i in range(2, n + 1):
        F0 = F1
        F1 = F2
        F2 = F0 + F1
    return F2

# ทดสอบการทำงาน
print(F(0))  # 0
print(F(1))  # 1
print(F(5))  # 5
print(F(10)) # 55
