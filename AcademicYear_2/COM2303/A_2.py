def x (a, n):
    if n == 0:
        return 1
    else:
        return a * x(a, n - 1)


print(x(20 , 5))