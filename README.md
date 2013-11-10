# AlphaLabs Commmon | Toolbox which let's you play with ease with primitive types and common objects

This library offers some tools to deal with some primitives and/or some common objects.

For the moment, few tools are provided for the following types:

- **Numbers**: Intergers, floats...
- **Strings**: Detect slug patterns...

## Installation

Adds the library in your composer.json file:

````json
"require": {
    "alphalabs/common": "1.0@dev"
}
````

Don't forget to update your dependencies with `composer update`

## Usage

Adds the `use` statement for the tools you want to use, and call the static methods directly:

````php
<?php

namespace Foo\Bar;

use AlphaLabs\Common\Number\Number;

class MyClass
{
    public function foo()
    {
        $number = "-3";

        Number::isStrictlyPositiveInteger($number) // False
    }
}
````

-----
## To come

- Collections
- (propose your ideas)

-----
## Credits

- Sylvain Mauduit (@Swop)

-----
## License

MIT
