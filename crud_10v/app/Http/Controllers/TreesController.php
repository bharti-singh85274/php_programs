
// A Tree is a non-linear data structure used to represent data in a hierarchical form.

// Unlike an array or linked list, where elements are generally connected sequentially, a tree has nodes connected through edges.


// Important Tree Terminology
// Term	Meaning
// Root	Topmost node
// Parent	Node having children
// Child	Node below another node
// Leaf	Node having no children
// Edge	Connection between two nodes
// Height	Longest path from node to leaf
// Depth	Distance from root to a node
// Subtree	Smaller tree inside a tree


// Binary Tree

    //     10
    //    /  \
    //   20   30
    //  / \
    // 40  50

// A Binary Tree is a tree where each node can have at most two children:The two children are usually called:
// Left child
// Right child

*BST:
Smaller values go to the left
Greater values go to the right

//1. Create a Binary Tree in PHP

<?php

class Node
{
    public $data;
    public $left;
    public $right;

    function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}


// Create tree
$root = new Node(10);

$root->left = new Node(20);
$root->right = new Node(30);

$root->left->left = new Node(40);
$root->left->right = new Node(50);

$root->right->left = new Node(60);
$root->right->right = new Node(70);


// Inorder                  //The order is:LEFT → ROOT → RIGHT
function inorder($root)     
{
    if ($root == null) {
        return;
    }

    inorder($root->left);

    echo $root->data . " ";

    inorder($root->right);
}


// Preorder
function preorder($root)      // The order is: ROOT → LEFT → RIGHT
{
    if ($root == null) {
        return;
    }

    echo $root->data . " ";

    preorder($root->left);

    preorder($root->right);
}


// Postorder              //The order is: LEFT → RIGHT → ROOT
function postorder($root)
{
    if ($root == null) {
        return;
    }

    postorder($root->left);

    postorder($root->right);

    echo $root->data . " ";
}


// Output

echo "Inorder: ";
inorder($root);

echo "\n";

echo "Preorder: ";
preorder($root);

echo "\n";

echo "Postorder: ";
postorder($root);

?>



//2. Binary Search Tree — Insert and Search

<?php

class Node
{
    public $data;
    public $left;
    public $right;

    function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}


// Insert into BST
function insert($root, $value)
{
    // If tree is empty
    if ($root == null) {
        return new Node($value);
    }

    // Go to left
    if ($value < $root->data) {
        $root->left = insert($root->left, $value);
    }

    // Go to right
    else if ($value > $root->data) {
        $root->right = insert($root->right, $value);
    }

    return $root;
}


// Search in BST
function search($root, $value)
{
    if ($root == null) {
        return false;
    }

    if ($root->data == $value) {
        return true;
    }

    if ($value < $root->data) {
        return search($root->left, $value);
    }

    return search($root->right, $value);
}


// Inorder
function inorder($root)
{
    if ($root == null) {
        return;
    }

    inorder($root->left);
    echo $root->data . " ";
    inorder($root->right);
}


// Create BST
$root = null;

$root = insert($root, 10);
$root = insert($root, 5);
$root = insert($root, 15);
$root = insert($root, 3);
$root = insert($root, 7);
$root = insert($root, 12);
$root = insert($root, 20);


// Display BST
echo "BST Inorder: ";
inorder($root);

echo "\n";


// Search
$value = 12;

if (search($root, $value)) {
    echo $value . " found in BST";
} else {
    echo $value . " not found in BST";
}

?>


3. Height of Binary Tree    //Here we count height in number of nodes.

<?php

class Node
{
    public $data;
    public $left;
    public $right;

    function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}


function height($root)
{
    if ($root == null) {
        return 0;
    }

    $leftHeight = height($root->left);

    $rightHeight = height($root->right);

    return 1 + max($leftHeight, $rightHeight);  // Formaula of height
}


// Create tree
$root = new Node(10);

$root->left = new Node(5);
$root->right = new Node(15);

$root->left->left = new Node(3);
$root->left->right = new Node(7);

$root->right->left = new Node(12);
$root->right->right = new Node(20);


// Find height
echo "Height of tree: " . height($root);

?>


// 4. Diameter of Binary Tree : Here diameter is counted in number of nodes.
<!-- For every node:
1. Find left height
2. Find right height
3. leftHeight + rightHeight + 1
       ↓
   diameter through this node
4. Update maximum diameter
5. Return height to parent -->


<?php

