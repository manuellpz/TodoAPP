<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TODO APP</title>
   <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
   <h1 class="text-center">TODO APP</h1><br>
   <div class="container">
      <input type="text" id="txtItem" class="text-center" placeholder="Item: ">
      <br>
      <br>
      <table id="container_todo">
         <tr>
            <thead>
               <tr>
                  <th>Lista</th>
                  <th>Accion</th>
               </tr>
            </thead>
            <tbody id="container_items"></tbody>
         </tr>
      </table>
   </div>


   <script src="./js/app.js"></script>
</body>
</html>