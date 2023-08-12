# mvc-php

#### MVCWITHCODEHOLIC

### Core classes - are generic classes that can be use on multiple php project
    1. App - has reference to all of the other class and itself to instantiate @global or local scope
        methods: 
            1.1 run - access the resolve @router
    2. Router - incharge of returning a file base on the current request_uri n request_method
        It has properties array of routes where i store all path that i config
        methods: 
            2.1 construct - reference to request and response class
            2.2 get/post - storing config path n method
            2.3 resolve - 
                * get the curr path n method using request
                * validate if curr method n path exist in prop routes n store it on a $callback
                * validate $callback if false, is_string or is_array handles each 
                * return call_user_func($callback)
            2.4 layoutContent - use to call the layout content from views and store it on object buffer
            2.5 mainContent - 
                *   takes two params, 1 $callback(string) 2nd params that the mainContent can use.
                *   use to call the main content from views and store it on object buffer
            2.6 renderView - 
                *   takes two params, 1 $callback(string) 2nd params to pass @mainContent
                *   create a variables from layoutContent and mainContent
                    and replace the placeholder from layoutContent to mainContent
    3. Request - incharge of getting the uri, method and sanitizing all the superglobal get and post values
        methods: 
            3.1 getPath - get the current uri and strippin the keyval off the uri
            3.2 getMethod - get the current request method
            3.3 getBody - get all key val pairs from superglobal get or post and return a sanitized array
    4. Controller - responsible for changing the layout base on a class that it is extending to, and render the callback/view.
        methods: 
            4.1 render - return the renderView with params $view, $params
            4.2 setLayout - change the layout content
    5. Response - incharge of creating a http_response_code
        methods: 
            5.1 setResponse - set response
### Controllers class - incharge of 
    1. AuthController - incharge of rendering auth forms and changing layout
        methods:
            1.1 login - handles login in both super global method
            1.2 register - handles register in both super global method
    2. SiteController - same as AuthController.


#### confusing parts >_< :
1. @resolve 
        because callback can be fn, string, array
        ![resolveCb](https://github.com/Dale0311/mvc-php/assets/101126064/df74039e-c80e-47ae-a9f8-359fe8bd8326)
        
        ![resolveCb2](https://github.com/Dale0311/mvc-php/assets/101126064/a44800e6-e497-4d39-bc52-76a9cfcf8cac)
        Note: the call_user_func will find a method inside the class that corresponds to the 2nd item in the array.
