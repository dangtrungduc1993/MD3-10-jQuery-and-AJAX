<div id="myDIV" class="header">
    <h2 style="margin:5px">My To Do List</h2>
    <input type="text" id="myInput" placeholder="Title...">
    <span onclick="newElement()" class="addBtn">Add</span>
{{--    <span class="addBtn">Add</span>--}}
</div>

<ul id="myUL">
    <li>Hit the gym</li>
    <li>Pay bills</li>
    <li>Meet George</li>
    <li>Buy eggs</li>
    <li>Read a book</li>
    <li>Organize office</li>
</ul>

<script>
    var myNodelist = document.getElementsByTagName("LI");
    for (i = 0; i < myNodelist.length; i++) {
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        myNodelist[i].appendChild(span);
    }

    var close = document.getElementsByClassName("close");
    closeElement();
    function closeElement(){
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }
    }
    function newElement() {
        var li = document.createElement("li");
        var inputValue = document.getElementById("myInput").value;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
            alert("You must write something!");
        } else {
            document.getElementById("myUL").appendChild(li);
        }
        document.getElementById("myInput").value = "";
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        li.appendChild(span);
        closeElement();
    }

</script>
