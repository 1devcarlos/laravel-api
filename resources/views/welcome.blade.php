<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Question</th>
      <th scope="col">A1</th>
      <th scope="col">A2</th>
      <th scope="col">A3</th>
      <th scope="col">A4</th>
    </tr>
  </thead>
  <tbody>
    @foreach($questions as $question)
    <tr>
        <td>{{$question -> question }}</td>
        <td>{{$question -> answer_a }}</td>
        <td>{{$question -> answer_b }}</td>
        <td>{{$question -> answer_c }}</td>
        <td>{{$question -> answer_d }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>