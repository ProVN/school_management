onmessage = function (e) {
    var x = new XMLHttpRequest();
    x.open('GET', e.data, false);
    x.responseType = 'blob';
    x.send();
    self.postMessage(x.response);
}