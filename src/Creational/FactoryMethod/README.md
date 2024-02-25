## FactoryMethod

**Factory Method**  is a creational design pattern that provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.

### Benefits

**Decoupling**: By introducing factories, you decouple the creation of objects from their usage. 
- If you look at the `FactoryMethodApp->exampleUsage()` method, the client (`FactoryMethodApp`) can use the `$device` object without actually having to create it. 
- The client doesn't need to know whether it's a `Keyboard` or a `Mouse` object.

**Scalability**: This implementation makes it easy to add new types in the future.
- If you want to add a new device in the system, like a `Screen` or a `UsbKey` for instance, you simply need to create a new factory class that extends `AbstractDeviceFactory` and implements the `create()` method to return the new device type. This promotes scalability and extensibility in your codebase.
