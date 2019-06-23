---
title: JS
---

<p><time class="dt-published" datetime="2019-06-12T23:2:26-08:00">
<i class="fa fa-calendar"></i> 12th Jun 2019
</time></p>



<html lang="en">
<head>
 <link rel="stylesheet" href="https://alejandramontenegro.com/admin/pages/js" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    
Ingrese numero: <input type="text" id="valor" onkeyup="myFunction()" >
<p id="nombre" style="color:Tomato;"></p>

<script type="text/javascript">
    function myFunction() {

    var max= document.getElementById("valor").value;
    //Imprimir figuras de triangulos formados por asteriscos con ciclo for
    var f,c;
    //triangulo rectangulo recto a derechas

    for (f=1;f<=max;f++)
    {
        for(c=1;c<=f;c++)
            document.write("*");
        document.write("<br>");
    }



    for (f=max;f>=1;f--)
    {
        for(c=1;c<=max-f;c++)
            document.write("&nbsp&nbsp");
        for(c=1;c<=f;c++)
            document.write("*");
        document.write("<br>");
    }
    document.write("<br>");
  }
</script>
</body>
</html>


