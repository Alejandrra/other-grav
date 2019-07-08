The [graceful tree conjecture](http://www.openproblemgarden.org/op/graceful_tree_conjecture) states that every tree has a [graceful label](http://en.wikipedia.org/wiki/Graceful_labeling). Although proven for some simple cases, the general case remains open.


This program can be used to draw a tree and generate all graceful labels (except for certain trivial variations) for the tree. The visualization also shows the adjacency matrix with respect to the graceful label.


Instructions:


Build tree by clicking on vertices to add leafs to it. Once the desired tree is built, click on 'Generate labels' button to find all graceful labels. The labels shown are unique with respect to adjacency matrix. This reduces many trivial variations in labels, for example if two branches from a vertex are isomorphic, then their labels can be swapped to get another graceful label. Also if (i) is a gaceful labeling, so is (n-i), one of these labelings have 0 and n-1 adjacent. Only labels where 0 and n-1 are adjacent are shown. 