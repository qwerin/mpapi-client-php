## CATEGORIES

### Available methods:
**GET**  
This service has only one method, this method provides list of available categories.
```
<?php 
...
use MPAPI\Services\Categories;

...

$categories = new Categories($mpapiClient);
...
// category and parameter IDs
$categoryId = 'some_category_id';
$paramId = 'some_param_id';
``` 

#### All partner categories
Get all categories available  for the partner.  
```
...
$response = $categories->get()->categories(); 
... 
```

The response contains array of available categories:
```
 [
   [
    "category_id" => "MPCAT01",
    "title" => "Category 1 - title"
  ],
  [
    "category_id" => "MPCAT01",
    "title" => "MP Category 2 - title"
  ],
  ...
]

```

#### Search category by prefix
Search categories by title prefix:
```
...
$response = $categories->get()->categoriesByPrefix('Categ'); 
... 
```

The response contains an array of found categories:
```
 [
   [
    "category_id" => "MPCAT01",
    "title" => "Category 1 - title"
  ],
  ...
]

```

#### Search in categories
Search categories by term in title:
```
...
$response = $categories->get()->searchCategories('gory'); 
... 
```

The response contains an array of found categories:
```
 [
   [
    "category_id" => "MPCAT01",
    "title" => "Category 1 - title"
  ],
  [
    "category_id" => "MPCAT01",
    "title" => "MP Category 2 - title"
  ],
  ...
]

```

#### Get all category parameters
Get all available parameters for specific category:
```
...
$response = $categories->get()->categoryParameters($categoryId); 
... 
```

The response contains an array of found parameters:
```
 [
  [
    "param_id" => "MP_COLOR",
    "title" => "Barva"
  ],
  [
    "param_id" => "MP_SIZE",
    "title" => "Velikost"
  ],
  [
    "param_id" => "MP_DETERMINATION_PRODUCT",
    "title" => "Určení produktu"
  ]
  ...
]

```

#### Get parameter values
Get all available parameter values for specific parameter in category:
```
...
$response = $categories->get()->parameterValues($categoryId, $paramId); 
... 
```

The response contains an array of found parameters:
```
[
    "černá",
    "modrá",
    "bílá"
    ...
]

```

##### See more:
> **/root/vendor/mallgroup/mpapi-client/Example/CategoriesExample.php**