# ApiPractical
 
Make an empty Database with name apipractical

Import the .sql file 

for api operations first run command on cmd 

php artisan serve

now in postman 

send a POST request to http://127.0.0.1:8000/api/register with firstname,lastname,email,password,password password_confirmation fields 

send a POST request to http://127.0.0.1:8000/api/login with email,password fields

Since this is a protected endpoint, be sure to copy the access token you were provided with when you logged in, click on the authorization tab in Postman, select Bearer Token on the Type dropdown list, and paste the token inside the Token field.

To add a new category to our database by sending their name, parent_id to this endpoint: http://127.0.0.1:8000/api/category.

To get the Categories in tree structure as mentioned on the pdf from database by using this endpoint: http://127.0.0.1:8000/api/category use a GET request.

To get the details of a particular category, we use the following endpoint: http://127.0.0.1:8000/api/category/1. '1' should be replaced with the particular ID of the category.

To update the details of an category, fill in the new details and send a PATCH request to http://127.0.0.1:8000/api/category/1 (be sure to use the appropriate ID).

To delete the details of an category, send a DELETE request to http://localhost:8000/api/category/1 (be sure to use the appropriate ID).



To add a new product to our database by sending their name, price, cat_ids (category ids primary key * with comma seperated which were created previously ) to this endpoint: http://127.0.0.1:8000/api/product.

TO get the list of Products from the database by using this endpoint: http://127.0.0.1:8000/api/product use a GET request.

To get the details of a particular product, we use the following endpoint: http://127.0.0.1:8000/api/product/1. '1' should be replaced with the particular ID of the product.

To update the details of an product, fill in the new details and send a PATCH request to http://127.0.0.1:8000/api/product/1 (be sure to use the appropriate ID).

To delete the details of an product, send a DELETE request to http://localhost:8000/api/product/1 (be sure to use the appropriate ID).



