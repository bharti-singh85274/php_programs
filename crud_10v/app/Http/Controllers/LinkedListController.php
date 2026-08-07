<?php

//  Linked List: A Linked List is a linear data structure in which elements (called nodes) are connected using pointers (references). Unlike arrays, linked list elements are not stored in contiguous memory locations.
// Each node contains:
// Data – the value stored in the node.
// Next – a reference (pointer) to the next node.


// Types of Linked List
// 1. Singly Linked List
// Each node contains only one pointer (next). 10 → 20 → 30 → NULL

// 2. Doubly Linked List
// Each node has two pointers.
// Previous
// Next
// NULL ← 10 ⇄ 20 ⇄ 30 → NULL

// 3. Circular Linked List
// The last node points back to the first node.

// 10 → 20 → 30
// ↑          |
// |__________|

//Advantages: 
// Dynamic size
// Easy insertion
// Easy deletion
// No memory wastage due to fixed size

// Disadvantages
// Slow random access
// Extra memory required for pointers
// Cannot directly access middle elements like arrays




//Simple rule to remember
//The while loop always starts from the head and keeps moving temp to the next node until it reaches the last node (the node whose next is NULL). Once it reaches the last node, the new node is attached using: $temp->next = $newNode;


// 1. Create and Display a Linked List

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public $head = null;              // Start from head

    function insert($data)
    {
        $newNode = new Node($data);

        if($this->head == null)
        {
            $this->head = $newNode;    // add 1st node
            return;
        }

        $temp = $this->head;          // add head with new variable

        while($temp->next != null)    
        {
            $temp = $temp->next;      // add next
        }

        $temp->next = $newNode;
    }

    function display()
    {
        $temp = $this->head;          // check with temp

        while($temp != null)
        {
            echo $temp->data . " -> ";
            $temp = $temp->next;
        }

        echo "NULL";
    }
}

$list = new LinkedList();

$list->insert(10);
$list->insert(20);
$list->insert(30);

$list->display();




?>



//2. Traverse (Display) Linked List
<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(20);
$head->next->next = new Node(30);

$temp = $head;

while($temp != null)
{
    echo $temp->data." ";
    $temp = $temp->next;
}

?>


//3. Insert at Beginning

<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(20);
$head->next = new Node(30);

$newNode = new Node(10);

$newNode->next = $head;  // Point to Remeber
$head = $newNode;        // Point to Remeber

$temp = $head;

while($temp)
{
    echo $temp->data." ";
    $temp = $temp->next;
}

?>


//4. Insert at End

<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(20);

$newNode = new Node(30);

$temp = $head;           

while($temp->next != null)   // Point to Remeber
{
    $temp = $temp->next;     // Point to Remeber
}

$temp->next = $newNode;      // Point to Remeber

$temp = $head;

while($temp)
{
    echo $temp->data." ";
    $temp = $temp->next;
}

?>


//5. Insert at Specific Position

<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(30);

$position = 2;                  // Point to Remeber

$newNode = new Node(20);

$temp = $head;

for($i=1;$i<$position-1;$i++)  // Point to Remeber
{
    $temp = $temp->next;       // Point to Remeber
}

$newNode->next = $temp->next;  // Point to Remeber
$temp->next = $newNode;      

$temp = $head;

while($temp)
{
    echo $temp->data." ";
    $temp = $temp->next;
}

?>


//6. Delete First Node
<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(20);
$head->next->next = new Node(30);

$head = $head->next;     // Point to Remeber

$temp = $head;

while($temp)
{
    echo $temp->data." ";
    $temp = $temp->next;
}

?>

//7. Delete Last Node
<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(20);
$head->next->next = new Node(30);

$temp = $head;

while($temp->next->next != null)      // Point to Remeber
{
    $temp = $temp->next;             
}

$temp->next = null;                 // Point to Remeber

$temp = $head;

while($temp)
{
    echo $temp->data." ";
    $temp = $temp->next;
}

?>


//8. Search an Element

<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(20);
$head->next->next = new Node(30);

$key = 20;

$temp = $head;

while($temp)
{
    if($temp->data == $key)           // Point to Remeber
    {
        echo "Found";
        exit;
    }

    $temp = $temp->next;             // Point to Remeber
}

echo "Not Found";

?>

// 9. Count Nodes, Find Length of Linked List
<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(20);
$head->next->next = new Node(30);

$count = 0;                          // Point to Remeber

$temp = $head;

while($temp)
{
    $count++;
    $temp = $temp->next;           // Point to Remeber
}

echo $count;

?>

// 10 Reverse Linked List (Iterative)

<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(20);
$head->next->next = new Node(30);

$prev = null;                        // Point to Remeber
$current = $head;                    // Point to Remeber

while($current != null)              // Point to Remeber
{
    $next = $current->next;          // Point to Remeber
    $current->next = $prev;
    $prev = $current;
    $current = $next;
}

$head = $prev;

$temp = $head;

while($temp)
{
    echo $temp->data." ";
    $temp = $temp->next;
}

?>

// 11.  Find Middle Node

<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$head->next = new Node(20);
$head->next->next = new Node(30);
$head->next->next->next = new Node(40);
$head->next->next->next->next = new Node(50);

$slow = $head;
$fast = $head;

while($fast != null && $fast->next != null)
{
    $slow = $slow->next;
    $fast = $fast->next->next;
}

echo $slow->data;

?>



// 12.   Find Length of Linked List, Count Nodes

<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(5);
$head->next = new Node(15);
$head->next->next = new Node(25);

$length = 0;
$temp = $head;

while($temp != null)
{
    $length++;
    $temp = $temp->next;
}

echo "Length = ".$length;

?>