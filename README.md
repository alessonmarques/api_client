# API CLIENT

A simple connection manager made to test knowledge and improve skills.

Commonly used on my studies projects.

## To use
- ``` composer install alessonmarques/api_client ```
- Create a class defining the Base Url constant like the 'CamaraDeputados.php' inside the 'examples' folder.
- Create the endpoint classes extending the one created above.
- Add a custom method to get the data, or, use the ->do() already created on the 'PluginAbstract'.
- You'll need to inject the service whenever you need and use to return the data from APIs.