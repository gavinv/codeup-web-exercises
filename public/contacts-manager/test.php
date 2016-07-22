<?php 
echo '<html><body>';

// Data, normally from a flat file or some other source  
$data = "Item1|Item2|Item3|Item4|Item5|Item6|Item7|Item8|Item9|Item10";  
// Put our data into an array  
$dataArray = explode('|', $data);  
// Get the current page  
$currentPage = trim(isset($_REQUEST['page']));  
// Pagination settings  
$perPage = 3;  
$numPages = ceil(count($dataArray) / $perPage);  
if(!$currentPage || $currentPage > $numPages)  
    $currentPage = 0;  
$start = $currentPage * $perPage;  
$end = ($currentPage * $perPage) + $perPage;  
// Extract ones we need  
foreach($dataArray as $key => $val)  
{  
    if($key >= $start && $key < $end)  
        $pagedData[] = $dataArray[$key];  
}

foreach($pagedData AS $item)  
    echo '<a href="/'. $item .'/index.php">'. $item .'</a><br>';

if($currentPage > 0 && $currentPage < $numPages)  
    echo '<a href="?page=' . ($currentPage - 1) . '">« Previous page</a><br>';  
if($numPages > $currentPage && ($currentPage + 1) < $numPages)  
    echo '<a href="?page=' . ($currentPage + 1) . '" class="right">Next page »</a><br>';

echo '</body></html>';
?>