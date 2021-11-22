<!DOCTYPE html>
<head>
    <title>U K M | K S R</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
    body {
        background-image: url("gambar.png");
        background-repeat: no-repeat;
    }

    h1 {
        margin-top: 20%;
    }
    
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(36, 0, 0);
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        color: rgb(255, 175, 122);
    }

    .active {
        background-color: rgb(224, 104, 34);
    }
    </style>
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="formdaftar.php">Daftar</a></li>
        <li><a href="listdata.php">Pendaftar</a></li>
        <li class="active"><a href="upload.php">Upload</a></li>
        <li><a href="about.php">About</a></li>
        <li style="float:right"><a>KSR UNIT ITERA</a></li>
    </ul>
    
    <center>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h1><label for="">Upload File</label></h1>
		    <input type="file" name="file"> 
		    <input type="submit" name="upload" value="Upload" style="margin-top:10px">
	    </form>
    </center>

</body>
</html>