class Node
{
    public $data;
    public $left;
    public $right;

    function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

                       //& means pass by reference. So if this function changes: $maxDiameter, the original variable outside the function also changes.
function diameter($root, &$maxDiameter)   //$root:The current node we are processing.   &$maxDiameter: This stores the largest diameter found so far.
{
    if ($root == null) {
        return 0;
    }


    // Find left height
    $leftHeight = diameter($root->left, $maxDiameter);


    // Find right height
    $rightHeight = diameter($root->right, $maxDiameter);


    // Diameter passing through current node
    $currentDiameter = $leftHeight + $rightHeight + 1;     // Why +1?  Because we also count the current node.


    // Update maximum diameter
    $maxDiameter = max($maxDiameter, $currentDiameter);


    // Return height
    return 1 + max($leftHeight, $rightHeight);     //POINT TO REMEMBER. Height Formula in return to tree
}


// Create tree
$root = new Node(10);

$root->left = new Node(5);
$root->right = new Node(15);

$root->left->left = new Node(3);
$root->left->right = new Node(7);

$root->right->left = new Node(12);
$root->right->right = new Node(20);


// Find diameter
$maxDiameter = 0;

diameter($root, $maxDiameter);

echo "Diameter of tree: " . $maxDiameter;

?>


// 5. Lowest Common Ancestor   //POINT TO REMEMBER $n1,$n2 in function lca
 LCA in BST  //LCA: The LCA of two nodes is the lowest/deepest node in the tree that is an ancestor of both nodes.

<!-- Tree
          10
        /    \
       5      15
      / \    /  \
     3   7  12  20

For 3 and 7:

       5
      / \
     3   7 -->

<?php

class Node
{
    public $data;
    public $left;
    public $right;

    function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}


function insert($root, $value)
{
    if ($root == null) {
        return new Node($value);
    }

    if ($value < $root->data) {
        $root->left = insert($root->left, $value);
    }
    else if ($value > $root->data) {
        $root->right = insert($root->right, $value);
    }

    return $root;
}


// Find LCA
function lca($root, $n1, $n2)    // root = current node, n1   = first value, n2   = second value
{
    if ($root == null) {
        return null;
    }


    // Both values are smaller
    if ($n1 < $root->data && $n2 < $root->data) {    //Are BOTH values smaller than the current node? If yes, both nodes must be somewhere in the left subtree.
        return lca($root->left, $n1, $n2);
    }


    // Both values are greater
    if ($n1 > $root->data && $n2 > $root->data) {
        return lca($root->right, $n1, $n2);
    }


    // Values are on different sides
    // Current node is LCA
    return $root;          // Why return $root? This returns the current root after insertion.
}


// Create BST
$root = null;

$root = insert($root, 10);
$root = insert($root, 5);
$root = insert($root, 15);
$root = insert($root, 3);
$root = insert($root, 7);
$root = insert($root, 12);
$root = insert($root, 20);


// Find LCA
$n1 = 3;
$n2 = 7;

$result = lca($root, $n1, $n2);

echo "LCA of " . $n1 . " and " . $n2 . ": " . $result->data;

?>


//7. Complete Example of an Unbalanced Tree  // POINTS TO REMEMBER: -1,1 for comparison in condition
<!-- To understand the balanced-tree program properly, try this tree:

        10
       /
      5
     /
    3
   /
  1 -->

  <?php

class Node
{
    public $data;
    public $left;
    public $right;

    function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}


//   Tree
//          10
//         /
//        5
//       /
//      3
//     /
//    1

function checkBalanced($root)
{
    if ($root == null) {
        return 0;    //the NULL child has height 0
    }

    $leftHeight = checkBalanced($root->left);

    if ($leftHeight == -1) {
        return -1;
    }

    $rightHeight = checkBalanced($root->right);

    if ($rightHeight == -1) {
        return -1;
    }

    if (abs($leftHeight - $rightHeight) > 1) {   // abs() in PHP means absolute value. It removes the negative sign from a number
        return -1;           // special value -1 means: "This subtree is already unbalanced."
    }

    return 1 + max($leftHeight, $rightHeight);     // Return height  (Height Formula)
}


// Create unbalanced tree
$root = new Node(10);

$root->left = new Node(5);

$root->left->left = new Node(3);

$root->left->left->left = new Node(1);


// Check
if (checkBalanced($root) == -1) {
    echo "Tree is not balanced";
} else {
    echo "Tree is balanced";
}

?>