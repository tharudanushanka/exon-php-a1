function proceed() {
    var s = document.getElementById("select").value;

    var f = new FormData();
    f.append("s", s);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var value = document.getElementById("value");
            value.innerHTML = text;
        }
    };
    r.open("POST", "findinvoice.php", true);
    r.send(f);
}

function pay(){
    var n = document.getElementById("name").value;
    var c = document.getElementById("cheqno").value;
    var ca = document.getElementById("cheqamount").value;
    var v = document.getElementById("value").innerHTML;

    var f = new FormData();
    f.append("n", n);
    f.append("c", c);
    f.append("ca", ca);
    f.append("v", v);
    
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
        }
    };
    r.open("POST", "receipt.php", true);
    r.send(f);
}