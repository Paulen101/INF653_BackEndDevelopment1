# Express Error Handler Assignment

This project demonstrates a custom error-handling middleware for an Express application. The middleware captures application errors, logs them to a file with detailed information (error name, message, and timestamp), and sends a proper HTTP response to the client.

## Prerequisites

Before running the application, ensure you have the following installed:
- Node.js
- npm (Node Package Manager)

## Installation

1. Navigate to the project directory:
   cd Error-Handler

2. Install the required dependencies:
   npm install

## Running the Application

To start the server using nodemon (as configured in package.json):

npm start

The server will start running on http://localhost:3000.

## Testing the Error Handler

The application includes a specific route designed to trigger an error for testing purposes.

1. Open your browser or use a tool like curl or Postman.
2. Navigate to the following URL:
   http://localhost:3000/error

3. Expected Result:
   - The browser/client should receive a 500 Internal Server Error status code.
   - The response body should be: {"message":"Internal Server Error"}
   - The server should remain running and not crash.

## Verifying the Logs

After triggering the error, you can verify that it was logged correctly:

1. Open the "logs" folder in the project directory.
2. Open the file named "errorLog.txt".
3. You should see a new entry containing:
   - A unique ID (UUID)
   - A timestamp (YYYY-MM-DD HH:MM:SS)
   - The error name (Error)
   - The error message (Intentional test error)
   - The HTTP method (GET)
   - The request URL (/error)

## Project Structure

- expressServer.js: The main application file where middleware and routes are defined.
- middleware/logger.js: Contains the logEvents function and request logger middleware.
- middleware/errorHandler.js: Contains the custom error-handling middleware.
- logs/: Directory where eventLogs.txt and errorLog.txt are stored.
