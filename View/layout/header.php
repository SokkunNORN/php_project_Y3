

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/grid.css">
    <link rel="stylesheet" href="src/css/table.css">
    <link rel="stylesheet" href="src/css/card.css">
    <link rel="stylesheet" href="src/css/dashboard.css">
</head>
<body>

    <div id="app">
        <div class="header">
            <div class="logo">CAR RENTAL</div>
            <i @click="actionLeftSideBar()" :class="isShowLeftSideBar ? 'fa fa-times' : 'fa fa-bars'"></i>
            <div class="right">MY ACCOUNT !!!</div>
        </div>

        <?php include 'leftSide.php';?>

        <div class="main" :style="containStyle">
            <div class="container">
 