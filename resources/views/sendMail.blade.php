<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="card" style="font-size:14pt">
<h2 style="background:#657786">{{$details['title']}}</h2>
<span class="border border-primary">
  <div class="card-body">

    <h3 class="card-title">Customer's Details</h3>
    <table>
    <tr>
        <td>Name:</td>
        <td><strong>{{$details['name']}}</strong></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><strong>{{$details['email']}}</strong></td>
    </tr>
    <tr>
        <td>Telephone:</td>
        <td><strong>{{$details['phone']}}</strong></td>
    </tr>
</table><br>
    <p class="card-text">{{$details['message']}}</p>
    <p class="card-text">Best Regards,</p>
    <p class="card-text">{{$details['name']}} .</p>

  </div>
</span>
</div>
</body>
</html>