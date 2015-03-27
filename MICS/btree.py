import fileinput


def main():
    for line in fileinput.input():
        bst = [int(i) for i in line.split() if i != "0"]
        print(bst)
        btree = {}
        btree [0] = bst[0]
        idx = 0
        for i in bst[1:]:
            btree_insert(i ,btree)
        print(btree)
        print("BST {} max index = {}".format(fileinput.lineno(), max(btree.keys())))

def btree_insert(x,btree):
    idx = 0
    while True:
        if idx not in btree:
            btree[idx] = x
            break
        if x > btree[idx]:
            idx = idx*2+2
        else:
            idx = idx*2+1

main()


