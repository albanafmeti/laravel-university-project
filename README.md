# Laravel University Project
This repo used to create a simple backend administration panel for structure of university students

## Requirements to fulfill this project

  # Step 1:

  Enable default authentication mode of laravel with one profile administration user

  # Step 2:

    Create migrations, models, controllers files which are necessary to produce structure of entities:

    -   university
    -   faculty
    -   branch
    -   student

    And make relations between those entities.

  # Step 3:

    Process flow:

    -   1. Authenticate through login page
    -   2. Go to dashboard on success login and show table of students on content.

      Show menu with links for:

           a. Universities
           b. Faculties
           c. Branches
           d. Students

    -   3. On each menu add link to show form view of table with data retrieved from database
         Give possibility to make operation like CRUD (Create, Read, Update, Delete) from first view

    -   4. Include javascript or jquery plugins to show a better view of tables (Ex. jquery datatable)
