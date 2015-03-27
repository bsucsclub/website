#problem even odd sort

import fileinput

def main():
    odds = []
    evens = []
    for line in fileinput.input():
        x = int(line)
        if x == 0 :
            continue
        if x % 2 == 0:
            evens.append(x)
        else:
            odds.append(x)
    evens.sort()
    odds.sort()
    sorted_list = []
    counter = 0
    while True:
        if counter > max(len(evens),len(odds)):
            break
        try:
            sorted_list.append(evens[counter])
            
        except:
            pass
        try:
            sorted_list.append(odds[counter])
        except:
            pass
        counter += 1
    [print(i) for i in sorted_list]
        
        

main()
