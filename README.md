## What is layerMaker ?

It is used to separate the layer and parameters.

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
print_r($m::aliyilmaz('layerMaker')->layerMaker($str));
```

**When using it in the class:**

code:
```php
print_r(self::aliyilmaz('layerMaker')->layerMaker($str));
```

output:
```php
Array
(
    [layer] => app/controller
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
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/layerMaker/blob/main/LICENSE) license.