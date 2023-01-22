# What is this?

Someone asked following on Symfony slack:

```
Andreas 17:55
I'm having some trouble understanding how services really work.
I have two services (A, B) extending a abstract service, they both override a abstract function in the base service.
When calling a function of B it looks like the base service runs the function overridden by A instead of the one overridden by B, which I'm calling.
I have declared them in services.yaml.
App\Service\BaseService:
    abstract: true

App\Service\AService:
    parent: App\Service\BaseService

App\Service\BService:
    parent: App\Service\BaseService
How would one work around this? (edited) 
```

So I created this simple repository to show how that is works.

## Usage

Clone this repository and after that run `symfony serve` command and open that
URL on your favorite browser.

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2023 Tarmo Leppänen
