# แบบที่_1

def power(a, n):
    ans = 1
    if n == 0:
        return ans
    else:
        for i in range(n):
            ans *= a
    return ans

# ทดสอบการทำงาน
print(power(2, 3))  # 2^3 = 8
print(power(5, 0))  # 5^0 = 1
print(power(3, 4))  # 3^4 = 81

# แบบที่_2

def x(a, n):
    if n == 0:
        return 1
    else:
        return a * x(a, n - 1)

# ทดสอบการทำงาน
print(x(2, 3))  # 2^3 = 8
print(x(5, 0))  # 5^0 = 1
print(x(3, 4))  # 3^4 = 81
print(x(20, 5))