# **Laravel PHP MySQL Tech Blog Website**

## **IFS L4T10 - Capstone Project 1: PHP, Laravel, and SQL Server**

## **Description**
This is a tech website for a hypothetical company called 'Cool Tech', which interacts with a database and allows users to search and view articles by id, tag and category.

<br>

### **Database Details (MySQL)** 
The database was designed with MySQL and stores articles, article categories, and article tags. 
To recreate the database that I used, see the [L4T10_database_code.txt](/L4T10_database_code.txt) file.

<br>

### **Website Details (Laravel, PHP)** 
The Laravel project specifications included:
* Creating a Laravel project and linking it up with the database.
* Creating the view pages for Home, Article, Category, Tag, Legal and Search.
* Displaying a footer for copyright notice and links to Search/Legal pages.
* Displaying a cookie notice across all pages on the site.

<br>

### **Project Files: Detailed Description**
The following files/pages were created for this project:
#### **Routes**
1. **[web.php](/cool_tech/routes/web.php):** 
    * Registers web routes for the cool-tech website, calling methods from the Controller pages.

#### **Models**
1. **[Article.php](/app/Models/Article.php):** 
    * Interacts with the database and retrieves objects' information.
    * Defines the primary key and table name for the 'articles' table in the database.

#### **Controllers**
1. **[ArticleController.php](/cool_tech/app/Http/Controllers/ArticleController.php):** 
    * Contains the methods/functions to handle requests and retrieve data for the Article view page, by leveraging the Article Model to access the database.

2. **[CategoryController.php](/cool_tech/app/Http/Controllers/CategoryController.php):** 
    * Contains the methods/functions to handle requests and retrieve data for the Category view page, by leveraging the Article Model to access the database.

3. **[TagController.php](/cool_tech/app/Http/Controllers/TagController.php):** 
    * Contains the methods/functions to handle requests and retrieve data for the Tag view page, by leveraging the Article Model to access the database.

4. **[SearchController.php](/cool_tech/app/Http/Controllers/SearchController.php):** 
    * Contains the methods/functions to to handle requests and retrieve data for the Article, Category and Tag views/pages, by leveraging the Article Model to access the database.
    * Each method returns the article/list of articles based on what the user has selected from the related dropdown forms (see search.blade.php).

5. **[PagesController.php](/app/Http/Controllers/PagesController.php):** 
    * Contains the methods/functions to return the Search and Legal pages/views.

#### **Views**
1. **[main.blade.php](/cool_tech/resources/views/main.blade.php):** 
    * Contains all the HTML that forms the basic layout of each page.
    * Retrieves the title, heading and main content of each blade/page using '@yield()' in their relevant places on the page.
    * Retrieves cookie notice using component (see alert2.blade.php).
    * Inserts footer with links to the search page and legal page, and a copyright notice with date on all web pages.

2. **[home.blade.php](/cool_tech/resources/views/pages/home.blade.php):** 
    * Displays the latest 5 articles in descending order (i.e. a list of article previews).
    * Each preview displays the article title (as a link to the appropriate article page), the first paragraph of the article, and the article's creation date.

3. **[article.blade.php](/cool_tech/resources/views/pages/article.blade.php):** 
    * Has URL form of /article/{id}
    * Displays the appropriate article’s title, content, creation date, category, and tags (as links to the appriopriate tag view). 

4. **[category.blade.php](/cool_tech/resources/views/pages/category.blade.php):** 
    * Has URL form of /category/{slug}
    * Lists all articles of a certain category.
    * If the requested slug does not exist, a message is echoed that the slug doesn't exist (see ArticleController.php). 

5. **[error.blade.php](/cool_tech/resources/views/pages/legal.blade.php):** 
    * If the inputted URL slug does not exist, this page is returned with the 404 error message.

6. **[tag.blade.php](/cool_tech/resources/views/pages/tag.blade.php):** 
    * Has URL form of /tag/{id}
    * Lists all articles with a certain tag.
    * Everywhere a tag is displayed (i.e. in the article view page), is a link to the appropriate tag view page.

7. **[search.blade.php](/cool_tech/resources/views/pages/search.blade.php):** 
    * Contains 3 search fields (for article ID, category, and tag) with submit buttons. 
    * Note: I used dropdown/select forms for these search bars to avoid the user entering data (i.e. tags/categories/id's) that doesn't exist.
    * Redirects the user to the correct article, category, or tag page on submit.

8. **[legal.blade.php](/cool_tech/resources/views/pages/legal.blade.php):** 
    * Displays generic website Terms of Use and Privacy Policy content (using [TermsFeed's](https://www.termsfeed.com) 'Terms and Conditions' and 'Privacy Policy' Generators).

#### **Components**
1. **[alert2.blade.php](/cool_tech/resources/views/components/alert2.blade.php):** 
    * Contains the html code for an alert message that alerts the user about cookies usage (across all pages).
    * Component called in [main.blade.php](/cool_tech/resources/views/main.blade.php) with "x-alertName".

<hr>

## **Installation and Setup**
### **Database Setup**
1. You need to set up your own MySQL server and database for this project. See [dev.mysql.com](https://dev.mysql.com/doc/mysql-getting-started/en/) for instructions on how to do this.
2. To recreate the database that I used, you can use the [L4T10_database_code.txt](/L4T10_database_code.txt) file as a guide, or the [LDatabase_ERD.pdf](/Database_ERD.pdf) file for this project's Entity Relationship Diagram (ERD).
3. Start your MySQL server.

### **Laravel Setup**
1. To run the app in your browser, you need to have installed Laravel and all the relevant dependencies using Composer (installation documentation [here](https://laravel.com/docs/5.4/installation#installation)).
2. Clone the repo and open with your preferred IDE (e.g. [VSCode](https://code.visualstudio.com/docs/setup/setup-overview)).
2. In the command line, navigate to the *cool_tech* folder with the command: `cd cool_tech` 
3. In the *cool_tech*  folder, start the local development server with the command: `php artisan serve`
4. This should open the website in your browser automatically. You can also navigate to http://localhost:8000/

<hr>

## **How To Use**
1. Once in the browser, navigate to articles by clicking on the article preview names.
2. Click on the navbar options to view the legal page, home page or to search for an article by id, category or tag.

## **Here's what it looks like**
![Screenshot of home page](markdown/Laravel%20PHP%20MySQL%20Tech%20Blog%20Website.png)

<hr>

## **Credits and References**
Made by [Nichole Dobbin](https://github.com/nicholedobbin), for my [HyperionDev](https://www.hyperiondev.com/) course.
Please see [L4T10_References.txt](L4T10_References.txt) for the list of references I used in this task.
