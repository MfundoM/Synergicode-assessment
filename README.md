## Project Overview:

This is a simple contact us form that takes the user's name, email and message, the data is stored in the database on submit.

## Technical Details:

Files to evaluate:
- contactus migration (this creates a contact_us table with fields: 'name, email, message')
- views: layout(app.blade), home view (contactus.blade which is the form page), success view (success.blade which is the success page that is displayed after the form is successfully submitted), then there's the contactus model, validation request which validate the data then the controller which process the data.

## Running the Code:

- Clone the project
- In the root of the project RUN: composer install
- Create a MySQL database
- RUN: cp .env.example .env
- Configure the .env file with the database details
- RUN: php artisan key:generate (to generate the app key)
- RUN: php artisan migrate (to migrate the database tables)
- RUN: php artisan serve (to start the app)

### Testing:

PHPUnit:
Three tests were implemented,
- Test to see if the form displays properly,
- Test the post request to the database,
- Then check if the data was stored successfully
- To run tests RUN: php artisan test
