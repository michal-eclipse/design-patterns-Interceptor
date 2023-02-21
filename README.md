# design-patterns-Interceptor
Demonstrates traits of design pattern - Interceptor

It is based upon https://blog.rsuter.com/21/ article:

>Interceptors are used for aspect oriented programming (AOP). With the given interceptor, method calls can be extended or suppressed. PHP interceptors are implemented using the _call magic method.
Problems
>
>A big problem implementing interceptors in PHP is the fact that method calls of the same class will not be intercepted. To solve the problem, simply call a method with $this->intercepted->myMethod() instead of $this->myMethod(). Methods which are called on intercepted will be intercepted.
>
>Another problem is that the AbstractInterceptor’s methods (e.g. callMethod()) must not be called on the intercepted object from outside.
Implementation
>
>Important: Within the interceptor methods, all calls on the original object must be done on the $object variable (first parameter of the before, around and after method), not on $this. If you use $this, this might omit some interceptors in the interceptor stack.