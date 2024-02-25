## AbstractFactory

**Abstract Factory** is a creational design pattern that provides an interface for creating families of related or dependent objects without specifying their concrete classes.

### Benefits

**Decoupling**: The Abstract Factory pattern decouples the client code from the concrete classes of the objects it creates. In the provided example, the Client class depends only on the AbstractArtGalleryFactory interface, allowing it to work with any concrete factory that implements this interface. This promotes flexibility and easier maintenance as the client does not need to be modified when new types of galleries are added.

**Scalability**: The Abstract Factory pattern facilitates the addition of new families of objects in the future. For instance, if you want to extend your system to support a type of art galleries, such as modern art galleries or classical art galleries, you can create new concrete factory classes that implement the AbstractArtGalleryFactory interface. This promotes scalability and extensibility in your codebase.
