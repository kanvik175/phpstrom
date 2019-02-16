function foo(str)
{
    if (str !== '') {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                document.getElementById('suggestions').innerHTML = this.responseText;
            }
        }
        xmlhttp.open('GET', 'test.php?p=' + str, true);
        xmlhttp.send();
    } else {
        document.getElementById('suggestions').innerHTML = '';
    }
}