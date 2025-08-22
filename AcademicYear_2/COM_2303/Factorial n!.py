# แบบที่_1

def factorial(n):
    ans = 1
    for i in range(1, n + 1):
        ans *= i
    return ans

# ทดสอบการทำงาน
print(factorial(5))  # 5! = 120
print(factorial(0))  # 0! = 1
print(factorial(7))  # 7! = 5040

# แบบที่_2

def F(n):
    if n == 0:
        return 1
    else:
        return F(n - 1) * n

# ทดสอบการทำงาน
print(F(5))  # 5! = 120
print(F(0))  # 0! = 1
print(F(7))  # 7! = 5040
