def max_element(A):
    maxval = A[0]  
    for i in range(1, len(A)):
        if A[i] > maxval:
            maxval = A[i]
    return maxval


arr = [3, 1, 7, 9, 2, 5]

print(max_element(arr))