<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<style>
#footer{
position:fixed;
left:0;
bottom:0;
width:100%;
color:white;
background:green;
text-align:center;
}
</style>
    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $("p").hide();
            });
            $("#show").click(function() {
                $("p").show();
            });
        });
    </script>
</head>
<body>
    <h2>jQuery show and hide example</h2>
    <p>jQuery hide() method hides the selected HTML element. In the following example, we are hiding the selected h2 element. We are calling $(this).hide(); inside this $("h2").click(function(), the $("h2").click(function() method runs when we click an h2 element because we have passed h2 in the jQuery selector $("h2"). The method $(this).hide(); runs inside the click method and it hides the currently clicked element. Since this code will only run when an h2 element is clicked, this is why in the following example when you click on an h2 heading, it gets hidden but nothing happens when you click other elements such as paragraphs and buttons.</p>
    <button id="hide">Hide</button>
    <button id="show">Show</button>
</br>
    <div id="footer">
<p align="center"> &copy; M.Hemanth Kumar Rao--Allrights Reserved
    </div>   
</body>
</html>
