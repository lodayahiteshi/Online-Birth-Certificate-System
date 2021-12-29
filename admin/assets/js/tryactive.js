var a = document.querySelectorAll(".nav li a");
for (var i = 0, length = a.length; i < length; i++) {
    a[i].onclick = function() {
        var b = document.querySelector(".nav li.active");
        if (b) b.classList.remove("active");
        this.parentNode.classList.add("active");
    };
}