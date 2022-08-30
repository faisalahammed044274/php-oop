<!--

So far, you have learned how to define a class that consists of methods and properties. To use the methods and properties of the class, you create an object and access these methods and properties via the object.

Since these methods and properties are bound to an instance of the class, they are called instance methods and properties.

PHP allows you to access the methods and properties in the context of a class rather than an object. Such methods and properties are class methods and properties. Class methods and class properties are called static methods and properties.

So we mark as static the methods and the properties that we want to access without an instance.

(::) Scope resolution operator is used to access static methods and properties only with class name.

“static” keyword when applied to methods or properties make them accessible without an instance.

We can not use $this inside static methods because $this represents an instance of the class and we do not have an instance of a class when we use static keyword.


self:: keyword

self keyword can access the property inside the class without an instance

self is used to access static or class variables or methods and this is used to access non-static or object variables or methods. So use self when there is a need to access something which belongs to a class and use $this when there is a need to access a property belonging to the object of the class.
-->
