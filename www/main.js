var apps = document.getElementById("apps")

$.getJSON('./main.json', function(data) {
    var appDatabase = data
    alert(appDatabase)
    appDatabase.array.forEach(element => {
        document.createElement("h1").innerText = element
    });
});