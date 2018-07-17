
# Naming Strategy annotations registry

Use strategy Naming Registry if you want to combine all in one.

Example:
```php

<?php

use DTOMapperBundle\Annotation\MappingMeta\DestinationClass;
use DTOMapperBundle\Annotation\MappingMeta\NamingStrategy;

/**
 * Class EmbeddedCollectionRoot
 *
 * @DestinationClass
 * @NamingStrategy\NamingRegister(for={
 *     @NamingStrategy\SnakeCaseNamingStrategy(source="array"),
 *     @NamingStrategy\UnderscoreNamingStrategy(source="class"),
 *     @NamingStrategy\UnderscoreNamingStrategy(source="ConcreteClass")
 * })
 * @NamingStrategy\IdentityNamingStrategy(source="object"),
 */
class EmbeddedCollectionRootDTO
{
    
}
```