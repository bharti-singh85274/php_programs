<!-- Graph Data Structure

A Graph is a non-linear data structure made up of:

Vertices (Nodes) → represent objects.
Edges → represent connections between objects.

Types of Graph
1. Undirected Graph:Edges work both ways. A ↔ B

2. Directed Graph(Digraph) :Edges have direction.A → B

3. Weighted Graph: Edges contain weights. A --5-- B
 -->

 1. BFS (Breadth First Search)     // POINT TO REMEMBER:function bfs($graph, $start),PHP functions:array_push,array_shift,2loops:while,foreach

Visits nodes level by level.Uses: Queue 

    <?php

    $graph = [
        'A' => ['B', 'C'],
        'B' => ['A', 'D', 'E'],
        'C' => ['A', 'F'],
        'D' => ['B'],
        'E' => ['B', 'F'],
        'F' => ['C', 'E']
    ];

    function bfs($graph, $start)
    {
        $visited = [];
        $queue = [];

        array_push($queue, $start);
        $visited[$start] = true;   //this line prevents A or other values from being added again later.

        while (!empty($queue)) {
            $node = array_shift($queue);

            echo $node . " ";

            foreach ($graph[$node] as $neighbor) {
                if (!isset($visited[$neighbor])) {
                    $visited[$neighbor] = true;
                    array_push($queue, $neighbor);
                }
            }
        }
    }

    bfs($graph, 'A');
    ?>



2. DFS (Depth First Search)   // POINT TO REMEMBER:function dfs($graph, $node, &$visited), no php function, only 1 loop used


        A
       / \
      B   C
     / \   \
    D   E   F
         \ /
          F

Visits deeply first.
Uses: Recursion / Stack


<?php

$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'D', 'E'],
    'C' => ['A', 'F'],
    'D' => ['B'],
    'E' => ['B', 'F'],
    'F' => ['C', 'E']
];

function dfs($graph, $node, &$visited)
{
    $visited[$node] = true;

    echo $node . " ";

    foreach ($graph[$node] as $neighbor) {
        if (!isset($visited[$neighbor])) {
            dfs($graph, $neighbor, $visited);
        }
    }
}

$visited = [];
dfs($graph, 'A', $visited);
?>




3.  Cycle Detection in Graph
    What is a cycle?

A cycle in a graph is a path that starts from a vertex and eventually comes back to the same vertex.

For example:

A ─── B
    / \
   C───D

If we can go:

A → B → C → A

then A → B → C → A is a cycle.



<?php

$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'C'],
    'C' => ['A', 'B', 'D'],
    'D' => ['C']
];

function hasCycle($graph)
{
    $visited = [];

    foreach ($graph as $vertex => $neighbors) {

        if (!isset($visited[$vertex])) {

            if (dfs($graph, $vertex, null, $visited)) {
                return true;
            }
        }
    }

    return false;
}

function dfs($graph, $current, $parent, &$visited)
{
    // Mark current vertex as visited
    $visited[$current] = true;

    // Visit all neighbors
    foreach ($graph[$current] as $neighbor) {

        // If neighbor is not visited
        if (!isset($visited[$neighbor])) {

            // Recursively visit neighbor
            if (dfs($graph, $neighbor, $current, $visited)) {
                return true;
            }
        }

        // Neighbor is visited and is not parent
        elseif ($neighbor != $parent) {      //parent → remembers which vertex we came from
            return true;
        }
    }

    return false;
}

if (hasCycle($graph)) {
    echo "Cycle detected";
} else {
    echo "No cycle";
}

?>



4.  Shortest Path in Graph

Shortest path means finding the path between two vertices with the minimum total distance/cost.

For a graph with unweighted edges, we can use BFS (Breadth-First Search).

Shortest Path: A -> C -> F
Graph:

        A
       / \
      B   C
     / \   \
    D   E---F

    We want:

A → F


Why BFS gives the shortest path: in an unweighted graph, BFS visits nodes according to their distance from the starting node: distance 0, then 1, then 2, etc. Therefore, the first time it reaches the target, it has found the shortest path.

Interview point: For weighted graphs, normally use Dijkstra's algorithm when edge weights are non-negative.

<?php

$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'D', 'E'],
    'C' => ['A', 'F'],
    'D' => ['B'],
    'E' => ['B', 'F'],
    'F' => ['C', 'E']
];

function shortestPath($graph, $start, $target)
{
    $queue = [];
    $visited = [];
    $parent = [];

    // Start node
    $queue[] = $start;
    $visited[$start] = true;
    $parent[$start] = null;

    while (!empty($queue)) {

        $current = array_shift($queue);

        // Target found
        if ($current == $target) {
            break;
        }

        foreach ($graph[$current] as $neighbor) {

            if (!isset($visited[$neighbor])) {

                $visited[$neighbor] = true;
                $parent[$neighbor] = $current;

                $queue[] = $neighbor;
            }
        }
    }

    // Target not found
    if (!isset($visited[$target])) {
        return [];
    }

    // Build path backwards
    $path = [];
    $current = $target;

    while ($current != null) {
        $path[] = $current;
        $current = $parent[$current];
    }

    // Reverse path
    $path = array_reverse($path);

    return $path;
}


$path = shortestPath($graph, 'A', 'F');

echo "Shortest Path: ";
echo implode(" -> ", $path);

?>