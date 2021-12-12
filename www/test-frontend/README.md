# Customer  system.
An application that consumes an API Client to manage customers  

1.  State Management: Vuex
2.  Test-driven development(TDD): mocha(not fully completed)
3.  Request validation: Joi
4.  project dockerized (not fully completed);


# Getting started
System customers

## Installation

Clone the repository

    git clone https://github.com/willypelz/customer-app.git

Switch to the repo folder

    cd customer-app/www/test-frontend
    
Install dependencies
    
    npm install

Running the Application 
    
    npm run serve
----------

## Connection

For testing Ensure the backend is running on port 8081
 `http://localhost:8081` if it is running on different port you might need to 
 update the env.js details the port the backend is running on.
    
----------

## Screenshots of the project

this can be found in the static folder.
    
----------

### Updates to be done

-improve the UI
-complete dockerization for the project
-refactor the code (i.e to use the centralize notification in the shared folder, et.c)
-connect ci/cd and connect it to live server for easy test.
