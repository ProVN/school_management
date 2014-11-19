
onmessage = function (e) {
    for (var i = 0; i < 5; i++) {
        postMessage(e.data + '  :' + i.toString());
    }
}
