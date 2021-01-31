 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      td, th {
        border: solid 2px;
        padding: 10px 5px;
      }
      tr {
        text-align: center;
      }
      .container {
        width: 100%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div><h2>List of hired employees from </h2></div>
       <table id="example2" role="grid">
            <thead>
              <tr role="row">
                <th width="20%">id</th>
                <th width="20%">name</th>
                <th width="10%">price</th>
                >             
              </tr>
            </thead>
            <tbody>
            @foreach ($sales as $item)
                <tr role="row" class="odd">
                  <td>{{ $item['id'] }}</td>
                  <td>{{ $item['name'] }}</td>
                  <td>{{ $item['tracking_no'] }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>