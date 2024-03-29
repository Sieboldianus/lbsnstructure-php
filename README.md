[![packagist](https://lbsn.vgiscience.org/structure/php/version.svg)](https://packagist.org/packages/sieboldianus/lbsnstructure) [![pipeline](https://lbsn.vgiscience.org/structure/php/pipeline.svg)](https://gitlab.vgiscience.de/lbsn/lbsnstructure-php)

# LBSNSTRUCTURE

A php compiled version of the [common location based social network (LBSN) data structure concept](https://gitlab.vgiscience.de/lbsn/concept) (ProtoBuf) to handle cross network Social Media data in PHP.
There are several motivations for prividing a common LBSN interchange data structure. Firstly, the [GDPR](https://eur-lex.europa.eu/legal-content/EN/TXT/?uri=CELEX%3A32016R0679) directly requests Social Media Network operators to allow users to transfer accounts and data inbetween services. 
While there are attempts by Google, Facebook etc. (see [data-transfer-project](https://github.com/google/data-transfer-project)), it is not currently possible. With this structure concept, we follow an independent road.
A primary goal is to systematically characterize LBSN data aspects in a common scheme that enables privacy-by-design for connected software, transfer scripts and database design.

## Quick Start

Install with:  
```shell
composer require sieboldianus/lbsnstructure
```

Import to php project with:  
```php
use Lbsn\Structure\Post;
require lbsnPost.php
```

## Semantic release

We make use of automatic versioning using semantic-release workflow.
To auto-increase version based on commits, use:

```bash
semantic-release publish
```