<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
        .red{
            color:red;
        }
        #test{
            color:blue;
        }

    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>PHPファイルとJS/CSSの動きを知る。</li>
        </ul>
    </div>
<?php
echo '<p class="red">css test</p>';
echo '<p id="test">js test</p>';
?>


<script>
    let test =  document.getElementById('test');
    console.log(test)
</script>
</body>

</html>