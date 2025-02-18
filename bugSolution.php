The solution involves utilizing the strict comparison operator (`===`) which checks for both value and type equality.

```php
function checkValue($value) {
  if ($value === 1 || $value === '1') {
    return true;
  } else {
    return false;
  }
}

var_dump(checkValue(1)); // true
var_dump(checkValue('1')); // false
var_dump(checkValue(true)); // false
var_dump(checkValue('true')); // false
var_dump(checkValue('1a')); // false
```
By using `===`, we ensure that the function only returns `true` if the `$value` is strictly equal to either the integer `1` or the string `'1'`.