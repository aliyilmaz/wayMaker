## What is wayMaker ?

It is used to separate the way and parameters.

data:
```php
$str = 'app/controller:insert@redirect';
// $str = 'app/controller:insert';
// $str = 'app/controller';
```

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
print_r($m::aliyilmaz('wayMaker')->wayMaker($str));
```

**When using it in the class:**

code:
```php
print_r(self::aliyilmaz('wayMaker')->wayMaker($str));
```

output:
```php
Array
(
    [way] => app/controller
    [params] => Array
        (
            [0] => insert
            [1] => redirect
        )

)
```

---

### Dependencies
This package has no dependencies.

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/wayMaker/blob/main/LICENSE) license.