#problem scale

import fileinput

    

def main():
    for line in fileinput.input():
       x = int(line)
    printE(x)
    for i in range(x):
        print()
    printP(x)
    for i in range(x):
        print()
    printI(x)
    for i in range(x):
        print()
    printC(x)

        
def printE(x):
    for i in range(x):
        print("E"*5*x)
    for i in range(x):
        print("E"*x)
    for i in range(x):
        print("E"*5*x)
    for i in range(x):
        print("E"*x)
    for i in range(x):
        print("E"*5*x)

def printP(x):
    for i in range(x):
        print("P"*5*x)
    for i in range(x):
        print("P"*x + " "*(5*x-2*x) + "P"*x)
    for i in range(x):
        print("P"*5*x)
    for i in range(2*x):
        print("P"*x)

def printI(x):
    for i in range(x):
        print("I"*5*x)
    for i in range(3*x):
        print(" "*((5*x-x)//2) + "I"*x)
    for i in range(x):
        print("I"*5*x)
def printC(x):
    for i in range(x):
        print("C"*5*x)
    for i in range(3*x):
        print("C"*x)
    for i in range(x):
        print("C"*5*x)       
main()
