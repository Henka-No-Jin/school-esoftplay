<!DOCTYPE html>
<html lang="en">
<head><?php echo $sys->meta();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Home</title>
    <style>
        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2em;
        }
        .section1 { 
            background-color: #FF5733;
            flex-direction: column;
        }
        .section2 { background-color: #33FF57; }
        .section3 { background-color: #3357FF; }
        .section4 { background-color: #FF33A1; }
    </style>
</head>
<body>
    <div class="section section1">
        <p>Section 1</p>
        <img src="https://uploads.dailydot.com/2024/07/side-eye-cat.jpg?q=65&auto=format&w=800&ar=2:1&fit=crop" alt="cat">
    </div>
    <div class="section section2">Section 2</div>
    <div class="section section3">Section 3</div>
    <div class="section section4">Section 4</div>
</body>
</html>