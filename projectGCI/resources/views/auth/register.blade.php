<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Register</h1>
    <form action="{{ route('register.submit') }}" method="post">
      @csrf
      <label for="first_name">First Name:</label>
      <input type="text" name="first_name" id="first_name" required>
      <br>
      <label for="last_name">Last Name:</label>
      <input type="text" name="last_name" id="last_name" required>
      <br>
      <button class="btn btn-danger" type="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>