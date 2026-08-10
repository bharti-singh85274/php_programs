// 1. Stack: A Stack is a linear data structure that follows LIFO:LIFO = Last In, First Out.The element inserted last is removed first.

Main operations
Operation	Meaning
push()	Insert an element
pop()	Remove the top element
peek()	View top element
isEmpty()	Check whether stack is empty

1. Program:   Stack using PHP Array

<?php

$stack = [];

array_push($stack, 10);
array_push($stack, 20);
array_push($stack, 30);

echo "Stack: ";
print_r($stack);

// Pop
$removed = array_pop($stack);

echo "Removed: " . $removed . "\n";

echo "Top element: " . end($stack);
?>


// 2. Stack using Class
<?php

class Stack
{
    public $stack = [];

    function push($value)
    {
        $this->stack[] = $value;
    }

    function pop()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty\n";
            return;
        }

        return array_pop($this->stack);
    }

    function peek()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty\n";
            return;
        }

        return $this->stack[count($this->stack) - 1];
    }

    function isEmpty()
    {
        return count($this->stack) == 0;
    }
}

$s = new Stack();

$s->push(10);
$s->push(20);
$s->push(30);

echo "Top: " . $s->peek() . "\n";

echo "Removed: " . $s->pop() . "\n";

echo "Top: " . $s->peek();
?>



3. Queue:  A Queue is a linear data structure that follows FIFO:FIFO = First In, First Out. The element inserted first is removed first.

Main operations
Operation	Meaning
enqueue()	Insert element at end
dequeue()	Remove first element
front()	View first element
rear()	View last element
isEmpty()	Check empty

4. Queue using PHP Array

<?php

$queue = [];

array_push($queue, 10);
array_push($queue, 20);
array_push($queue, 30);

echo "Queue: ";
print_r($queue);

// Remove first element
$removed = array_shift($queue);

echo "Removed: " . $removed . "\n";

echo "Front element: " . $queue[0];
?>



5. Queue using Class

<?php

class Queue
{
    public $queue = [];

    function enqueue($value)
    {
        $this->queue[] = $value;
    }

    function dequeue()
    {
        if ($this->isEmpty()) {
            echo "Queue is empty\n";
            return;
        }

        return array_shift($this->queue);
    }

    function front()
    {
        if ($this->isEmpty()) {
            echo "Queue is empty\n";
            return;
        }

        return $this->queue[0];
    }

    function rear()
    {
        if ($this->isEmpty()) {
            echo "Queue is empty\n";
            return;
        }

        return $this->queue[count($this->queue) - 1];
    }

    function isEmpty()
    {
        return count($this->queue) == 0;
    }
}

$q = new Queue();

$q->enqueue(10);
$q->enqueue(20);
$q->enqueue(30);

echo "Front: " . $q->front() . "\n";

echo "Removed: " . $q->dequeue() . "\n";

echo "Front: " . $q->front() . "\n";

echo "Rear: " . $q->rear();
?>



<!-- If they ask "How do you reverse a queue?", say:

"I can use a stack. I dequeue every element from the queue and push it into the stack. Since a stack follows LIFO, when I pop the elements and enqueue them back into the queue, the queue gets reversed."

Remember these two patterns:

Circular Queue
→ rear/front move using modulo (%)

Reverse Queue
→ Queue → Stack → Queue -->


<!------------------------------ REVERSE QUEUE--------------------------------->

<?php

class Queue
{
    public $queue = [];         //POINT TO REMEMBER

    function enqueue($value)     //POINT TO REMEMBER
    {
        $this->queue[] = $value;
    }

    function dequeue()            //POINT TO REMEMBER
    {
        if ($this->isEmpty()) {
            return null;
        }

        return array_shift($this->queue);
    }

    function isEmpty()           //POINT TO REMEMBER
    {
        return count($this->queue) == 0;
    }

    function display()            //POINT TO REMEMBER
    {
        print_r($this->queue);
    }
}

function reverseQueue($q)         //POINT TO REMEMBER
{
    $stack = [];

    // Remove from queue and push into stack
    while (!$q->isEmpty()) {                    //POINT TO REMEMBER
        $stack[] = $q->dequeue();
    }

    // Pop from stack and enqueue again
    while (count($stack) > 0) {                 //POINT TO REMEMBER
        $q->enqueue(array_pop($stack));
    }

    return $q;
}


// Create queue
$q = new Queue();

$q->enqueue(10);
$q->enqueue(20);
$q->enqueue(30);
$q->enqueue(40);

echo "Original Queue:\n";
$q->display();                                

reverseQueue($q);              //POINT TO REMEMBER                    
 
echo "Reversed Queue:\n";
$q->display();                 //POINT TO REMEMBER
?>


// Circular Queue

<?php

class CircularQueue
{
    public $queue;         //POINT TO REMEMBER
    public $front;
    public $rear;
    public $size;

    function __construct($size)      //POINT TO REMEMBER
    {
        $this->size = $size;
        $this->queue = array_fill(0, $size, null);
        $this->front = -1;   //-1 means there is no element in the queue.
        $this->rear = -1;    //-1 means there is no element in the queue.
    }

    function enqueue($value)          //POINT TO REMEMBER   
    {
        // Step 1: Check whether queue is full
        if (($this->rear + 1) % $this->size == $this->front) {     //POINT TO REMEMBER
            echo "Queue is full\n";
            return;
        }

        //   First element   
        if ($this->front == -1) {       //POINT TO REMEMBER
            $this->front = 0;
            $this->rear = 0;
        } else {
            // Move rear circularly
            $this->rear = ($this->rear + 1) % $this->size;   //POINT TO REMEMBER
        }

        $this->queue[$this->rear] = $value;                  //POINT TO REMEMBER
    }

    function dequeue()                 //POINT TO REMEMBER
    {
        //Check if queue is empty
        if ($this->front == -1) {      //POINT TO REMEMBER          
            echo "Queue is empty\n";
            return;
        }
                                          //POINT TO REMEMBER
        $removed = $this->queue[$this->front];  //Store removed value



        // Check if only one element exists
        if ($this->front == $this->rear) {       //POINT TO REMEMBER
            $this->front = -1;
            $this->rear = -1;
        } else {
            // Move front circularly
            $this->front = ($this->front + 1) % $this->size;
        }

        return $removed;
    }

    function display()           //POINT TO REMEMBER
    {
        if ($this->front == -1) {
            echo "Queue is empty\n";
            return;
        }

        $i = $this->front;   //starts from the front.

        while (true) {
            echo $this->queue[$i] . " ";

            if ($i == $this->rear) {    //It prints elements until it reaches rear.
                break;
            }

            $i = ($i + 1) % $this->size;
        }

        echo "\n";
    }
}

$q = new CircularQueue(5);        //POINT TO REMEMBER

$q->enqueue(10);
$q->enqueue(20);
$q->enqueue(30);
$q->enqueue(40);
$q->enqueue(50);

echo "Queue: ";
$q->display();

echo "Removed: " . $q->dequeue() . "\n";       //POINT TO REMEMBER
echo "Removed: " . $q->dequeue() . "\n";

$q->enqueue(60);                 //POINT TO REMEMBER
$q->enqueue(70);

echo "Queue after circular insertion: ";
$q->display();                   //POINT TO REMEMBER
?>





