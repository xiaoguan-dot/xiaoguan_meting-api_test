<?php  
echo "PHP Version: " . phpversion() . "\n";  
  
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "\n";  
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "\n";  
echo "Server Protocol: " . $_SERVER['SERVER_PROTOCOL'] . "\n";  
  
echo "Operating System: " . PHP_OS . "\n";  
  
echo "Max Execution Time: " . ini_get('max_execution_time') . " seconds\n";  
echo "Memory Limit: " . ini_get('memory_limit') . "\n";  
  
echo "Environment Variable (PATH): " . getenv('PATH') . "\n";  
?>
