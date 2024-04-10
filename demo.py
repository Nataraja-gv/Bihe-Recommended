num=int(input("enter the number : "))
factorial=1
if num <0:
    print("worng enter plese enter +ive number")
elif num <1:
    print("plese enter number above 1")
else:
    for i in range(1,num+1):
        factorial=factorial*i
    print("factorial number", factorial )