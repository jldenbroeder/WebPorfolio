<?php 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Grid Layout</title>
    <style>
      html body{
        margin: 0;
        padding: 0;
      }

      .container{
        display: grid;
        display: -ms-grid;
        grid-template-columns: repeat(8, 1fr);
        -ms-grid-columns: repeat(8, 1fr);
        grid-template-rows: repeat(8, 1fr);
        -ms-grid-rows: repeat(8, 1fr);
        /* TEST SANS REPEAT */
        /*        
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        -ms-grid-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        */
        width: 100%;
        max-width: 900px;
        height: 100vh;
        box-sizing: border-box;
        background-color: #ffffff;
        border: 1px solid #68a5a5; /* TEMP */
        background-image: url(grid32x162.jpg); 
        background-size: 100% 100%; /* TEMP */
        background-repeat:no-repeat; /* TEMP */
      }
      .items{
        background-color: rgba(213, 224, 174, 0.49);
        border: 1px solid #004ba7;

      }
      .item1{
        grid-column: 1/ span 3;
        -ms-grid-column: 1;
        -ms-grid-column-span: 3;
        grid-row: 1/ span 2;
        -ms-grid-row: 1;
        -ms-grid-row-span: 2;
        z-index: 50;
      }

      .item2{
        grid-column: 4/ span 2;
        -ms-grid-column: 4;
        -ms-grid-column-span: 2;
        grid-row: 5 / span 1;
        -ms-grid-row: 5;
        -ms-grid-row-span: 1;
      }

      .item3{
        grid-column: 3/ span 4;
        -ms-grid-column: 3;
        -ms-grid-column-span: 4;
        grid-row: 2 / span 6;
        -ms-grid-row: 2;
        -ms-grid-row-span: 6;
      }
    </style>
  </head>
  <body>

    <div class="container">
      <div class="items item1">1<br><br><br><br><br><br><br></div>

      <div class="items item2">2</div>

      <div class="items item3">3</div>
    </div>

  </body>
</html>