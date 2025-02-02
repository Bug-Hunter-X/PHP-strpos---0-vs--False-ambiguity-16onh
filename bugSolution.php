The solution is to use strict comparison (`===`) instead of loose comparison (`==`). Strict comparison checks both the value and the type, preventing the `false` value from being interpreted as 0.  This makes the conditional logic precise and avoids unexpected behavior. 

```php
<?php
$role = 'user';
if (strpos($role, 'admin') === 0) {
    echo 'Admin found!';
} else {
    echo 'Admin not found.';
}
?>
```

Alternatively, you could check for `false` explicitly:

```php
<?php
$role = 'user';
if (strpos($role, 'admin') !== false) {
    echo 'Admin found!';
} else {
    echo 'Admin not found.';
}
?>
```