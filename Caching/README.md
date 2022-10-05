## Code Review

- Redis connection should be initiated as a new Redis() connection
- CustomerID is an input which can be verified first before the function is run
- $dataType is hardcoded array which can be dynamically assigned
- In the line 
  $keys = $redis->keys($dataType.'_'.$customerId.'_*');
  Needs a validation of $dataType if incase it has special characters or spaces
  This variable can be created first then assigned here
- This whole function could be wrapped in try catch to throw exceptions if any