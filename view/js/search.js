function loadData(){

    var xmlHttp = new XMLHttpRequest();

    xmlHttp.open('POST', '../../model/searchUser.php', true);
    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    var name = "key="+(document.getElementById('search').value).trim();
    xmlHttp.send(name);

    xmlHttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status==200)
        {
            var data = "<div style='background-color:#eee;border: 1px solid #000; width:200px'>"+this.responseText+"</div>";
            document.getElementById('result').innerHTML = data;
        }
    }

}